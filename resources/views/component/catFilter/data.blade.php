@php
// Common data shared across category filter components
return [
    'categories' => [
        ['id' => 'online', 'name' => 'Mua hàng Online', 'count' => 15],
        ['id' => 'growth', 'name' => 'Kích thích tăng trưởng', 'count' => 8],
        ['id' => 'leaf', 'name' => 'Phân bón lá', 'count' => 12],
        ['id' => 'livestock', 'name' => 'Sản phẩm cho Chăn nuôi', 'count' => 10],
        ['id' => 'aquatic', 'name' => 'Sản phẩm cho Thủy sản', 'count' => 7],
        ['id' => 'cultivation', 'name' => 'Sản phẩm trồng trọt', 'count' => 47, 'active' => true],
        ['id' => 'disease', 'name' => 'Thuốc trừ bệnh cây trồng', 'count' => 14],
        ['id' => 'weed', 'name' => 'Thuốc diệt cỏ', 'count' => 9],
        ['id' => 'insect', 'name' => 'Thuốc trừ sâu', 'count' => 16],
        ['id' => 'hopper', 'name' => 'Thuốc trừ rầy', 'count' => 11],
        ['id' => 'soil', 'name' => 'Ủ đất nóng', 'count' => 6]
    ],
    'sampleProducts' => [
        [
            'id' => 1,
            'name' => 'Bestox 5EC',
            'image' => 'images/pic/z6359973027075_330fcb973271998ab3e2092b2820673d.jpg',
            'description' => 'Thuốc trừ sâu sinh học cao cấp',
            'price' => '185000'
        ],
        [
            'id' => 2,
            'name' => 'Calcium-Nitrate',
            'image' => 'images/pic/z6359973036193_aaa35e3cfee8ff8870cf8f18611a68ec.jpg',
            'description' => 'Phân bón canxi dạng hạt',
            'price' => '245000'
        ],
        [
            'id' => 3,
            'name' => 'Bà Đặng 500WP',
            'image' => 'images/pic/z6359973045060_5016071681721f0cd92ee0d510f3eeac.jpg',
            'description' => 'Thuốc trừ sâu đa năng',
            'price' => '156000'
        ]
    ]
];
@endphp
