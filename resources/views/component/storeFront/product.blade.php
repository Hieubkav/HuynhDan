<!-- Product Categories Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Danh Mục Sản Phẩm</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cây Lâm Nghiệp -->
            <div class="transform hover:-translate-y-2 transition-transform duration-300">
                @include('partials.product.forestry')
            </div>

            <!-- Cây Công Nghiệp -->
            <div class="transform hover:-translate-y-2 transition-transform duration-300">
                @include('partials.product.industrial')
            </div>

            <!-- Cây Ăn Trái -->
            <div class="transform hover:-translate-y-2 transition-transform duration-300">
                @include('partials.product.fruit')
            </div>

            <!-- Cây Công Trình -->
            <div class="transform hover:-translate-y-2 transition-transform duration-300">
                @include('partials.product.construction')
            </div>

            <!-- Cây Bonsai -->
            <div class="transform hover:-translate-y-2 transition-transform duration-300">
                @include('partials.product.bonsai')
            </div>

            <!-- Cây Cổ Thụ -->
            <div class="transform hover:-translate-y-2 transition-transform duration-300">
                @include('partials.product.ancient')
            </div>
        </div>
    </div>
</section>
