<nav class="bg-white bg-opacity-90 backdrop-blur-sm shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    <div class="flex items-center">
                        <a href="/">
                            <span class="text-green-900 font-bold text-2xl">SEACATERING</span>
                        </a>
                    </div>
                    
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="/" class="text-dark font-medium hover:text-primary transition">Home</a>
                        <a href="/menu" class="text-dark font-medium hover:text-primary transition">Menu</a>
                        <a href="/langganan" class="pb-1 text-dark font-medium hover:text-primary transition">Subscription</a>
                        <a href="{{ route('contact') }}" class=" pb-1  transition duration-300 text-dark font-medium hover:text-primary">Contact</a>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="hidden md:block text-dark mr-4">
                            <span class="font-semibold">Manager: Brian</span>
                            <span class="block text-sm">08123456789</span>
                        </div>

                        <div class="flex items-center space-x-4">
                            <a href="/login">
                            <button class="btn bg-green-900 px-4 py-2 rounded-xl text-white font-bold text-lg">
                                login
                            </button>
                            </a>
                        </div>
                        
                        {{-- <button class="md:hidden text-dark">
                            <i class="fas fa-bars text-2xl"></i>
                        </button> --}}
                    </div>
                </div>
            </div>
        </nav>
 