<x-layout>
  
  
    <div class="container mx-auto px-4 py-8">
        <!-- Form Testimonial -->
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Testimonial</h2>
            
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('testimonials.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="customer_name" class="block text-gray-700 mb-2">Nama Pelanggan</label>
                    <input type="text" name="customer_name" id="customer_name"
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                           required>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 mb-2">Pesan Ulasan</label>
                    <textarea name="message" id="message" rows="4"
                              class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                              required></textarea>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-2">Peringkat</label>
                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}"
                                   class="hidden peer/star{{$i}}"
                                   {{ $i == 5 ? 'checked' : '' }}>
                            <label for="star{{ $i }}" 
                                   class="text-3xl cursor-pointer text-gray-300 peer-checked/star{{$i}}:text-yellow-400">
                                ★
                            </label>
                        @endfor
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Kirim Testimonial
                </button>
            </form>
        </div>

        <!-- Testimonial Grid (3 kolom) -->
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Ulasan Pelanggan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($testimonials as $testimonial)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl mr-2">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $testimonial->rating)
                                    ★
                                @else
                                    ☆
                                @endif
                            @endfor
                        </div>
                        <span class="text-gray-700">({{ $testimonial->rating }}/5)</span>
                    </div>
                    <p class="text-gray-600 italic mb-4">"{{ $testimonial->message }}"</p>
                    <p class="text-gray-800 font-semibold">- {{ $testimonial->customer_name }}</p>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            @if($testimonials->hasPages())
            <div class="mt-8">
                {{ $testimonials->links() }}
            </div>
            @endif
        </div>
    </div>

    

</x-layout>