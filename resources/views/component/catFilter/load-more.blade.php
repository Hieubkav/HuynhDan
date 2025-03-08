<button
    {{ $attributes ?? '' }}
    type="button"
    class="bg-[#006633] text-white px-8 py-3 rounded-full hover:bg-[#005528] transition-colors duration-300 disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-2"
>
    <span x-show="!loading">Xem thêm sản phẩm</span>
    <span x-show="loading" class="flex items-center justify-center gap-2">
        <svg class="animate-spin w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Đang tải...
    </span>
</button>
