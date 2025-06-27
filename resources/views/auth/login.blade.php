<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SEA Catering</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Masuk ke Akun Anda</h2>
                <p class="text-gray-600">Selamat datang kembali di SEA Catering</p>
            </div>
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                               class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-gray-700">Ingat saya</label>
                    </div>
                    
                    {{-- <div>
                        <a href="#" class="text-green-600 hover:underline">Lupa password?</a>
                    </div> --}}
                </div>
                
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-200">
                    Masuk
                </button>
                
                <div class="mt-6 text-center">
                    <p class="text-gray-600">Belum punya akun? 
                        <a href="{{ route('register') }}" class="text-green-600 hover:underline">Daftar sekarang</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>