<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - SEA Catering</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Verifikasi Email Anda</h2>
                <p class="text-gray-600 mt-2">Sebelum melanjutkan, silakan verifikasi email Anda dengan link yang kami kirimkan.</p>
                
                @if (session('status') == 'verification-link-sent')
                    <div class="bg-green-100 text-green-700 p-4 rounded mt-4">
                        Link verifikasi baru telah dikirim ke alamat email Anda!
                    </div>
                @endif
            </div>

            <div class="mb-6 text-center">
                <p class="text-gray-700">
                    Jika Anda tidak menerima email verifikasi, klik tombol di bawah ini untuk mengirim ulang.
                </p>
            </div>

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-200">
                    Kirim Ulang Email Verifikasi
                </button>
            </form>

            <div class="mt-6 text-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-green-600 hover:underline">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>