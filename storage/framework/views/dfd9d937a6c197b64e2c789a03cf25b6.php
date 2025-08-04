<div class="d-flex gap-2 align-items-center">

    <button type="button" class="btn btn-soft-primary btn-sm" data-crud-id="<?php echo e($data->id); ?>"
        title="<?php echo e(__('messages.edit')); ?> " data-bs-toggle="tooltip"> <i class="fa-solid fa-pen-clip"></i></button>


    <a href="<?php echo e(route('backend.country.destroy', $data->id)); ?>" id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>"
        class="btn btn-soft-danger btn-sm" data-type="ajax" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>"
        data-bs-toggle="tooltip" title="<?php echo e(__('messages.delete')); ?>"
        data-confirm="<?php echo e(__('messages.are_you_sure?', ['module' => __('country.singular_title'), 'name' => $data->name])); ?>">
        <i class="fa-solid fa-trash"></i></a>

</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/BussinessHour/Resources/views/backend/shifts/action_column.blade.php ENDPATH**/ ?>