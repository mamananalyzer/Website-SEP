<?php
    $pageTitle = $selectedBrand
        ? strtoupper($selectedBrand) . ' Electrical Products — PT. Suryamas Elsindo Primatama'
        : 'Electrical Products — ABB, TE Connectivity, RITZ, Elmeasure | PT. Suryamas';
    $pageDesc = $selectedBrand
        ? 'Browse ' . strtoupper($selectedBrand) . ' electrical products from PT. Suryamas Elsindo Primatama, authorized distributor in Indonesia. Contact us for the best pricing.'
        : 'Browse quality electrical products from PT. Suryamas Elsindo Primatama: ABB, TE Connectivity, RITZ Transformer, Elmeasure, OME Motors, Hilkar, and GE. Authorized distributor in Indonesia since 1996.';
    $canonicalUrl = $selectedBrand ? url('/product/' . $selectedBrand) : url('/product');
?>


<?php $__env->startSection('meta_description', $pageDesc); ?>
<?php $__env->startSection('og_title', $pageTitle); ?>
<?php $__env->startSection('og_description', $pageDesc); ?>
<?php $__env->startSection('og_url', $canonicalUrl); ?>
<?php $__env->startSection('og_image', asset('img/logo/logo-sep.webp')); ?>
<?php $__env->startSection('og_type', 'website'); ?>
<?php $__env->startSection('canonical', $canonicalUrl); ?>

<?php $__env->startSection('json_ld'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home",     "item": "<?php echo e(url('/')); ?>"},
    {"@type": "ListItem", "position": 2, "name": "Products", "item": "<?php echo e(url('/product')); ?>"}<?php if($selectedBrand): ?>,
    {"@type": "ListItem", "position": 3, "name": "<?php echo e(strtoupper($selectedBrand)); ?>", "item": "<?php echo e(url('/product/' . $selectedBrand)); ?>"}
    <?php endif; ?>
  ]
}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_attribute'); ?>
    class="body"
<?php $__env->stopSection(); ?>



