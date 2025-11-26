<?php
// === Configurações iniciais ===
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

if (!isset($_GET['cpf']) || empty($_GET['cpf'])) {
    echo json_encode(['erro' => 'CPF não informado.']);
    exit;
}

// === Sanitiza o CPF ===
$cpf = preg_replace('/\D/', '', $_GET['cpf']);

// === Token e endpoint ===
$url = "https://searchapi.dnnl.live/consulta?token_api=7002&cpf={$cpf}";

// === Requisição cURL ===
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// === Trata respostas ===
if ($httpCode === 200 && $response) {
    $json = json_decode($response, true);

    // Se JSON válido e nome existir, retorna como sucesso
    if (json_last_error() === JSON_ERROR_NONE && isset($json['cpf']) && !empty($json['nome'])) {
        echo json_encode([
            'cpf'        => $json['cpf'],
            'nome'       => $json['nome'] ?? '',
            'sexo'       => $json['sexo'] ?? '',
            'nascimento' => $json['nascimento'] ?? '',
            'nome_mae'   => $json['nome_mae'] ?? ''
        ], JSON_UNESCAPED_UNICODE);
        exit;
    }

    // Se JSON inválido ou nome ausente
    echo json_encode([
        'erro' => 'Não foi possível obter os dados para este CPF.',
        'detalhe' => $json
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// === Se falhar ===
echo json_encode([
    'erro' => 'Erro na consulta do CPF.',
    'httpCode' => $httpCode,
    'response' => $response
], JSON_UNESCAPED_UNICODE);
?>
