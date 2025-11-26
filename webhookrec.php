<?php
// =====================[ CONFIGURAÇÃO ]=====================
/** VOXUY (DESTINO) — pegue na sua conta Voxuy */
$VOXUY_WEBHOOK_URL = "https://sistema.voxuy.com/api/4061c6bf-4e1a-454d-bb7e-876b741e1cb2/webhooks/voxuy/transaction";
$VOXUY_API_TOKEN   = "57c39e8f-4fe4-48af-a31b-72b5e4aa986f";
$VOXUY_PLAN_ID     = "9946772e-635a-43ef-8f54-4ff4e1";

/** GHOSTS PAY (USO INTERNO — NÃO expor) */
$GP_SECRET_KEY = "sk_live_CA3PuKaTWDHh7CPVRrWukXxA0FMX1CJP31NhrUtE2kWxZOHx";
$GP_COMPANY_ID = "819c1373-4637-40a7-a057-6ceacffdce69";
$GP_API_BASE   = "https://api.ghostspaysv2.com/functions/v1/transactions";

// ====== MAPEAMENTO QUE A VOXUY ESPERA ======
$VOXUY_CODE_PIX    = 7;
$VOXUY_CODE_BOLETO = 1;
$VOXUY_CODE_CARD   = 2;

// ====== BLOQUEIO POR PRODUTO (por nome/título/descrição) ======
// Você pode escrever com ou sem acento; o match já é acento-insensível.
$BLOCKED_PRODUCT_PATTERNS = [
  'imposto iof',
  'taxa de verificacao iof',
  'verificacao de titularidade',
  'ativacao do cashback mercado pago',
  'deposito imediato',
  'taxa de processamento',
  'taxa de abertura de credito',
  'taxa de processamento administrativo',
  'conta digital',
  'ativa a conta',
];

// =====================[ HELPERS ]==========================
function log_me($label, $data = null) {
  error_log("[$label] " . (is_string($data) ? $data : json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)));
}
function phone_to_e164_br(?string $phone): ?string {
  if (!$phone) return null;
  $digits = preg_replace('/\D+/', '', $phone);
  if ($digits === '') return null;
  if (strpos($digits, '55') !== 0) $digits = '55'.$digits;
  return '+'.$digits;
}
function map_status(?string $s): int {
  $s = strtolower((string)$s);
  if (in_array($s, ['paid','approved','authorized','confirmed'])) return 1;   // pago
  if (in_array($s, ['canceled','refunded','chargedback','expired','voided'])) return 2; // cancel/refund
  return 0; // pending/outras
}
function map_payment_type(?string $pm): int {
  $s = strtoupper((string)$pm);

  // PIX (interno = 3)
  $pixAliases = [
    'PIX','PIX_QR','PIX_QRCODE','PIX_QR_CODE','PIX DYNAMIC','PIX_DYNAMIC',
    'PIX DINAMICO','PIX DINÂMICO','PIX_STATIC','PIX STATIC','PIX COPIA E COLA',
    'PIX_COPIA_E_COLA','PIX-QR','QRCODE_PIX'
  ];
  if (in_array($s, $pixAliases, true)) return 3;

  // BOLETO (interno = 2)
  $boletoAliases = ['BOLETO','BANK_SLIP','SLIP','BOLETO_BANCARIO','BOLETO BANCARIO'];
  if (in_array($s, $boletoAliases, true)) return 2;

  // CARTÃO (interno = 1)
  $cardAliases = ['CREDIT_CARD','CARD','CARTAOCREDITO','CARTAO','DEBIT_CARD','DEBITO'];
  if (in_array($s, $cardAliases, true)) return 1;

  return 0; // desconhecido
}



