<?php if($data->status != 'completed' && $data->status != 'cancelled'): ?>
<select name="branch_for" class="select2 change-select" data-token="<?php echo e(csrf_token()); ?>" data-url="<?php echo e(route('backend.bookings.updateStatus', ['id' => $data->id, 'action_type' => 'update-status'])); ?>" style="width: 100%;">
  <?php $__currentLoopData = $booking_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $color = $booking_colors->where('sub_type', $data->status)->first()->name;
    ?>
    <option value="<?php echo e($value->name); ?>" <?php echo e($data->status == $value->name ? 'selected' : ''); ?> data-color="<?php echo e($color); ?>"><?php echo e($value->value); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php elseif($data->status === 'cancelled'): ?>
      <?php
      $color = $booking_colors->where('sub_type', $data->status)->first()->name;
      ?>
      <span class="text-capitalize"><i class="fa-solid fa-circle" style="color: <?php echo e($color); ?>"></i> <?php echo e($data->status); ?></span>
<?php else: ?>
      <?php
      $color = $booking_colors->where('sub_type', $data->status)->first()->name;
      ?>
      <span class="text-capitalize"><i class="fa-solid fa-circle" style="color: <?php echo e($color); ?>"></i> <?php echo e($data->status); ?></span>
<?php endif; ?>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Booking/Resources/views/backend/bookings/datatable/select_column.blade.php ENDPATH**/ ?>