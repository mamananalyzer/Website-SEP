<!DOCTYPE html>
<html lang="<?php echo e($lang ?? 'id'); ?>" <?php echo $__env->yieldContent('html_attribute'); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title><?php echo e($metaTitle ?? ($title . ' — PT. Suryamas Elsindo Primatama')); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996. Agen resmi ABB, TE Connectivity, RITZ, Elmeasure, OME Motors, dan Hilkar.'); ?>">
    <meta name="robots" content="<?php echo $__env->yieldContent('meta_robots', 'index, follow'); ?>">
    <meta name="author" content="PT. Suryamas Elsindo Primatama">

    
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical', url()->current()); ?>">

    
    <meta property="og:site_name" content="PT. Suryamas Elsindo Primatama">
    <meta property="og:type" content="<?php echo $__env->yieldContent('og_type', 'website'); ?>">
    <meta property="og:url" content="<?php echo $__env->yieldContent('og_url', url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('og_title', ($metaTitle ?? ($title . ' — PT. Suryamas Elsindo Primatama'))); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996.'); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', asset('img/logo/og-default.webp')); ?>">
    <meta property="og:locale" content="id_ID">

    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('og_title', ($metaTitle ?? ($title . ' — PT. Suryamas Elsindo Primatama'))); ?>">
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('og_description', 'PT. Suryamas Elsindo Primatama adalah distributor dan sole agent produk kelistrikan di Indonesia sejak 1996.'); ?>">
    <meta name="twitter:image" content="<?php echo $__env->yieldContent('og_image', asset('img/logo/og-default.webp')); ?>">

    
    <?php if(isset($logo5)): ?>
        <link rel="shortcut icon" href="/img/logo/cropped-logo-sep-putih-32x32.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/cropped-logo-sep-putih-32x32.png">
    <?php elseif(isset($logo3)): ?>
        <link rel="shortcut icon" href="/img/logo/cropped-logo-sep-putih-32x32.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/cropped-logo-sep-putih-32x32.png">
    <?php else: ?>
        <link rel="shortcut icon" href="/img/logo/cropped-logo-sep-putih-32x32.png" type="image/x-icon">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/cropped-logo-sep-putih-32x32.png">
    <?php endif; ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/logo/logo-sep.webp">

    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss']); ?>

    <?php echo $__env->yieldContent('css'); ?>

    
    <?php echo $__env->yieldContent('json_ld'); ?>

</head>

<body <?php echo $__env->yieldContent('body_attribute'); ?>>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js']); ?>

</body>

</html><?php /**PATH F:\+ Maman\Website SEP\esoftlaravel-10\esoftlaravel-10\Esoft-Laravel_v1.0\Esoft\resources\views/layouts/base.blade.php ENDPATH**/ ?>