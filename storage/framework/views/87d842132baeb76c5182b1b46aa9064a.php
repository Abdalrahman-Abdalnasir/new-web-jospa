<div class="d-flex gap-2 align-items-center">
    <?php if(Auth::user()->can('staff_password')): ?>
        <button type='button' data-assign-module="<?php echo e($data->id); ?>" data-assign-target='#Employee_change_password'
            data-assign-event='employee_assign' class='btn btn-soft-info btn-sm rounded text-nowrap' data-bs-toggle="tooltip"
            title="<?php echo e(__('messages.change_password')); ?>

        "><i class="fas fa-key"></i></button>
    <?php endif; ?>
    <?php if(Auth::user()->can('edit_staff')): ?>
        <button type="button" class="btn btn-soft-primary btn-sm" data-crud-id="<?php echo e($data->id); ?>"
            title="<?php echo e(__('messages.edit')); ?> " data-bs-toggle="tooltip"> <i class="fa-solid fa-pen-clip"></i></button>
    <?php endif; ?>
    <?php if(Auth::user()->can('delete_staff')): ?>
        <a href="<?php echo e(route("backend.$module_name.destroy", $data->id)); ?>" id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>"
            class="btn btn-soft-danger btn-sm" data-type="ajax" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>"
            data-bs-toggle="tooltip" title="<?php echo e(__('messages.delete')); ?>"
            data-confirm="<?php echo e(__('messages.are_you_sure?', ['module' => __('employee.singular_title'), 'name' => $data->full_name])); ?>">
            <i class="fa-solid fa-trash"></i></a>
    <?php endif; ?>

</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Employee/Resources/views/backend/employees/action_column.blade.php ENDPATH**/ ?>