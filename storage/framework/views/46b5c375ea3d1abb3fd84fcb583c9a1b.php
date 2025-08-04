<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(language_direction()); ?>" class="theme-fs-sm">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(app_name()); ?></title>

    <link rel="stylesheet" href="<?php echo e(mix('css/libs.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/backend.css')); ?>">
    <?php if(language_direction() == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/rtl.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('custom-css/frontend.css')); ?>">

    <?php echo $__env->yieldPushContent('after-styles'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <!-- Lightning Progress Bar -->
    <?php echo $__env->make('components.frontend.progress-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Hero Section (30% of screen) -->
    <div class="position-relative" style="height: 40vh;">
        <img src="<?php echo e(asset('images/frontend/slider1.webp')); ?>" alt="Services Hero" class="w-100 h-100" style="object-fit: cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.35);"></div>

        <!-- First Navbar -->
        <?php echo $__env->make('components.frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Second Navbar -->
        <?php echo $__env->make('components.frontend.second-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Page Content -->
    <main>
        <?php echo $__env->make('components.frontend.services-section', compact('categories', 'services', 'packages'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>

    <!-- Footer -->
    <?php echo $__env->make('components.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/rontend/Resources/views/services.blade.php ENDPATH**/ ?>