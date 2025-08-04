<div class="text-end d-flex gap-2 align-items-center">
    
    <?php if($data->status == 'completed'): ?>
        <a href="<?php echo e(route('backend.bookings.invoice', ['id' => $data->id])); ?>"
            class="btn btn-sm btn-icon btn-soft-warning" data-bs-toggle="tooltip" data-bs-placement="top"
            title="View Details">
            <i class="fa-solid fa-eye"></i>
        </a>
    <?php endif; ?>
    <?php if(Auth::user()->can('delete_booking')): ?>
        <a href="<?php echo e(route("backend.$module_name.destroy", $data->id)); ?>" id="delete-<?php echo e($module_name); ?>-<?php echo e($data->id); ?>"
            class="btn btn-soft-danger btn-sm" data-type="ajax" data-method="DELETE" data-token="<?php echo e(csrf_token()); ?>"
            data-bs-toggle="tooltip" title="<?php echo e(__('messages.delete')); ?>"
            data-confirm="<?php echo e(__('messages.are_you_sure?', ['module' => __('booking.singular_title'), 'name' => $data->user->full_name ?? default_user_name()])); ?>">
            <i class="fa-solid fa-trash"></i></a>
    <?php endif; ?>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Booking/Resources/views/backend/bookings/datatable/action_column.blade.php ENDPATH**/ ?>