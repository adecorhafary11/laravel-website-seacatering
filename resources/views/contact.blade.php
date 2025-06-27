<x-layout>
  


<div class="min-h-screen flex items-center justify-center bg-green-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-yellow-500 p-8 rounded-xl shadow-xl border border-gray-200 transform transition-all duration-500 ease-in-out">
        <!-- Header -->
        <div class="text-center transition-all duration-700 ease-out delay-150">
            <h2 class="mt-6 text-3xl font-bold text-green-900 transform transition-transform duration-500 hover:scale-105">
                Hubungi Kami
            </h2>
            <p class="mt-2 text-gray-600 animate-pulse">
                Punya pertanyaan? Silakan isi form berikut
            </p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg animate-bounce">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form class="mt-8 space-y-6" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 transition-all duration-500 ease-in-out">
                <!-- Name Field -->
                <div class="transform transition-transform duration-500 hover:-translate-y-1">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input id="name" name="name" type="text" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                           placeholder="Nama anda">
                </div>
                
                <!-- Email & Phone -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="transform transition-transform duration-500 delay-100 hover:-translate-y-1">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="email" name="email" type="email" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                               placeholder="email@contoh.com">
                    </div>
                    <div class="transform transition-transform duration-500 delay-150 hover:-translate-y-1">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                        <input id="phone" name="phone" type="tel" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                               placeholder="08xxxxxxxxxx">
                    </div>
                </div>
                
                <!-- Subject -->
                <div class="transform transition-transform duration-500 delay-200 hover:-translate-y-1">
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                    <input id="subject" name="subject" type="text" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                           placeholder="Subjek pesan">
                </div>
                
                <!-- Message -->
                <div class="transform transition-transform duration-500 delay-300 hover:-translate-y-1">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea id="message" name="message" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300"
                              placeholder="Tulis pesan anda disini..."></textarea>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="transform transition-transform duration-500 delay-500 hover:scale-105">
                <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-green-900 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-300 shadow-lg">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    /* Animasi saat halaman dimuat */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(100px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-on-load {
        animation: slideIn 0.8s ease-out forwards;
    }

    /* Terapkan animasi ke elemen utama */
    .max-w-md {
        opacity: 0;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.querySelector('.max-w-md');
        
        // Tambahkan kelas animasi setelah delay kecil
        setTimeout(() => {
            contactForm.classList.add('animate-on-load');
        }, 100);
    });
</script>



</x-layout>