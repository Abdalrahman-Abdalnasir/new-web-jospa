<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(language_direction()); ?>" class="theme-fs-sm">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo e(asset(setting('logo'))); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset(setting('favicon'))); ?>">
    <meta name="keyword" content="<?php echo e(setting('meta_keyword')); ?>">
    <meta name="description" content="<?php echo e(setting('meta_description')); ?>">
    <meta name="setting_options" content="<?php echo e(setting('customization_json')); ?>">
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="<?php echo e(asset(setting('favicon'))); ?>">
    <link rel="icon" type="image/ico" href="<?php echo e(asset(setting('favicon'))); ?>" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="app_name" content="<?php echo e(app_name()); ?>">

    <meta name="data_table_limit" content="<?php echo e(setting('data_table_limit')); ?>">


    <meta name="auth_user_roles" content="<?php echo e(auth()->user()->roles->pluck('name')); ?>">


    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(app_name()); ?></title>

    <link rel="stylesheet" href="<?php echo e(mix('css/icon.min.css')); ?>">
    <?php if($isNoUISlider ?? ''): ?>
        <!-- NoUI Slider css -->
        <link rel="stylesheet" href="<?php echo e(asset('vendor/noUiSilder/style/nouislider.min.css')); ?>">
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('css/libs.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/backend.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('custom-css/dashboard.css')); ?>">

    <?php if(language_direction() == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/rtl.css')); ?>">
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/customizer.css')); ?>">

    <style>
        :root {
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

    <!-- Scripts -->
    <?php
        $currentLang = App::currentLocale();
        $langFolderPath = base_path("lang/$currentLang");
        $filePaths = \File::files($langFolderPath);
    ?>

    <?php $__currentLoopData = $filePaths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filePath): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $fileName = pathinfo($filePath, PATHINFO_FILENAME);

            $arr = require $filePath;
            $dbLang = Modules\Language\Models\Language::getAllLang()
                ->where('language', app()->getLocale())
                ->where('file', $fileName)
                ->pluck('value', 'key')
                ->toArray();
            if (count($dbLang) > 0) {
                $arr = array_merge($arr, $dbLang);
            }
        ?>
        <script>
            window.localMessagesUpdate = {
                ...window.localMessagesUpdate,
                "<?php echo e($fileName); ?>": <?php echo json_encode($arr, 15, 512) ?>
            }
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script>
        window.auth_permissions = <?php echo json_encode($permissions, 15, 512) ?>
    </script>
    <script>
        window.auth_profile_image = <?php echo json_encode(default_user_avatar(), 15, 512) ?>;
    </script>
    <script>
        window.translations = {
            processing: "<?php echo e(__('messages.processing')); ?>",
            search: "<?php echo e(__('messages.search')); ?>",
            all: "<?php echo e(__('messages.all')); ?>",
            lengthMenu: "<?php echo e(__('messages.lengthMenu')); ?>",
            info: "<?php echo e(__('messages.info')); ?>",
            infoEmpty: "<?php echo e(__('messages.infoEmpty')); ?>",
            infoFiltered: "<?php echo e(__('messages.infoFiltered')); ?>",
            loadingRecords: "<?php echo e(__('messages.loadingRecords')); ?>",
            zeroRecords: "<?php echo e(__('messages.zeroRecords')); ?>",
            paginate: {
                first: "<?php echo e(__('messages.paginate.first')); ?>",
                last: "<?php echo e(__('messages.paginate.last')); ?>",
                next: "<?php echo e(__('messages.paginate.next')); ?>",
                previous: "<?php echo e(__('messages.paginate.previous')); ?>"
            }
        };
    </script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    

    <?php echo $__env->yieldPushContent('after-styles'); ?>

    <?php if (isset($component)) { $__componentOriginal5a71c2c3670795ec464153e22b9d2874 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a71c2c3670795ec464153e22b9d2874 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.google-analytics','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('google-analytics'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
</head>

<body
    class="<?php echo e(!empty(getCustomizationSetting('card_style')) ? getCustomizationSetting('card_style') : ''); ?> <?php echo e(auth()->user()->user_setting['theme_scheme'] ?? ''); ?>">
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
    <!-- Sidebar -->
    <?php if(Auth::user()->can('menu_builder_sidebar')): ?>
        <?php echo $__env->make('backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- /Sidebar -->
    <div class="main-content wrapper">
        <div
            class="position-relative pr-hide <?php if(Auth::user()->can('menu_builder_sidebar')): ?>
<?php echo e(!isset($isBanner) ? 'iq-banner' : ''); ?> default
<?php endif; ?>">
            <!-- Header -->
            <?php echo $__env->make('backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /Header -->
            <?php if(!isset($isBanner)): ?>
                <!-- Header Banner Start-->
                <?php if(Auth::user()->can('menu_builder_sidebar')): ?>
                    <?php echo $__env->make('components.partials.sub-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
                <!-- Header Banner End-->
            <?php endif; ?>
        </div>

        <div class="conatiner-fluid content-inner pb-0" id="page_layout">
            <!-- Main content block -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- / Main content block -->
            <?php if(isset($export_import) && $export_import): ?>
                <div data-render="import-export">
                    <export-modal export-url="<?php echo e($export_url); ?>"
                        :module-column-prop="<?php echo e(json_encode($export_columns)); ?>"
                        module-name="<?php echo e($module_name); ?>"></export-modal>
                    <import-modal></import-modal>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer block -->
        <?php echo $__env->make('backend.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- / Footer block -->

    </div>

    <!-- Modal -->
    <div class="modal fade" data-iq-modal="renderer" id="renderModal" tabindex="-1" aria-labelledby="renderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" data-iq-modal="content">
                <div class="modal-header">
                    <h5 class="modal-title" data-iq-modal="title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" data-iq-modal="body">
                    <p>Modal body text goes here.</p>
                </div>
            </div>
        </div>
    </div>

    <?php if(!isset($global_booking)): ?>
        <div data-render="global-booking">
            <booking-form booking-type="GLOBAL_BOOKING"
                :booking-data="{ branch_id: <?php echo e($selected_branch->id ?? 0); ?> }"></booking-form>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('before-scripts'); ?>
    <?php if($isNoUISlider ?? ''): ?>
        <!-- NoUI Slider Script -->
        <script src="<?php echo e(asset('vendor/noUiSilder/script/nouislider.min.js')); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(mix('js/backend.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/iqonic-script/utility.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('laravel-js/modal-view.js')); ?>" defer></script>
    <script>
        const currencyFormat = (amount) => {
            const DEFAULT_CURRENCY = JSON.parse(<?php echo json_encode(json_encode(Currency::getDefaultCurrency(true)), 15, 512) ?>)
            const noOfDecimal = DEFAULT_CURRENCY.no_of_decimal
            const decimalSeparator = DEFAULT_CURRENCY.decimal_separator
            const thousandSeparator = DEFAULT_CURRENCY.thousand_separator
            const currencyPosition = DEFAULT_CURRENCY.currency_position
            const currencySymbol = DEFAULT_CURRENCY.currency_symbol
            return formatCurrency(amount, noOfDecimal, decimalSeparator, thousandSeparator, currencyPosition,
                currencySymbol)
        }
        window.currencyFormat = currencyFormat
        window.defaultCurrencySymbol = <?php echo json_encode(Currency::defaultSymbol(), 15, 512) ?>
    </script>
    <script src="<?php echo e(mix('js/booking-form.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/import-export.min.js')); ?>"></script>
    <?php if(isset($assets) && (in_array('textarea', $assets) || in_array('editor', $assets))): ?>
        <script src="<?php echo e(asset('vendor/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/tinymce/js/tinymce/jquery.tinymce.min.js')); ?>"></script>
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('after-scripts'); ?>
    <!-- / Scripts -->
    <script>
        $('.notification_list').on('click', function() {
            notificationList();
        });

        $(document).on('click', '.notification_data', function(event) {
            event.stopPropagation();
        })

        function notificationList(type = '') {
            var url = "<?php echo e(route('notification.list')); ?>";
            $.ajax({
                type: 'get',
                url: url,
                data: {
                    'type': type
                },
                success: function(res) {
                    $('.notification_data').html(res.data);
                    getNotificationCounts();
                    if (res.type == "markas_read") {
                        notificationList();
                    }
                    $('.notify_count').removeClass('notification_tag').text('');
                }
            });
        }

        function setNotification(count) {
            if (Number(count) >= 100) {
                $('.notify_count').text('99+');
            }
        }

        function getNotificationCounts() {
            var url = "<?php echo e(route('notification.counts')); ?>";

            $.ajax({
                type: 'get',
                url: url,
                success: function(res) {
                    if (res.counts > 0) {
                        $('.notify_count').addClass('notification_tag').text(res.counts);
                        setNotification(res.counts);
                        $('.notification_list span.dots').addClass('d-none')
                        $('.notify_count').removeClass('d-none')
                    } else {
                        $('.notify_count').addClass('d-none')
                        $('.notification_list span.dots').removeClass('d-none')
                    }

                    if (res.counts <= 0 && res.unread_total_count > 0) {
                        $('.notification_list span.dots').removeClass('d-none')
                    } else {
                        $('.notification_list span.dots').addClass('d-none')
                    }
                }
            });
        }

        getNotificationCounts();
    </script>

    <script>
        <?php echo setting('custom_js_block'); ?>

        <?php if(\Session::get('error')): ?>
            Swal.fire({
                title: 'Error',
                text: '<?php echo e(session()->get('error')); ?>',
                icon: "error",
                showClass: {
                    popup: 'animate__animated animate__zoomIn'
                },
                hideClass: {
                    popup: 'animate__animated animate__zoomOut'
                }
            })
        <?php endif; ?>
    </script>

</body>

</html>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/layouts/app.blade.php ENDPATH**/ ?>