<div id="mobile-drawer" class="fixed inset-0 z-50 md:hidden hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/50" id="backdrop"></div>
    <!-- Drawer Content -->
    <div class="relative ml-auto h-full w-72 bg-white shadow-xl transform transition-transform duration-300 ease-in-out">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <span class="text-[#006633] font-bold">Menu</span>
            <button id="close-drawer" class="text-[#006633]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <!-- Search (Mobile) -->
        <div class="p-4 border-b border-gray-100">
            <div class="relative">
                <input type="text" placeholder="Tìm kiếm sản phẩm..." class="w-full px-4 py-2 rounded-[20px] border-2 border-[#006633] focus:outline-none focus:ring-2 focus:ring-[#006633] text-gray-600 placeholder-gray-500">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#006633]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Items -->
        <ul class="p-4 space-y-3">
            <li class="space-y-2">
                <button class="w-full flex items-center justify-between text-gray-700 hover:text-[#006633] transition-colors duration-300" onclick="this.nextElementSibling.classList.toggle('hidden')">
                    <span>Sản phẩm</span>
                    <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Mobile Product Submenu -->
                <div class="hidden pl-4 space-y-2">
                    <a href="/products/cay-kieng" class="block text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Sản phẩm cây kiểng</a>
                    <a href="/products/chau-cay" class="block text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Chậu cây</a>
                    <a href="/products/tham-co" class="block text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Thảm cỏ</a>
                </div>
            </li>
            <li><a href="/" class="block text-gray-700 hover:text-[#006633] transition-colors duration-300">Trang chủ</a></li>
            <li><a href="/about" class="block text-gray-700 hover:text-[#006633] transition-colors duration-300">Về chúng tôi</a></li>
            <li><a href="/news" class="block text-gray-700 hover:text-[#006633] transition-colors duration-300">Tin tức</a></li>
            <li><a href="/market" class="block text-gray-700 hover:text-[#006633] transition-colors duration-300">Chợ nông sản</a></li>
            <li><a href="/guide" class="block text-gray-700 hover:text-[#006633] transition-colors duration-300">Hướng dẫn</a></li>
            <li><a href="/contact" class="block text-gray-700 hover:text-[#006633] transition-colors duration-300">Liên hệ</a></li>
        </ul>
        <!-- Additional Mobile Items -->
        <div class="p-4 border-t border-gray-100">
            <ul class="space-y-4">
                <li><a href="/track-order" class="flex items-center space-x-2 text-gray-700 hover:text-[#006633] transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg><span>Theo dõi đơn hàng</span></a></li>
                <li><a href="/login" class="flex items-center space-x-2 text-gray-700 hover:text-[#006633] transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg><span>Đăng nhập</span></a></li>
                <li><a href="tel:0813111357" class="flex items-center space-x-2 text-red-500 hover:text-red-600 transition-colors duration-300"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg><span>0813.111.357</span></a></li>
            </ul>
        </div>
    </div>
</div>
