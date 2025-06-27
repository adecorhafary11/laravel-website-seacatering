<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>SEA | CATERING</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0C9463',
                        secondary: '#FFD700',
                        accent: '#FF6B35',
                        dark: '#1A3C37'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        .hero-slider {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            z-index: 1;
        }
        
        .slide.active {
            opacity: 1;
        }
        
        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 2;
        }
        
        .content {
            position: relative;
            z-index: 3;
        }
        
        .btn-primary {
            background: linear-gradient(45deg, #0C9463, #0A7A50);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-secondary {
            background: linear-gradient(45deg, #FFD700, #FFA000);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .menu-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
        }
        
        .testimonial-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        .page-transition {
            transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
  
</head>
<body>

  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full page-transition">    
 <x-navbar></x-navbar>
 {{-- <x-header>{{ $title }}</x-header> --}}
  <main>
    <div>
      {{ $slot}}
    </div>
     <footer class="bg-dark text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-secondary">SEACATERING</h3>
                    <p class="mt-4 text-gray-300">
                        Menyediakan makanan sehat dengan bahan terbaik untuk gaya hidup lebih sehat.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Link Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Home</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Menu</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Subscription</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
                        
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Jam Operasional</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>Senin - Jumat: 08.00 - 20.00</li>
                        <li>Sabtu: 08.00 - 17.00</li>
                        <li>Minggu & Hari Libur: 09.00 - 15.00</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>Jl. Kebon Pedes No. 12 Blok. A, Kota Bogor</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3"></i>
                            <span>0812-3456-789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@seacatering.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-user mr-3"></i>
                            <span>Manager: Brian</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 SeaCatering. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
  </main>
</div>

 <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>