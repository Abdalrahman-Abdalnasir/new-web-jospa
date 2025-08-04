<?php if(isset($data->payment)): ?>

    <?php if($data->payment->payment_status != 1): ?>
        <select name="branch_for" class="select2 change-select" data-token="<?php echo e(csrf_token()); ?>"
            data-url="<?php echo e(route('backend.bookings.updatePaymentStatus', ['id' => $data->id, 'action_type' => 'update-payment-status'])); ?>"
            style="width: 100%;" <?php echo e($data->status !== 'completed' ? 'disabled' : ''); ?>>
            <?php $__currentLoopData = $payment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value->value); ?>" 
                    <?php echo e($data->payment->payment_status == $value->value ? 'selected' : ($value->name == 'pending' ? 'selected' : '')); ?>>
                    <?php echo e($value->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

    <?php else: ?>

        <?php $__currentLoopData = $payment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(isset($data->payment)): ?>
                <?php if($data->payment->payment_status == $value->value): ?>
                    <span class="text-capitalize badge bg-soft-info p-3"><?php echo e($value->name); ?></span>
                <?php endif; ?>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endif; ?> 

<?php else: ?>

    <select name="branch_for" class="select2 change-select" data-token="<?php echo e(csrf_token()); ?>"
        data-url="<?php echo e(route('backend.bookings.updatePaymentStatus', ['id' => $data->id, 'action_type' => 'update-payment-status'])); ?>"
        style="width: 100%;" disabled>
        <?php $__currentLoopData = $payment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($value->value); ?>" <?php echo e($value->value == '0' ? 'selected' : ''); ?>>
                <?php echo e($value->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

<?php endif; ?>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Booking/Resources/views/backend/bookings/datatable/select_payment_status.blade.php ENDPATH**/ ?>