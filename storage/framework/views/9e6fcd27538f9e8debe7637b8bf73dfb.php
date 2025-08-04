<?php $__env->startSection('title'); ?> <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?> <?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    

<?php $__env->stopPush(); ?>
<?php $__env->startSection('banner-button'); ?>
<?php if(Auth::user()->can('booking_booking_tableview')): ?>
<a href="<?php echo e(route("backend.$module_name.datatable_view")); ?>" class="btn btn-dark"><i class="fa-solid fa-table"></i> <?php echo e(__('messages.datatable_view')); ?></a>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
      <div data-render="app">
        <calendar-view
          slot-duration="<?php echo e(setting('slot_duration')); ?>"
          status="<?php echo e(json_encode($statusList)); ?>"
          :branch-id="<?php echo e($selected_branch->id ?? 1); ?>"
          date=<?php echo e($date); ?>

          ></calendar-view>
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-scripts'); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="<?php echo e(mix("modules/booking/script.js")); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Booking/Resources/views/backend/bookings/index.blade.php ENDPATH**/ ?>