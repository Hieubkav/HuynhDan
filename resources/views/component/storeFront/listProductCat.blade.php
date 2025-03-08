<!-- List Products By Category Section -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <!-- Category Title -->
        <h2 class="text-2xl md:text-3xl font-bold mb-8 text-[#006633] inline-block relative">
            {{ $categoryName ?? 'Danh Mục Sản Phẩm' }}
            <span class="absolute bottom-0 left-0 w-full h-1 bg-[#006633] transform origin-left scale-x-100"></span>
        </h2>

        <!-- Products Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            <!-- Product Card 1 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973027075_330fcb973271998ab3e2092b2820673d.jpg') }}"
                     alt="Product 1"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 1</h3>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973036193_aaa35e3cfee8ff8870cf8f18611a68ec.jpg') }}"
                     alt="Product 2"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 2</h3>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973045060_5016071681721f0cd92ee0d510f3eeac.jpg') }}"
                     alt="Product 3"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 3</h3>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973084354_0273194918149311d0e55490f3d1564e.jpg') }}"
                     alt="Product 4"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 4</h3>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973096113_ca39370d6812b56dbcee1e210fbfcd7e.jpg') }}"
                     alt="Product 5"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 5</h3>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973142526_3209d351dbc495b2b936c7b199c55264.jpg') }}"
                     alt="Product 6"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 6</h3>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973144555_543f993cc55b4165311e185f28d08fe2.jpg') }}"
                     alt="Product 7"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 7</h3>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <img src="{{ asset('images/pic/z6359973151887_5a2ea32865d96aeb4f39ed09493fe75d.jpg') }}"
                     alt="Product 8"
                     class="w-full aspect-[3/4] object-cover transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80 to-transparent">
                    <h3 class="text-white text-lg font-semibold">Cây 8</h3>
                </div>
            </div>
        </div>
    </div>
</section>
