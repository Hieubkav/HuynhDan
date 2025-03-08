<!-- Footer Section -->
<footer class="bg-[#F8FAF5] border-t border-[#006633]/20">
    <!-- Main Footer -->
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Company Info -->
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-12 h-12 object-contain">
                    <h3 class="text-[#006633] font-bold text-lg">Huỳnh Dân</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Chuyên cung cấp các sản phẩm cây kiểng, chậu cây và thảm cỏ chất lượng cao.
                </p>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-400 hover:text-[#006633] transition-colors duration-300">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#006633] transition-colors duration-300">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#006633] transition-colors duration-300">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col">
                <h4 class="text-[#006633] font-bold mb-6">Liên Kết Nhanh</h4>
                <nav class="grid grid-cols-1 gap-4">
                    <a href="/" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Trang Chủ
                    </a>
                    <a href="/products" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Sản Phẩm
                    </a>
                    <a href="/services" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Dịch Vụ
                    </a>
                    <a href="/about" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Giới Thiệu
                    </a>
                    <a href="/contact" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                        Liên Hệ
                    </a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col">
                <h4 class="text-[#006633] font-bold mb-6">Thông Tin Liên Hệ</h4>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-[#006633] mt-1"></i>
                        <p class="text-gray-600 text-sm">
                            Vòng Xoay Ngã Bảy,<br>
                            Phường Ngã Bảy, TP. Ngã Bảy,<br>
                            Tỉnh Hậu Giang
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-phone-alt text-[#006633]"></i>
                        <a href="tel:0813111357" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                            0813.111.357
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-[#006633]"></i>
                        <a href="mailto:contact@huynhdan.com" class="text-gray-600 hover:text-[#006633] transition-colors duration-300">
                            contact@huynhdan.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t border-[#006633]/10 bg-[#F3F6F0]">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-600 text-sm text-center md:text-left">
                    © 2024 Hợp Tác Xã Huỳnh Dân. Tất cả quyền được bảo lưu.
                </p>
                <div class="flex items-center gap-4 text-sm text-gray-600">
                    <a href="/privacy" class="hover:text-[#006633] transition-colors duration-300">
                        Chính sách bảo mật
                    </a>
                    <span>|</span>
                    <a href="/terms" class="hover:text-[#006633] transition-colors duration-300">
                        Điều khoản sử dụng
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
