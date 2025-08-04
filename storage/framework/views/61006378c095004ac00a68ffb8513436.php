<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header border-bottom">
    <?php if(isset($title)): ?>
      <?php echo e($title); ?>

    <?php endif; ?>
    <button type="button" class="btn-close mb-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <?php echo e($slot); ?>

  </div>
  <div class="offcanvas-body">
    <?php if(isset($footer)): ?>
      <?php echo e($footer); ?>

    <?php endif; ?>
  </div>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/components/backend/advance-filter.blade.php ENDPATH**/ ?>