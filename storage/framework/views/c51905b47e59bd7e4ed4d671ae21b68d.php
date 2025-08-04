<link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">

<div class="position-relative rounded-4 overflow-hidden shadow" style="height: 260px;font-family: 'Lama Sans', sans-serif !important;font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic' : 'normal'); ?>;">
    <img src="<?php echo e($image ?? asset('images/frontend/slider1.webp')); ?>" alt="<?php echo e($name ?? 'Package'); ?>" class="w-100 h-100" style="object-fit: cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.6) 40%, rgba(0,0,0,0.0) 100%);"></div>
    <!-- View Package badge -->
    <div class="position-absolute top-0 start-0 m-3 px-3 py-1 rounded-pill text-white"
         style="width: 20% !important;background: black;cursor: pointer;height: 36px;width: 86px;text-align: center;line-height: 2.4;font-weight: bold;"
         data-bs-toggle="modal"
         data-bs-target="#packageModal"
         <?php if(isset($package_id)): ?> onclick="showPackageDetails(<?php echo e($package_id); ?>)" <?php endif; ?>>
       <?php echo e(__('messagess.view_package')); ?>

    </div> 
    <!-- Price badge -->
    <!--<?php if(isset($price)): ?>-->
    <!--    <div class="position-absolute top-0 end-0 m-3 px-3 py-1 rounded-pill text-white"-->
    <!--         style="background: rgba(0,0,0,0.7);">-->
    <!--        <?php echo e($price); ?>-->
    <!--    </div>-->
    <!--<?php endif; ?>-->
    <!-- Package info -->
    <div class="position-absolute start-50 translate-middle-x" style="bottom: 90px;">
        <div class="d-flex flex-row align-items-center text-center" style="margin: -22px;" >
            <svg style="width: 19px;height: 33px;color: #ffffff;margin: 10px;margin-bottom: 25px;" data-v-ff62b479="" class="svg-inline--fa fa-box" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path class="" fill="currentColor" d="M50.7 58.5L0 160l208 0 0-128L93.7 32C75.5 32 58.9 42.3 50.7 58.5zM240 160l208 0L397.3 58.5C389.1 42.3 372.5 32 354.3 32L240 32l0 128zm208 32L0 192 0 416c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-224z"></path></svg>
            <div class="text-white h3 fw-bold" style="white-space: nowrap;"><?php echo e($name ?? 'Package Name'); ?></div>
            <!--<?php if(isset($description)): ?>-->
            <!--    <div class="text-white-50 small mt-1"><?php echo e($description); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<?php if(isset($services_count)): ?>-->
            <!--    <div class="text-white-50 small mt-1">-->
            <!--        <svg width="16" height="16" fill="currentColor" class="me-1" viewBox="0 0 16 16">-->
            <!--            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>-->
            <!--            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>-->
            <!--        </svg>-->
            <!--        <?php echo e($services_count); ?> services included-->
            <!--    </div>-->
            <!--<?php endif; ?>-->
        </div>
    </div>
    <!-- Details Button -->
    <div class="position-absolute start-50 translate-middle-x w-fit d-flex justify-content-center px-5" style="bottom: 25px;">
        <?php if(isset($package_id)): ?>
            <a href="<?php echo e(route('home.details', $package_id)); ?>" class="btn rounded-pill py-2 text-center m-0 d-flex align-items-center justify-content-center text-white"
style="background-color: var(--primary-color);font-size: 17px;height: 44px;width: 100px;font-weight: bold;">
    <?php echo e(__('messagess.details')); ?>

</a>

        <?php else: ?>
          <a href="<?php echo e(route('home.details', $package_id)); ?>" class="btn rounded-pill py-2 text-center m-0 d-flex align-items-center justify-content-center text-white"
style="background-color: var(--primary-color);font-size: 17px;height: 44px;width: 100px;font-weight: bold;">
    <?php echo e(__('messagess.details')); ?>

</a>

        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\jospa\resources\views/components/frontend/package-card.blade.php ENDPATH**/ ?>