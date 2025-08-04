<select name="branch_for" class="select2 change-select" data-token="<?php echo e(csrf_token()); ?>" data-url="<?php echo e(route('backend.branch.update_select', ['id' => $data->id, 'action_type' => 'update-branch-for'])); ?>" style="width: 100%; position: relative !important;">
  <?php $__currentLoopData = $branch_for_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($key); ?>" <?php echo e($data->branch_for == $key ? 'selected' : ''); ?>><?php echo e($value); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/branch/select_column.blade.php ENDPATH**/ ?>