// (ETAPA 5) — função de consulta na Ghosts Pay
function ghosts_get_transaction($base, $secret, $companyId, $txId) {
  $url = rtrim($base,'/')."/transactions/".rawurlencode($txId);
  $ch = curl_init($url);
  $headers = [
    "Authorization: Bearer {$secret}",
    "Content-Type: application/json",
  ];
  
  if ($companyId) $headers[] = "X-Company-Id: {$companyId}";

  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_TIMEOUT        => 15,
  ]);
  $body = curl_exec($ch);
  $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $err  = curl_error($ch);
  curl_close($ch);

  if ($body === false) return [$http ?: 0, null, $err ?: 'curl_error'];
  return [$http, $body ? json_decode($body, true) : null, null];
}

// --------- VALIDADORES DE DADO REAL ---------
function is_placeholder_name(?string $name): bool {
  if (!$name) return true;
  $n = mb_strtolower(trim($name), 'UTF-8');
  $black = [
    'cliente sem nome','sem nome','teste','test','anonimo','anônimo','nao informado','não informado','unknown'
  ];
  if (in_array($n, $black, true)) return true;

 
  $parts = preg_split('/\s+/u', $n, -1, PREG_SPLIT_NO_EMPTY);
  if (count($parts) < 2) return true;

  
  foreach ($parts as $p) {
    if (!preg_match('/^\p{L}{2,}$/u', $p)) return true;
  }
  return false; 
}

function is_placeholder_email(?string $email): bool {
  // Sem bloqueio: sempre considera válido
  return false;
}

function is_placeholder_document(?string $doc): bool {
  // Sem bloqueio: sempre considera válido
  return false;
}

function is_placeholder_phone(?string $e164): bool {
  if (!$e164) return true;
  $d = preg_replace('/\D+/', '', $e164);
  if (preg_match('/(9{7,}|0{7,}|1{7,}|2{7,})$/', $d)) return true;
  if (substr($d, -11) === '11999999999') return true;
  return false;
}

