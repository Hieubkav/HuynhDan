<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://htxhuynhdan.vn">
    <meta name="description" content="Hợp tác xã nông nghiệp Huỳnh Dân - Chuyên cung cấp các sản phẩm nông nghiệp sạch, an toàn với quy trình canh tác hiện đại. Chúng tôi cam kết mang đến những sản phẩm chất lượng cao, đáp ứng nhu cầu của người tiêu dùng.">
    <meta name="keywords" content="Hợp tác xã nông nghiệp Huỳnh Dân, nông sản sạch, rau củ quả, trái cây, sản phẩm hữu cơ, nông nghiệp bền vững, nông nghiệp công nghệ cao">
    <meta name="robots" content="all">
    <meta property="og:title" content="Hợp tác xã nông nghiệp Huỳnh Dân - Sản Phẩm Nông Nghiệp Sạch">
    <meta property="og:description" content="Hợp tác xã nông nghiệp Huỳnh Dân cung cấp các sản phẩm nông nghiệp sạch, canh tác theo quy trình hiện đại và bền vững. Chúng tôi cam kết mang đến những sản phẩm chất lượng cao nhất cho người tiêu dùng."/>
    <meta property="og:url" content="https://htxhuynhdan.vn">
    <meta property="og:image" content="{{ asset('images/banner.webp') }}">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Hợp tác xã nông nghiệp Huỳnh Dân",
          "description": "Hợp tác xã nông nghiệp Huỳnh Dân chuyên cung cấp các sản phẩm nông nghiệp sạch, an toàn được canh tác theo quy trình hiện đại và bền vững.",
          "url": "https://htxhuynhdan.vn"
        }
    </script>
    <meta name="revisit-after" content="1 day" />
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="author" content="Trần Mạnh Hiếu (Hieubkav)">


    {{--   Thẻ tạo icon--}}
    <link rel="icon" href="{{ asset('images/logo.webp') }}">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

@include('component.shop.navbar')
<main class="bg-gray-100">
    @yield('content')
</main>
@include('component.shop.footer')
@include('component.shop.speedial')

@livewire('notifications')

@filamentScripts
@livewireScripts
@vite('resources/js/app.js')
</body>
</html>
