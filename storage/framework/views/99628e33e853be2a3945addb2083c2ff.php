 
<?php $__env->startSection('title'); ?> <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?> <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<script>
    if (window.location.hash === '' || window.location.hash === '#/') {
        window.location.href = '/app/settings#/commission';
    }
</script>

<meta name="setting_local" content="none">
<input type="hidden" name="admin-profile" value="<?php echo e(asset('images/JOSPA.webp')); ?>">
<input type="hidden" name="logo" value="<?php echo e(asset('images/JOSPA.webp')); ?>">
<input type="hidden" name="mini-logo" value="<?php echo e(asset('images/JOSPA.webp')); ?>">
<input type="hidden" name="dark-logo" value="<?php echo e(asset('images/JOSPA.webp')); ?>">
<input type="hidden" name="dark-mini-logo" value="<?php echo e(asset('images/JOSPA.webp')); ?>">
<input type="hidden" name="favicon" value="<?php echo e(asset('images/JOSPA.webp')); ?>">

<div id="setting-app"></div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
  <style>
    .modal-backdrop {
      --bs-backdrop-zindex: 1030;
    }
  </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('after-scripts'); ?>
<script src="<?php echo e(asset('js/setting-vue.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/settings/index.blade.php ENDPATH**/ ?>