<nav class="subnav container mx-auto px-4 flex items-center justify-between" style="height: 70px;">
    <!-- Logo and Company Name -->
    <a href="/" class="flex items-center group transition-transform duration-300 hover:scale-110">
        <img src="{{ asset('images/logo.webp') }}" alt="Nông Nghiệp Xanh" class="h-16 w-auto">
        <div class="flex flex-col ml-2">
            <span class="text-blue-600 font-semibold leading-tight">Hợp tác xã Nông Nghiệp</span>
            <span class="text-red-600 font-bold text-lg leading-tight">Huỳnh Dân</span>
        </div>
    </a>

    <!-- Search -->
    <div class="relative flex-1 max-w-md mx-4 hidden md:block">
        <div class="relative">
            <input type="text" placeholder="Tìm kiếm sản phẩm..." class="w-full px-4 py-2 rounded-[20px] border-2 border-[#006633] focus:outline-none focus:ring-2 focus:ring-[#006633] text-gray-600 placeholder-gray-500">
            <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#006633] transition-transform duration-300 hover:scale-110">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Icons -->
    <div class="flex items-center space-x-4">
        <a href="tel:0813111357" class="hidden md:flex items-center space-x-2 transition-transform duration-300 hover:scale-110">
            <div class="bg-[#006633] p-2 rounded-full">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </div>
            <span class="text-red-500 font-medium">0813.111.357</span>
        </a>
    </div>

    <!-- Hamburger Button (Mobile Only) -->
    <button id="hamburger-button" class="md:hidden text-[#006633]">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</nav>
