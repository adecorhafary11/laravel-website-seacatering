<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SEA Catering</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-bold text-gray-900">Admin Dashboard</h1>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-700">{{ auth()->user()->full_name }}</span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-green-600 hover:text-green-800">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Pengguna Section -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-6 py-4 bg-gray-50 border-b">
                            <h2 class="text-lg font-medium text-gray-900">Pengguna Terdaftar</h2>
                        </div>
                        <div class="divide-y divide-gray-200">
                            @foreach($users as $user)
                            <div class="px-6 py-4 flex justify-between items-center">
                                <div>
                                    <h3 class="text-md font-medium text-gray-900">{{ $user->full_name }}</h3>
                                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $user->is_admin ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                        {{ $user->is_admin ? 'Admin' : 'User' }}
                                    </span>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 hover:text-blue-900">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.users.delete', $user) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="px-6 py-4 bg-gray-50 border-t">
                            {{ $users->links() }}
                        </div>
                    </div>

                    <!-- Langganan Section -->
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <div class="px-6 py-4 bg-gray-50 border-b">
                            <h2 class="text-lg font-medium text-gray-900">Langganan Aktif</h2>
                        </div>
                        <div class="divide-y divide-gray-200">
                            @foreach($subscriptions as $subscription)
                            <div class="px-6 py-4">
                                <h3 class="text-md font-medium text-gray-900">{{ $subscription->user->full_name }}</h3>
                                <p class="text-sm text-gray-500">
                                    Paket: {{ ucfirst($subscription->package) }} | 
                                    Total: Rp{{ number_format($subscription->total_price, 0, ',', '.') }}
                                </p>
                                <p class="text-sm text-gray-500 mt-1">
                                    {{ implode(', ', array_map('ucfirst', $subscription->meal_types)) }} | 
                                    {{ implode(', ', array_map('ucfirst', $subscription->delivery_days)) }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        <div class="px-6 py-4 bg-gray-50 border-t">
                            {{ $subscriptions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>