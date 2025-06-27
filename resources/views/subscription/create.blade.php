<x-layout>

    
   <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden ">
            <div class="bg-green-900 py-4 px-6">
                <h1 class="text-2xl font-bold text-white text-center">Langganan Makanan Sehat</h1>
                
            </div>
            
            <form id="subscription-form" action="{{ route('subscription.store') }}" method="POST" class="p-6">
                @csrf
                
                <!-- Nama Lengkap -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-medium mb-2">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                           placeholder="Masukkan nama lengkap Anda">
                </div>
                
                <!-- Nomor Telepon -->
                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">
                        Nomor Telepon Aktif <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="phone" name="phone" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                           placeholder="Contoh: 081234567890">
                </div>
                
                <!-- Paket -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">
                        Pilih Paket <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Paket Diet -->
                        <div class="border rounded-lg p-4 hover:border-green-900 transition-colors ">
                            <div class="flex items-start">
                                <input type="radio" id="package-diet" name="package" value="diet" 
                                       class="mt-1 focus:ring-green-500" required>
                                <label for="package-diet" class="ml-2 block">
                                    <span class="font-medium">Paket Diet</span>
                                    <p class="text-gray-600 mt-1">Rp30.000 per makanan</p>
                                    <p class="text-sm text-gray-500 mt-2">Menu seimbang untuk diet sehat</p>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Paket Protein -->
                        <div class="border rounded-lg p-4 hover:border-green-900 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="package-protein" name="package" value="protein" 
                                       class="mt-1 focus:ring-green-500">
                                <label for="package-protein" class="ml-2 block">
                                    <span class="font-medium">Paket Protein</span>
                                    <p class="text-gray-600 mt-1">Rp40.000 per makanan</p>
                                    <p class="text-sm text-gray-500 mt-2">Tinggi protein untuk pembentukan otot</p>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Paket Royal -->
                        <div class="border rounded-lg p-4 hover:border-green-900 transition-colors">
                            <div class="flex items-start">
                                <input type="radio" id="package-royal" name="package" value="royal" 
                                       class="mt-1 focus:ring-green-500">
                                <label for="package-royal" class="ml-2 block">
                                    <span class="font-medium">Paket Royal</span>
                                    <p class="text-gray-600 mt-1">Rp60.000 per makanan</p>
                                    <p class="text-sm text-gray-500 mt-2">Menu premium dengan bahan terbaik</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Jenis Makanan -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">
                        Jenis Makanan <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="meal-breakfast" name="meal_types[]" value="sarapan"
                                   class="h-4 w-4 text-green-600 focus:ring-green-500 border-2 border-gray-400 p-1">
                            <label for="meal-breakfast" class="ml-2 block text-gray-700">Sarapan</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="meal-lunch" name="meal_types[]" value="makan_siang"
                                   class="h-4 w-4 text-green-600 focus:ring-green-500 border-2 border-gray-400 p-1">
                            <label for="meal-lunch" class="ml-2 block text-gray-700">Makan Siang</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="meal-dinner" name="meal_types[]" value="makan_malam"
                                   class="h-4 w-4 text-green-600 focus:ring-green-500 border-2 border-gray-400 p-1">
                            <label for="meal-dinner" class="ml-2 block text-gray-700">Makan Malam</label>
                        </div>
                    </div>
                </div>
                
                <!-- Hari Pengiriman -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">
                        Hari Pengiriman <span class="text-red-500">*</span>
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                        @foreach(['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'] as $day)
                        <div class="flex items-center">
                            <input type="checkbox" id="day-{{ $day }}" name="delivery_days[]" value="{{ $day }}"
                                   class="h-4 w-4 text-green-600 focus:ring-green-500 border-2 border-gray-400 p-1">
                            <label for="day-{{ $day }}" class="ml-2 block text-gray-700 capitalize">{{ $day }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Alergi -->
                <div class="mb-6">
                    <label for="allergies" class="block text-gray-700 font-medium mb-2">
                        Alergi atau Pantangan Makanan
                    </label>
                    <textarea id="allergies" name="allergies" rows="3"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                              placeholder="Contoh: Alergi seafood, intoleransi laktosa, dll."></textarea>
                </div>
                
                <!-- Perhitungan Harga -->
                <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-medium text-gray-700">Total Harga Langganan</h3>
                            <p class="text-sm text-gray-500" id="calculation-detail">Pilih paket, jenis makanan, dan hari pengiriman</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-green-600" id="total-price">Rp0</p>
                        </div>
                    </div>
                </div>
                
                <!-- Tombol Submit -->
                <div class="mt-8">
                    <button type="submit"
                            class="w-full bg-green-900 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-200">
                        Lanjutkan ke Pembayaran
                    </button>
                </div>
            </form>
        </div>
    </div>

     <!-- FAQ Section dengan animasi -->
        <div class="mt-16 border-t pt-10 border-gray-200">
            <h3 class="text-2xl font-bold text-center text-green-800 mb-8">Pertanyaan Umum</h3>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg overflow-hidden transform transition-all duration-300 hover:shadow-md">
                    <button class="w-full text-left p-4 bg-green-50 hover:bg-green-100 font-medium flex justify-between items-center">
                        <span>Bagaimana cara pembayaran langganan?</span>
                        <svg class="h-5 w-5 text-green-700 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="p-4 bg-white hidden">
                        <p class="text-gray-700">Pembayaran dapat dilakukan melalui transfer bank (BCA, Mandiri, BRI) atau menggunakan kartu kredit/debit. Setelah pembayaran berhasil, paket akan segera aktif.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden transform transition-all duration-300 hover:shadow-md">
                    <button class="w-full text-left p-4 bg-green-50 hover:bg-green-100 font-medium flex justify-between items-center">
                        <span>Apakah menu bisa disesuaikan dengan diet khusus?</span>
                        <svg class="h-5 w-5 text-green-700 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="p-4 bg-white hidden">
                        <p class="text-gray-700">Ya, kami menyediakan pilihan menu untuk berbagai kebutuhan diet seperti vegan, keto, rendah gula, bebas gluten, dan lainnya. Silakan pilih preferensi Anda saat mendaftar.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-lg overflow-hidden transform transition-all duration-300 hover:shadow-md">
                    <button class="w-full text-left p-4 bg-green-50 hover:bg-green-100 font-medium flex justify-between items-center">
                        <span>Apakah bisa membatalkan langganan kapan saja?</span>
                        <svg class="h-5 w-5 text-green-700 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="p-4 bg-white hidden">
                        <p class="text-gray-700">Ya, Anda bisa membatalkan langganan kapan saja. Pembatalan akan efektif setelah periode berjalan selesai. Tidak ada biaya pembatalan yang dikenakan.</p>
                    </div>
                </div>
            </div>
        </div>
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

    /* Efek untuk FAQ */
    .faq-active svg {
        transform: rotate(180deg);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const subscriptionContainer = document.querySelector('.max-w-4xl');
        
        // Tambahkan kelas animasi setelah delay kecil
        setTimeout(() => {
            subscriptionContainer.classList.add('animate-on-load');
        }, 100);
        
        // Animasi untuk FAQ
        const faqButtons = document.querySelectorAll('.border-gray-200 button');
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const content = this.nextElementSibling;
                
                // Toggle kelas active
                faqItem.classList.toggle('faq-active');
                
                // Toggle tampilan konten
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
                
                // Animasi ikon
                const icon = this.querySelector('svg');
                icon.classList.toggle('rotate-180');
            });
        });
    });
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('subscription-form');
            const packageRadios = form.querySelectorAll('input[name="package"]');
            const mealCheckboxes = form.querySelectorAll('input[name="meal_types[]"]');
            const dayCheckboxes = form.querySelectorAll('input[name="delivery_days[]"]');
            const totalPriceEl = document.getElementById('total-price');
            const calculationDetail = document.getElementById('calculation-detail');
            
            // Harga paket
            const packagePrices = {
                'diet': 30000,
                'protein': 40000,
                'royal': 60000
            };
            
            // Fungsi untuk menghitung total
            function calculateTotal() {
                // Dapatkan paket terpilih
                let selectedPackage = null;
                packageRadios.forEach(radio => {
                    if (radio.checked) selectedPackage = radio.value;
                });
                
                // Hitung jumlah makanan terpilih
                let mealCount = 0;
                mealCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) mealCount++;
                });
                
                // Hitung jumlah hari terpilih
                let dayCount = 0;
                dayCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) dayCount++;
                });
                
                // Validasi minimal 1 jenis makanan dan 1 hari
                if (!selectedPackage || mealCount === 0 || dayCount === 0) {
                    totalPriceEl.textContent = 'Rp0';
                    calculationDetail.textContent = 'Pilih paket, minimal 1 jenis makanan, dan minimal 1 hari';
                    return;
                }
                
                // Hitung total harga
                const basePrice = packagePrices[selectedPackage];
                const total = basePrice * mealCount * dayCount * 4.3;
                
                // Format harga
                totalPriceEl.textContent = 'Rp' + total.toLocaleString('id-ID');
                
                // Detail perhitungan
                calculationDetail.textContent = 
                    `Rp${basePrice.toLocaleString('id-ID')} × ${mealCount} jenis × ${dayCount} hari × 4.3 = Rp${total.toLocaleString('id-ID')}`;
            }
            
            // Tambahkan event listeners
            packageRadios.forEach(radio => radio.addEventListener('change', calculateTotal));
            mealCheckboxes.forEach(checkbox => checkbox.addEventListener('change', calculateTotal));
            dayCheckboxes.forEach(checkbox => checkbox.addEventListener('change', calculateTotal));
            
            // Hitung awal
            calculateTotal();
        });
    </script>
</x-layout>