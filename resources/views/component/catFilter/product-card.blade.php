<div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 h-full group">
    <a href="{{ route('products.show', $product['id']) }}" class="block h-full">
        <div class="relative aspect-square overflow-hidden rounded-t-lg">
            <img
                src="{{ asset($product['image']) }}"
                alt="{{ $product['name'] }}"
                class="w-full h-64 object-cover transform transition-transform duration-500 group-hover:scale-105"
                loading="lazy"
            >
        </div>
        <div class="p-4 flex flex-col h-[calc(100%-256px)]">
            <h3 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-2">
                {{ $product['name'] }}
            </h3>
            <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                {{ $product['description'] }}
            </p>
            <div class="mt-auto flex items-center justify-between">
                <p class="text-[#006633] font-medium">
                    Liên hệ:
                    <a href="tel:0813111357"
                       class="hover:underline transition-colors duration-300">
                        0813.111.357
                    </a>
                </p>
                <button class="bg-[#006633] text-white px-4 py-2 rounded text-sm
                             hover:bg-[#005528] transition-colors duration-300
                             flex items-center gap-2">
                    <span>Xem chi tiết</span>
                    <svg class="w-4 h-4 transform transition-transform duration-300 group-hover:translate-x-1"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </a>
</div>
