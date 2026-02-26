@php
    $productTitle = $product->name . ' — ' . strtoupper($product->brand) . ' | PT. Suryamas Elsindo Primatama';
    $productDesc  = $product->description
        ? Str::limit(strip_tags($product->description), 155)
        : $product->name . ' from ' . $product->brand . ' — Available at PT. Suryamas Elsindo Primatama, authorized electrical distributor in Indonesia. Contact us for the best price.';
    $productImage = $product->image_path ? asset('storage/' . $product->image_path) : asset('img/logo/logo-sep.webp');
    $productUrl   = route('product.show', $product->id);
@endphp
@extends('layouts.base', ['title' => $productTitle, 'metaTitle' => $productTitle])

@section('meta_description', Str::limit(strip_tags($product->description ?? $productDesc), 160))
@section('og_title', $productTitle)
@section('og_description', Str::limit(strip_tags($product->description ?? $productDesc), 160))
@section('og_url', $productUrl)
@section('og_image', $productImage)
@section('og_type', 'product')
@section('canonical', $productUrl)

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Product",
      "name": "{{ $product->name }}",
      "description": "{{ Str::limit(strip_tags($product->description ?? ''), 300) }}",
      "brand": {
        "@type": "Brand",
        "name": "{{ $product->brand }}"
      },
      "image": "{{ $productImage }}",
      "url": "{{ $productUrl }}",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "IDR",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "PT. Suryamas Elsindo Primatama"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home",    "item": "{{ url('/') }}"},
        {"@type": "ListItem", "position": 2, "name": "Produk",  "item": "{{ url('/product') }}"},
        {"@type": "ListItem", "position": 3, "name": "{{ $product->brand }}", "item": "{{ route('product.brand', Str::slug($product->brand)) }}"},
        {"@type": "ListItem", "position": 4, "name": "{{ $product->name }}", "item": "{{ $productUrl }}"}
      ]
    }
  ]
}
</script>
@endsection

@section('body_attribute')
    class="body"
@endsection

@section('css')
<style>
/* ===== Product Detail Page ===== */

