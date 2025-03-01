<!-- Header/Navbar Component -->
<header class="relative w-full bg-farm-gray">
    <!-- Background Image Container -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6"
             alt="Background"
             class="w-full h-full object-cover opacity-50"
             fetchpriority="high">
        <div class="absolute inset-0 bg-gradient-to-b from-farm-green/40 to-white/60"></div>
    </div>

    <!-- Navbar Container -->
    <nav class="relative z-10 container mx-auto px-4 flex items-center justify-between transition-all duration-300"
         style="min-height: clamp(80px, 10vw, 120px);">
        <!-- Logo Section -->
        <a href="/" class="flex items-center group">
            <img src="{{ asset('images/logo.webp') }}"
                 alt="HTX Huỳnh Dân Logo"
                 class="w-20 h-12 object-contain transition-transform duration-300 group-hover:scale-105
                        sm:w-24 sm:h-14
                        md:w-28 md:h-16">
            <span class="ml-2 text-farm-brown font-sans font-bold text-shadow transition-colors duration-300
                         text-xl sm:text-2xl md:text-3xl group-hover:text-farm-green">
                Huỳnh Dân
            </span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="/" class="nav-link">Trang Chủ</a>
            <a href="#products" class="nav-link">Sản Phẩm</a>
            <a href="#services" class="nav-link">Dịch Vụ</a>
            <a href="#about" class="nav-link">Giới Thiệu</a>
            <a href="#contact" class="nav-link">Liên Hệ</a>
            <a href="#map" class="nav-link">Bản Đồ</a>
        </div>

        <!-- CTA Button (Desktop) -->
        <a href="#contact"
           class="hidden md:flex items-center justify-center px-4 py-2 bg-farm-orange hover:bg-farm-orange/80
                  text-white font-semibold rounded-md shadow-md hover:shadow-lg
                  transition-all duration-300 transform hover:scale-105">
            Liên Hệ Ngay
        </a>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button"
                class="md:hidden p-2 text-farm-green hover:text-farm-green/80 bg-white rounded-md shadow-md
                       transition-colors duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu"
         class="fixed inset-0 z-50 md:hidden hidden transition-all duration-300 ease-in-out">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <!-- Menu Content -->
        <div class="relative w-full h-full flex flex-col transform transition-transform duration-300 ease-in-out">
            <div class="p-4 border-b border-gray-100 flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.webp') }}"
                         alt="HTX Huỳnh Dân Logo"
                         class="h-10 w-auto">
                    <span class="ml-2 text-farm-brown font-sans font-bold text-xl">Huỳnh Dân</span>
                </div>
                <button id="close-menu-button"
                        class="p-2 text-farm-green/60 hover:text-farm-green">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Items -->
            <div class="flex-1 flex flex-col items-center justify-center overscroll-y-auto">
                <div class="bg-white rounded-xl shadow-xl space-y-4 p-6 w-11/12 flex flex-col">
                    <a href="/" class="mobile-nav-link">Trang Chủ</a>
                    <a href="#products" class="mobile-nav-link">Sản Phẩm</a>
                    <a href="#services" class="mobile-nav-link">Dịch Vụ</a>
                    <a href="#about" class="mobile-nav-link">Giới Thiệu</a>
                    <a href="#contact" class="mobile-nav-link">Liên Hệ</a>
                    <a href="#map" class="mobile-nav-link">Bản Đồ</a>
                </div>
            </div>

            <!-- Mobile CTA -->
            <div class="p-4 border-t border-gray-100">
                <a href="#contact"
                   class="block w-full text-center py-3 bg-farm-orange hover:bg-farm-orange/80
                          text-white font-semibold rounded-md shadow-md hover:shadow-lg
                          transition-all duration-300 transform hover:scale-105">
                    Liên Hệ Ngay
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Styles -->
<style>
    .text-shadow {
        text-shadow: 0 1px 2px rgba(0,0,0,0.2);
    }

    .nav-link {
        @apply text-farm-brown hover:text-farm-green font-sans font-semibold
        px-3 py-2 rounded-md bg-white/90 hover:bg-white
        shadow-sm hover:shadow-md
        transition-all duration-300 relative
        after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5
        after:bg-farm-green after:scale-x-0 after:transition-transform after:duration-300
        hover:after:scale-x-100;
    }

    .mobile-nav-link {
        @apply px-4 py-3 text-farm-brown hover:text-farm-green
        font-semibold text-base
        transition-all duration-300 block;
    }

    #mobile-menu {
        opacity: 0;
        visibility: hidden;
    }

    #mobile-menu.active {
        opacity: 1;
        visibility: visible;
    }

    #mobile-menu > div:last-child {
        transform: translateX(-100%);
    }

    #mobile-menu.active > div:last-child {
        transform: translateX(0);
    }
</style>

<!-- Mobile Menu Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        const toggleMenu = () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        };

        mobileMenuButton.addEventListener('click', toggleMenu);
        closeMenuButton.addEventListener('click', toggleMenu);

        mobileMenu.addEventListener('click', (e) => {
            if (!e.target.closest('#mobile-menu > div:last-child')) toggleMenu();
        });

        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => toggleMenu());
        });
    });
</script>
