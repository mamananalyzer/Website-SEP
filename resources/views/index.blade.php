@extends('layouts.base', ['title' => 'Distributor & Sole Agent Produk Kelistrikan Indonesia', 'metaTitle' => 'PT. Suryamas Elsindo Primatama — Distributor Kelistrikan Indonesia', 'logo5' => true])

@section('meta_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996. Agen resmi ABB, TE Connectivity, RITZ Transformer, Elmeasure, OME Motors, dan Hilkar untuk pasar industri, panel maker, dan kontraktor di Indonesia.')

@section('og_title', 'PT. Suryamas Elsindo Primatama — Distributor & Sole Agent Kelistrikan Indonesia')
@section('og_description', 'Distributor dan sole agent produk kelistrikan sejak 1996. Agen resmi ABB, TE Connectivity, RITZ, Elmeasure, OME Motors, Hilkar. Melayani industri, panel maker, dan kontraktor seluruh Indonesia.')
@section('og_url', url('/'))
@section('og_image', asset('img/logo/logo-sep.webp'))

@section('canonical', url('/'))

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "{{ url('/') }}/#website",
      "name": "PT. Suryamas Elsindo Primatama",
      "url": "{{ url('/') }}",
      "description": "Distributor & Sole Agent produk kelistrikan di Indonesia sejak 1996. Agen resmi ABB, TE Connectivity, RITZ, Elmeasure, OME Motors, Hilkar, Schaffner, Pizzato.",
      "inLanguage": "id",
      "publisher": { "@id": "{{ url('/') }}/#organization" },
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "{{ url('/product') }}?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "SiteLinksSearchBox",
      "url": "{{ url('/') }}",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/product') }}?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": ["ItemList", "SiteNavigationElement"],
      "name": "Main Navigation",
      "url": "{{ url('/') }}",
      "itemListElement": [
        {
          "@type": "SiteNavigationElement",
          "position": 1,
          "name": "Products",
          "description": "We offer a wide range of electrical products from world-leading brands including ABB, TE Connectivity, RITZ, Elmeasure, and more.",
          "url": "{{ url('/product') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 2,
          "name": "TE Connectivity",
          "description": "Browse TE Connectivity electrical products — connectors, terminals, sensors, and more. Authorized distributor in Indonesia.",
          "url": "{{ url('/product/te-connectivity') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 3,
          "name": "ABB",
          "description": "Browse ABB electrical products — circuit breakers, contactors, relays, drives, and more. Authorized ABB distributor in Indonesia.",
          "url": "{{ url('/product/abb') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 4,
          "name": "Elmeasure",
          "description": "Browse Elmeasure energy meters, ATS systems, and smart energy management solutions. Authorized distributor in Indonesia.",
          "url": "{{ url('/product/elmeasure') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 5,
          "name": "RITZ Instrument Transformers",
          "description": "Browse RITZ current and voltage instrument transformers. Authorized RITZ distributor in Indonesia since 1996.",
          "url": "{{ url('/product/ritz') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 6,
          "name": "OME Motors",
          "description": "Browse OME electric motors for industrial applications. Authorized OME distributor in Indonesia.",
          "url": "{{ url('/product/ome') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 7,
          "name": "Hilkar NGR",
          "description": "Browse Hilkar Neutral Grounding Resistors (NGR) for industrial safety. Authorized Hilkar distributor in Indonesia.",
          "url": "{{ url('/product/hilkar') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 8,
          "name": "Schaffner",
          "description": "Browse Schaffner EMC filters and power quality solutions. Authorized Schaffner distributor in Indonesia.",
          "url": "{{ url('/product/schaffner') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 9,
          "name": "Pizzato",
          "description": "Browse Pizzato safety switches and safety interlock devices. Authorized Pizzato distributor in Indonesia.",
          "url": "{{ url('/product/pizzato') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 10,
          "name": "GE / Schneider",
          "description": "Browse GE and Schneider electrical products available from PT. Suryamas Elsindo Primatama in Indonesia.",
          "url": "{{ url('/product/ge-schneider') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 11,
          "name": "About Us",
          "description": "Learn about PT. Suryamas Elsindo Primatama — authorized electrical distributor & sole agent in Indonesia since 1996.",
          "url": "{{ url('/about') }}"
        },
        {
          "@type": "SiteNavigationElement",
          "position": 12,
          "name": "Contact",
          "description": "Contact PT. Suryamas Elsindo Primatama for product inquiries, quotes, and technical support. Located in Jakarta Barat.",
          "url": "{{ url('/contact') }}"
        }
      ]
    },
    {
      "@type": "Organization",
      "@id": "{{ url('/') }}/#organization",
      "name": "PT. Suryamas Elsindo Primatama",
      "url": "{{ url('/') }}",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ asset('img/logo/logo-sep.webp') }}"
      },
      "email": "suryamas@cbn.net.id",
      "telephone": ["+62215855064", "+62215854077"],
      "sameAs": [
        "https://www.linkedin.com/company/suryamas-ep/",
        "https://tokopedia.link/2dQVoYmAzQb"
      ]
    },
    {
      "@type": "LocalBusiness",
      "@id": "{{ url('/') }}/#localbusiness",
      "name": "PT. Suryamas Elsindo Primatama",
      "description": "Distributor dan sole agent produk kelistrikan di Indonesia sejak 1996. Agen resmi ABB, TE Connectivity, RITZ Transformer, Elmeasure, OME Motors, Hilkar.",
      "url": "{{ url('/') }}",
      "telephone": ["+62215855064", "+62215854077"],
      "email": "suryamas@cbn.net.id",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Blok M No.51, Jl. Meruya Ilir Raya No.51, RT.6/RW.7, Meruya Utara, Kec. Kembangan",
        "addressLocality": "Jakarta Barat",
        "addressRegion": "DKI Jakarta",
        "postalCode": "11620",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -6.1896,
        "longitude": 106.7444
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00",
          "closes": "17:00"
        }
      ],
      "priceRange": "$$",
      "currenciesAccepted": "IDR",
      "paymentAccepted": "Cash, Bank Transfer"
    }
  ]
}
</script>
@endsection

