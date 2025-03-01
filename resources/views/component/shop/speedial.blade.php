<!-- Speed Dial -->
<div class="fixed bottom-6 right-6 flex flex-col items-end space-y-4 z-50">
    <!-- Phone Button -->
    <button id="copyPhone"
            class="flex items-center justify-center
                   w-12 h-12
                   bg-[#F57C00] hover:bg-[#E65100]
                   text-white
                   rounded-full
                   shadow-lg hover:shadow-xl
                   transform hover:scale-105
                   transition-all duration-300
                   group"
            data-phone="0986864266"
            title="Copy số điện thoại">
        <i class="fas fa-phone text-xl"></i>

        <!-- Toast Notification -->
        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible
                    absolute right-full mr-3
                    bg-white
                    text-[#333333]
                    text-sm
                    px-3 py-1
                    rounded-lg
                    shadow-md
                    whitespace-nowrap
                    transition-all duration-300">
            Nhấn để copy số điện thoại
            <div class="absolute top-1/2 right-0
                        transform translate-x-1/2 -translate-y-1/2 rotate-45
                        w-2 h-2
                        bg-white">
            </div>
        </div>
    </button>

    <!-- Scroll to Top Button -->
    <button id="scrollTop"
            class="flex items-center justify-center
                   w-12 h-12
                   bg-[#2E7D32] hover:bg-[#1B5E20]
                   text-white
                   rounded-full
                   shadow-lg hover:shadow-xl
                   transform hover:scale-105
                   transition-all duration-300
                   opacity-0 invisible
                   group">
        <i class="fas fa-arrow-up text-xl"></i>

        <!-- Toast Notification -->
        <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible
                    absolute right-full mr-3
                    bg-white
                    text-[#333333]
                    text-sm
                    px-3 py-1
                    rounded-lg
                    shadow-md
                    whitespace-nowrap
                    transition-all duration-300">
            Lên đầu trang
            <div class="absolute top-1/2 right-0
                        transform translate-x-1/2 -translate-y-1/2 rotate-45
                        w-2 h-2
                        bg-white">
            </div>
        </div>
    </button>
</div>

<!-- Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Copy Phone Number
        const copyPhoneBtn = document.getElementById('copyPhone');
        if (copyPhoneBtn) {
            copyPhoneBtn.addEventListener('click', function() {
                const phone = this.dataset.phone;
                navigator.clipboard.writeText(phone).then(() => {
                    // Create and show toast
                    const toast = document.createElement('div');
                    toast.className = `fixed bottom-24 right-6
                                     bg-[#2E7D32] text-white
                                     px-4 py-2 rounded-lg shadow-lg
                                     transform transition-all duration-300
                                     translate-y-0 opacity-100`;
                    toast.textContent = 'Đã copy số điện thoại!';
                    document.body.appendChild(toast);

                    // Remove toast after 2 seconds
                    setTimeout(() => {
                        toast.classList.add('translate-y-2', 'opacity-0');
                        setTimeout(() => toast.remove(), 300);
                    }, 2000);
                });
            });
        }

        // Scroll to Top
        const scrollTopBtn = document.getElementById('scrollTop');
        if (scrollTopBtn) {
            // Show/hide button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollTopBtn.classList.remove('opacity-0', 'invisible');
                } else {
                    scrollTopBtn.classList.add('opacity-0', 'invisible');
                }
            });

            // Smooth scroll to top
            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
