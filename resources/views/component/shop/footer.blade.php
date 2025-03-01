<!-- Footer Section -->
<footer class="relative w-full h-[150px] lg:h-[150px] md:h-auto sm:h-auto
               bg-farm-gray border-t-2 border-farm-green/40
               py-8">
    <!-- Decorative Pattern -->
    <div class="absolute top-0 left-0 w-full overflow-hidden h-1">
        <div class="w-full h-full flex justify-center items-center">
            <div class="w-full h-px bg-gradient-to-r from-transparent via-farm-brown/20 to-transparent"></div>
        </div>
    </div>

    <!-- Leaf Decoration -->
    <img src="{{ asset('images/pic/z6359973781110_aabc5cd5ce834a78e20efa615e0ab0b5.jpg') }}"
         class="absolute top-0 right-0 w-16 h-16 object-cover rounded-bl-lg opacity-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row md:flex-row sm:flex-col
                    gap-8 lg:gap-8 md:gap-6 sm:gap-8">

            <!-- Quick Links -->
            <div class="w-full lg:w-1/3 md:w-1/2 sm:w-full">
                <nav class="grid grid-cols-2 lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-2 gap-4">
                    <a href="/"
                       class="text-farm-brown hover:text-farm-green
                              font-roboto
                              text-base lg:text-[16px] md:text-[14px] sm:text-[12px]
                              transition-colors duration-300
                              hover:underline">
                        Trang Chủ
                    </a>
                    <a href="#products"
                       class="text-farm-brown hover:text-farm-green
                              font-roboto
                              text-base lg:text-[16px] md:text-[14px] sm:text-[12px]
                              transition-colors duration-300
                              hover:underline">
                        Sản Phẩm
                    </a>
                    <a href="#services"
                       class="text-farm-brown hover:text-farm-green
                              font-roboto
                              text-base lg:text-[16px] md:text-[14px] sm:text-[12px]
                              transition-colors duration-300
                              hover:underline">
                        Dịch Vụ
                    </a>
                    <a href="#about"
                       class="text-farm-brown hover:text-farm-green
                              font-roboto
                              text-base lg:text-[16px] md:text-[14px] sm:text-[12px]
                              transition-colors duration-300
                              hover:underline">
                        Giới Thiệu
                    </a>
                    <a href="#contact"
                       class="text-farm-brown hover:text-farm-green
                              font-roboto
                              text-base lg:text-[16px] md:text-[14px] sm:text-[12px]
                              transition-colors duration-300
                              hover:underline">
                        Liên Hệ
                    </a>
                    <a href="#map"
                       class="text-farm-brown hover:text-farm-green
                              font-roboto
                              text-base lg:text-[16px] md:text-[14px] sm:text-[12px]
                              transition-colors duration-300
                              hover:underline">
                        Bản Đồ
                    </a>
                </nav>
            </div>

            <!-- Info + Social -->
            <div class="w-full lg:w-1/3 md:w-1/2 sm:w-full
                        flex flex-col items-center">
                <!-- Social Icons -->
                <div class="flex items-center space-x-4 mb-4">
                    <!-- Facebook -->
                    <a href="#"
                       class="text-farm-brown/60 hover:text-[#1877F2]
                              transition-all duration-300
                              transform hover:scale-110">
                        <i class="fab fa-facebook text-2xl lg:text-2xl md:text-xl sm:text-lg"></i>
                    </a>
                    <!-- Instagram -->
                    <a href="#"
                       class="text-farm-brown/60 hover:text-[#E4405F]
                              transition-all duration-300
                              transform hover:scale-110">
                        <i class="fab fa-instagram text-2xl lg:text-2xl md:text-xl sm:text-lg"></i>
                    </a>
                    <!-- YouTube -->
                    <a href="#"
                       class="text-farm-brown/60 hover:text-[#FF0000]
                              transition-all duration-300
                              transform hover:scale-110">
                        <i class="fab fa-youtube text-2xl lg:text-2xl md:text-xl sm:text-lg"></i>
                    </a>
                </div>

                <!-- Copyright -->
                <p class="text-farm-brown font-roboto
                          text-sm lg:text-[14px] md:text-[12px] sm:text-[12px]
                          text-center">
                    © 2024 Hợp Tác Xã Huỳnh Dân - Vui Lòng Giữ Bản Quyền
                </p>
            </div>

            <!-- Location -->
            <div class="w-full lg:w-1/3 md:hidden sm:hidden
                        flex items-center justify-center">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt text-farm-orange text-2xl"></i>
                    <span class="text-farm-brown font-roboto
                                text-base lg:text-[16px] md:text-[14px] sm:text-[12px]">
                        Vòng Xoay Ngã Bảy
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
