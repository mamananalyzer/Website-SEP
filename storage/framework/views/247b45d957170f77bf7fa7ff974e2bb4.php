<?php $__env->startSection('meta_robots', 'noindex, nofollow'); ?>
<?php $__env->startSection('canonical', url('/product')); ?>

<?php $__env->startSection('body_attribute'); ?>
    class="body"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
/* ===== Add Product Page Styles ===== */

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
.product-page-hero .hero-text h1 { color: #1b4d18; font-size: 2.2rem; font-weight: 700; margin-bottom: .4rem; }
.product-page-hero .hero-text p  { color: #2d6b29; font-size: 1rem; margin-bottom: .75rem; }
.product-page-hero .breadcrumb-item a,
.product-page-hero .breadcrumb-item.active { color: #2d6b29; font-size: .85rem; }
.product-page-hero .breadcrumb-item + .breadcrumb-item::before { color: #70B966; }

/* Push content below fixed mobile header */
@media (max-width: 991.98px) { .product-page-hero { margin-top: 68px; } }

/* --- Mobile Header Fix --- */
.mobile-header { position: fixed; top: 0; left: 0; width: 100%; padding: 14px 0; z-index: 999; background: #fff !important; box-shadow: 0 2px 10px rgba(0,0,0,.08); }
.mobile-header-elements { display: flex; align-items: center; justify-content: space-between; }
.mobile-nav-icon { font-size: 20px; border: 1.5px solid #333 !important; width: 40px; height: 40px; display: flex !important; align-items: center; justify-content: center; border-radius: 6px; color: #1a3c1a !important; cursor: pointer; background: #fff; transition: background .18s, color .18s; }
.mobile-nav-icon:hover { background: #e8f5e9; color: #2e7d32 !important; border-color: #2e7d32 !important; }

/* --- Form Section --- */
.form-section { padding: 52px 0 80px; background: #f4f6f4; min-height: calc(100vh - 220px); }

.form-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(0,0,0,.08);
    padding: 40px 40px 36px;
    max-width: 720px;
    margin: 0 auto;
}

/* Field labels */
.form-card .form-label {
    font-weight: 600;
    font-size: .9rem;
    color: #1a3c1a;
    margin-bottom: 6px;
}

/* Inputs */
.form-card .form-control,
.form-card .form-select {
    border-radius: 10px;
    border: 1.5px solid #d0e8d0;
    font-size: .92rem;
    padding: 10px 14px;
    transition: border-color .2s, box-shadow .2s;
}
.form-card .form-control:focus,
.form-card .form-select:focus {
    border-color: #2e7d32;
    box-shadow: 0 0 0 3px rgba(46,125,50,.12);
    outline: none;
}
.form-card .form-control.is-invalid { border-color: #e53935; }
.form-card .invalid-feedback { font-size: .82rem; }

/* Image preview */
#imagePreviewWrapper {
    display: none;
    margin-top: 12px;
    border-radius: 12px;
    overflow: hidden;
    border: 2px dashed #c8e6c9;
    background: #f1f8e9;
    max-height: 220px;
    text-align: center;
}
#imagePreview {
    max-height: 220px;
    max-width: 100%;
    object-fit: contain;
    padding: 8px;
}

/* Submit button */
.btn-add-product {
    background: #2e7d32;
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 12px 36px;
    font-size: .95rem;
    font-weight: 600;
    transition: background .25s, transform .2s;
    cursor: pointer;
}
.btn-add-product:hover { background: #1b5e20; transform: translateY(-2px); color: #fff; }

/* Cancel link */
.cancel-link { color: #888; font-size: .9rem; text-decoration: none; transition: color .2s; }
.cancel-link:hover { color: #2e7d32; }

/* Section divider inside form */
.form-divider { border: none; border-top: 1.5px solid #e8f5e9; margin: 28px 0; }

/* New-brand reveal box */
#newBrandWrapper {
    display: none;
    margin-top: 10px;
    padding: 14px 16px;
    background: #f1f8e9;
    border-radius: 10px;
    border: 1.5px dashed #a5d6a7;
    position: relative;
}
#newBrandWrapper label { font-size: .82rem; color: #2e7d32; font-weight: 600; margin-bottom: 6px; display:block; }
#newBrandWrapper .back-link {
    position: absolute;
    top: 14px; right: 14px;
    font-size: .78rem;
    color: #888;
    cursor: pointer;
    text-decoration: underline;
}
#newBrandWrapper .back-link:hover { color: #e53935; }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.partials.header.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <div class="product-page-hero">
        <div class="container">
            <div class="hero-text">
                <h1>Add New Product</h1>
                <p>Fill in the details below to add a product to the catalogue.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="background:transparent;padding:0;">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('root')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('product.index')); ?>">Products</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    

    
    <section class="form-section">
        <div class="container">

            
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert"
                     style="max-width:720px;margin:0 auto 24px;">
                    <i class="fa-solid fa-circle-check me-2"></i><?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <div class="form-card">
                <h4 style="font-weight:700;color:#1a3c1a;margin-bottom:6px;">Product Details</h4>
                <p style="color:#888;font-size:.88rem;margin-bottom:28px;">All fields marked <span style="color:#e53935;">*</span> are required.</p>

                <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>

                    
                    <div class="mb-4">
                        <label for="name" class="form-label">Product Name <span style="color:#e53935;">*</span></label>
                        <input type="text"
                               id="name"
                               name="name"
                               class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               value="<?php echo e(old('name')); ?>"
                               placeholder="e.g. Circuit Breaker 3P 400A"
                               autocomplete="off">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <div class="mb-4">
                        <label for="brandSelect" class="form-label">Brand <span style="color:#e53935;">*</span></label>

                        <?php if($brands->isEmpty()): ?>
                            
                            <input type="text"
                                   id="brandSelect"
                                   name="brand"
                                   class="form-control <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   value="<?php echo e(old('brand')); ?>"
                                   placeholder="e.g. ABB"
                                   autocomplete="off">
                            <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div style="font-size:.78rem;color:#888;margin-top:5px;">Enter the brand name for this product.</div>

                        <?php else: ?>
                            

                            
                            <input type="hidden" id="brandValue" name="brand" value="<?php echo e(old('brand')); ?>">

                            <select id="brandSelect"
                                    class="form-select <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="" disabled selected>— Select a brand —</option>
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($b); ?>"><?php echo e($b); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <option value="__new__">＋ Add new brand…</option>
                            </select>

                            <?php $__errorArgs = ['brand'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            
                            <div id="newBrandWrapper">
                                <label for="newBrandInput">New brand name</label>
                                <span class="back-link" id="cancelNewBrand">← back to list</span>
                                <input type="text"
                                       id="newBrandInput"
                                       class="form-control"
                                       placeholder="e.g. Siemens"
                                       autocomplete="off">
                            </div>

                        <?php endif; ?>
                    </div>

                    <hr class="form-divider">

                    
                    <div class="mb-4">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file"
                               id="image"
                               name="image"
                               class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               accept="image/jpeg,image/png,image/webp">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div style="font-size:.78rem;color:#888;margin-top:5px;">
                            Optional. JPG, PNG or WebP · max 2 MB
                        </div>
                        
                        <div id="imagePreviewWrapper">
                            <img id="imagePreview" src="#" alt="Preview">
                        </div>
                    </div>

                    
                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description"
                                  name="description"
                                  class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                  rows="8"
                                  placeholder="Supports Markdown format. Example:&#10;&#10;## Benefits&#10;- 50% faster connection time&#10;- Reduced effort with spring mode&#10;&#10;## Main Features&#10;- Connecting capacity from 0.2 to 25 mm²&#10;- Stainless steel for high corrosion resistance"><?php echo e(old('description')); ?></textarea>
                        <div style="font-size:.78rem;color:#888;margin-top:5px;">
                            Supports <strong>Markdown</strong>: use <code>## Heading</code> for sections and <code>- item</code> for bullet lists.
                        </div>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <hr class="form-divider">

                    
                    <div class="d-flex align-items-center gap-4">
                        <button type="submit" class="btn-add-product">
                            <i class="fa-solid fa-plus me-2"></i>Add Product
                        </button>
                        <a href="<?php echo e(route('product.index')); ?>" class="cancel-link">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </section>
    

    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script>
        // ===== Brand select / new-brand toggle =====
        const brandSelect      = document.getElementById('brandSelect');
        const brandValue       = document.getElementById('brandValue');
        const newBrandWrapper  = document.getElementById('newBrandWrapper');
        const newBrandInput    = document.getElementById('newBrandInput');
        const cancelNewBrand   = document.getElementById('cancelNewBrand');

        // Only run if the select exists (i.e. there are existing brands)
        if (brandSelect && brandValue !== null) {

            // Restore previous value after a validation error
            const oldBrand = brandValue.value;
            if (oldBrand) {
                // Check if oldBrand matches an existing option
                const match = [...brandSelect.options].find(
                    opt => opt.value.toLowerCase() === oldBrand.toLowerCase() && opt.value !== '__new__'
                );
                if (match) {
                    brandSelect.value = match.value;
                    brandValue.value  = match.value;
                } else {
                    // It was a new brand — reveal the new input
                    brandSelect.value    = '__new__';
                    newBrandWrapper.style.display = 'block';
                    newBrandInput.value  = oldBrand;
                }
            }

            // When select changes
            brandSelect.addEventListener('change', function () {
                if (this.value === '__new__') {
                    newBrandWrapper.style.display = 'block';
                    newBrandInput.focus();
                    brandValue.value = '';
                } else {
                    newBrandWrapper.style.display = 'none';
                    newBrandInput.value = '';
                    brandValue.value = this.value;
                }
            });

            // Sync hidden field as user types new brand
            newBrandInput.addEventListener('input', function () {
                brandValue.value = this.value.trim();
            });

            // Cancel new brand — go back to select
            if (cancelNewBrand) {
                cancelNewBrand.addEventListener('click', function () {
                    brandSelect.value = '';
                    newBrandWrapper.style.display = 'none';
                    newBrandInput.value = '';
                    brandValue.value   = '';
                });
            }
        }

        // ===== Live image preview =====
        document.getElementById('image').addEventListener('change', function () {
            const wrapper = document.getElementById('imagePreviewWrapper');
            const preview = document.getElementById('imagePreview');
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                    wrapper.style.display = 'block';
                };
                reader.readAsDataURL(this.files[0]);
            } else {
                wrapper.style.display = 'none';
                preview.src = '#';
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', ['title' => 'Add Product'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\+ Maman\Website SEP\esoftlaravel-10\esoftlaravel-10\Esoft-Laravel_v1.0\Esoft\resources\views/product/create.blade.php ENDPATH**/ ?>