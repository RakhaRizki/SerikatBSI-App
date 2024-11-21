<nav class="bg-green-100 shadow-md py-4 sticky top-0 px-6 w-full z-10">
    <div class="max-w-screen-xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="h-10">
        </div>

        <!-- Menu (Desktop & Mobile Toggle) -->
        <div class="flex items-center md:hidden">
            <button id="menu-toggle" class="text-green-600 hover:text-green-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Menu (Desktop Only) -->
        <div id="menu" class="hidden md:flex items-center space-x-6">
            <a href="#home" class="relative group text-green-600 font-semibold py-2 no-underline">
                <i class="fas fa-home mr-2"></i> Beranda
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#search" class="relative group text-green-600 font-semibold py-2 no-underline">
                <i class="fas fa-search mr-2"></i> Cari Anggota
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#login" class="relative group text-green-600 font-semibold py-2 px-1 no-underline">
                <i class="fas fa-sign-in-alt mr-2"></i> Login
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#register" class="relative group text-green-600 font-semibold py-2 px-1 no-underline">
                <i class="fas fa-user-plus mr-2"></i> Register
                <span
                    class="absolute left-0 bottom-0 w-0 h-0.5 bg-green-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
        </div>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden flex-col mt-2 md:hidden space-y-2 bg-green-100 py-4 rounded-lg">
        <a href="#home"
            class="block text-center text-white bg-green-600 font-semibold py-2 px-4 rounded-lg no-underline hover:bg-green-700 transition-all duration-200 ease-in-out">
            <i class="fas fa-home mr-2"></i> Beranda
        </a>
        <a href="#search"
            class="block text-center text-green-600 font-semibold py-2 px-4 rounded-lg no-underline hover:bg-green-200 hover:text-green-800 transition-all duration-200 ease-in-out">
            <i class="fas fa-search mr-2"></i> Cari Anggota
        </a>
        <a href="#login"
            class="block text-center text-green-600 font-semibold py-2 px-4 rounded-lg no-underline hover:bg-green-200 hover:text-green-800 transition-all duration-200 ease-in-out">
            <i class="fas fa-sign-in-alt mr-2"></i> Login
        </a>
        <a href="#register"
            class="block text-center text-green-600 font-semibold py-2 px-4 rounded-lg no-underline hover:bg-green-200 hover:text-green-800 transition-all duration-200 ease-in-out">
            <i class="fas fa-user-plus mr-2"></i> Register
        </a>
    </div>
</nav>
