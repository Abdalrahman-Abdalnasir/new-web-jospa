<?php if(Auth::user()->can('menu_builder_sidebar')): ?>
<div class="sidebar-base pr-hide
            <?php echo e(getCustomizationSetting('sidebar_show') == 'sidebar-none' ? 'sidebar-none' : 'sidebar'); ?>

            <?php echo e(!empty(getCustomizationSetting('sidebar_menu_style')) ? getCustomizationSetting('sidebar_menu_style') : 'left-bordered'); ?>

            <?php echo e(getCustomizationSetting('sidebar_color')); ?>

            <?php echo e(!empty(getCustomizationSetting('sidebar_type')) ? implode(' ',getCustomizationSetting('sidebar_type')) : ''); ?>

            "
            data-toggle="main-sidebar" id="sidebar" data-sidebar="responsive">
    <div class="d-flex align-items-center justify-content-start">
        <div class="logo-main">
            <a href="<?php echo e(route('backend.dashboard')); ?>" class="navbar-brand" >
            <img class="logo-normal img-fluid" src="<?php echo e(asset('images/JOSPA.webp')); ?>" height="30" alt="<?php echo e(app_name()); ?>">
                <img class="logo-normal dark-normal img-fluid" src="<?php echo e(asset('images/JOSPA.webp')); ?>" height="30" alt="<?php echo e(app_name()); ?>">
                <img class="logo-mini img-fluid" src="<?php echo e(asset('images/JOSPA.webp')); ?>" height="30" alt="<?php echo e(app_name()); ?>">
                <img class="logo-mini dark-mini img-fluid" src="<?php echo e(asset('images/JOSPA.webp')); ?>" height="30" alt="<?php echo e(app_name()); ?>">
            </a>
        </div>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">  
                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list" id="sidebar">
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
              <?php
                  $menu = new \App\Http\Middleware\GenerateMenus();
                  $menu = $menu->handle('menu', 'vertical', 'ARRAY_MENU');
              ?>
                <?php echo $__env->make(config('laravel-menu.views.bootstrap-items'), ['items' => $menu->roots()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                
                <!-- عنصر ثابت مخصص -->
                <li class="nav-item <?php echo e(request()->routeIs('app.invoice') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('app.invoice')); ?>" class="nav-link <?php echo e(request()->routeIs('app.invoice') ? 'active' : ''); ?>">
                        <i class="fa fa-file-invoice"></i>
                        <span class="item-name"><?php echo e(__('messagess.invoice')); ?></span>
                    </a>
                </li>
                <!-- عنصر ثابت مخصص -->
                <li class="nav-item <?php echo e(request()->routeIs('app.gift') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('app.gift')); ?>" class="nav-link <?php echo e(request()->routeIs('app.gift') ? 'active' : ''); ?>">
                        <i class="fa fa-chart-bar"></i>
                        <span class="item-name"><?php echo e(__('messagess.gifts')); ?></span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="sidebar-footer"></div>
</div>
<?php endif; ?>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/includes/sidebar.blade.php ENDPATH**/ ?>