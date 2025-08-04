<div class="d-flex gap-2 align-items-center">
    <?php if(Auth::user()->can('edit_subcategory')): ?>
        <button type="button" class="btn btn-soft-primary btn-sm" data-crud-id="<?php echo e($data->id); ?>"
            data-parent-id="<?php echo e($data->parent_id); ?>" data-bs-toggle="tooltip" title="<?php echo e(__('messages.edit')); ?>"> <i
                class="fa-solid fa-pen-clip"></i></button>
    <?php endif; ?>
    <?php if(Auth::user()->can('delete_subcategory')): ?>
        <a href="<?php echo e(route("backend.$module_name.destroy", $data->id)); ?>" id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>"
            class="btn btn-soft-danger btn-sm" data-type="ajax" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>"
            data-bs-toggle="tooltip" title="<?php echo e(__('messages.delete')); ?>"
            data-confirm="<?php echo e(__('messages.are_you_sure?', ['module' => __('category.sub_category'), 'name' => $data->name])); ?>">
            <i class="fa-solid fa-trash"></i></a>
    <?php endif; ?>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Category/Resources/views/backend/categories/sub_action_column.blade.php ENDPATH**/ ?>