<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedBooking Pro</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* CSS Personalizado para o Fundo Hospitalar */
        body {
            /* Certifique-se que a imagem existe em assets/images/hospital.jpg */
            background-image: url('/assets/images/image0.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        
        /* Overlay Branco (80%) */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); 
            z-index: -1;
        }

        /* Animações */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-enter {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
</head>
<body class="text-gray-800 font-sans min-h-screen flex flex-col">
    
    <?php 
    if (session_status() === PHP_SESSION_NONE) { session_start(); }
    if (isset($_SESSION['msg'])): 
        $cor = match($_SESSION['tipo']) {
            'success' => 'bg-green-500',
            'danger' => 'bg-red-500',
            'info' => 'bg-blue-500',
            default => 'bg-gray-500'
        };
    ?>
        <div id="toast" class="fixed top-5 right-5 z-[60] <?= $cor ?> text-white px-6 py-4 rounded-lg shadow-xl flex items-center gap-3 animate-enter transform transition-all duration-500">
            <span class="font-bold text-lg"><?= $_SESSION['msg'] ?></span>
            <button onclick="document.getElementById('toast').style.opacity='0'; setTimeout(()=>document.getElementById('toast').remove(), 500)" class="ml-4 text-white hover:text-gray-200 font-bold">✕</button>
        </div>
        <script>
            setTimeout(() => {
                const t = document.getElementById('toast');
                if(t) { t.style.opacity = '0'; setTimeout(() => t.remove(), 500); }
            }, 4000);
        </script>
    <?php 
        unset($_SESSION['msg']); unset($_SESSION['tipo']);
    endif; 
    ?>
    
    <nav class="bg-white/90 backdrop-blur-sm border-b border-gray-200 shadow-sm mb-10 sticky top-0 z-50 animate-enter">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between h-16">
                
                <div class="flex items-center">
                    <a href="/" class="flex items-center gap-2 group">
                        <div class="relative flex items-center justify-center w-10 h-10 bg-blue-600 rounded-xl shadow-lg shadow-blue-200 group-hover:scale-105 transition-transform duration-200">
                            <svg style="width: 24px; height: 24px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg> 
                        </div>
                        
                        <div class="flex flex-col ml-2 leading-none">
                            <span class="font-bold text-xl tracking-tight text-gray-800 group-hover:text-blue-600 transition-colors">
                                MedBooking
                            </span>
                            <span class="text-[10px] font-semibold text-gray-400 uppercase tracking-widest">
                                Healthcare
                            </span>
                        </div>
                    </a>
                </div>

                <div class="flex items-center space-x-1">
                    <a href="/" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition-colors px-3 py-2 rounded-lg hover:bg-gray-50">
                        Dashboard
                    </a>
                    <a href="/paciente" class="text-sm font-medium text-gray-600 hover:text-blue-600 transition-colors px-3 py-2 rounded-lg hover:bg-gray-50">
                        Pacientes
                    </a>
                    <div class="h-6 w-px bg-gray-200 mx-2"></div>
                    <div class="flex items-center gap-2 pl-2 cursor-pointer opacity-90 hover:opacity-100">
                        <div class="h-9 w-9 rounded-full bg-gradient-to-tr from-blue-500 to-blue-700 flex items-center justify-center text-white text-xs font-bold shadow-md border-2 border-white">
                            BP
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 flex-grow w-full relative z-10"></div>