

<?php $__env->startSection('title'); ?> <?php echo e(__('profile.title')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="profile-app"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
  <style>
    .modal-backdrop {
      --bs-backdrop-zindex: 1030;
    }
  </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('after-scripts'); ?>
<script src="<?php echo e(asset('js/profile-vue.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/profile/index.blade.php ENDPATH**/ ?>