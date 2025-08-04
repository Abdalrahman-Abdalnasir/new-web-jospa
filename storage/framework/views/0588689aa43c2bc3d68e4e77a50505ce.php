<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["toolbar"=>"", "subtitle"=>""]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["toolbar"=>"", "subtitle"=>""]); ?>
<?php foreach (array_filter((["toolbar"=>"", "subtitle"=>""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="d-flex justify-content-between flex-column flex-md-row gap-3">
    <div>
      <?php echo e($slot); ?>

    </div>
    <?php if($toolbar != ""): ?>
    <div class="btn-toolbar gap-2 align-items-center flex-column flex-md-row" role="toolbar" aria-label="Toolbar with buttons">
        <?php echo e($toolbar); ?>

    </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/components/backend/section-header.blade.php ENDPATH**/ ?>