<!-- Map Section -->
<section id="map" class="relative w-full py-20 bg-farm-gray">
    <!-- Section Title -->
    <div class="container mx-auto px-4 mb-12">
        <h2 class="text-center font-roboto font-bold
                   text-[36px] lg:text-[36px] md:text-[28px] sm:text-[20px]
                   text-farm-brown
                   mb-4">
            Đường Đến Vườn Cây
        </h2>
        <div class="w-24 h-1 bg-farm-green/60 mx-auto"></div>
    </div>

    <!-- Map Container -->
    <div class="container mx-auto px-4">
        <div class="w-full lg:w-[80%] md:w-[90%] mx-auto">
            <div class="relative w-full
                        h-[400px] lg:h-[400px] md:h-[350px] sm:h-[300px]
                        rounded-lg overflow-hidden
                        shadow-lg">
                <!-- Google Maps Embed -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.717513779539!2d105.82405231479814!3d9.981560992866097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0b49d805650df%3A0x9c1df9a89b8491f9!2zTmfDoyBCxqFuLCBOZ8OjIELhuqN5LCBIw6BVIEJ1w7RuLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1646456789012!5m2!1svi!2s"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Bản đồ vị trí Hợp Tác Xã Huỳnh Dân"
                        class="absolute inset-0">
                </iframe>

                <!-- Map Overlay for Style -->
                <div class="absolute inset-0 pointer-events-none
                            border-2 border-farm-green/40 rounded-lg"></div>
            </div>

            <!-- Location Description -->
            <div class="mt-6 text-center">
                <p class="font-roboto text-farm-brown
                          text-lg lg:text-[18px] md:text-[16px] sm:text-[14px]
                          leading-relaxed">
                    Ghé thăm vườn cây của chúng tôi tại
                    <span class="text-farm-green italic">vòng xoay Ngã Bảy</span>,
                    <span class="text-farm-green">dễ tìm dễ đến</span>,
                    nằm ngay mặt tiền đường lớn
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Map Initialization Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add touch-action manipulation to allow better touch interaction
        const mapContainer = document.querySelector('#map iframe');
        if (mapContainer) {
            mapContainer.style.touchAction = 'manipulation';
        }
    });
</script>