/* --- Hero --- */
.product-page-hero {
    background: linear-gradient(135deg, #9fce9bff 30%, #a6daa3ff 50%, #70B966 100%);
    padding: 70px 0 50px;
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid #9ecf9a;
}
.product-page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url('/img/shapes/common-hero-shape1.png') no-repeat left bottom / auto 60%;
    opacity: .1;
    pointer-events: none;
}
.product-page-hero .hero-text h1 { color: #1b4d18; font-size: 2rem; font-weight: 700; margin-bottom: .4rem; }
.product-page-hero .hero-text p  { color: #2d6b29; font-size: 1rem; margin-bottom: .75rem; }
.product-page-hero .breadcrumb-item a,
.product-page-hero .breadcrumb-item.active { color: #2d6b29; font-size: .85rem; }
.product-page-hero .breadcrumb-item + .breadcrumb-item::before { color: #70B966; }

@media (max-width: 991.98px) { .product-page-hero { margin-top: 68px; } }

/* --- Mobile Header Fix --- */
.mobile-header { position: fixed; top: 0; left: 0; width: 100%; padding: 14px 0; z-index: 999; background: #fff !important; box-shadow: 0 2px 10px rgba(0,0,0,.08); }
.mobile-header-elements { display: flex; align-items: center; justify-content: space-between; }
.mobile-nav-icon { font-size: 20px; border: 1.5px solid #333 !important; width: 40px; height: 40px; display: flex !important; align-items: center; justify-content: center; border-radius: 6px; color: #1a3c1a !important; cursor: pointer; background: #fff; transition: background .18s; }
.mobile-nav-icon:hover { background: #e8f5e9; color: #2e7d32 !important; border-color: #2e7d32 !important; }

/* --- Detail Section --- */
.detail-section { padding: 52px 0 80px; background: #f4f6f4; }

/* --- Main Detail Card --- */
.detail-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(0,0,0,.08);
    padding: 40px;
    margin-bottom: 36px;
}

/* --- Image Panel --- */
.product-main-img {
    width: 100%;
    border-radius: 14px;
    overflow: hidden;
    background: #f1f8e9;
    display: flex;
    align-items: center;
    justify-content: center;
    aspect-ratio: 1 / 1;
    border: 2px solid #e8f5e9;
    cursor: zoom-in;
    position: relative;
}
.product-main-img img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    padding: 16px;
    transition: transform .3s ease;
}
.product-main-img:hover img { transform: scale(1.07); }
.product-main-img .zoom-hint {
    position: absolute;
    top: 10px;
    left: 12px;
    font-size: .72rem;
    color: #888;
    display: flex;
    align-items: center;
    gap: 4px;
}
.product-main-img .no-img-placeholder {
    text-align: center;
    color: #b0c4b0;
}
.product-main-img .no-img-placeholder svg { width: 72px; opacity: .25; margin-bottom: 10px; display: block; margin-inline: auto; }
.product-main-img .no-img-placeholder span { font-size: .82rem; }

/* --- Info Panel --- */
.product-name {
    font-size: 1.9rem;
    font-weight: 800;
    color: #1a3c1a;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: -.5px;
    margin-bottom: 6px;
}
.brand-badge-lg {
    display: inline-block;
    background: #e8f5e9;
    color: #2e7d32;
    font-size: .78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 5px 14px;
    border-radius: 20px;
    text-decoration: none;
    transition: background .18s, color .18s;
    margin-bottom: 22px;
}
.brand-badge-lg:hover { background: #2e7d32; color: #fff; }

/* --- Tabs --- */
.detail-tabs {
    border-bottom: 2px solid #e8f5e9;
    display: flex;
    gap: 0;
    margin-bottom: 24px;
}
.detail-tabs .tab-btn {
    padding: 10px 20px;
    font-size: .9rem;
    font-weight: 600;
    color: #666;
    cursor: pointer;
    border: none;
    background: none;
    border-bottom: 3px solid transparent;
    margin-bottom: -2px;
    transition: color .2s, border-color .2s;
}
.detail-tabs .tab-btn.active { color: #2e7d32; border-bottom-color: #2e7d32; }
.detail-tabs .tab-btn:hover:not(.active) { color: #2e7d32; }

.tab-pane { display: none; }
.tab-pane.active { display: block; }

.tab-pane p {
    font-size: .95rem;
    color: #555;
    line-height: 1.8;
}
.tab-pane .no-content {
    color: #aaa;
    font-style: italic;
    font-size: .9rem;
}

/* --- Action Buttons --- */
.action-btns { display: flex; gap: 14px; flex-wrap: wrap; margin-top: 28px; }

.btn-quote {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 30px;
    background: #2e7d32;
    color: #fff;
    border-radius: 8px;
    font-size: .92rem;
    font-weight: 700;
    text-decoration: none;
    border: 2px solid #2e7d32;
    transition: background .2s, transform .2s;
}
.btn-quote:hover { background: #1b5e20; border-color: #1b5e20; color: #fff; transform: translateY(-2px); }

.btn-outline-brand {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 30px;
    background: transparent;
    color: #2e7d32;
    border-radius: 8px;
    font-size: .92rem;
    font-weight: 700;
    text-decoration: none;
    border: 2px solid #2e7d32;
    transition: background .2s, color .2s, transform .2s;
}
.btn-outline-brand:hover { background: #e8f5e9; color: #1b5e20; transform: translateY(-2px); }

/* --- Divider --- */
.info-divider { border: none; border-top: 1.5px solid #e8f5e9; margin: 26px 0; }

/* --- Related Products --- */
.related-section h5 { font-weight: 700; color: #1a3c1a; margin-bottom: 20px; font-size: 1.1rem; }
.related-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 3px 14px rgba(0,0,0,.07);
    transition: transform .22s, box-shadow .22s;
    text-decoration: none;
    display: block;
    height: 100%;
}
.related-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,.12); }
.related-card .r-img {
    height: 130px;
    background: #f1f8e9;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.related-card .r-img img { max-height: 130px; max-width: 100%; object-fit: contain; padding: 10px; }
.related-card .r-body { padding: 14px 16px; }
.related-card .r-body .r-brand { font-size: .68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #2e7d32; margin-bottom: 4px; }
.related-card .r-body .r-name { font-size: .88rem; font-weight: 700; color: #1a3c1a; line-height: 1.35; }

/* --- Markdown-rendered description --- */
.product-description h2,
.product-description h3 {
    font-size: 1.05rem;
    font-weight: 800;
    color: #1a3c1a;
    margin-top: 22px;
    margin-bottom: 10px;
}
.product-description h2:first-child,
.product-description h3:first-child { margin-top: 0; }
.product-description ul {
    padding-left: 1.2rem;
    margin-bottom: 14px;
}
.product-description ul li {
    font-size: .95rem;
    color: #555;
    line-height: 1.75;
    margin-bottom: 4px;
    list-style-type: disc;
}
.product-description p {
    font-size: .95rem;
    color: #555;
    line-height: 1.8;
    margin-bottom: 12px;
}
.product-description strong { color: #1a3c1a; }

/* Lightbox overlay */
#imgLightbox {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.85);
    z-index: 9999;
    align-items: center;
    justify-content: center;
    cursor: zoom-out;
}
#imgLightbox.open { display: flex; }
#imgLightbox img { max-width: 90vw; max-height: 90vh; border-radius: 10px; object-fit: contain; }

@media (max-width: 767.98px) {
    .product-name { font-size: 1.5rem; }
    .detail-card { padding: 24px 18px; }
    .action-btns { flex-direction: column; }
    .btn-quote, .btn-outline-brand { justify-content: center; }
}
</style>
@endsection

@section('content')
    @include('layouts.partials.header.navbar')

    {{-- ===== HERO ===== --}}
    <div class="product-page-hero">
        <div class="container">
            <div class="hero-text">
                {{-- <h1>{{ $product->name }}</h1>
                <p>{{ strtoupper($product->brand) }}</p> --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="background:transparent;padding:0;">
                        <li class="breadcrumb-item"><a href="{{ route('root') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.brand', Str::slug($product->brand)) }}">{{ $product->brand }}</a></li>
                        <li class="breadcrumb-item active">{{ Str::limit($product->name, 40) }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- ===== HERO END ===== --}}

    <section class="detail-section">
        <div class="container">
            <div class="detail-card">
                <div class="row g-5">

                    {{-- ===== LEFT: Image ===== --}}
                    <div class="col-lg-5">
                        <div class="product-main-img" id="imgZoomTrigger">
                            @if($product->image_path)
                                <span class="zoom-hint">
                                    <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/><path d="M11 8v6M8 11h6"/></svg>
                                    Mouseover to zoom-in
                                </span>
                                <img id="mainProductImg"
                                     src="{{ asset('storage/' . $product->image_path) }}"
                                     alt="{{ $product->name }}">
                            @else
                                <div class="no-img-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0v10l-8 4m0-14L4 17m8 4V11M4 7v10"/>
                                    </svg>
                                    <span>No image available</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- ===== RIGHT: Info ===== --}}
                    <div class="col-lg-7">

                        {{-- Brand Badge --}}
                        <a href="{{ route('product.brand', Str::slug($product->brand)) }}" class="brand-badge-lg">
                            {{ $product->brand }}
                        </a>

                        {{-- Product Name --}}
                        <h1 class="product-name">{{ $product->name }}</h1>

                        <hr class="info-divider">

                        {{-- Tabs --}}
                        <div class="detail-tabs">
                            <button class="tab-btn active" data-tab="description">Description</button>
                            <button class="tab-btn" data-tab="specs">Key Specs</button>
                            <button class="tab-btn" data-tab="docs">Support Docs</button>
                        </div>

                        <div id="tab-description" class="tab-pane active">
                            @if($product->description)
                                <div class="product-description">
                                    {!! Str::markdown($product->description) !!}
                                </div>
                            @else
                                <p class="no-content">No description available for this product.</p>
                            @endif
                        </div>

                        <div id="tab-specs" class="tab-pane">
                            <table class="table table-sm" style="font-size:.88rem;">
                                <tbody>
                                    <tr><th style="color:#2e7d32;width:40%;">Product Name</th><td>{{ $product->name }}</td></tr>
                                    <tr><th style="color:#2e7d32;">Brand</th><td>{{ $product->brand }}</td></tr>
                                    {{-- <tr><th style="color:#2e7d32;">Product ID</th><td>#{{ $product->id }}</td></tr>
                                    <tr><th style="color:#2e7d32;">Added</th><td>{{ $product->created_at->format('d M Y') }}</td></tr> --}}
                                </tbody>
                            </table>
                        </div>

                        <div id="tab-docs" class="tab-pane">
                            <p class="no-content">No support documents available for this product. Please contact us for technical documentation.</p>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="action-btns">
                            <a href="{{ route('any', 'contact') }}" class="btn-quote">
                                <i class="fa-solid fa-envelope"></i> Request a Quote
                            </a>
                            <a href="{{ route('product.brand', Str::slug($product->brand)) }}" class="btn-outline-brand">
                                <i class="fa-solid fa-layer-group"></i> More from {{ $product->brand }}
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            {{-- ===== RELATED PRODUCTS ===== --}}
            @if($related->isNotEmpty())
            <div class="related-section">
                <h5>More from {{ $product->brand }}</h5>
                <div class="row row-cols-2 row-cols-md-4 g-3">
                    @foreach($related as $rel)
                    <div class="col">
                        <a href="{{ route('product.show', $rel->id) }}" class="related-card">
                            <div class="r-img">
                                @if($rel->image_path)
                                    <img src="{{ asset('storage/' . $rel->image_path) }}" alt="{{ $rel->name }}">
                                @else
                                    <svg width="40" height="40" fill="none" stroke="#b0c4b0" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0v10l-8 4m0-14L4 17m8 4V11M4 7v10"/>
                                    </svg>
                                @endif
                            </div>
                            <div class="r-body">
                                <div class="r-brand">{{ $rel->brand }}</div>
                                <div class="r-name">{{ $rel->name }}</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </section>

    {{-- Lightbox --}}
    @if($product->image_path)
    <div id="imgLightbox">
        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
    </div>
    @endif

    @include('layouts.partials.footer')

    <script>
        // ===== Tab switching =====
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-pane').forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                document.getElementById('tab-' + this.dataset.tab).classList.add('active');
            });
        });

        // ===== Lightbox =====
        const trigger  = document.getElementById('imgZoomTrigger');
        const lightbox = document.getElementById('imgLightbox');
        if (trigger && lightbox) {
            trigger.addEventListener('click', () => lightbox.classList.add('open'));
            lightbox.addEventListener('click', () => lightbox.classList.remove('open'));
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') lightbox.classList.remove('open');
            });
        }
    </script>
@endsection
