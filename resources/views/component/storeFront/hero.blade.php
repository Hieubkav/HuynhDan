<!-- Hero Section -->
<section class="relative w-full
                h-[500px] lg:h-[500px] md:h-[400px] sm:h-[300px]
                overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 w-full h-full">
        <img src="{{ asset('images/banner.webp') }}"
             alt="Hero Background - Thuyền chở cây"
             class="w-full h-full object-cover object-center"
             fetchpriority="high">
        <!-- Enhanced gradient overlay for better text readability -->
        <div class="absolute inset-0 bg-gradient-to-br from-farm-brown/70 via-farm-brown/40 to-transparent"></div>
    </div>

    <!-- Content Container -->
    <div class="relative h-full container mx-auto px-4 sm:px-6">
        <div class="flex flex-col justify-center h-full
                    max-w-[800px] lg:max-w-[800px] md:max-w-[600px] sm:max-w-[100%]
                    lg:ml-16 md:ml-8 sm:ml-0
                    sm:items-center sm:text-center md:items-start md:text-left">

            <!-- Title -->
            <h1 class="font-roboto font-bold text-white
                       mb-6 lg:mb-6 md:mb-4 sm:mb-3
                       text-5xl lg:text-[48px] md:text-[36px] sm:text-[28px]
                       leading-[1.2]
                       tracking-tight
                       sm:px-4 md:px-0
                       animate-fadeIn">
                Chào Mừng Bà Con Ghé Thăm Hợp Tác Xã Huỳnh Dân –
                <span class="text-farm-green">Vườn Cây Xanh</span> Của Miền Tây
            </h1>

            <!-- Description -->
            <p class="font-roboto text-white/90
                      mb-8 lg:mb-8 md:mb-6 sm:mb-5
                      text-xl lg:text-[20px] md:text-[16px] sm:text-[15px]
                      leading-relaxed
                      max-w-[600px] sm:max-w-[90%] md:max-w-[600px]
                      sm:px-4 md:px-0
                      animate-fadeIn animation-delay-200">
                Với nhiều năm kinh nghiệm trồng và chăm sóc cây cảnh, chúng tôi mang đến cho bà con đủ loại cây kiểng, cây công trình, thảm cỏ tươi tốt cùng dịch vụ vận chuyển tận nơi, chu đáo
            </p>

            <!-- CTA Button -->
            <div class="animate-fadeIn animation-delay-400
                        sm:w-full md:w-auto">
                <a href="#contact"
                   class="inline-flex items-center justify-center
                          transition-all duration-300 transform hover:scale-105
                          text-white font-semibold
                          bg-farm-orange hover:bg-farm-orange/80
                          shadow-lg hover:shadow-xl
                          rounded-lg
                          w-[200px] h-[50px]
                          lg:w-[200px] lg:h-[50px]
                          md:w-[180px] md:h-[45px]
                          sm:w-full sm:h-[45px]
                          sm:mx-4 md:mx-0">
                    <span class="mr-2">Liên Hệ Ngay</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M13 7l5 5m0 0l-5 5m5-5H6">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
    .animation-delay-200 {
        animation-delay: 200ms;
    }

    .animation-delay-400 {
        animation-delay: 400ms;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out forwards;
    }

    @media (max-width: 768px) {
        .animate-fadeIn {
            animation-duration: 0.8s;
        }
    }
</style>
