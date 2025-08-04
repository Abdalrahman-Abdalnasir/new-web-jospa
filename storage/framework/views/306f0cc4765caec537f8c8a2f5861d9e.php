<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["href"=>"", "target" => "", "icon"=>"fas fa-plus-circle", "title", "small"=>"", "class"=>""]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["href"=>"", "target" => "", "icon"=>"fas fa-plus-circle", "title", "small"=>"", "class"=>""]); ?>
<?php foreach (array_filter((["href"=>"", "target" => "", "icon"=>"fas fa-plus-circle", "title", "small"=>"", "class"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<?php if($href): ?>
<a href='<?php echo e($href); ?>'
    class='btn btn-primary <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-bs-toggle="tooltip"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</a>
<?php else: ?>
<button type="button"
    class='btn btn-primary <?php echo e(($small=='true')? 'btn-sm' : ''); ?> <?php echo e($class); ?>'
    data-crud-id="0"
    title="<?php echo e($title); ?>">
    <i class="<?php echo e($icon); ?>"></i>
    <?php echo e($slot); ?>

</button>
<?php endif; ?>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/components/buttons/offcanvas.blade.php ENDPATH**/ ?>