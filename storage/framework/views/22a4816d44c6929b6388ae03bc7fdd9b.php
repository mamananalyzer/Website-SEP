<?php $__env->startSection('meta_description', 'PT. Suryamas Elsindo Primatama established since 1996 as an electrical distributor and sole agent in Indonesia. Authorized agent for ABB, TE Connectivity, RITZ Transformer, GE Grid Solution, Elmeasure, OME Motors, and Hilkar.'); ?>

<?php $__env->startSection('og_title', 'About PT. Suryamas Elsindo Primatama — Electrical Distributor in Indonesia'); ?>
<?php $__env->startSection('og_description', 'Established in 1996, PT. Suryamas Elsindo Primatama is a trusted electrical distributor and sole agent in Indonesia. Serving industries, panel makers, and contractors.'); ?>
<?php $__env->startSection('og_url', url('/about')); ?>
<?php $__env->startSection('og_image', asset('img/logo/logo-sep.webp')); ?>

<?php $__env->startSection('canonical', url('/about')); ?>

<?php $__env->startSection('json_ld'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About PT. Suryamas Elsindo Primatama",
  "url": "<?php echo e(url('/about')); ?>",
  "description": "PT. Suryamas Elsindo Primatama is an electrical distributor and sole agent in Indonesia since 1996.",
  "publisher": {
    "@type": "Organization",
    "name": "PT. Suryamas Elsindo Primatama",
    "url": "<?php echo e(url('/')); ?>"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo e(url('/')); ?>"},
      {"@type": "ListItem", "position": 2, "name": "About Us", "item": "<?php echo e(url('/about')); ?>"}
    ]
  }
}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_attribute'); ?>
    class="body"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    

    <?php echo $__env->make('layouts.partials.header.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- ===== HERO AREA START ======= -->
  <div class="pages-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="main-headding">
            <h1>About Us</h1>
            <p>
              PT. Suryamas Elsindo Primatama is an electrical and mechanical distributor
              and sole agent in Indonesia since 1996.
            </p>

            <div class="space30"></div>
            <div class="hero-btns">
              <a href="<?php echo e(route('any', 'contact')); ?>" class="theme-btn2">Contact Us</a>
              <a href="<?php echo e(route('any', 'product')); ?>" class="theme-btn3">View Products</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="hero-image shape-animaiton3">
            <img src="/img/about/logo-sep.webp" alt="Contact PT. Suryamas Elsindo Primatama — Electrical Distributor in Indonesia" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
    <img class="hero-shape1" src="/img/shapes/common-hero-shape1.png" alt="" />
    <img class="hero-shape2" src="/img/shapes/common-hero-shape2.png" alt="" />
  </div>
  <!-- ===== HERO AREA END ======= -->

  <!-- ===== ABOUT BOXS START ======= -->
  <div class="about-boxs">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-box">
            <div class="icon">
              <img src="/img/icons/about-page-box1.png" alt="" loading="lazy" />
            </div>
            <div class="headding2">
              <h2>1996</h2>
              <p>Established Since</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-box">
            <div class="icon">
              <img src="/img/icons/about-page-box2.png" alt="" loading="lazy" />
            </div>
            <div class="headding2">
              <h2>8+</h2>
              <p>International Brands</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="single-box">
            <div class="icon">
              <img src="/img/icons/about-page-box3.png" alt="" loading="lazy" />
            </div>
            <div class="headding2">
              <h2>100+</h2>
              <p>Trusted Clients</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== ABOUT BOXS END ======= -->

  <!-- ===== ABOUT PAGE AREA START ======= -->
  <div class="about-page-area1 sp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-img">
            <!-- Brand Carousel Section -->
            <img src="/img/about/Gemini_Generated_Image_jywfpljywfpljywf-removebg-preview.png" alt="PT. Suryamas Elsindo Primatama Operations" loading="lazy" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="headding2">
            <h2>Trusted Electrical Distributor &amp; Sole Agent in Indonesia</h2>
            <div class="space16"></div>
            <p>PT. Suryamas Elsindo Primatama is a company that has been providing electrical installation services and products since 1996. Our core business covers the sale and supply of electrical and mechanical (ME) components for industries, panel makers, automation, and retail markets. We are the sole agent for world-renowned brands such as ABB Entrelec, GE Grid Solution (formerly Alstom), RITZ Transformer (MWB), TE Connectivity, Elmeasure, OME Motors, and Hilkar.</p>

            <ul class="list">
              <li>
                <span><i class="fa-solid fa-check"></i></span> Sole Agent ABB, RITZ, TE Connectivity
              </li>
              <li>
                <span><i class="fa-solid fa-check"></i></span> Product Warranty &amp; Free Consultation
              </li>
              <li>
                <span><i class="fa-solid fa-check"></i></span> Serving All Across Indonesia
              </li>
            </ul>
            <div class="space30"></div>
            <a href="<?php echo e(route('any', 'contact')); ?>" class="theme-btn2">Contact Us Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== ABOUT PAGE AREA END ======= -->

  <!-- ===== ABOUT PAGE AREA 2 START ======= -->
  <div class="about-page-area2 _relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto text-center">
          <div class="headding2">
            <h2>Why Choose PT. Suryamas Elsindo Primatama?</h2>
            <div class="space16"></div>
            <p>With over 28 years of experience and direct support from global manufacturers, we are ready to meet all your electrical component needs.</p>
          </div>
        </div>
      </div>

      <div class="space30"></div>
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="space30"></div>
          <div class="left-image">
            <img src="/img/about/original-7ddd46be848d9dc2976055be3f7127f7.webp" alt="PT. Suryamas Elsindo Primatama Electrical Products" loading="lazy" />
          </div>
        </div>

        <div class="col-lg-5">
          <div class="about-page-boxs">
            <div class="single-box">
              <div class="icon">
                <img src="/img/icons/about-page-sec-icon1.png" alt="" loading="lazy" />
              </div>
              <div class="space20"></div>
              <div class="headding2">
                <h3><a href="<?php echo e(route('any', 'product')); ?>">International Quality Products</a></h3>
                <div class="space10"></div>
                <p>We supply electrical products from world-class brands with guaranteed quality and consistent stock availability.</p>
              </div>
            </div>

            <div class="single-box">
              <div class="icon">
                <img src="/img/icons/about-page-sec-icon2.png" alt="" loading="lazy" />
              </div>
              <div class="space20"></div>
              <div class="headding2">
                <h3><a href="<?php echo e(route('any', 'contact')); ?>">Free Technical Consultation</a></h3>
                <div class="space10"></div>
                <p>Our technical team is ready to provide the right product recommendations tailored to your project and industrial application needs.</p>
              </div>
            </div>

            <div class="single-box">
              <div class="icon">
                <img src="/img/icons/about-page-sec-icon3.png" alt="" loading="lazy" />
              </div>
              <div class="space20"></div>
              <div class="headding2">
                <h3><a href="<?php echo e(route('any', 'contact')); ?>">Nationwide Distribution Network</a></h3>
                <div class="space10"></div>
                <p>With strong logistics support, we are capable of delivering products to all regions across Indonesia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <img class="about-shape2" src="/img/shapes/common-hero-shape2.png" alt="" />
  </div>
  <!-- ===== ABOUT PAGE AREA 2 END ======= -->

  <!-- ===== CTA AREA START ======= -->
  <div class="email-innovation" style="background-image: url(/img/bg/others2-bg2.png); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="headding2-w">
            <h2>Ready to Partner with <br> PT. Suryamas Elsindo Primatama?</h2>
            <div class="space16"></div>
            <p>Contact our team to get pricing information, stock availability, and technical consultation for your electrical product needs.</p>

            <div class="space30"></div>

            <a href="<?php echo e(route('any', 'contact')); ?>" class="theme-btn3">Contact Us</a>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="images">
            <div class="image1">
              <img src="/img/about/4d29e262e93322d88730a478fd6bdea6.jpg" alt="" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ===== CTA AREA END ======= -->

  <!-- ===== BRAND LOGOS AREA START ======= -->
  <div class="brand-area3 sp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto text-center">
          <div class="headding2">
            <h2>Brands We Distribute</h2>
            <div class="space10"></div>
            <p>Trusted by world-class manufacturers, we are a reliable distribution partner for various electrical industry needs across Indonesia.</p>
            <div class="space20"></div>
            <a href="<?php echo e(route('any', 'product')); ?>" class="theme-btn2">View All Products</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="big-logo" data-tilt data-tilt-full-page-listening data-tilt-perspective="3000">
          <img src="/img/logo/brand-logo3-new.png" alt="Electrical brands distributed by PT. Suryamas Elsindo Primatama" loading="lazy" />
        </div>
      </div>
    </div>
  </div>
  <!-- ===== BRAND LOGOS AREA END ======= -->

    
    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', ['title' => 'About Us'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\+ Maman\Website SEP\esoftlaravel-10\esoftlaravel-10\Esoft-Laravel_v1.0\Esoft\resources\views/about.blade.php ENDPATH**/ ?>