function looks_like_upsell(?string $desc, ?string $itemTitle, array $metadata = []): bool {
  // 1) Sinais de texto no título/descrição (mantém o que você já usava)
  $hay = mb_strtolower(trim(($desc ?: '').' '.($itemTitle ?: '')), 'UTF-8');
  foreach (['upsell','bump','order bump','oto','one time offer','pós-compra','pos-compra'] as $p) {
    if ($hay !== '' && mb_strpos($hay, $p) !== false) return true;
  }

  // 2) Sinais nos metadados:
  //    - step / etapa / upsell / is_upsell / flow / stage
  //    - valores como: up1, up 2, UP3 ... (somente 1–8)
  $keysOfInterest = ['step','etapa','upsell','is_upsell','flow','stage'];

  foreach ($metadata as $k => $v) {
    $k = is_string($k) ? mb_strtolower($k, 'UTF-8') : $k;

    // Normaliza o valor (se vier array/obj, transforma em string)
    if (is_array($v) || is_object($v)) {
      $v = json_encode($v, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
    $val = is_string($v) ? mb_strtolower(trim($v), 'UTF-8') : (string)$v;

    // (a) Se a key for relevante, checa padrão up1..up8
    if (in_array($k, $keysOfInterest, true)) {
      if (preg_match('/^up\s*([1-8])$/i', $val)) return true;          // "up2", "UP 3"
      if (preg_match('/^(upsell|bump|oto)\s*\d*$/i', $val)) return true; // "upsell2", "bump 1"
    }

    // (b) Fallback: se QUALQUER valor de metadata tiver "up1..up8", considera upsell
    if (preg_match('/\bup\s*([1-8])\b/i', $val)) return true;
  }

  return false;
}

/**
 * Normaliza string p/ busca e evita falso-positivo (ex.: "setup").
 */
function has_up_step_value(string $s): bool {
  // procura "up1".."up8" com borda de palavra; permite espaço: "up 2"
  // \b evita pegar "setup" (pois "up" ali não é delimitado por borda)
  return (bool)preg_match('/\bup\s*([1-8])\b/i', $s);
}

/**
 * Detecta upsell por chaves e valores "clássicos".
 * - step/upsell/is_upsell/flow/stage com "up1..up8" ou "upsell", "bump", "oto"
 * - ?step=upN em querystrings detectáveis
 * - fallback: qualquer valor com "up1..up8" em qualquer ponto do payload
 */
function detect_upsell_anywhere($payload): array {
  $found = false;
  $where = [];

  $scan = function ($node, $path = '') use (&$scan, &$found, &$where) {
    if (is_array($node)) {
      foreach ($node as $k => $v) {
        $kStr = is_string($k) ? $k : (string)$k;
        $cur  = $path === '' ? $kStr : $path.'.'.$kStr;

        // 1) Sinais por CHAVE
        $keyL = mb_strtolower($kStr, 'UTF-8');
        $keyIsInteresting = in_array($keyL, ['step','etapa','upsell','is_upsell','flow','stage','slug','params','query','querystring','search'], true);

        if (is_string($v)) {
          $vStr = $v;

          // (a) valores-título explícitos
          if (preg_match('/^(upsell|bump|oto)\s*\d*$/i', $vStr)) { $found = true; $where[] = $cur.'=(label)'; }

          // (b) up1..up8 (com borda)
          if (has_up_step_value($vStr)) { $found = true; $where[] = $cur.'~upN'; }

          // (c) querystring "?step=upN"
          if (preg_match('/[?&]step=up\s*([1-8])\b/i', $vStr)) { $found = true; $where[] = $cur.'?step=upN'; }

          // (d) palavras-chave em título/descrição
          $hay = mb_strtolower($vStr, 'UTF-8');
          foreach (['upsell','bump','order bump','oto','one time offer','pós-compra','pos-compra'] as $p) {
            if (mb_strpos($hay, $p) !== false) { $found = true; $where[] = $cur.'~kw('.$p.')'; break; }
          }
        } elseif (is_array($v) || is_object($v)) {
          // 2) Se a KEY é interessante e o VALUE é composto, a chance de achar aumenta
          $scan($v, $cur);
        } else {
          // valores escalares diversos
          $vStr = (string)$v;
          if ($keyIsInteresting && has_up_step_value($vStr)) { $found = true; $where[] = $cur.'~upN'; }
        }

        // mesmo se a key não for "interessante", sempre descer
        if ((is_array($v) || is_object($v)) && !$found) $scan($v, $cur);
      }
    } elseif (is_object($node)) {
      $scan((array)$node, $path);
    } elseif (is_string($node)) {
      // raiz string (raro)
      if (has_up_step_value($node)) { $found = true; $where[] = ($path ?: '$root').'~upN'; }
      if (preg_match('/[?&]step=up\s*([1-8])\b/i', $node)) { $found = true; $where[] = ($path ?: '$root').'?step=upN'; }
    }
  };

  $scan($payload, '$');
  return [$found, $where];
}

/**
 * Mantém a sua heurística original por título/descrição/metadata,
 * mas agora delega para a detecção "geral" também.
 */
function is_upsell_strict(?string $desc, ?string $itemTitle, array $metadata = [], array $extras = []): array {
  // camada 1: texto visível
  $hay = mb_strtolower(trim(($desc ?: '').' '.($itemTitle ?: '')), 'UTF-8');
  foreach (['upsell','bump','order bump','oto','one time offer','pós-compra','pos-compra'] as $p) {
    if ($hay !== '' && mb_strpos($hay, $p) !== false) {
      return [true, ['title_or_desc~kw('.$p.')']];
    }
  }

  // camada 2: metadata.step etc.
  foreach (['step','etapa','upsell','is_upsell','flow','stage'] as $key) {
    if (isset($metadata[$key])) {
      $val = is_scalar($metadata[$key]) ? (string)$metadata[$key] : json_encode($metadata[$key], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
      if (preg_match('/^up\s*([1-8])$/i', $val)) return [true, ["metadata.$key=upN"]];
      if (preg_match('/^(upsell|bump|oto)\s*\d*$/i', $val)) return [true, ["metadata.$key=label"]];
      if (has_up_step_value($val)) return [true, ["metadata.$key~upN"]];
    }
  }

  // camada 3: varredura geral do payload
  $blob = array_merge($extras, ['metadata' => $metadata, 'desc' => $desc, 'itemTitle' => $itemTitle]);
  [$hit, $where] = detect_upsell_anywhere($blob);
  return [$hit, $where];
}


// =====================[ LEITURA DO WEBHOOK ]===============
header("Content-Type: application/json; charset=utf-8");

$raw = file_get_contents('php://input');
if (!$raw) {
  http_response_code(400);
  echo json_encode(["ok"=>false,"error"=>"Empty body"]);
  exit;
}
$evt = json_decode($raw, true);
if (!is_array($evt)) {
  http_response_code(400);
  echo json_encode(["ok"=>false,"error"=>"Invalid JSON"]);
  exit;
}
log_me('GhostsPayWebhook', $evt);

$type = $evt['type'] ?? null;
$data = $evt['data'] ?? null;
if ($type !== 'transaction' || !is_array($data)) {
  http_response_code(200);
  echo json_encode(["ok"=>true,"ignored"=>true]);
  exit;
}

// =====================[ EXTRAÇÃO INICIAL ]=================
$txId      = $data['id']            ?? null;
$amount    = $data['amount']        ?? null;   
$statusG   = $data['status']        ?? null;
$pmethod   = $data['paymentMethod'] ?? null;

$customer  = $data['customer']      ?? [];
$name      = $customer['name']      ?? null;
$email     = $customer['email']     ?? null;
$phone     = phone_to_e164_br($customer['phone'] ?? null);

$pix       = $data['pix']           ?? [];
$pixUrl    = $pix['qrcode']         ?? null;   
$qrCopy    = null; 

$desc      = $data['description']   ?? null;
$itemTitle = (!empty($data['items']) && is_array($data['items'])) ? ($data['items'][0]['title'] ?? null) : null;

$createdAt = $data['createdAt']     ?? null;
$paidAt    = $data['paidAt']        ?? null;

$metaOrig  = $data['metadata']      ?? null;

// =====================[ ETAPA 5: VALIDAR/CONSULTAR ]=================
if ($txId) {
  list($httpGP, $gpTx, $errGP) = ghosts_get_transaction($GP_API_BASE, $GP_SECRET_KEY, $GP_COMPANY_ID, $txId);
  log_me('GhostsPayLookupHTTP', $httpGP);
  if ($errGP) log_me('GhostsPayLookupErr', $errGP);

  if ($httpGP === 200 && is_array($gpTx)) {
    $apiData   = $gpTx['data'] ?? $gpTx;

    $amount  = $apiData['amount']        ?? $amount;
    $statusG = $apiData['status']        ?? $statusG;
    $pmethod = $apiData['paymentMethod'] ?? $pmethod;

    if (!empty($apiData['pix']['qrcode'])) $pixUrl = $apiData['pix']['qrcode'];
    if (!empty($apiData['customer']['name']))  $name  = $apiData['customer']['name'];
    if (!empty($apiData['customer']['email'])) $email = $apiData['customer']['email'];
    if (!empty($apiData['customer']['phone'])) $phone = phone_to_e164_br($apiData['customer']['phone']);
    if (!empty($apiData['paidAt']))            $paidAt = $apiData['paidAt'];
    if (!empty($apiData['createdAt']))         $createdAt = $apiData['createdAt'];
  }
}

// ===== DETECÇÃO DE PIX (sinal forte) =====
// Se veio qualquer evidência de PIX (qrcode/EMV/campo pix), vamos marcar um sinal.
$hasPixSignal = false;

// 1) Se o payload já trouxe bloco 'pix' ou uma URL de qrcode, isso é PIX.
if (!empty($data['pix']))             $hasPixSignal = true;
if (!empty($pixUrl))                  $hasPixSignal = true;
if (!empty($qrCopy))                  $hasPixSignal = true;

// 2) Se o próprio paymentMethod mencionar PIX em alguma variante, também é PIX.
if (is_string($pmethod) && stripos($pmethod, 'pix') !== false) {
  $hasPixSignal = true;
}

// (Opcional de debug)
// log_me('PayMethodDebug', ['pmethod_raw'=>$pmethod,'hasPixSignal'=>$hasPixSignal,'pixUrl'=>$pixUrl,'qrCopy'=>$qrCopy ? 'present' : 'null']);


// =====================[ FILTROS ESPECÍFICOS DO SEU FLUXO ]==================

// Considere PIX se houver sinal forte OU se o mapeamento for 3
$ptypeMapped = map_payment_type($pmethod);
if (!$hasPixSignal && $ptypeMapped !== 3) {
  log_me('FilterSkip', ['reason'=>'non_pix', 'pmethod'=>$pmethod, 'ptypeMapped'=>$ptypeMapped, 'hasPixSignal'=>$hasPixSignal]);
  http_response_code(200);
  echo json_encode(["ok"=>true, "ignored"=>true, "reason"=>"non_pix"]);
  exit;
}


list($isUpsell, $where) = is_upsell_strict(
  $desc,
  $itemTitle,
  is_array($metaOrig) ? $metaOrig : [],
  [
    'evt'        => $evt,
    'data'       => $data,
    'checkoutUrl'=> $data['checkoutUrl'] ?? null,
    'description'=> $desc,
    'itemTitle'  => $itemTitle
  ]
);

if ($isUpsell) {
  log_me('FilterSkip', ['reason'=>'upsell_detected', 'where'=>$where]);
  http_response_code(200);
  echo json_encode(["ok"=>true, "ignored"=>true, "reason"=>"upsell", "where"=>$where], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
  exit;
}

// ====== Coleta títulos e descrição do payload (Ghosts Pay + Cloudfy) ======
$collectTitlesAndDesc = function(array $data): array {
  $titles = [];

  // 1) Arrays típicos de itens
  $paths = [
    'items',                 // Ghosts Pay comum
    'order.items',           // alguns checkouts
    'transaction.items',     // variação
    'products', 'product'    // edge-cases
  ];

  $get = function($arr, $path) {
    $seg = explode('.', $path);
    foreach ($seg as $s) {
      if (!is_array($arr) || !array_key_exists($s, $arr)) return null;
      $arr = $arr[$s];
    }
    return $arr;
  };

  // coleta de arrays de itens
  foreach ($paths as $p) {
    $maybe = $get($data, $p);
    if (is_array($maybe)) {
      // array de itens
      if (array_is_list($maybe)) {
        foreach ($maybe as $it) {
          if (is_array($it)) {
            if (!empty($it['title'])) $titles[] = (string)$it['title'];
            if (!empty($it['name']))  $titles[] = (string)$it['name'];
            // fallback em campos comuns
            if (!empty($it['product_name'])) $titles[] = (string)$it['product_name'];
          }
        }
      } else {
        // objeto único como "product"
        if (!empty($maybe['title'])) $titles[] = (string)$maybe['title'];
        if (!empty($maybe['name']))  $titles[] = (string)$maybe['name'];
      }
    }
  }

  // 2) Metadados comuns
  $metaCandidates = [
    'metadata.title', 'metadata.product_name', 'metadata.item_title',
    'meta.title', 'meta.product_name'
  ];
  foreach ($metaCandidates as $p) {
    $v = $get($data, $p);
    if (!empty($v) && is_string($v)) $titles[] = $v;
  }

  // 3) Descrição em possíveis caminhos
  $descPaths = [
    'description',
    'transaction.description',
    'order.description',
    'charge.description'
  ];
  $desc = null;
  foreach ($descPaths as $p) {
    $v = $get($data, $p);
    if (is_string($v) && $v !== '') { $desc = $v; break; }
  }

  // Sanitiza/únicos
  $titles = array_values(array_unique(array_filter(array_map('strval', $titles))));

  return [$titles, $desc];
};

[$allTitles, $descSrc] = $collectTitlesAndDesc($data);

// Monta o haystack do bloqueio
$haystackRaw = trim(implode(' ', $allTitles) . ' ' . ($descSrc ?? ''));
$haystack    = $norm_ci($haystackRaw);

// ====== CLASSIFICAÇÃO DO EVENTO (PIX GERADO vs PIX PAGO) ======
$norm = fn($s) => mb_strtolower(trim((string)$s), 'UTF-8');

// Getter por caminho (só define se ainda não existir em outro trecho)
if (!isset($pathGet)) {
  $pathGet = function($arr, $path) {
    $seg = explode('.', $path);
    foreach ($seg as $s) {
      if (!is_array($arr) || !array_key_exists($s, $arr)) return null;
      $arr = $arr[$s];
    }
    return $arr;
  };
}

$statusPaths = ['status','transaction.status','payment.status','charge.status'];
$methodPaths = ['method','payment_method','payment.method','transaction.method','charge.payment_method'];

$st = null;
foreach ($statusPaths as $p) { $v = $pathGet($data, $p); if ($v !== null) { $st = $norm($v); break; } }

$pm = null;
foreach ($methodPaths as $p) { $v = $pathGet($data, $p); if ($v !== null) { $pm = $norm($v); break; } }

// Heurística: presença do QR/BR Code indica "PIX gerado"
$hasPixQRCode = (function($d) use ($pathGet) {
  $cands = [
    'pix.qrcode','pix.qr_code','pix.qrCode','pix.brcode','pix.emv','pix.copy_paste',
    'qr','qrcode','brcode','emv','copy_paste',
    'charge.qrcode','charge.brcode','charge.emv'
  ];
  foreach ($cands as $c) {
    $v = $pathGet($d, $c);
    if (is_string($v) && trim($v) !== '') return true;
  }
  foreach (['code','payload','pix'] as $c) {
    if (!empty($d[$c]) && is_string($d[$c]) && trim($d[$c]) !== '') return true;
  }
  return false;
})($data);

// Sinônimos
$PAID = ['paid','approved','succeeded','confirmed','pago','confirmado'];
$PEND = ['pending','awaiting_payment','pix_generated','created','pendente'];

// É PIX?
$isPix = ($pm === 'pix') || (isset($data['method']) && $norm($data['method']) === 'pix');

// Classifica
$voxuyEvent  = null;            // 'pix_generated' | 'pix_paid'
$voxuyStatus = null;            // 'pending' | 'paid'

if ($isPix) {
  if (in_array($st, $PAID, true)) {
    $voxuyEvent  = 'pix_paid';
    $voxuyStatus = 'paid';
  } elseif (in_array($st, $PEND, true) || $hasPixQRCode) {
    $voxuyEvent  = 'pix_generated';
    $voxuyStatus = 'pending';
  }
}

if (!$voxuyEvent) {
  log_me('FilterSkip', ['reason'=>'not_pix_or_unknown_status', 'status'=>$st, 'method'=>$pm]);
  http_response_code(200);
  echo json_encode(["ok"=>true, "ignored"=>true, "reason"=>"not_pix_or_unknown_status","status"=>$st,"method"=>$pm], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
  exit;
}

// Id para idempotência/atualização posterior
$externalId = $data['id']
  ?? $pathGet($data, 'transaction.id')
  ?? $pathGet($data, 'charge.id')
  ?? $pathGet($data, 'payment.id')
  ?? null;


$badName  = is_placeholder_name($name);
$badPhone = is_placeholder_phone($phone);
$badEmail = is_placeholder_email($email);
$badDoc   = is_placeholder_document($customer['document'] ?? null);


if ($badName || $badPhone) {
  log_me('FilterSkip', ['name'=>$name, 'phone'=>$phone, 'email'=>$email, 'document'=>$customer['document'] ?? null]);
  http_response_code(200);
  echo json_encode(["ok"=>true, "ignored"=>true, "reason"=>"invalid_name_or_phone"]);
  exit;
}

// ===== NORMALIZAÇÃO DE PIX p/ evitar rótulo "PayPal" na Voxuy =====
// Prioriza EMV (“copia e cola”) em pixQrCode e evita URL de terceiros em pixUrl.

// 1) Se vier EMV no payload da API, priorize em pixQrCode
if (!empty($data['pix']['emv']) && preg_match('/^000201/i', $data['pix']['emv'])) {
  $qrCopy = $data['pix']['emv'];
}

// 2) Se pixUrl contiver EMV por engano, move para pixQrCode e limpa pixUrl
if (!empty($pixUrl) && preg_match('/^000201/i', $pixUrl)) {
  $qrCopy = $pixUrl;
  $pixUrl = null;
}

// 3) Se pixUrl for de domínio que ativa heurística PayPal/Hyperwallet, não envie essa URL
if (!empty($pixUrl)) {
  $u = mb_strtolower($pixUrl, 'UTF-8');
  if (strpos($u, 'hyperwallet') !== false || strpos($u, 'paypal') !== false) {
    $pixUrl = null; // mantém só o EMV em pixQrCode (ou use uma URL neutra sua)
  }
}

// (opcional) reforço semântico para relatórios/filtros
// (adicione no metadata quando montar o payload)
// $extraMeta['payment_method_text'] = 'PIX';


// --- TIPOS / MAPAS (com override pela classificação) ---
$amount = (int)$amount; // centavos

// Força PIX quando detectado ou quando a origem já sinaliza 'pix'
$paymentType = (mb_strtolower((string)$pmethod, 'UTF-8') === 'pix' || !empty($hasPixSignal)) 
  ? 3 
  : (int) map_payment_type($pmethod);

// Se a classificação já definiu 'pending'/'paid', sobrepõe o numérico; senão, usa o mapa
$status = isset($voxuyStatus) 
  ? ($voxuyStatus === 'paid' ? 1 : 0)          // 0=pending | 1=paid
  : (int) map_status($statusG);                // fallback (0/1/2)

// === CONVERSÃO PARA O CÓDIGO QUE A VOXUY ESPERA ===
// Seu "interno": 1=cartão, 2=boleto, 3=pix (pelo map_payment_type + hasPixSignal)
// Agora converte para o código que a Voxuy quer ver (config acima)
// Sempre PIX (código Voxuy = 7)
$paymentTypeVoxuy = $VOXUY_CODE_PIX;

// Canoniza status usando a classificação (pix_generated vs pix_paid)
$isPaid     = isset($voxuyStatus) ? ($voxuyStatus === 'paid') : ((int)$status === 1);
$isCanceled = isset($voxuyStatus) ? false : ((int)$status === 2);
$isPending  = !$isPaid && !$isCanceled;

// Normaliza numérico para enviar à Voxuy
$status     = $isPaid ? 1 : ($isCanceled ? 2 : 0);
$statusText = $isPaid ? 'paid' : ($isCanceled ? 'canceled' : 'pending');
$lifecycle  = $isPaid ? 'customer' : 'lead';

// util: remove somente null
$clean = function(array $arr) {
  return array_filter($arr, fn($v) => !is_null($v));
};

// carimbo útil para “primeiro pendente”
$firstPendingAt = $firstPendingAt ?? ($isPending ? ($createdAt ?: gmdate('c')) : null);

// Se tiver um link de checkout próprio, preencha aqui
$checkoutUrl = null; // ex.: $data['checkoutUrl'] ?? null;

// ==== AJUSTES usando a classificação do Passo A ====
// (supõe que já existem $voxuyStatus, $voxuyEvent e $externalId definidos no passo A)
$paymentTypeVoxuy = $VOXUY_CODE_PIX; // 7 = PIX

$isPaid    = ($voxuyStatus === 'paid');
$isPending = ($voxuyStatus === 'pending');

$statusText = $isPaid ? 'paid' : 'pending';
$status     = $isPaid ? 1 : 0;          // Voxuy: 0=pending | 1=paid
$lifecycle  = $isPaid ? 'customer' : 'lead';

// prioriza id do gateway p/ idempotência
$txId = $externalId ?: ($txId ?? null);

// timestamps
$firstPendingAt = $firstPendingAt ?? ($isPending ? gmdate('c') : null);
$paidAt         = $isPaid ? ($paidAt ?? gmdate('c')) : null;


// --- MONTA O PAYLOAD ENRIQUECIDO ---
$voxuyPayload = [
  "apiToken"          => (string)$VOXUY_API_TOKEN,
  "id"                => (string)$txId,              // idempotência (use o id do gateway)
  "planId"            => (string)$VOXUY_PLAN_ID,

  // financeiro
  "value"             => $amount,
  "totalValue"        => $amount,
  "paymentType"       => $paymentTypeVoxuy,         // 7 = PIX
  "status"            => $status,                   // 0=pending | 1=paid

  // cliente
  "clientName"        => $name ?: null,
  "clientEmail"       => $email ?: null,
  "clientPhoneNumber" => $phone ?: null,

  // pix
  "pixQrCode"         => $qrCopy ?: null,           // EMV "copia e cola", se houver
  "pixUrl"            => $pixUrl ?: null,           // URL do QR (resgate)

  // opcional
  "checkoutUrl"       => $checkoutUrl ?: null,

  // METADADOS PARA RECUPERAÇÃO
  "metadata"          => $clean([
    "lifecycle"            => $lifecycle,          // 'lead' | 'customer'
    "order_status_text"    => $statusText,         // 'pending' | 'paid'
    "order_status_code"    => $status,             // 0 | 1
    "gateway_event"        => $voxuyEvent,         // 'pix_generated' | 'pix_paid'
    "is_lead"              => !$isPaid,
    "recovery_eligible"    => $isPending,
    "first_pending_at"     => $firstPendingAt,
    "paid_at"              => $paidAt,
    "return_link"          => $checkoutUrl ?: $pixUrl,

    // preserva seus metadados
    "description"          => ($desc ?: $itemTitle) ?: null,
    "external_id"          => $externalId ?: null,
    "ghosts_company"       => $data['companyId'] ?? null,
    "ghosts_object"        => $evt['objectId'] ?? null,
    "ghosts_type"          => $evt['type'] ?? null,
    "shipping_city"        => $data['shipping']['city']    ?? null,
    "shipping_state"       => $data['shipping']['state']   ?? null,
    "shipping_zip"         => $data['shipping']['zipCode'] ?? null,
    "raw_metadata"         => $metaOrig ?? null,
  ]),
  "date"              => (string)($paidAt ?: $createdAt ?: gmdate('c')),
];


$voxuyPayload['metadata']['payment_method_text'] = 'PIX';



// remove nulls da raiz
$voxuyPayload = $clean($voxuyPayload);

// (recomendado) log do que está indo
log_me('VoxuyPayload', $voxuyPayload);


$ch = curl_init($VOXUY_WEBHOOK_URL);
curl_setopt_array($ch, [
  CURLOPT_POST           => true,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
  CURLOPT_POSTFIELDS     => json_encode($voxuyPayload, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES),
  CURLOPT_TIMEOUT        => 20,
]);
$voxBody = curl_exec($ch);
$voxCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$voxErr  = curl_error($ch);
curl_close($ch);

log_me('VoxuyHTTP', $voxCode);
if ($voxErr) log_me('VoxuyCurlErr', $voxErr);
log_me('VoxuyResp', $voxBody);

// =====================[ RESPOSTA PARA GHOSTS PAY ]===================
http_response_code(200);
echo json_encode([
  "ok" => true,
  "voxuy_http" => $voxCode,
  "voxuy_resp" => json_decode($voxBody, true)
], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);