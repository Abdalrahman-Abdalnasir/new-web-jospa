<div>
    <div class="d-flex gap-2 align-items-center">
        <?php if(Auth::user()->can('branch_gallery')): ?>
            <button type='button' data-gallery-module="<?php echo e($data->id); ?>" data-gallery-target='#branch-gallery-form'
                data-gallery-event='branch_gallery' class='btn btn-soft-info btn-sm rounded text-nowrap'
                data-bs-toggle="tooltip" title="<?php echo e(__('messages.gallery_for_branch')); ?>"><i
                    class="fa-solid fa-images"></i></button>
        <?php endif; ?>
        <?php if(Auth::user()->can('edit_branch')): ?>
            <button type="button" class="btn btn-soft-primary btn-sm" data-crud-id="<?php echo e($data->id); ?>"
                title="<?php echo e(__('messages.edit')); ?> " data-bs-toggle="tooltip"> <i class="fa-solid fa-pen-clip"></i></button>
        <?php endif; ?>
        <?php if(Auth::user()->can('delete_branch')): ?>
            <a href="<?php echo e(route("backend.$module_name.destroy", $data->id)); ?>"
                id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>" class="btn btn-soft-danger btn-sm" data-type="ajax"
                data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>" data-bs-toggle="tooltip"
                title="<?php echo e(__('messages.delete')); ?>"
                data-confirm="<?php echo e(__('messages.are_you_sure?', ['module' => __('branch.singular_title'), 'name' => $data->name])); ?>">
                <i class="fa-solid fa-trash"></i></a>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/branch/action_column.blade.php ENDPATH**/ ?>