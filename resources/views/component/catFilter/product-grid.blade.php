<div class="flex-1">
    <!-- Breadcrumb & Sorting -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <div class="text-sm text-gray-600">
            <a href="/" class="hover:text-[#006633]">HOME</a>
            <span class="mx-2">/</span>
            <a href="/products" class="hover:text-[#006633]">{{ strtoupper($category['name']) }}</a>
            <span class="mx-2">/</span>
            <span>TRANG {{ $currentPage }}</span>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-sm text-gray-600">
                Showing {{ count($products) }} of {{ $total }} results
            </span>
            <select
                x-data
                @change="$dispatch('sort-change', { value: $event.target.value })"
                class="border rounded px-3 py-1 text-sm text-gray-600 focus:outline-none focus:border-[#006633]"
            >
                <option value="default">Sắp xếp mặc định</option>
                <option value="price_asc">Giá: Thấp đến cao</option>
                <option value="price_desc">Giá: Cao đến thấp</option>
                <option value="name_asc">Tên: A-Z</option>
            </select>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"
         style="transition: opacity 300ms ease-in-out;">
        @foreach($products as $product)
            @include('component.catFilter.product-card', ['product' => $product])
        @endforeach
    </div>

    <!-- Load More Section -->
    <div class="text-center mt-12">
        {!! $slot ?? '' !!}
    </div>
</div>
