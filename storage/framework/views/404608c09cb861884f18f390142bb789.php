<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="theme-fs-sm">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/JOSPA.webp')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('images/JOSPA.webp')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo e(setting('meta_description')); ?>">
    <meta name="keyword" content="<?php echo e(setting('meta_keyword')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="setting_options" content="<?php echo e(setting('customization_json')); ?>">

    <title><?php echo e($title); ?> - <?php echo e(app_name()); ?></title>
    <!-- Styles -->
    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/hope-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pro.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/rtl.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('custom-css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/customizer.css')); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php echo $__env->yieldPushContent('after-styles'); ?>

    <!-- Analytics -->
    <?php if (isset($component)) { $__componentOriginal5a71c2c3670795ec464153e22b9d2874 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a71c2c3670795ec464153e22b9d2874 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.google-analytics','data' => ['config' => ''.e(setting('google_analytics')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('google-analytics'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['config' => ''.e(setting('google_analytics')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a71c2c3670795ec464153e22b9d2874)): ?>
<?php $attributes = $__attributesOriginal5a71c2c3670795ec464153e22b9d2874; ?>
<?php unset($__attributesOriginal5a71c2c3670795ec464153e22b9d2874); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a71c2c3670795ec464153e22b9d2874)): ?>
<?php $component = $__componentOriginal5a71c2c3670795ec464153e22b9d2874; ?>
<?php unset($__componentOriginal5a71c2c3670795ec464153e22b9d2874); ?>
<?php endif; ?>

    <style>
      <?php echo setting('custom_css_block'); ?>

    </style>
        <style>
        :root{
          <?php
            $rootColors = setting('root_colors'); // Assuming the setting() function retrieves the JSON string

            // Check if the JSON string is not empty and can be decoded
            if (!empty($rootColors) && is_string($rootColors)) {
                $colors = json_decode($rootColors, true);

                // Check if decoding was successful and the colors array is not empty
                if (json_last_error() === JSON_ERROR_NONE && is_array($colors) && count($colors) > 0) {
                    foreach ($colors as $key => $value) {
                        echo $key . ': ' . $value . '; ';
                    }
                } else {
                    echo 'Invalid JSON or empty colors array.';
                }
            }
            ?>

        }
        
        :root {
            --primary-color: #bf9456 !important;
            --primary: #bf9456 !important;
        }

        .btn-primary {
            background-color: #bf9456 !important;
            border-color: #bf9456 !important; 
        }
        
        .btn-primary:hover {
            background-color: #a8834b !important;
            border-color: #a8834b !important;
        }
        
        a {
            color: #bf9456 !important;
        }
        
        a:hover {
            color: #a8834b !important;
        }
        
        .text-primary {
            color: #bf9456 !important;
        }
        
        .border-primary {
            border-color: #bf9456 !important;
        }
        
        .bg-primary {
            background-color: #bf9456 !important;
        }
        
        .icon-primary {
            color: #bf9456 !important;
        }
        
        input:focus,
        textarea:focus,
        select:focus {
            border-color: #bf9456 !important;
            box-shadow: 0 0 0 0.2rem rgba(191, 148, 86, 0.25) !important;
            outline: none !important;
        }
        
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #bf9456 !important;
            box-shadow: 0 0 0 0.2rem rgba(191, 148, 86, 0.25) !important;
        }
        
        .form-control:focus,
        .form-select:focus {
            border-color: #bf9456 !important;
            box-shadow: 0 0 0 0.2rem rgba(191, 148, 86, 0.25) !important;
        }
    </style>
</head>

<body>
    <!-- Lo    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
ader Start -->
    <div id="loading">
        <?php if (isset($component)) { $__componentOriginalf80daca1d4ba3bfd47cff9992629f3e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf80daca1d4ba3bfd47cff9992629f3e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials._body_loader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials._body_loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf80daca1d4ba3bfd47cff9992629f3e4)): ?>
<?php $attributes = $__attributesOriginalf80daca1d4ba3bfd47cff9992629f3e4; ?>
<?php unset($__attributesOriginalf80daca1d4ba3bfd47cff9992629f3e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf80daca1d4ba3bfd47cff9992629f3e4)): ?>
<?php $component = $__componentOriginalf80daca1d4ba3bfd47cff9992629f3e4; ?>
<?php unset($__componentOriginalf80daca1d4ba3bfd47cff9992629f3e4); ?>
<?php endif; ?>
    </div>
    <!-- Loader End -->
    <div>
        <?php echo e($slot); ?>

    </div>
    <!-- Scripts -->
    <script src="<?php echo e(mix('js/backend.js')); ?>"></script>

    <script>
      <?php echo setting('custom_js_block'); ?>

    </script>
</body>

</html>
       <?php if(session('success')): ?>
            toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>

        <?php if(session('error')): ?>
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/layouts/auth.blade.php ENDPATH**/ ?>