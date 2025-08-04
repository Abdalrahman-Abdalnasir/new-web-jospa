<div class="d-flex gap-2 align-items-center">
    <?php if(Auth::user()->can('edit_page')): ?>
        <button type="button" class="btn btn-soft-primary btn-sm" data-crud-id="<?php echo e($data->id); ?>"
            title="<?php echo e(__('messages.edit')); ?> <?php echo e(__($module_title)); ?>" data-bs-toggle="tooltip"> <i
                class="fa-solid fa-pen-clip"></i></button>
    <?php endif; ?>
    <?php if(Auth::user()->can('delete_page')): ?>
        <a href="<?php echo e(route("backend.$module_name.destroy", $data->id)); ?>" id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>"
            class="btn btn-soft-danger btn-sm" data-type="ajax" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>"
            data-bs-toggle="tooltip" title="<?php echo e(__('messages.delete')); ?> <?php echo e(__($module_title)); ?>"
            data-confirm="<?php echo e(__('messages.are_you_sure?', ['module' => __('page.title'), 'name' => $data->name])); ?>"> <i
                class="fa-solid fa-trash"></i></a>
    <?php endif; ?>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Page/Resources/views/backend/pages/action_column.blade.php ENDPATH**/ ?>