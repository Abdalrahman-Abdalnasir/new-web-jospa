<?php $__env->startSection('title'); ?>
<?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
        <style>
.invoice-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s;
}
.invoice-card:hover {
    background-color: #f9f9f9;
}
.invoice-details {
    display: none;
    margin-top: 10px;
    padding: 15px;
    border-top: 1px solid #ccc;
    background-color: #fafafa;
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?php echo e(__('messages.invoice_cards_list')); ?></h3>

<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="invoice-card" onclick="toggleInvoiceDetails(<?php echo e($invoice->id); ?>)">
        <div>
            <strong><?php echo e($invoice->user->first_name); ?> <?php echo e($invoice->user->last_name); ?></strong>
        </div>
        <div>
            <?php echo e($invoice->created_at->format('Y-m-d H:i')); ?>

        </div>
    </div>

<div id="invoice-details-<?php echo e($invoice->id); ?>" class="invoice-details">
    <div style="background: #f7f7f7; border-radius: 10px; padding: 20px; margin-top: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
            <div>
                <strong><?php echo e(__('messages.total')); ?>:</strong>
            </div>
            <div>
                <span style="font-weight: bold; color: #333;"><?php echo e($invoice->final_total); ?> SR</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
            <div><?php echo e(__('messages.invoice_discount')); ?>:</div>
            <div style="color: #dc3545;">- <?php echo e($invoice->discount_amount); ?> SR</div>
        </div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <div><?php echo e(__('messages.loyalty_discount')); ?>:</div>
            <div style="color: #28a745;">- <?php echo e($invoice->loyalty_points_discount); ?> SR</div>
        </div>

        <h5 style="border-bottom: 1px solid #ddd; padding-bottom: 8px; margin-bottom: 15px;"><?php echo e(__('messages.bookings')); ?>:</h5>

        <?php
            $cartIds = json_decode($invoice->cart_ids, true);
            $bookings = Modules\Booking\Models\Booking::whereIn('id', $cartIds)->with('services', 'branch')->get();
        ?>

        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background: #ffffff; border: 1px solid #eee; border-radius: 8px; padding: 15px; margin-bottom: 10px;">
                <p style="margin-bottom: 5px;"><strong><?php echo e(__('messages.booking_id')); ?>:</strong> <?php echo e($booking->id); ?></p>
                <p style="margin-bottom: 10px;"><strong><?php echo e(__('messages.branch')); ?>:</strong> <?php echo e($booking->branch->name ?? '-'); ?></p>

                <?php $__currentLoopData = $booking->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="display: flex; justify-content: space-between; padding: 5px 0; border-top: 1px dashed #ddd;">
                        <span><?php echo e($service->service_name); ?></span>
                        <span><?php echo e($service->service_price); ?> SR</span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<script>
    function toggleInvoiceDetails(id) {
        const detailsDiv = document.getElementById(`invoice-details-${id}`);
        if (detailsDiv.style.display === 'none' || detailsDiv.style.display === '') {
            detailsDiv.style.display = 'block';
        } else {
            detailsDiv.style.display = 'none';
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/backend/invoice/index_datatable.blade.php ENDPATH**/ ?>