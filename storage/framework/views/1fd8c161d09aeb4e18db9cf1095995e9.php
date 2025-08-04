<div class="d-flex gap-3 align-items-center">
  <img src="<?php echo e($data->feature_image ?? default_user_avatar()); ?>" alt="avatar" class="avatar avatar-40 rounded-pill">
  <div>
    <p class="m-0"><?php echo e($data->name ?? default_user_name()); ?></p>
    <?php if(isset($email)): ?>
    <small><?php echo e($email); ?></small>
    <?php endif; ?>
  </div>
</div><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/branch/branch_id.blade.php ENDPATH**/ ?>