<?php $__env->startSection('css'); ?>
<style>
/* ===== Product Page Styles ===== */

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
.product-page-hero .hero-text h1 {
    color: #1b4d18;
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: .4rem;
    line-height: 1.2;
}
.product-page-hero .hero-text p {
    color: #2d6b29;
    font-size: 1rem;
    margin-bottom: .75rem;
}
.product-page-hero .breadcrumb-item a,
.product-page-hero .breadcrumb-item.active { color: #2d6b29; font-size: .85rem; }
.product-page-hero .breadcrumb-item + .breadcrumb-item::before { color: #70B966; }

/* --- Layout --- */
.product-section { padding: 48px 0 72px; background: #f4f6f4; }

/* ========================================
   SIDEBAR — desktop (sticky left panel)
   ======================================== */
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
    color: #2e7d32;
    margin-bottom: 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid #e8f5e9;
    display: block;
}
.brand-sidebar .all-link {
    display: block;
    text-align: center;
    padding: 9px 12px;
    border-radius: 8px;
    background: #f1f8e9;
    color: #2e7d32;
    font-weight: 600;
    font-size: .88rem;
    text-decoration: none;
    margin-bottom: 12px;
    transition: background .2s;
}
.brand-sidebar .all-link:hover  { background: #dcedc8; }
.brand-sidebar .all-link.active { background: #2e7d32; color: #fff; }
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
.brand-sidebar .brand-link:hover  { background: #e8f5e9; color: #2e7d32; transform: translateX(3px); }
.brand-sidebar .brand-link.active { background: #2e7d32; color: #fff; }
.brand-sidebar .brand-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: currentColor;
    flex-shrink: 0;
    opacity: .7;
}

/* ========================================
   MOBILE BRAND FILTER (horizontal scroll chips)
   — Visible only on < lg
   ======================================== */
.brand-filter-mobile {
    display: none; /* shown via media query */
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    padding: 0 0 12px;
    margin-bottom: 20px;
    gap: 8px;
    /* hide scrollbar */
    scrollbar-width: none;
}
.brand-filter-mobile::-webkit-scrollbar { display: none; }
.brand-filter-mobile .chip {
    display: inline-block;
    flex-shrink: 0;
    white-space: nowrap;
    padding: 7px 16px;
    border-radius: 30px;
    border: 1.5px solid #c8e6c9;
    background: #fff;
    color: #2e7d32;
    font-size: .82rem;
    font-weight: 600;
    text-decoration: none;
    transition: background .18s, color .18s, border-color .18s;
}
.brand-filter-mobile .chip:hover  { background: #e8f5e9; }
.brand-filter-mobile .chip.active { background: #2e7d32; color: #fff; border-color: #2e7d32; }

/* --- Product Cards --- */
.product-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 3px 14px rgba(0,0,0,.07);
    transition: transform .22s ease, box-shadow .22s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,.12);
}
.product-card .card-img-wrap {
    width: 100%;
    height: 180px;
    overflow: hidden;
    background: #f1f8e9;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.product-card .card-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .32s ease;
}
.product-card:hover .card-img-wrap img { transform: scale(1.05); }
.product-card .card-img-wrap .no-image { width: 56px; height: 56px; opacity: .22; }
.product-card .card-body {
    padding: 16px 18px 18px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.product-card .brand-badge {
    display: inline-block;
    background: #e8f5e9;
    color: #2e7d32;
    font-size: .68rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 3px 10px;
    border-radius: 20px;
    margin-bottom: 9px;
    text-decoration: none;
    transition: background .18s, color .18s;
}
.product-card .brand-badge:hover { background: #2e7d32; color: #fff; }
.product-card h5 {
    font-size: .95rem;
    font-weight: 700;
    color: #1a3c1a;
    margin-bottom: 7px;
    line-height: 1.35;
}
.product-card p {
    font-size: .84rem;
    color: #666;
    line-height: 1.55;
    flex: 1;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* --- Filter Banner --- */
.filter-banner {
    background: #fff;
    border-radius: 10px;
    padding: 12px 16px;
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}
.filter-banner .filter-label { font-size: .85rem; color: #555; }
.filter-banner .filter-tag {
    background: #2e7d32;
    color: #fff;
    border-radius: 20px;
    padding: 3px 12px;
    font-size: .79rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .8px;
}
.filter-banner a { font-size: .82rem; color: #2e7d32; text-decoration: underline; margin-left: auto; }

/* --- Empty State --- */
.empty-state {
    text-align: center;
    padding: 60px 20px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 3px 14px rgba(0,0,0,.06);
}
.empty-state svg { width: 70px; opacity: .22; margin-bottom: 16px; }
.empty-state h4 { color: #444; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700; }
.empty-state p  { color: #888; font-size: .9rem;  margin-bottom: 16px; }
.empty-state a  { color: #2e7d32; font-weight: 600; text-decoration: underline; }

/* --- Pagination --- */
.pagination .page-link          { color: #2e7d32; border-radius: 8px !important; margin: 0 2px; }
.pagination .page-item.active .page-link { color: #e8f5e9; background-color: #2e7d32; border-color: #2e7d32; }
.pagination .page-link:hover    { background: #e8f5e9; color: #1b5e20; }

/* ===== Mobile Header Fix =====
   The _mobile.scss breakpoint is 769px but Bootstrap's d-lg-none shows the
   mobile header up to 991px. In the 769px–991px range the SCSS styles don't
   apply, so the hamburger icon and header background are unstyled / invisible.
   This block ensures the mobile header is always correctly styled.
   ============================= */
.mobile-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 14px 0;
    z-index: 999;
    background: #fff !important;
    box-shadow: 0 2px 10px rgba(0,0,0,.08);
}
.mobile-header-elements {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.mobile-nav-icon {
    font-size: 20px;
    border: 1.5px solid #333 !important;
    width: 40px;
    height: 40px;
    display: flex !important;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    color: #1a3c1a !important;
    cursor: pointer;
    background: #fff;
    transition: background .18s, color .18s;
}
.mobile-nav-icon:hover {
    background: #e8f5e9;
    color: #2e7d32 !important;
    border-color: #2e7d32 !important;
}

/* Push page content below the fixed mobile header */
@media (max-width: 991.98px) {
    .product-page-hero {
        margin-top: 68px; /* matches header height */
    }
}


/* ========================================
   RESPONSIVE BREAKPOINTS
   ======================================== */

/* Tablet (< 992px / lg) — collapse desktop sidebar, show chip bar */
@media (max-width: 991.98px) {
    /* Hide the desktop sidebar column */
    .sidebar-col { display: none !important; }
    /* Stretch main content to full width */
    .content-col { width: 100% !important; max-width: 100% !important; flex: 0 0 100% !important; }
    /* Show the mobile chip filter */
    .brand-filter-mobile { display: flex; }

    .product-section { padding: 32px 0 56px; }
    .product-page-hero { padding: 52px 0 40px; }
    .product-page-hero .hero-text h1 { font-size: 1.9rem; }
}

/* Mobile (< 768px / md) */
@media (max-width: 767.98px) {
    .product-page-hero { padding: 44px 0 34px; }
    .product-page-hero .hero-text h1  { font-size: 1.55rem; }
    .product-page-hero .hero-text p   { font-size: .92rem; }

    .product-section { padding: 24px 0 48px; }

    /* Cards: 2-column on mobile landscape / medium phones */
    .product-grid { --bs-gutter-x: .75rem; --bs-gutter-y: .75rem; }

    .product-card .card-img-wrap { height: 150px; }
    .product-card .card-body     { padding: 13px 14px 15px; }
    .product-card h5             { font-size: .88rem; }

    .filter-banner { padding: 10px 14px; }
    .empty-state   { padding: 44px 16px; }
}

/* Small phones (< 480px) — single column */
@media (max-width: 479.98px) {
    .product-page-hero .hero-text h1 { font-size: 1.35rem; }

    /* Force single column on very small screens */
    .product-grid > .col { flex: 0 0 100%; max-width: 100%; }

    .product-card .card-img-wrap { height: 160px; }

    /* Chip bar slightly smaller */
    .brand-filter-mobile .chip { font-size: .78rem; padding: 6px 13px; }
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('layouts.partials.header.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <div class="product-page-hero">
        <div class="container">
            <div class="hero-text">
                <h1>Our Products</h1>
                <p>Browse our complete range of industrial products.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="background:transparent;padding:0;">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('root')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
                        <?php if($selectedBrand): ?>
                            <li class="breadcrumb-item active"><?php echo e(strtoupper($selectedBrand)); ?></li>
                        <?php else: ?>
                            <li class="breadcrumb-item active">All</li>
                        <?php endif; ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    

    
    <section class="product-section">
        <div class="container">


            
            <div class="brand-filter-mobile d-lg-none">
                <a href="<?php echo e(route('product.index')); ?>"
                   class="chip <?php echo e(is_null($selectedBrand) ? 'active' : ''); ?>">
                    All
                </a>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $isActive  = $selectedBrand && strtolower($selectedBrand) === strtolower($brand);
                        $brandSlug = Str::slug($brand);
                    ?>
                    <a href="<?php echo e(route('product.brand', $brandSlug)); ?>"
                       class="chip <?php echo e($isActive ? 'active' : ''); ?>">
                        <?php echo e($brand); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row g-4">

                
                <div class="col-lg-3 sidebar-col">
                    <aside class="brand-sidebar">
                        <span class="sidebar-title">Filter by Brand</span>

                        <a href="<?php echo e(route('product.index')); ?>"
                           class="all-link <?php echo e(is_null($selectedBrand) ? 'active' : ''); ?>">
                            All Products
                        </a>

                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $isActive  = $selectedBrand && strtolower($selectedBrand) === strtolower($brand);
                                $brandSlug = Str::slug($brand);
                            ?>
                            <a href="<?php echo e(route('product.brand', $brandSlug)); ?>"
                               class="brand-link <?php echo e($isActive ? 'active' : ''); ?>">
                                <span class="brand-dot"></span>
                                <?php echo e($brand); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($brands->isEmpty()): ?>
                            <p class="text-muted" style="font-size:.82rem;margin:0;">No brands yet.</p>
                        <?php endif; ?>
                    </aside>
                </div>

                
                <div class="col-lg-9 content-col">

                    
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i><?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    
                    <?php if($selectedBrand): ?>
                        <div class="filter-banner">
                            <span class="filter-label">Showing brand:</span>
                            <span class="filter-tag"><?php echo e(strtoupper($selectedBrand)); ?></span>
                            <a href="<?php echo e(route('product.index')); ?>">Clear ×</a>
                        </div>
                    <?php endif; ?>

                    
                    <?php if($products->isEmpty()): ?>
                        <div class="empty-state">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M20 7l-8-4-8 4m16 0v10l-8 4m0-14L4 17m8 4V11M4 7v10"/>
                            </svg>
                            <h4>No products found</h4>
                            <?php if($selectedBrand): ?>
                                <p>No products match the brand "<strong><?php echo e(strtoupper($selectedBrand)); ?></strong>".</p>
                            <?php else: ?>
                                <p>No products have been added yet.</p>
                            <?php endif; ?>
                            <a href="<?php echo e(route('product.index')); ?>">View all products</a>
                        </div>
                    <?php else: ?>
                        
                        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-3 product-grid">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <a href="<?php echo e(route('product.show', $product->id)); ?>"
                                       class="product-card-link">
                                        <div class="product-card">
                                            <div class="card-img-wrap">
                                                <?php if($product->image_path): ?>
                                                    <img src="<?php echo e(asset('storage/' . $product->image_path)); ?>"
                                                         alt="<?php echo e($product->name); ?>"
                                                         loading="lazy">
                                                <?php else: ?>
                                                    <svg class="no-image" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke="#2e7d32">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                              d="M20 7l-8-4-8 4m16 0v10l-8 4m0-14L4 17m8 4V11M4 7v10"/>
                                                    </svg>
                                                <?php endif; ?>
                                            </div>
                                            <div class="card-body">
                                                <a href="<?php echo e(route('product.brand', Str::slug($product->brand))); ?>"
                                                   class="brand-badge"
                                                   onclick="event.stopPropagation()">
                                                    <?php echo e($product->brand); ?>

                                                </a>
                                                <h5><?php echo e($product->name); ?></h5>
                                                <?php if($product->description): ?>
                                                    <p><?php echo e($product->description); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        
                        <?php if($products->hasPages()): ?>
                            <div class="d-flex justify-content-center mt-4">
                                <?php echo e($products->links('pagination::bootstrap-5')); ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    

    
    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', ['title' => $pageTitle, 'metaTitle' => $pageTitle], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\+ Maman\Website SEP\esoftlaravel-10\esoftlaravel-10\Esoft-Laravel_v1.0\Esoft\resources\views/product/index.blade.php ENDPATH**/ ?>