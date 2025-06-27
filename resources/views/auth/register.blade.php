<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - SEA Catering</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Daftar Akun Baru</h2>
                <p class="text-gray-600">Isi formulir untuk membuat akun</p>
            </div>
            
            <form action="{{ route('register') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="full_name" class="block text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" id="full_name" name="full_name" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                           value="{{ old('full_name') }}">
                    @error('full_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @else
                        <p class="text-gray-500 text-xs mt-1">Minimal 8 karakter, mengandung huruf besar, kecil, angka, dan simbol</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 mb-2">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-200">
                    Daftar
                </button>
                
                <div class="mt-6 text-center">
                    <p class="text-gray-600">Sudah punya akun? 
                        <a href="{{ route('login') }}" class="text-green-600 hover:underline">Masuk</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>