<aside class="md:w-1/4 lg:w-1/5"
    x-data="{ showMobileFilter: false }"
    :class="{
        'fixed inset-0 z-40 transform transition-transform duration-300': true,
        'translate-x-0': showMobileFilter,
        '-translate-x-full': !showMobileFilter
    }"
    @click.away="showMobileFilter = false">

    <!-- Mobile Filter Toggle Button -->
    <button
        class="md:hidden fixed right-4 bottom-4 z-50 bg-[#006633] text-white p-3 rounded-full shadow-lg"
        @click="showMobileFilter = !showMobileFilter">
        <i class="fas fa-filter"></i>
    </button>

    <!-- Sidebar Content -->
    <div class="h-full bg-[#E0FFD1] p-6 overflow-y-auto">
        <h2 class="text-[#006633] text-xl font-bold mb-6">DANH MỤC SẢN PHẨM</h2>

        <!-- Category List -->
        <ul class="space-y-2">
            @foreach($categories as $category)
            <li>
                <a href="{{ route('products.category', $category['id']) }}"
                   class="flex items-center justify-between py-2 px-3 rounded-lg transition-colors duration-200
                          @if($category['id'] === $activeCategory)
                              bg-[#006633] text-white
                          @else
                              text-[#006633] hover:bg-[#006633]/10
                          @endif">
                    <span>{{ $category['name'] }}</span>
                    <span class="text-sm">({{ $category['count'] }})</span>
                </a>
            </li>
            @endforeach
        </ul>

        <!-- Customer Support -->
        <div class="mt-8 p-4 bg-[#006633] rounded-lg text-white text-center">
            <p class="font-medium mb-2">Hỗ trợ khách hàng</p>
            <a href="tel:0813111357"
               class="text-xl font-bold hover:text-yellow-300 transition-colors">
                0813.111.357
            </a>
        </div>
    </div>
</aside>

@pushOnce('styles')
<style>
/* Custom scrollbar for sidebar */
.overflow-y-auto::-webkit-scrollbar {
    width: 4px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background: #006633;
    border-radius: 2px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #005528;
}
</style>
@endPushOnce
