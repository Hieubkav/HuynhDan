<!-- Hero Section with Carousel -->
<section x-data="{
    activeSlide: 0,
    slides: [
        '{{ asset('images/banner1.webp') }}',
        '{{ asset('images/banner2.webp') }}',
        '{{ asset('images/banner3.webp') }}'
    ],
    init() {
        setInterval(() => this.nextSlide(), 5000);
    },
    nextSlide() {
        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
    }
}" class="relative w-full aspect-[16/9] min-h-[300px] overflow-hidden bg-black">

    <!-- Carousel Images -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index"
             x-transition:enter="transform transition-all ease-out duration-1000"
             x-transition:enter-start="translate-x-full scale-90 opacity-0"
             x-transition:enter-end="translate-x-0 scale-100 opacity-100"
             x-transition:leave="transform transition-all ease-in duration-1000"
             x-transition:leave-start="-translate-x-0 scale-100 opacity-100"
             x-transition:leave-end="-translate-x-full scale-90 opacity-0"
             :class="{'active-slide': activeSlide === index}"
             class="absolute inset-0 w-full h-full">
            <img :src="slide"
                 class="w-full h-full object-cover object-center transform transition-all duration-1000"
                 :class="{'scale-110 brightness-110': activeSlide === index}"
                 alt="Banner Nhà Vườn">
        </div>
    </template>

    <!-- Navigation Arrows -->
    <div class="absolute inset-0 flex items-center justify-between px-4 opacity-0 hover:opacity-100 transition-opacity duration-300">
        <button @click="activeSlide = (activeSlide - 1 + slides.length) % slides.length"
                class="bg-white/20 backdrop-blur-sm p-3 rounded-full cursor-pointer hover:bg-white/40 transition-all duration-300 hover:scale-110 transform hover:-translate-x-2">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button @click="nextSlide"
                class="bg-white/20 backdrop-blur-sm p-3 rounded-full cursor-pointer hover:bg-white/40 transition-all duration-300 hover:scale-110 transform hover:translate-x-2">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </div>

    <!-- Dots Navigation -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="activeSlide = index"
                    :class="{'bg-white scale-125 w-4': activeSlide === index, 'bg-white/50 w-2': activeSlide !== index}"
                    class="h-2 rounded-full transition-all duration-500 hover:scale-125 hover:bg-white">
            </button>
        </template>
    </div>
</section>

<style>
    @keyframes kenBurns {
        0% {
            transform: scale(1) translate(0);
        }
        25% {
            transform: scale(1.1) translate(-1%, 1%);
        }
        50% {
            transform: scale(1.1) translate(1%, -1%);
        }
        75% {
            transform: scale(1.1) translate(-1%, -1%);
        }
        100% {
            transform: scale(1) translate(0);
        }
    }

    .active-slide img {
        animation: kenBurns 20s ease-in-out infinite;
    }
</style>
