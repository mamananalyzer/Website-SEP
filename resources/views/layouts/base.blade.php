<!DOCTYPE html>
<html lang="{{ $lang ?? 'id' }}" @yield('html_attribute')>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ===== PRIMARY META ===== --}}
    <title>{{ $metaTitle ?? ($title . ' — PT. Suryamas Elsindo Primatama') }}</title>
    <meta name="description" content="@yield('meta_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996. Agen resmi ABB, TE Connectivity, RITZ, Elmeasure, OME Motors, dan Hilkar.')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <meta name="author" content="PT. Suryamas Elsindo Primatama">

    {{-- ===== CANONICAL ===== --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- ===== OPEN GRAPH ===== --}}
    <meta property="og:site_name" content="PT. Suryamas Elsindo Primatama">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', ($metaTitle ?? ($title . ' — PT. Suryamas Elsindo Primatama')))">
    <meta property="og:description" content="@yield('og_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996.')">
    <meta property="og:image" content="@yield('og_image', asset('img/logo/og-default.webp'))">
    <meta property="og:locale" content="id_ID">

    {{-- ===== TWITTER CARD ===== --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', ($metaTitle ?? ($title . ' — PT. Suryamas Elsindo Primatama')))">
    <meta name="twitter:description" content="@yield('og_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996.')">
    <meta name="twitter:image" content="@yield('og_image', asset('img/logo/og-default.webp'))">

    {{-- ===== FAV ICON ===== --}}
    @if(isset($logo5))
        <link rel="shortcut icon" href="/img/logo/cropped-logo-sep-putih-32x32.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/cropped-logo-sep-putih-32x32.png">
    @elseif(isset($logo3))
        <link rel="shortcut icon" href="/img/logo/cropped-logo-sep-putih-32x32.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/cropped-logo-sep-putih-32x32.png">
    @else
        <link rel="shortcut icon" href="/img/logo/cropped-logo-sep-putih-32x32.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/cropped-logo-sep-putih-32x32.png">
    @endif
    <link rel="apple-touch-icon" sizes="180x180" href="/img/logo/logo-sep.webp">

    {{--===== CSS LINK =======--}}
    @vite(['resources/scss/main.scss'])

    @yield('css')

    {{-- ===== JSON-LD STRUCTURED DATA SLOT ===== --}}
    @yield('json_ld')

</head>

<body @yield('body_attribute')>

    @yield('content')

    @yield('scripts')

    @vite(['resources/js/main.js'])

</body>

</html>