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

<body class="<?php echo e(auth()->user()->user_setting['theme_scheme'] ?? ''); ?>">

    <!-- Lightning Progress Bar -->
    <?php if (isset($component)) { $__componentOriginal1b363094b06f9500948ee3419f01db52 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b363094b06f9500948ee3419f01db52 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.progress-bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.progress-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b363094b06f9500948ee3419f01db52)): ?>
<?php $attributes = $__attributesOriginal1b363094b06f9500948ee3419f01db52; ?>
<?php unset($__attributesOriginal1b363094b06f9500948ee3419f01db52); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b363094b06f9500948ee3419f01db52)): ?>
<?php $component = $__componentOriginal1b363094b06f9500948ee3419f01db52; ?>
<?php unset($__componentOriginal1b363094b06f9500948ee3419f01db52); ?>
<?php endif; ?>

    <header class="shadow">
        <?php if (isset($component)) { $__componentOriginalda8f112ead44ebd77207d062b1cb8117 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda8f112ead44ebd77207d062b1cb8117 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.slider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal5fb469b9da69dc30a4591744f57abd9f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5fb469b9da69dc30a4591744f57abd9f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5fb469b9da69dc30a4591744f57abd9f)): ?>
<?php $attributes = $__attributesOriginal5fb469b9da69dc30a4591744f57abd9f; ?>
<?php unset($__attributesOriginal5fb469b9da69dc30a4591744f57abd9f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5fb469b9da69dc30a4591744f57abd9f)): ?>
<?php $component = $__componentOriginal5fb469b9da69dc30a4591744f57abd9f; ?>
<?php unset($__componentOriginal5fb469b9da69dc30a4591744f57abd9f); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalbeab383b7f54ce5420bf32fd7df4c499 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbeab383b7f54ce5420bf32fd7df4c499 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.second-navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.second-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbeab383b7f54ce5420bf32fd7df4c499)): ?>
<?php $attributes = $__attributesOriginalbeab383b7f54ce5420bf32fd7df4c499; ?>
<?php unset($__attributesOriginalbeab383b7f54ce5420bf32fd7df4c499); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbeab383b7f54ce5420bf32fd7df4c499)): ?>
<?php $component = $__componentOriginalbeab383b7f54ce5420bf32fd7df4c499; ?>
<?php unset($__componentOriginalbeab383b7f54ce5420bf32fd7df4c499); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal200788c274ded46c527712fd1d331a72 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal200788c274ded46c527712fd1d331a72 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.slider-hero','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.slider-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal200788c274ded46c527712fd1d331a72)): ?>
<?php $attributes = $__attributesOriginal200788c274ded46c527712fd1d331a72; ?>
<?php unset($__attributesOriginal200788c274ded46c527712fd1d331a72); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal200788c274ded46c527712fd1d331a72)): ?>
<?php $component = $__componentOriginal200788c274ded46c527712fd1d331a72; ?>
<?php unset($__componentOriginal200788c274ded46c527712fd1d331a72); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda8f112ead44ebd77207d062b1cb8117)): ?>
<?php $attributes = $__attributesOriginalda8f112ead44ebd77207d062b1cb8117; ?>
<?php unset($__attributesOriginalda8f112ead44ebd77207d062b1cb8117); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda8f112ead44ebd77207d062b1cb8117)): ?>
<?php $component = $__componentOriginalda8f112ead44ebd77207d062b1cb8117; ?>
<?php unset($__componentOriginalda8f112ead44ebd77207d062b1cb8117); ?>
<?php endif; ?>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (isset($component)) { $__componentOriginalbf18abedf5585b715c19d869055fa37a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf18abedf5585b715c19d869055fa37a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf18abedf5585b715c19d869055fa37a)): ?>
<?php $attributes = $__attributesOriginalbf18abedf5585b715c19d869055fa37a; ?>
<?php unset($__attributesOriginalbf18abedf5585b715c19d869055fa37a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf18abedf5585b715c19d869055fa37a)): ?>
<?php $component = $__componentOriginalbf18abedf5585b715c19d869055fa37a; ?>
<?php unset($__componentOriginalbf18abedf5585b715c19d869055fa37a); ?>
<?php endif; ?>


    <!-- ملفات JS -->
    <script src="<?php echo e(mix('js/backend.js')); ?>"></script>
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('after-scripts'); ?>
</body>

</html>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/rontend/Resources/views/layouts/master.blade.php ENDPATH**/ ?>