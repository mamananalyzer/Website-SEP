@php
    $pageTitle = 'Manage & Delete Products — PT. Suryamas Elsindo Primatama';
    $pageDesc  = 'Admin page to bulk-delete products.';
@endphp
@extends('layouts.base', ['title' => $pageTitle, 'metaTitle' => $pageTitle])

@section('meta_description', $pageDesc)
@section('canonical', url('/product/delete'))

@section('body_attribute')
    class="body"
@endsection

@section('css')
<style>
/* ===== Shared Hero (mirrors product page) ===== */
.product-page-hero {
    background: linear-gradient(135deg, #e57373 30%, #ef9a9a 50%, #c62828 100%);
    padding: 70px 0 50px;
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid #e57373;
}
.product-page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url('/img/shapes/common-hero-shape1.png') no-repeat left bottom / auto 60%;
    opacity: .08;
    pointer-events: none;
}
.product-page-hero .hero-text h1 { color: #fff; font-size: 2.2rem; font-weight: 700; margin-bottom: .4rem; }
.product-page-hero .hero-text p  { color: #ffcdd2; font-size: 1rem; margin-bottom: .75rem; }
.product-page-hero .breadcrumb-item a,
.product-page-hero .breadcrumb-item.active { color: #ffcdd2; font-size: .85rem; }
.product-page-hero .breadcrumb-item + .breadcrumb-item::before { color: #ef9a9a; }

/* ===== Layout ===== */
.delete-section { padding: 48px 0 72px; background: #f9f5f5; }

/* ===== Sidebar (mirrors green sidebar, but red tones) ===== */
.brand-sidebar {
    background: #fff;
    border-radius: 14px;
    padding: 22px 18px;
    box-shadow: 0 4px 20px rgba(0,0,0,.07);
    position: sticky;
    top: 20px;
}
.brand-sidebar .sidebar-title {
    font-size: .78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    color: #c62828;
    margin-bottom: 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid #ffebee;
    display: block;
}
.brand-sidebar .all-link {
    display: block;
    text-align: center;
    padding: 9px 12px;
    border-radius: 8px;
    background: #ffebee;
    color: #c62828;
    font-weight: 600;
    font-size: .88rem;
    text-decoration: none;
    margin-bottom: 12px;
    transition: background .2s;
}
.brand-sidebar .all-link:hover  { background: #ffcdd2; }
.brand-sidebar .all-link.active { background: #c62828; color: #fff; }
.brand-sidebar .brand-link {
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 9px 11px;
    border-radius: 8px;
    color: #444;
    font-size: .9rem;
    font-weight: 500;
    text-decoration: none;
    transition: background .18s, color .18s, transform .12s;
    margin-bottom: 3px;
}
.brand-sidebar .brand-link:hover  { background: #ffebee; color: #c62828; transform: translateX(3px); }
.brand-sidebar .brand-link.active { background: #c62828; color: #fff; }
.brand-sidebar .brand-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: currentColor;
    flex-shrink: 0;
    opacity: .7;
}

/* ===== Toolbar ===== */
.delete-toolbar {
    background: #fff;
    border-radius: 12px;
    padding: 14px 18px;
    margin-bottom: 18px;
    box-shadow: 0 2px 10px rgba(0,0,0,.06);
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}
.delete-toolbar .selection-info {
    font-size: .88rem;
    color: #666;
    flex: 1;
}
.delete-toolbar .selection-info strong { color: #c62828; }
#btn-select-all {
    font-size: .85rem;
    padding: 7px 16px;
    border-radius: 8px;
    border: 1.5px solid #ccc;
    background: #fff;
    color: #555;
    cursor: pointer;
    transition: background .18s, border-color .18s;
    font-weight: 600;
}
#btn-select-all:hover { background: #f5f5f5; border-color: #aaa; }
#btn-delete {
    font-size: .88rem;
    padding: 8px 20px;
    border-radius: 8px;
    background: #c62828;
    color: #fff;
    border: none;
    font-weight: 700;
    cursor: pointer;
    transition: background .2s, opacity .2s;
    display: flex;
    align-items: center;
    gap: 7px;
}
#btn-delete:disabled { opacity: .4; cursor: not-allowed; }
#btn-delete:not(:disabled):hover { background: #b71c1c; }

/* ===== Product list rows ===== */
.product-list { display: flex; flex-direction: column; gap: 10px; }
.product-row {
    background: #fff;
    border-radius: 12px;
    padding: 12px 16px;
    box-shadow: 0 2px 8px rgba(0,0,0,.06);
    display: flex;
    align-items: center;
    gap: 14px;
    transition: box-shadow .18s, background .18s;
    cursor: pointer;
}
.product-row:hover { box-shadow: 0 4px 16px rgba(198,40,40,.10); background: #fff9f9; }
.product-row.selected { background: #ffebee; box-shadow: 0 2px 10px rgba(198,40,40,.15); }
.product-row input[type="checkbox"] {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
    accent-color: #c62828;
    cursor: pointer;
}
.product-row .thumb {
    width: 56px;
    height: 56px;
    border-radius: 8px;
    object-fit: cover;
    flex-shrink: 0;
    background: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.product-row .thumb img { width: 100%; height: 100%; object-fit: cover; }
.product-row .thumb svg { width: 28px; height: 28px; opacity: .2; }
.product-row .info { flex: 1; min-width: 0; }
.product-row .brand-badge {
    display: inline-block;
    background: #ffebee;
    color: #c62828;
    font-size: .65rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 2px 9px;
    border-radius: 20px;
    margin-bottom: 4px;
}
.product-row .product-name {
    font-size: .95rem;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 2px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.product-row .product-desc {
    font-size: .8rem;
    color: #888;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ===== Empty state ===== */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 3px 14px rgba(0,0,0,.06);
}
.empty-state svg { width: 70px; opacity: .2; margin-bottom: 16px; }
.empty-state h4 { color: #444; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700; }
.empty-state p  { color: #888; font-size: .9rem; }

/* ===== Mobile header ===== */
.mobile-header {
    position: fixed; top: 0; left: 0; width: 100%;
    padding: 14px 0; z-index: 999;
    background: #fff !important;
    box-shadow: 0 2px 10px rgba(0,0,0,.08);
}
.mobile-header-elements { display: flex; align-items: center; justify-content: space-between; }
.mobile-nav-icon {
    font-size: 20px; border: 1.5px solid #333 !important;
    width: 40px; height: 40px;
    display: flex !important; align-items: center; justify-content: center;
    border-radius: 6px; color: #1a1a1a !important;
    cursor: pointer; background: #fff;
    transition: background .18s, color .18s;
}
.mobile-nav-icon:hover { background: #ffebee; color: #c62828 !important; border-color: #c62828 !important; }

@media (max-width: 991.98px) {
    .product-page-hero { margin-top: 68px; }
    .sidebar-col { display: none !important; }
    .content-col { width: 100% !important; max-width: 100% !important; flex: 0 0 100% !important; }
}
@media (max-width: 767.98px) {
    .product-page-hero { padding: 44px 0 34px; }
    .product-page-hero .hero-text h1 { font-size: 1.55rem; }
    .delete-toolbar { flex-direction: column; align-items: flex-start; }
}
</style>
@endsection

@section('content')
    @include('layouts.partials.header.navbar')

    {{-- ===== PAGE HERO ===== --}}
    <div class="product-page-hero">
        <div class="container">
            <div class="hero-text">
                <h1><i class="fa-solid fa-trash-can me-2" style="font-size:1.6rem;"></i> Manage & Delete Products</h1>
                <p>Select the products you want to remove, then click "Delete Selected".</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="background:transparent;padding:0;">
                        <li class="breadcrumb-item"><a href="{{ route('root') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
                        <li class="breadcrumb-item active">Manage / Delete</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- ===== PAGE HERO END ===== --}}

    {{-- ===== DELETE SECTION ===== --}}
    <section class="delete-section">
        <div class="container">
            <div class="row g-4">

                {{-- ===== SIDEBAR ===== --}}
                <div class="col-lg-3 sidebar-col">
                    <aside class="brand-sidebar">
                        <span class="sidebar-title">Filter by Brand</span>

                        <a href="{{ route('product.delete') }}"
                           class="all-link {{ is_null($selectedBrand) ? 'active' : '' }}">
                            All Products
                        </a>

                        @foreach($brands as $brand)
                            @php
                                $isActive  = $selectedBrand && strtolower($selectedBrand) === strtolower($brand);
                                $brandSlug = Str::slug($brand);
                            @endphp
                            <a href="{{ route('product.delete') }}?brand={{ $brandSlug }}"
                               class="brand-link {{ $isActive ? 'active' : '' }}">
                                <span class="brand-dot"></span>
                                {{ $brand }}
                            </a>
                        @endforeach

                        @if($brands->isEmpty())
                            <p class="text-muted" style="font-size:.82rem;margin:0;">No brands yet.</p>
                        @endif

                        <hr style="margin:16px 0 12px;">
                        <a href="{{ route('product.index') }}"
                           class="d-block text-center text-success text-decoration-none fw-semibold"
                           style="font-size:.85rem;">
                            <i class="fa-solid fa-arrow-left me-1"></i> Back to Products
                        </a>
                    </aside>
                </div>

                {{-- ===== MAIN CONTENT ===== --}}
                <div class="col-lg-9 content-col">

                    {{-- Flash message --}}
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    {{-- Validation error (no items selected but form was submitted) --}}
                    @if($errors->has('ids'))
                        <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i>
                            Please select at least one product to delete.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if($products->isEmpty())
                        <div class="empty-state">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#c62828">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M20 7l-8-4-8 4m16 0v10l-8 4m0-14L4 17m8 4V11M4 7v10"/>
                            </svg>
                            <h4>No products found</h4>
                            <p>
                                @if($selectedBrand)
                                    No products match the brand "<strong>{{ strtoupper($selectedBrand) }}</strong>".
                                @else
                                    There are no products in the database yet.
                                @endif
                            </p>
                        </div>
                    @else
                        {{-- Bulk-delete form --}}
                        <form id="delete-form" action="{{ route('product.bulkDestroy') }}" method="POST">
                            @csrf

                            {{-- Toolbar --}}
                            <div class="delete-toolbar">
                                <div class="selection-info">
                                    <strong id="selected-count">0</strong>
                                    of {{ $products->count() }} product{{ $products->count() !== 1 ? 's' : '' }} selected
                                </div>
                                <button type="button" id="btn-select-all">Select All</button>
                                <button type="submit" id="btn-delete" disabled>
                                    <i class="fa-solid fa-trash-can"></i>
                                    Delete Selected (<span id="btn-count">0</span>)
                                </button>
                            </div>

                            {{-- Product checklist --}}
                            <div class="product-list">
                                @foreach($products as $product)
                                    <label class="product-row" for="product-{{ $product->id }}">
                                        <input type="checkbox"
                                               id="product-{{ $product->id }}"
                                               name="ids[]"
                                               value="{{ $product->id }}"
                                               class="product-checkbox">

                                        {{-- Thumbnail --}}
                                        <div class="thumb">
                                            @if($product->image_path)
                                                <img src="{{ asset('storage/' . $product->image_path) }}"
                                                     alt="{{ $product->name }}"
                                                     loading="lazy">
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke="#c62828">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                          d="M20 7l-8-4-8 4m16 0v10l-8 4m0-14L4 17m8 4V11M4 7v10"/>
                                                </svg>
                                            @endif
                                        </div>

                                        {{-- Info --}}
                                        <div class="info">
                                            <span class="brand-badge">{{ $product->brand }}</span>
                                            <p class="product-name">{{ $product->name }}</p>
                                            @if($product->description)
                                                <p class="product-desc">{{ $product->description }}</p>
                                            @endif
                                        </div>
                                    </label>
                                @endforeach
                            </div>

                        </form>{{-- /delete-form --}}
                    @endif

                </div>{{-- /col content --}}
            </div>{{-- /row --}}
        </div>{{-- /container --}}
    </section>
    {{-- ===== DELETE SECTION END ===== --}}

    @include('layouts.partials.footer')
@endsection

@section('scripts')
<script>
(function () {
    const checkboxes  = document.querySelectorAll('.product-checkbox');
    const btnDelete   = document.getElementById('btn-delete');
    const btnSelectAll= document.getElementById('btn-select-all');
    const countSpan   = document.getElementById('selected-count');
    const btnCountSpan= document.getElementById('btn-count');
    const form        = document.getElementById('delete-form');

    if (!checkboxes.length) return;

    let allSelected = false;

    function updateUI() {
        const checked = document.querySelectorAll('.product-checkbox:checked').length;
        countSpan.textContent    = checked;
        btnCountSpan.textContent = checked;
        btnDelete.disabled       = checked === 0;

        // Update row highlight
        checkboxes.forEach(cb => {
            cb.closest('.product-row').classList.toggle('selected', cb.checked);
        });

        // Sync select-all button label
        allSelected = checked === checkboxes.length;
        btnSelectAll.textContent = allSelected ? 'Deselect All' : 'Select All';
    }

    // Checkbox change
    checkboxes.forEach(cb => cb.addEventListener('change', updateUI));

    // Select / Deselect all
    btnSelectAll.addEventListener('click', function () {
        allSelected = !allSelected;
        checkboxes.forEach(cb => { cb.checked = allSelected; });
        updateUI();
    });

    // Confirm before submit
    form && form.addEventListener('submit', function (e) {
        const checked = document.querySelectorAll('.product-checkbox:checked').length;
        if (checked === 0) { e.preventDefault(); return; }

        const noun = checked === 1 ? 'product' : 'products';
        if (!confirm(`Are you sure you want to permanently delete ${checked} ${noun}? This cannot be undone.`)) {
            e.preventDefault();
        }
    });
})();
</script>
@endsection
