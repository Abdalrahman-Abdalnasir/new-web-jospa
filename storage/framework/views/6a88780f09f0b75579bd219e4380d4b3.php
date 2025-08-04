

<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php if (isset($component)) { $__componentOriginal57a22d33ea7984d606412297cfe33b67 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57a22d33ea7984d606412297cfe33b67 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.section-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('toolbar', null, []); ?> 
                    <div class="flex-grow-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-end-0"><?php echo e(setting('inv_prefix')); ?></span>
                            </div>
                            <input type="text" class="form-control order-code" placeholder="code" name="code"
                                value="<?php echo e(isset($searchCode) ? $searchCode : ''); ?>">
                        </div>
                    </div>
                    <div>
                        <div class="datatable-filter" style="width: 100%; display: inline-block;">
                            <select name="payment_status" id="payment_status" class="select2 form-control"
                                data-filter="select">
                                <option value="">Payment Status</option>
                                <option value="paid">Paid</option>
                                <option value="unpaid">Unpaid</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="datatable-filter" style="width: 100%; display: inline-block;">
                            <select name="delivery_status" id="delivery_status" class="select2 form-control"
                                data-filter="select">
                                <option value="">Delivery Status</option>
                                <option value="order_placed">Order Placed</option>
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="table_search" class="form-control dt-search"
                            placeholder="<?php echo e(__('messages.search')); ?>...">
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $attributes = $__attributesOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__attributesOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57a22d33ea7984d606412297cfe33b67)): ?>
<?php $component = $__componentOriginal57a22d33ea7984d606412297cfe33b67; ?>
<?php unset($__componentOriginal57a22d33ea7984d606412297cfe33b67); ?>
<?php endif; ?>
            <table id="datatable" class="table table-striped border table-responsive">
            </table>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href='<?php echo e(mix('modules/product/style.css')); ?>'>
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src='<?php echo e(mix('modules/product/script.js')); ?>'></script>
    <script src="<?php echo e(asset('js/form-offcanvas/index.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>
    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

    <script type="text/javascript" defer>
        const columns = [{
                name: 'check',
                data: 'check',
                title: '<input type="checkbox" class="form-check-input" name="select_all_table" id="select-all-table" onclick="selectAllTable(this)">',
                width: '0%',
                exportable: false,
                orderable: false,
                searchable: false,
            },
            {
                data: 'order_code',
                name: 'order_code',
                title: "<?php echo e(__('messages.order_code')); ?>",
                orderable: false,
                searchable: false,
            },
            {
                data: 'customer_name',
                name: 'customer_name',
                title: "<?php echo e(__('booking.lbl_customer_name')); ?>",
                orderable: false,
            },
            {
                data: 'phone',
                name: 'phone',
                title: "<?php echo e(__('branch.lbl_contact_number')); ?>",
                orderable: false,
            },
            {
                data: 'placed_on',
                name: 'placed_on',
                title: "<?php echo e(__('messages.placed_on')); ?>",
                orderable: false,
                searchable: false,
            },
            {
                data: 'items',
                name: 'items',
                title: "<?php echo e(__('messages.items')); ?>",
                orderable: false,
                searchable: false,
            },
            {
                data: 'payment',
                name: 'payment',
                title: "<?php echo e(__('messages.payment')); ?>",
                orderable: false,
                searchable: false,
            },
            {
                data: 'type',
                name: 'type',
                title: "<?php echo e(__('messages.type')); ?>",
                orderable: false,
                searchable: false,
            },
            {
                data: 'status',
                name: 'status',
                title: "<?php echo e(__('messages.status')); ?>",
                orderable: false,
                searchable: false,
            },
        //    {
        //         data: 'location',
        //         name: 'location',
        //         title: "Location",
        //         orderable: false,
        //         searchable: false,
        //     },
            {
              data: 'updated_at',
              name: 'updated_at',
              title: "<?php echo e(__('product.lbl_update_at')); ?>",
              orderable: true,
              visible: false,
           },

        ]


        const actionColumn = [{
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            title: "<?php echo e(__('service.lbl_action')); ?>",
            width: '5%'
        }]

        let finalColumns = [
            ...columns,
            ...actionColumn
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.index_data")); ?>',
                finalColumns,
                orderColumn: [[ 9, "desc" ]],
                advanceFilter: () => {
                    return {
                        search: $('[name="table_search"]').val(),
                        code: $('[name="code"]').val(),
                        delivery_status: $('[name="delivery_status"]').val(),
                        payment_status: $('[name="payment_status"]').val(),
                        location_id: $('[name="location_id"]').val()
                    }
                }
            });
        })

        function resetQuickAction() {
            const actionValue = $('#quick-action-type').val();
            if (actionValue != '') {
                $('#quick-action-apply').removeAttr('disabled');

                if (actionValue == 'change-status') {
                    $('.quick-action-field').addClass('d-none');
                    $('#change-status-action').removeClass('d-none');
                } else {
                    $('.quick-action-field').addClass('d-none');
                }

            } else {
                $('#quick-action-apply').attr('disabled', true);
                $('.quick-action-field').addClass('d-none');
            }
        }

        $('#quick-action-type').change(function() {
            resetQuickAction()
        });

        $(document).on('input', '.order-code', function() {
            window.renderedDataTable.ajax.reload(null, false)
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Product/Resources/views/backend/order/index_datatable.blade.php ENDPATH**/ ?>