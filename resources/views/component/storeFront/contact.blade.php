<!-- Contact Section -->
<section id="contact" class="relative w-full py-20 bg-farm-gray">
    <!-- Section Title -->
    <div class="container mx-auto px-4 mb-12">
        <h2 class="text-center font-roboto font-bold
                   text-[36px] lg:text-[36px] md:text-[28px] sm:text-[20px]
                   text-farm-brown
                   mb-4">
            Gửi Lời Nhắn Cho Chúng Tôi
        </h2>
        <div class="w-24 h-1 bg-farm-green/60 mx-auto"></div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-start gap-12
                    w-full lg:w-[80%] mx-auto">

            <!-- Left Column: Contact Info & Image -->
            <div class="w-full lg:w-[40%] space-y-8">
                <!-- Contact Information -->
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-map-marker-alt text-farm-green text-xl mt-1"></i>
                        <p class="flex-1 text-[#333333] font-roboto
                                  text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]
                                  leading-relaxed">
                            Số 90 Ấp Mái Dầm, xã Đại Thành, TP. Ngã Bảy, tỉnh Hậu Giang
                        </p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-phone text-farm-green text-xl"></i>
                        <p class="text-[#333333] font-roboto
                                 text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]">
                            0986 864 266
                        </p>
                    </div>
                </div>

                <!-- Decorative Image -->
                <div class="relative rounded-lg overflow-hidden
                            h-[300px] lg:h-[300px] md:h-[225px] w-full
                            border-2 border-farm-green/40
                            shadow-md hover:shadow-lg
                            transition-all duration-300">
                    <img src="{{ asset('images/pic/z6359973436180_7e177346761d56b227ac1639f71fb894.jpg') }}"
                         alt="Hình ảnh minh họa"
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-farm-brown/20 to-farm-brown/5"></div>
                </div>
            </div>

            <!-- Right Column: Contact Form -->
            <div class="w-full lg:w-[60%]">
                <form class="space-y-6">
                    <!-- Name Input -->
                    <div class="space-y-2">
                        <label for="name"
                               class="block font-roboto text-farm-brown font-medium
                                      text-base lg:text-[16px] md:text-[16px] sm:text-[14px]">
                            Họ Tên
                        </label>
                        <input type="text"
                               id="name"
                               name="name"
                               required
                               class="w-full px-4 py-3
                                      border border-farm-green/30 focus:border-farm-green
                                      rounded-lg
                                      font-roboto
                                      text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]
                                      transition-colors duration-300
                                      focus:outline-none">
                    </div>

                    <!-- Phone Input -->
                    <div class="space-y-2">
                        <label for="phone"
                               class="block font-roboto text-farm-brown font-medium
                                      text-base lg:text-[16px] md:text-[16px] sm:text-[14px]">
                            Số Điện Thoại
                        </label>
                        <input type="tel"
                               id="phone"
                               name="phone"
                               required
                               class="w-full px-4 py-3
                                      border border-farm-green/30 focus:border-farm-green
                                      rounded-lg
                                      font-roboto
                                      text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]
                                      transition-colors duration-300
                                      focus:outline-none">
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label for="email"
                               class="block font-roboto text-farm-brown font-medium
                                      text-base lg:text-[16px] md:text-[16px] sm:text-[14px]">
                            Email
                        </label>
                        <input type="email"
                               id="email"
                               name="email"
                               required
                               class="w-full px-4 py-3
                                      border border-farm-green/30 focus:border-farm-green
                                      rounded-lg
                                      font-roboto
                                      text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]
                                      transition-colors duration-300
                                      focus:outline-none">
                    </div>

                    <!-- Message Textarea -->
                    <div class="space-y-2">
                        <label for="message"
                               class="block font-roboto text-farm-brown font-medium
                                      text-base lg:text-[16px] md:text-[16px] sm:text-[14px]">
                            Tin Nhắn
                        </label>
                        <textarea id="message"
                                  name="message"
                                  required
                                  rows="4"
                                  class="w-full px-4 py-3
                                         border border-farm-green/30 focus:border-farm-green
                                         rounded-lg
                                         font-roboto
                                         text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]
                                         transition-colors duration-300
                                         focus:outline-none
                                         resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                                class="w-[180px] h-[45px]
                                       bg-farm-orange hover:bg-farm-orange/80
                                       text-white font-medium
                                       rounded-lg
                                       transition-all duration-300
                                       transform hover:scale-105
                                       shadow-md hover:shadow-lg
                                       mx-auto block">
                            Gửi Lời Nhắn
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Form Handling Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#contact form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you can add form submission logic
                // For now, just show an alert
                alert('Cảm ơn bà con đã gửi lời nhắn! Chúng tôi sẽ liên hệ lại sớm nhất có thể.');
                form.reset();
            });
        }
    });
</script>
