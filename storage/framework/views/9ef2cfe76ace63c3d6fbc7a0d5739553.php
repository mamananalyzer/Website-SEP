<?php $__env->startSection('meta_description', 'Contact PT. Suryamas Elsindo Primatama for electrical product inquiries, quotation requests, or technical consultation. Phone: (021) 585-5064. Email: suryamas@cbn.net.id. Located in West Jakarta.'); ?>

<?php $__env->startSection('og_title', 'Contact PT. Suryamas Elsindo Primatama — Electrical Distributor Jakarta'); ?>
<?php $__env->startSection('og_description', 'Reach out to us for electrical product needs, price quotations, and technical consultation. Phone: (021) 585-5064. Jl. Meruya Ilir Raya No.51, West Jakarta.'); ?>
<?php $__env->startSection('og_url', url('/contact')); ?>
<?php $__env->startSection('og_image', asset('img/logo/logo-sep.webp')); ?>
<?php $__env->startSection('og_type', 'website'); ?>
<?php $__env->startSection('canonical', url('/contact')); ?>

<?php $__env->startSection('json_ld'); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact PT. Suryamas Elsindo Primatama",
  "url": "<?php echo e(url('/contact')); ?>",
  "description": "Contact page of PT. Suryamas Elsindo Primatama — electrical product distributor in Indonesia.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo e(url('/')); ?>"},
      {"@type": "ListItem", "position": 2, "name": "Contact Us", "item": "<?php echo e(url('/contact')); ?>"}
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
            <h1>Contact Us</h1>
            <p>
              Have a question or need a product quote? Our team is ready to assist you
              with technical consultation and electrical product solutions.
            </p>

            <div class="space30"></div>
            <div class="hero-btns">
              <a href="https://wa.me/6287744500052?text=Hello%2C%20I%20am%20interested%20in%20your%20electrical%20products.%20Could%20you%20please%20provide%20more%20information%3F" target="_blank" rel="noopener noreferrer" class="theme-btn2">Call Us Now</a>
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

  <!-- ===== CONTACT PAGE AREA START ======= -->
  <div class="contact-page-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="common-main-headding">
            <h2>Get In Touch</h2>
            <p>We're here to help with your electrical product needs. Reach out to our team via the form below,
              by phone, or by email — and we'll get back to you within one business day.</p>
          </div>
        </div>
      </div>

      <div class="space60"></div>
      <div class="contact-form-all">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.892990312537!2d106.73367535920171!3d-6.192685831898418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76ef0b802cd%3A0xb05189fedb7cadb6!2sPT.%20Suryamas%20Elsindo%20Primatama!5e0!3m2!1sen!2sid!4v1772079309542!5m2!1sen!2sid" width="700" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
          </div>

          <div class="col-lg-5">
            <div class="contact-page-boxs">
              <div class="single-box">
                <div class="icon">
                  <img src="/img/icons/contact-page-icon1.png" alt="" loading="lazy" />
                </div>
                <div class="headding">
                  <h3 style="font-size:1rem;">Phone</h3>
                  <a href="tel:+62215855064">(021) 585-5064</a><br>
                  <a href="tel:+62215854077">(021) 585-4077</a>
                </div>
              </div>

              <div class="single-box">
                <div class="icon">
                  <img src="/img/icons/contact-page-icon2.png" alt="" loading="lazy" />
                </div>
                <div class="headding">
                  <h3 style="font-size:1rem;">Email</h3>
                  <a href="mailto:suryamas@cbn.net.id">suryamas@cbn.net.id</a>
                </div>
              </div>

              <div class="single-box">
                <div class="icon">
                  <img src="/img/icons/contact-page-icon3.png" alt="" loading="lazy" />
                </div>
                <div class="headding">
                  <h3 style="font-size:1rem;">Business Hours</h3>
                  <a href="#">Monday – Friday: 08:00 – 17:00 WIB</a>
                </div>
              </div>

              <div class="single-box">
                <div class="icon">
                  <i class="fa-solid fa-location-dot" style="font-size:1.5rem;color:#70B966;"></i>
                </div>
                <div class="headding">
                  <h3 style="font-size:1rem;">Office Address</h3>
                  <a href="https://www.google.com/maps/search/?api=1&query=PT.+Suryamas+Elsindo+Primatama+Jl.+Meruya+Ilir+Raya+No.51+Jakarta+Barat"
                     target="_blank" rel="noopener">
                    Blok M No.51, Jl. Meruya Ilir Raya No.51,<br>
                    RT.6/RW.7, Meruya Utara,<br>
                    West Jakarta, DKI Jakarta 11620
                  </a>
                </div>
              </div>

              <div class="single-box" style="
                margin-top:20px;
                background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);
                border-radius: 12px;
                padding: 16px 20px;
                display: flex;
                align-items: center;
                gap: 12px;
                border: 1px solid #388e3c;
              ">
                <i class="fa-brands fa-whatsapp" style="font-size:1.8rem; color:#a5d6a7;"></i>
                <div style="flex:1;">
                  <p style="margin:0; color:#c8e6c9; font-size:0.78rem; font-weight:600; text-transform:uppercase; letter-spacing:0.05em;">Quick Chat</p>
                  <a href="https://wa.me/6287744500052?text=Hello%2C%20I%20am%20interested%20in%20your%20electrical%20products.%20Could%20you%20please%20provide%20more%20information%3F" target="_blank" rel="noopener noreferrer"
                     style="color:#ffffff; font-weight:700; font-size:0.95rem; text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-top:2px;">
                    Chat via WhatsApp
                    <i class="fa-solid fa-arrow-right" style="font-size:0.75rem; transform:rotate(-45deg); color:#a5d6a7;"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <img class="shape1" src="/img/shapes/apps-shape2.png" alt="" />
    <img class="shape2" src="/img/shapes/apps-shape1.png" alt="" />
    <img class="shape3" src="/img/shapes/apps-shape1.png" alt="" />
  </div>
  <!-- ===== CONTACT PAGE AREA END ======= -->

  <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', ['title' => 'Contact Us'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\+ Maman\Website SEP\esoftlaravel-10\esoftlaravel-10\Esoft-Laravel_v1.0\Esoft\resources\views/contact.blade.php ENDPATH**/ ?>