<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(app_name()); ?></title>

    <meta name="setting_options" content="<?php echo e(setting('customization_json')); ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('css/backend.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('custom-css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/customizer.css')); ?>">
    <?php if(isset($styles)): ?>
        <?php echo e($styles); ?>

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
    </style>
</head>

<body>
    <!-- Loader Start -->
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

    <?php if(isset($scripts)): ?>
        <?php echo e($scripts); ?>

    <?php endif; ?>

    <script>
      <?php echo setting('custom_js_block'); ?>

    </script>
</body>

</html>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/layouts/guest.blade.php ENDPATH**/ ?>