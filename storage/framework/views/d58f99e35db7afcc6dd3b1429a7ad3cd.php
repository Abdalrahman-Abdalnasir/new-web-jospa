<?php $__env->startSection('title'); ?>
<?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?php echo e(__('messages.gift_cards_list')); ?></h3>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th><?php echo e(__('messages.delivery_method')); ?></th>
                <th><?php echo e(__('messages.sender_name')); ?></th>
                <th><?php echo e(__('messages.recipient_name')); ?></th>
                <th><?php echo e(__('messages.sender_phone')); ?></th>
                <th><?php echo e(__('messages.recipient_phone')); ?></th>
                <th><?php echo e(__('messages.selected_services')); ?></th>
                <th><?php echo e(__('messages.subtotal')); ?></th>
                <th><?php echo e(__('messages.created_at')); ?></th>
                <th><?php echo e(__('messages.updated_at')); ?></th>
                <th><?php echo e(__('messages.action')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $gifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($gift->delivery_method ?? '-'); ?></td>
                <td><?php echo e($gift->sender_name ?? '-'); ?></td>
                <td><?php echo e($gift->recipient_name ?? '-'); ?></td> 
                <td><?php echo e($gift->sender_phone ?? '-'); ?></td>
                <td><?php echo e($gift->recipient_phone ?? '-'); ?></td>  
                <td>
                    <?php $__currentLoopData = $gift->services_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge bg-primary"><?php echo e($service->name); ?></span> <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
                <td><?php echo e($gift->subtotal ?? '-'); ?></td> 
                <td><?php echo e($gift->created_at ? $gift->created_at->format('Y-m-d') : '-'); ?></td>
                <td><?php echo e($gift->updated_at ? $gift->updated_at->format('Y-m-d') : '-'); ?></td>
                <td>
                    <a href="<?php echo e(route('gift.delete', $gift->id)); ?>" id="delete-bookings-138" class="btn btn-soft-danger btn-sm" onclick="return confirm('<?php echo e(__('messages.confirm_delete')); ?>');">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="11" class="text-center"><?php echo e(__('messages.no_gift_cards')); ?></td>
                </tr>
            <?php endif; ?>
       
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/gift/index_datatable.blade.php ENDPATH**/ ?>