<x-layout>
  
   {{-- <header class="bg-white shadow-sm py-5">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
      <h2 class="text-4xl font-bold tracking-tight text-gray-900 mt-4 text-shadow-lg">SEA<span class="italic font-bold text-green-900 mb-4 text-shadow-lg ">CATERING</span></h2>
    </div>
   
  </header> --}}


<body>
   

    <!-- Hero Section with Slider -->
    <section class="hero-slider">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
        
        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1490818387583-1baba5e638af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80');"></div>
        
        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');"></div>
        
        <div class="slide-overlay"></div>
        
        <div class="content h-full flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-2xl">
                    <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight">
                        JAGONYA RASA <span class="text-secondary">SEHAT</span>
                    </h1>
                    <p class="mt-6 text-xl text-white opacity-90 max-w-lg">
                        Makanan Sehat, Kapan Saja & Dimana Saja
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <button class="btn bg-green-900 px-8 py-4 rounded-full text-white font-bold text-lg">
                           <a href="/langganan">Berlanggan Sekarang</a>
                        </button>
                        <button class="btn-secondary px-8 py-4 rounded-full text-dark font-bold text-lg">
                            <a href="/menu">MENU KAMI</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Controls -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30 flex space-x-3">
            <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" data-slide="0"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" data-slide="1"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" data-slide="2"></button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-dark">Kenapa Memilih Kami?</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Kami menyediakan makanan sehat dengan kualitas terbaik dan pelayanan terbaik untuk Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-xl transition">
                    <div class="w-20 h-20 rounded-full bg-primary bg-opacity-10 flex items-center justify-center mx-auto">
                        <i class="fas fa-seedling text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mt-6 text-dark">Bahan Organik</h3>
                    <p class="mt-4 text-gray-600">
                        Semua bahan yang kami gunakan berasal dari sumber organik terpercaya tanpa bahan kimia berbahaya.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-xl transition">
                    <div class="w-20 h-20 rounded-full bg-primary bg-opacity-10 flex items-center justify-center mx-auto">
                        <i class="fas fa-heartbeat text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mt-6 text-dark">Sehat & Bergizi</h3>
                    <p class="mt-4 text-gray-600">
                        Menu kami dirancang oleh ahli gizi untuk memenuhi kebutuhan nutrisi harian Anda.
                    </p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg text-center hover:shadow-xl transition">
                    <div class="w-20 h-20 rounded-full bg-primary bg-opacity-10 flex items-center justify-center mx-auto">
                        <i class="fas fa-shipping-fast text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mt-6 text-dark">Pengiriman Cepat</h3>
                    <p class="mt-4 text-gray-600">
                        Pesanan Anda akan sampai tepat waktu dalam kondisi terbaik dengan sistem pengiriman khusus.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-dark">Menu Populer</h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Temukan menu sehat favorit pelanggan kami
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="menu-card">
                    <div class="overflow-hidden rounded-t-xl">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" 
                             alt="Salad Buah Segar" class="w-full h-64 object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-md">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-dark">Royal Plan</h3>
                            <span class="text-accent font-bold text-xl">Rp 60.000</span>
                        </div>
                        <p class="mt-3 text-gray-600">
                            Royal Plan adalah paket premium untuk kamu yang ingin menikmati makanan sehat 
                        >
                    </div>
                </div>
                
                <div class="menu-card">
                    <div class="overflow-hidden rounded-t-xl">
                        <img src="https://images.unsplash.com/photo-1606755962773-d324e0a13086?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Bowl Sayur Organik" class="w-full h-64 object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-md">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-dark">Protein Plan</h3>
                            <span class="text-accent font-bold text-xl">Rp 40.000</span>
                        </div>
                        <p class="mt-3 text-gray-600">
                            Protein Plan difokuskan untuk kamu yang aktif secara fisik, seperti rutin gym, olahraga
                        </p>
                        
                    </div>
                </div>
                
                <div class="menu-card">
                    <div class="overflow-hidden rounded-t-xl">
                        <img src="https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                             alt="Smoothie Detox" class="w-full h-64 object-cover transition duration-500 hover:scale-110">
                    </div>
                    <div class="bg-white p-6 rounded-b-xl shadow-md">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-dark">Diet Plan</h3>
                            <span class="text-accent font-bold text-xl">Rp 30.000</span>
                        </div>
                        <p class="mt-3 text-gray-600">
                            Diet Plan Dirancang khusus untuk kamu yang ingin menjaga berat badan tetap ideal tanpa mengorbankan rasa. 
                        </p>
                        
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16">
                <button class="px-8 py-4 bg-secondary rounded-full text-dark font-bold text-lg hover:bg-opacity-90 transition">
                    <a href="/menu">Lihat Semua Menu</a>
                </button>
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-teal-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2 text-center md:text-left">
                    <h2 class="text-4xl font-bold text-white">Berlangganan Paket Sehat</h2>
                    <p class="mt-4 text-xl text-white opacity-90 max-w-lg">
                        Dapatkan makanan sehat setiap hari dengan harga khusus untuk anggota langganan
                    </p>
                    <button class="mt-8 px-8 py-4 bg-secondary rounded-full text-dark font-bold text-lg hover:bg-opacity-90 transition">
                        <a href="/langganan">Langganan Disini</a>
                    </button>
                </div>
                
                <div class="md:w-1/2 mt-10 md:mt-0">
                    <div class="bg-white rounded-2xl p-1 floating mx-auto max-w-md">
                        <div class="bg-gray-100 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-center text-dark">Paket Royal</h3>
                            <div class="mt-6 text-center">
                                <span class="text-5xl font-bold text-primary">Rp 60.000</span>
                                <span class="text-gray-600 block mt-2">/ Permakanan</span>
                            </div>
                            <ul class="mt-8 space-y-4">
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-primary mr-3"></i>
                                    <span>30 hari makanan sehat</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-primary mr-3"></i>
                                    <span>3 kali makan sehari (pagi, siang, malam)</span>
                                </li>
                                
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-primary mr-3"></i>
                                    <span>Menu personalisasi</span>
                                </li>
                                 <li class="flex items-center">
                                    <i class="fas fa-check-circle text-primary mr-3"></i>
                                    <span>Diskon 5%</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check-circle text-primary mr-3"></i>
                                    <span>Gratis ongkir</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-dark">Apa Kata Pelanggan Kami?</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Mereka yang telah merasakan manfaat makanan sehat dari kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <!-- Gunakan placeholder atau avatar default -->
                    <div class="bg-gray-200 border-2 border-dashed rounded-xl w-16 h-16 flex items-center justify-center text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-lg">{{ $testimonial->customer_name }}</h4>
                        <div class="flex text-yellow-400 mt-1">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $testimonial->rating)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
                <p class="mt-4 text-gray-600 italic">
                    "{{ $testimonial->message }}"
                </p>
            </div>
            @endforeach
        </div>
        
        <!-- Tombol untuk melihat semua testimonial -->
        <div class="text-center mt-12">
            <a href="{{ route('testimonials.index') }}" class="inline-block bg-green-900 text-white font-bold py-3 px-6 rounded-lg transition duration-200">
                Lihat Semua Testimonial
            </a>
        </div>
    </div>
</section>>



    
   

    <script>
        // Slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slider-dot');
            let currentSlide = 0;
            const slideInterval = 5000; // 5 seconds
            
            function showSlide(n) {
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                currentSlide = (n + slides.length) % slides.length;
                
                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }
            
            function nextSlide() {
                showSlide(currentSlide + 1);
            }
            
            // Add click event to dots
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    showSlide(parseInt(this.getAttribute('data-slide')));
                });
            });
            
            // Auto slide
            let slideTimer = setInterval(nextSlide, slideInterval);
            
            // Pause on hover
            const slider = document.querySelector('.hero-slider');
            slider.addEventListener('mouseenter', () => clearInterval(slideTimer));
            slider.addEventListener('mouseleave', () => {
                slideTimer = setInterval(nextSlide, slideInterval);
            });
        });
    </script>
</body>
</html>

  
</x-layout>