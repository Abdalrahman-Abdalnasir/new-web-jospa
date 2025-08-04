<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
  if ($item->hasChildren()) {
      if (
          $item
              ->children()
              ->where('isActive', true)
              ->first() !== null
      ) {
          $active = 'active';
      } else {
          $active = '';
      }
  } else {
      $active = '';
  }
  ?>
    <li <?php $lm_attrs = $item->attr(); ob_start(); ?> <?php if($item->hasChildren()): ?> class="nav-item" <?php endif; ?> <?php echo \Lavary\Menu\Builder::mergeStatic(ob_get_clean(), $lm_attrs); ?>>
        <?php if($item->link): ?>
            <a <?php $lm_attrs = $item->link->attr(); ob_start(); ?>
                class="nav-link menu-arrow"
                <?php if($item->hasChildren()): ?>
                    data-bs-toggle="collapse" role="button"
                    aria-expanded="<?php echo e($active != '' ? 'true' : 'false'); ?>" aria-controls="collapseExample"
                <?php endif; ?>
                <?php echo \Lavary\Menu\Builder::mergeStatic(ob_get_clean(), $lm_attrs); ?> href="<?php echo $item->url(); ?>">
            <?php echo $item->title; ?>

            <?php if($item->hasChildren()): ?>
                <?php if($item->parent !== null): ?>
                    <i class="right-icon">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </i>
                <?php endif; ?>
            <?php endif; ?>
            </a>
        <?php endif; ?>
        <?php if($item->hasChildren()): ?>
            <ul class="iq-header-sub-menu list-unstyled collapse  <?php echo e($active != '' ? 'show' : ''); ?>" id="<?php echo str_replace('#', '', $item->link->attr()['href'] ?? ''); ?>"
                data-bs-parent="<?php echo $item->link->attr()['data-bs-parent'] ?? '#sidebar-menu'; ?>">
                <?php echo $__env->make('vendor.laravel-menu.custom-menu-items', ['items' => $item->children()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        <?php endif; ?>
      </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/vendor/laravel-menu/custom-menu-items.blade.php ENDPATH**/ ?>