@section('body_attribute')
    class="body"
@endsection

@section('content')
    {{-- @include('layouts.partials.loader') --}}

    @include('layouts.partials.header.navbar')

    <!-- ===== HERO AREA START ======= -->
    <div class="hero-area6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-anime-style-3">Electrical Distributor &amp; Sole Agent in Indonesia</h1>
                        <div class="space16"></div>
                        <div class="space30"></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="images-all hero-carousel" data-aos="zoom-out" data-aos-duration="800">
                        <div class="carousel-item active">
                            <img src="/img/hero/hero-story.jpg" alt="Electrical Products 1" />
                        </div>
                        <div class="carousel-item">
                            <img src="/img/hero/03.-SNK-SNA-SERIES-1024x508.jpg" alt="Electrical Products 2" />
                        </div>
                        <div class="carousel-item">
                            <img src="/img/hero/Test-Block-Test-Plug-Essilec-300x136.jpg" alt="Electrical Products 3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===== HERO AREA END ======= -->

    <style>
        .hero-carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .hero-carousel .carousel-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-carousel .carousel-item.active {
            position: relative;
            opacity: 1;
        }

        .hero-carousel .carousel-item img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselItems = document.querySelectorAll('.hero-carousel .carousel-item');
            let currentIndex = 0;

            function showNextImage() {
                // Remove active class from current item
                carouselItems[currentIndex].classList.remove('active');
                
                // Move to next item
                currentIndex = (currentIndex + 1) % carouselItems.length;
                
                // Add active class to next item
                carouselItems[currentIndex].classList.add('active');
            }

            // Change image every 3 seconds
            setInterval(showNextImage, 3000);
        });
    </script>

    <!-- ===== OWL CAROUSEL BANNER START ======= -->
    {{-- <section class="elementor-section elementor-top-section elementor-element elementor-section-stretched elementor-section-full_width transparent-header elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-align-left elementor-widget elementor-widget-wl-banner-carousel" data-element_type="widget">
                        <div class="elementor-widget-container">
                            <div class="slider-fade owl-carousel owl-theme w-100">
                                <!-- Slide 1 - ABB -->
                                <div class="item text-center">
                                    <div class="container h-100 d-table position-relative z-index-9">
                                        <div class="d-table-cell align-middle">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-sm-10 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                    <h1 class="text-white font-weight-700 mb-1-9">ABB Electrical Solutions</h1>
                                                    <a href="{{ route('second', ['product', 'about']) }}" class="btn-style4"><span>Visit Product</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-img cover-background dark-overlay" data-overlay-dark="4" data-background="/img/hero/hero6-img1.png" style="background-image: url('/img/hero/hero6-img1.png');"></div>
                                </div>

                                <!-- Slide 2 - TE Connectivity -->
                                <div class="item text-center">
                                    <div class="container h-100 d-table position-relative z-index-9">
                                        <div class="d-table-cell align-middle">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-sm-10 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                    <h1 class="text-white font-weight-700 mb-1-9">TE - Connectivity Solutions</h1>
                                                    <a href="{{ route('second', ['product', 'about']) }}" class="btn-style4"><span>Visit Product</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-img cover-background dark-overlay" data-overlay-dark="4" data-background="/img/hero/hero6-img2.png" style="background-image: url('/img/hero/hero6-img2.png');"></div>
                                </div>

                                <!-- Slide 3 - Elmeasure -->
                                <div class="item text-center">
                                    <div class="container h-100 d-table position-relative z-index-9">
                                        <div class="d-table-cell align-middle">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-sm-10 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                    <h1 class="text-white font-weight-700 mb-1-9">Elmeasure - ATS Systems</h1>
                                                    <a href="{{ route('second', ['product', 'about']) }}" class="btn-style4"><span>Visit Product</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-img cover-background dark-overlay" data-overlay-dark="4" data-background="/img/hero/hero6-img3.png" style="background-image: url('/img/hero/hero6-img3.png');"></div>
                                </div>

                                <!-- Slide 4 - OME Motors -->
                                <div class="item text-center">
                                    <div class="container h-100 d-table position-relative z-index-9">
                                        <div class="d-table-cell align-middle">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-sm-10 col-md-11 col-lg-10 col-xl-9 col-xxl-8">
                                                    <h1 class="text-white font-weight-700 mb-1-9">OME Motors</h1>
                                                    <a href="{{ route('second', ['product', 'about']) }}" class="btn-style4"><span>Visit Product</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-img cover-background dark-overlay" data-overlay-dark="4" data-background="/img/hero/hero6-img1.png" style="background-image: url('/img/hero/hero6-img1.png');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ===== OWL CAROUSEL BANNER END ======= -->

    <style>
        /* Owl Carousel Custom Styles */
        .slider-fade {
            position: relative;
            width: 100%;
            min-height: 600px;
        }

        .slider-fade .item {
            position: relative;
            width: 100%;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;
        }

        .dark-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 2;
        }

        .z-index-9 {
            z-index: 9;
            position: relative;
        }

        .d-table {
            display: table;
            width: 100%;
        }

        .d-table-cell {
            display: table-cell;
            vertical-align: middle;
        }

        .h-100 {
            height: 100%;
        }

        .font-weight-700 {
            font-weight: 700;
        }

        .mb-1-9 {
            margin-bottom: 1.9rem;
        }

        .btn-style4 {
            display: inline-block;
            padding: 15px 35px;
            background: var(--color-primary, #3461FF);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-style4:hover {
            background: var(--color-primary-dark, #2348CC);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 97, 255, 0.3);
            color: #fff;
        }

        /* Owl Carousel Navigation */
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel .owl-nav button.owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2) !important;
            color: #fff !important;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 24px;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .owl-carousel .owl-nav button.owl-prev {
            left: 20px;
        }

        .owl-carousel .owl-nav button.owl-next {
            right: 20px;
        }

        .owl-carousel .owl-nav button.owl-prev:hover,
        .owl-carousel .owl-nav button.owl-next:hover {
            background: rgba(255, 255, 255, 0.4) !important;
        }

        /* Owl Carousel Dots */
        .owl-carousel .owl-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .owl-carousel .owl-dot {
            display: inline-block;
            margin: 0 5px;
        }

        .owl-carousel .owl-dot span {
            display: block;
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .owl-carousel .owl-dot.active span,
        .owl-carousel .owl-dot:hover span {
            background: #fff;
            width: 14px;
            height: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .slider-fade .item {
                min-height: 400px;
            }

            .slider-fade {
                min-height: 400px;
            }

            .owl-carousel .owl-nav button.owl-prev,
            .owl-carousel .owl-nav button.owl-next {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .btn-style4 {
                padding: 12px 25px;
                font-size: 14px;
            }
        }

        /* ===== Brand Carousel Cards ===== */
        .card-style18 {
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .card-style18:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(0,0,0,0.15);
        }

        .card-style18 .card-body {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 28px 24px;
            height: 100%;
        }

        .card-style18 .service-img {
            width: 80px;
            height: 80px;
            background: #f4f6ff;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            padding: 10px;
            flex-shrink: 0;
        }

        .card-style18 .service-img img {
            width: 100% !important;
            height: 100% !important;
            object-fit: contain !important;
        }

        .card-style18 h3 a {
            color: #1a1a2e;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            line-height: 1.3;
            transition: color 0.2s ease;
        }

        .card-style18 h3 a:hover {
            color: var(--color-primary, #3461FF);
        }

        .card-style18 p.mb-1-9 {
            color: #666;
            font-size: 0.875rem;
            line-height: 1.65;
            flex-grow: 1;
            margin-bottom: 20px;
        }

        .service-butn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 22px;
            background: var(--color-primary, #3461FF);
            color: #fff;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.3s ease, gap 0.3s ease;
            margin-top: auto;
            flex-shrink: 0;
        }

        .service-butn:hover {
            background: var(--color-primary-dark, #2348CC);
            color: #fff;
            gap: 12px;
        }

        .card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(52,97,255,0.04) 0%, rgba(52,97,255,0) 60%);
            pointer-events: none;
            border-radius: 16px;
        }

        /* Equal-height carousel items */
        .service-carousel-two .owl-stage {
            display: flex;
        }

        .service-carousel-two .owl-item {
            display: flex;
        }

        .service-carousel-two .owl-item > div {
            width: 100%;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Owl Carousel
            if (typeof jQuery !== 'undefined' && jQuery.fn.owlCarousel) {
                jQuery('.slider-fade').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 0,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    navText: ["<i class='ti-arrow-left'></i>", "<i class='ti-arrow-right'></i>"],
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        768: {
                            items: 1,
                            nav: true
                        }
                    }
                });
            }

            // Initialize Service Brand Carousel
            if (typeof jQuery !== 'undefined' && jQuery.fn.owlCarousel) {
                jQuery('.service-carousel-two').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    smartSpeed: 1500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        576: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: 4
                        }
                    }
                });
            }
        });
    </script>

    <!-- ===== FEATURES AREA START ======= -->
    <div class="features6">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading6">
                        <span class="title"><img src="/img/icons/span-image6.png" alt="" /></span>
                        <h2 class="text-anime-style-3">eSoft Builder Features</h2>
                    </div>
                </div>
            </div> -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-image right60" data-aos="zoom-out" data-aos-duration="800">
                        <img src="/img/home/bg_about-new-scaled.jpg.webp" alt="Kantor PT. Suryamas Elsindo Primatama, distributor kelistrikan Jakarta" loading="lazy" />
                    </div>
                    <div class="counters6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <div class="counter-box box1" data-aos="zoom-out" data-aos-duration="700">
                                        <h2><span class="counter">1 Year</span></h2>
                                        <p>Guarantee</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <div class="counter-box box2" data-aos="zoom-out" data-aos-duration="900">
                                        <h2><span class="counter">Free</span></h2>
                                        <p>Consultation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5">
                    <div class="heading6 features-heading">
                        <span class="span3" data-aos="fade-left" data-aos-duration="700">About Us</span>
                        <h2 class="text-anime-style-3">Electrical Distributor &amp; Sole Agent in Indonesia</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">PT. Suryamas Elsindo Primatama is a company that has provided service and electrical installation product since 1996. Our core business scope mainly covers sales and supply of electrical and mechanical components (ME) to most industries, panel maker, automation and retail market. We are agents of the world’s leading brands such as ABB Entrelec, GE Grid Solution (Ex. Alstom) and RITZ Transformer (MWB). We have supplied the various electrical products to all different industries. With our presence in the market and directly backed up with manufacturers so as to provide all necessary items, where we provide mostly for panel builder and contractors for daily activities as well as projects in Indonesia.</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <a href="{{ route('any', 'about') }}" class="theme-btn9"><span
                                    class="tb8">Get More Info <span class="arrow"><i
                                            class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="heading6 features-heading">
                        <span class="span3" data-aos="fade-right" data-aos-duration="700">Our Brands</span>
                        <h2 class="text-anime-style-3">What Brands We Offer</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="900">To become the market leader and "One-Stop Solution" to meet the needs of electrical components and instruments in Indonesia.</p>
                        <div class="space30"></div>

                        <!-- Brand Carousel Section -->
                        @php
                            $brands = [
                                ['slug' => 'te',        'img' => 'te.png',         'alt' => 'TE Connectivity', 'name' => 'TE<br>Connectivity',        'desc' => 'TE engineers and product specialists have partnered with customers to produce highly engineered connectivity and sensing solutions that make a connected world possible'],
                                ['slug' => 'abb',       'img' => 'abb.png',        'alt' => 'ABB',             'name' => 'ASEA Brown Boveri (ABB)',    'desc' => 'ABB is a leading global technology company that energizes the transformation of society and industry to achieve a more productive, sustainable future.'],
                                ['slug' => 'ritz',      'img' => 'ritz.png',       'alt' => 'RITZ',            'name' => 'Instrument<br>Transformers', 'desc' => 'Ritz was founded in Hamburg, Germany in 1945 by Dr. Hans Ritz. Ritz now consists of 8 facilities in Germany, Austria, Hungary, China, and the United States.'],
                                ['slug' => 'hilkar',    'img' => 'hilkar.png',     'alt' => 'Hilkar',          'name' => 'Hilkar NGR',                'desc' => 'Neutral Grounding Resistors (NGRs) are utilized to restrict fault currents, ensuring the safety of both equipment and personnel within industrial systems.'],
                                ['slug' => 'elmeasure', 'img' => 'elmeasure.png',  'alt' => 'Elmeasure',       'name' => 'Elmeasure - ATS',           'desc' => 'Elmeasure is an industry leader in smart and sustainable energy management.'],
                                ['slug' => 'ome-motors','img' => 'omemotor.png',   'alt' => 'OME Motors',      'name' => 'OME Motors',                'desc' => 'OME is a company specialized in the design and production of electric motors for various industrial applications. A globally consolidated reality born from the long experience of the Orsatti family in the electric machinery sector and characterized by a history in continuous evolution.'],
                            ];
                        @endphp
                        <div class="service-carousel-two owl-carousel owl-theme">
                            @foreach ($brands as $brand)
                            <div class="card card-style18 border-0">
                                <div class="card-body">
                                    <div class="service-img">
                                        <img decoding="async" src="/img/brand/{{ $brand['img'] }}" alt="{{ $brand['alt'] }}">
                                    </div>
                                    <h3 class="h4 mb-2">
                                        <a href="{{ route('second', ['product', $brand['slug']]) }}">{!! $brand['name'] !!}</a>
                                    </h3>
                                    <p class="mb-1-9">{{ $brand['desc'] }}</p>
                                    <a href="{{ route('second', ['product', $brand['slug']]) }}" class="service-butn">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                                <div class="card-overlay"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-image right60" data-aos="zoom-out" data-aos-duration="1100">
                        <img src="/img/others/features6-img3.png" alt="" />
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5">
                    <div class="heading6 features-heading">
                        <span class="span3" data-aos="fade-left" data-aos-duration="700">Any Theme Design</span>
                        <h3 class="text-anime-style-3">For Any WordPress Theme</h3>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">Every website design needs to be unique. With
                            WPBakery Page Builder, you can work with any WordPress theme of your choice. This powerful tool
                            allows you to create responsive an stunning layouts without any coding knowledge.</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="1000">
                            <a href="{{ route('second', ['product', 'features']) }}" class="theme-btn9"><span
                                    class="tb8">Get More Info <span class="arrow"><i
                                            class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading6 features-heading">
                        <span class="span3" data-aos="fade-right" data-aos-duration="700">Template Library</span>
                        <h3 class="text-anime-style-3">eSoft Builder Template Library</h3>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="900">Access premium class templates via the online
                            Template Library and build your product in seconds. Download any template you like without any
                            restrictions. Template Library gets constantly updated with new templates.</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-right" data-aos-duration="1000">
                            <a href="{{ route('second', ['product', 'features']) }}" class="theme-btn9"><span
                                    class="tb8">Get More Info <span class="arrow"><i
                                            class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                </div>
                <div class="col-lg-6">
                    <div class="main-image right60" data-aos="zoom-out" data-aos-duration="800">
                        <img src="/img/others/features6-img4.png" alt="" />
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-image right60" data-aos="zoom-out" data-aos-duration="1000">
                        <img src="/img/others/features6-img5.png" alt="" />
                    </div>
                </div>
                <div class="col-1">
                </div>
                <div class="col-lg-5">
                    <div class="heading6 features-heading">
                        <span class="span3" data-aos="fade-left" data-aos-duration="700">any layout available</span>
                        <h3 class="text-anime-style-3">Any Mobile/Laptop Layouts</h3>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">WPBakery Page Builder ensures your website looks
                            perfect on every device, whether it’s a mobile phone, tablet, laptop. The responsive design
                            capabilities allow you create layouts.</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="1000">
                            <a href="{{ route('second', ['product', 'features']) }}" class="theme-btn9"><span
                                    class="tb8">Get More Info <span class="arrow"><i
                                            class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- ===== FEATURES AREA END ======= -->

    <!-- ===== COUNTERS AREA START ======= -->
    {{-- <div class="counters6 sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="heading6">
                        <h3 class="text-anime-style-3">Trusted by Top Choice For 5,800+ Websites Worldwide</h3>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="counter-box box1" data-aos="zoom-out" data-aos-duration="700">
                        <h2><span class="counter">16</span> M+</h2>
                        <p>Built With Elementor</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="counter-box box2" data-aos="zoom-out" data-aos-duration="900">
                        <h2><span class="counter">6.5</span> K+</h2>
                        <p>5 Star Reviews</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="counter-box box3" data-aos="zoom-out" data-aos-duration="1100">
                        <h2><span class="counter">100</span>+</h2>
                        <p>5 Star Reviews</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="counter-box box4" data-aos="zoom-out" data-aos-duration="1200">
                        <h2><span class="counter">16</span>Sec.</h2>
                        <p>15 Second An Elementor</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ===== COUNTERS AREA END ======= -->

    <!-- ===== EDITING AREA START ======= -->
    {{-- <div class="editing6 sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading6">
                        <span class="title"><img src="/img/icons/span-image6.png" alt="" /></span>
                        <h2 class="text-anime-style-3">Powerful Visual Editing For Your Entire Website</h2>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="600">
                    <div class="editing-box">
                        <div class="icon">
                            <img src="/img/icons/editing6-icon1.svg" alt="" />
                        </div>
                        <div class="space16"></div>
                        <div class="heading6">
                            <h4><a href="{{ route('second', ['product', 'features']) }}">Drag & Drop Editing</a></h4>
                            <div class="space16"></div>
                            <p>Drag a "Text Editor" widget from the sidebar and drop it into the desired section or column
                                on your page.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="editing-box">
                        <div class="icon">
                            <img src="/img/icons/editing6-icon2.svg" alt="" />
                        </div>
                        <div class="space16"></div>
                        <div class="heading6">
                            <h4><a href="{{ route('second', ['product', 'features']) }}">True Visual Editing</a></h4>
                            <div class="space16"></div>
                            <p>Design your page in real time and see the results instantly. Create an customize your all
                                landing product.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="editing-box">
                        <div class="icon">
                            <img src="/img/icons/editing6-icon3.svg" alt="" />
                        </div>
                        <div class="space16"></div>
                        <div class="heading6">
                            <h4><a href="{{ route('second', ['product', 'features']) }}">Custom CSS Control</a></h4>
                            <div class="space16"></div>
                            <p>Developers can easily combine Divi's visual design controls with their own custom CSS, eSoft
                                interface is best.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="700">
                    <div class="editing-box">
                        <div class="icon">
                            <img src="/img/icons/editing6-icon4.svg" alt="" />
                        </div>
                        <div class="space16"></div>
                        <div class="heading6">
                            <h4><a href="{{ route('second', ['product', 'features']) }}">Responsive Editing</a></h4>
                            <div class="space16"></div>
                            <p>eSoft Building beautiful responsive websites is easy. Divi is responsive by nature & also
                                gives full control.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="editing-box">
                        <div class="icon">
                            <img src="/img/icons/editing6-icon5.svg" alt="" />
                        </div>
                        <div class="space16"></div>
                        <div class="heading6">
                            <h4><a href="{{ route('second', ['product', 'features']) }}">Copy/Paste Design</a></h4>
                            <div class="space16"></div>
                            <p>eSoft Save and manage unlimited custom designs. Easily re-use them to jump-start new home
                                product.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="editing-box">
                        <div class="icon">
                            <img src="/img/icons/editing6-icon6.svg" alt="" />
                        </div>
                        <div class="space16"></div>
                        <div class="heading6">
                            <h4><a href="{{ route('second', ['product', 'features']) }}">Global Element Styles</a></h4>
                            <div class="space16"></div>
                            <p>Manage your entire website's design using global elements and website-wide design settings.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ===== EDITING AREA END ======= -->

    <!-- ===== BRANDS AREA START ======= -->
    {{-- <div class="brands-area6 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading6-w">
                        <span class="span2" data-aos="fade-left" data-aos-duration="700">Integration brands</span>
                        <h2 class="text-anime-style-3">Integrate Your eSoft Builder With 3K App</h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900">Seamlessly integrate your eSoft Builder with the
                            3K App to elevate your workflow and enhance productivity. By combining the powerful design
                            capabilities of eSoft Builder with the robust features of the 3K Apps.</p>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="1000">
                            <a href="{{ route('second', ['auth', 'account']) }}" class="theme-btn8"><span
                                    class="tb8">Get Started, It’s Free <span class="arrow"><i
                                            class="fa-solid fa-arrow-right"></i></span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="apps-images">
                        <div class="image1">
                            <img src="/img/bg/apps5-shape-bg.png" alt="" />
                            <div class="dot"></div>
                        </div>
                        <div class="image2">
                            <img src="/img/others/apps5.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ===== BRANDS AREA END ======= -->

    <!-- ===== CTA AREA START ======= -->
    {{-- <div class="cta6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading6-w">
                        <span class="span">Integration brands</span>
                        <h2>Access A Library Of <br /> Pre-Built Templates</h2>
                        <div class="space16"></div>
                        <p>
                            Seamlessly integrate your eSoft Builder with the 3K App <br /> to elevate your workflow and
                            enhance of productivity.
                        </p>
                        <div class="space30"></div>
                        <a href="{{ route('second', ['auth', 'account']) }}" class="theme-btn8"><span class="tb8">Get
                                Started, It’s Free <span class="arrow"><i
                                        class="fa-solid fa-arrow-right"></i></span></span></a>
                    </div>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-6">
                    <div class="cta6-images">
                        <div class="image1">
                            <img src="/img/others/cta6-img.png" alt="" />
                        </div>
                        <div class="image2">
                            <img src="/img/shapes/cta6-shape.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ===== CTA AREA END ======= -->

    <!-- ===== FOOTER AREA START ======= -->
    @include('layouts.partials.footer')
    <!-- ===== FOOTER AREA END ======= -->
@endsection

