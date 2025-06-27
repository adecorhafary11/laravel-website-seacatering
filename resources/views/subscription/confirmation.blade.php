<x-layout>
  <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-green-900 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">Langganan Berhasil Dibuat!</h1>
                <p class="text-green-100">Terima kasih telah berlangganan layanan kami</p>
            </div>
            
            <div class="p-6">
                <div class="mb-6 text-center">
                    <svg class="w-16 h-16 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <h2 class="text-xl font-bold text-gray-800 mt-4">Pesanan Anda Telah Diterima</h2>
                    <p class="text-gray-600 mt-2">Kami akan mengirimkan makanan sesuai jadwal yang Anda pilih</p>
                </div>
                
                <!-- Detail Langganan -->
                <div class="border rounded-lg p-6 mb-6">
                    <h3 class="font-bold text-lg text-gray-800 mb-4">Detail Langganan</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Nama</p>
                            <p class="font-medium">
                                {{ $subscription->user->name }} {{-- Perbaikan di sini --}}
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-600">Email</p> {{-- Tambahkan email --}}
                            <p class="font-medium">
                                {{ $subscription->user->email }}
                                @if(!$subscription->user->hasVerifiedEmail())
                                    <span class="text-xs text-yellow-600 ml-2">(belum diverifikasi)</span>
                                @endif
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-600">Nomor Telepon</p>
                            <p class="font-medium">{{ $subscription->phone }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Paket</p>
                            <p class="font-medium capitalize">
                                @if($subscription->package === 'diet') Paket Diet @endif
                                @if($subscription->package === 'protein') Paket Protein @endif
                                @if($subscription->package === 'royal') Paket Royal @endif
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-600">Total Harga</p>
                            <p class="font-bold text-green-600">Rp{{ number_format($subscription->total_price, 0, ',', '.') }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Jenis Makanan</p>
                            <p class="font-medium">
                                @php
                                    $meals = [
                                        'sarapan' => 'Sarapan',
                                        'makan_siang' => 'Makan Siang',
                                        'makan_malam' => 'Makan Malam'
                                    ];
                                    
                                    $selectedMeals = array_map(function($meal) use ($meals) {
                                        return $meals[$meal] ?? $meal;
                                    }, $subscription->meal_types);
                                @endphp
                                {{ implode(', ', $selectedMeals) }}
                            </p>
                        </div>
                        <div>
                            <p class="text-gray-600">Hari Pengiriman</p>
                            <p class="font-medium capitalize">
                                {{ implode(', ', $subscription->delivery_days) }}
                            </p>
                        </div>
                        @if($subscription->allergies)
                        <div class="md:col-span-2">
                            <p class="text-gray-600">Alergi/Pantangan</p>
                            <p class="font-medium">{{ $subscription->allergies }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Instruksi Pembayaran -->
                <div class="bg-blue-50 rounded-lg p-6 mb-6">
                    <h3 class="font-bold text-lg text-blue-800 mb-4">Instruksi Pembayaran</h3>
                    <ol class="list-decimal list-inside space-y-2 text-blue-700">
                        <li>Transfer ke rekening BCA 1234567890 a/n Seacatering</li>
                        <li>Jumlah transfer: Rp{{ number_format($subscription->total_price, 0, ',', '.') }}</li>
                        <li>Gunakan kode unik: {{ substr($subscription->id, -3) }}</li>
                        <li>Konfirmasi pembayaran melalui WhatsApp ke 081234567890</li>
                    </ol>
                </div>

                <!-- Notifikasi Verifikasi Email -->
                @if(!auth()->user()->hasVerifiedEmail())
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                Email Anda belum terverifikasi. Untuk keamanan akun dan notifikasi pengiriman, 
                                <a href="{{ route('verification.send') }}" class="font-medium underline text-yellow-700 hover:text-yellow-600">
                                    kirim ulang email verifikasi
                                </a>.
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                
                <div class="text-center">
                    <a href="/" class="inline-block bg-green-900 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-200">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>