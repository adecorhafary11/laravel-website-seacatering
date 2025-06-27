<x-layout>
  <div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Menu</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($menus as $menu)
        <div class="bg-white rounded-lg shadow p-4">
            @if($menu->image)
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-full h-40 object-cover rounded">
            @endif
            <h2 class="text-xl font-semibold mt-2">{{ $menu->name }}</h2>
            <p class="text-gray-700">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>
            <p class="text-sm text-gray-500 mt-2">{{ Str::limit($menu->description, 80) }}</p>
            <button onclick="openModal({{ $menu->id }})" class="mt-4 bg-green-900 text-white px-4 py-2 rounded hover:bg-yellow-400">
                See More Details
            </button>
        </div>

        <!-- Modal -->
        <div id="modal-{{ $menu->id }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg p-6 w-full max-w-lg">
                <h3 class="text-xl font-bold">{{ $menu->name }}</h3>
                <p class="text-gray-600 mt-2">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>
                <p class="mt-4">{{ $menu->description }}</p>
                <p class="mt-2 text-sm text-gray-700">{{ $menu->details }}</p>
                <button onclick="closeModal({{ $menu->id }})" class="mt-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Close</button>
            </div>
        </div>
        @endforeach
    </div>
</div>



<script>
    function openModal(id) {
        document.getElementById('modal-' + id).classList.remove('hidden');
    }
    function closeModal(id) {
        document.getElementById('modal-' + id).classList.add('hidden');
    }
</script>
</x-layout>