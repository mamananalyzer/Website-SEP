<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html_attribute'); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>

    
    <?php if(isset($logo5)): ?>
        <link rel="shortcut icon" href="/img/logo/title5.png" type="image/x-icon">
    <?php elseif(isset($logo3)): ?>
        <link rel="shortcut icon" href="/img/logo/titile3.png" type="image/x-icon">
    <?php else: ?>
        <link rel="shortcut icon" href="/img/logo/titel1.png" type="image/x-icon">
    <?php endif; ?>

    <!--===== CSS LINK =======-->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss']); ?>

    <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="body2 body <?php echo $__env->yieldContent('body_attribute'); ?>">

    <?php echo $__env->make('layouts.partials.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('layouts.partials.header.navbar6', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('layouts.partials.cta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('scripts'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js']); ?>

</body>

</html><?php /**PATH F:\+ Maman\Website SEP\esoftlaravel-10\esoftlaravel-10\Esoft-Laravel_v1.0\Esoft\resources\views/layouts/landing.blade.php ENDPATH**/ ?>