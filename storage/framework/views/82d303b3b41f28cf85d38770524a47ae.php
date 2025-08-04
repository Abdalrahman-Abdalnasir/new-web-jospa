

<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__('promotion.coupon_title')); ?>

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
                <div class="d-flex flex-wrap gap-3">
                    <div>
                        <button type="button" class="btn btn-secondary" data-modal="export">
                            <i class="fa-solid fa-download"></i> <?php echo e(__('messages.export')); ?>

                        </button>
                    </div>
                </div>
                 <?php $__env->slot('toolbar', null, []); ?> 
                    <div>
                        <a href="<?php echo e(route('backend.promotions.index')); ?>"
                        class="float-right btn btn-sm btn-primary"><i class="fa fa-angle-double-left"></i>
                        <?php echo e(__('messages.back')); ?></a>

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
    <div data-render="app">
        <form-offcanvas create-title="<?php echo e(__('messages.create')); ?> <?php echo e(__($module_title)); ?>"
            edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__($module_title)); ?>">
        </form-offcanvas>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('modules/promotion/style.css')); ?>">

    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(mix('modules/promotion/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form-offcanvas/index.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>

    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

    <script type="text/javascript" defer>
        const columns = [{
                data: 'coupon_code',
                name: 'coupon_code',
                title: "<?php echo e(__('promotion.coupon_code')); ?>",
            },
            {
                data: 'value',
                name: 'value',
                title: "<?php echo e(__('promotion.value')); ?>"
            },
            {
                data: 'use_limit',
                name: 'use_limit',
                title: "<?php echo e(__('promotion.use_limit')); ?>"
            },
            {
                data: 'used_by',
                name: 'used_by',
                title: "<?php echo e(__('promotion.user')); ?>"
            },
            {
                data: 'is_expired',
                name: 'is_expired',
                orderable: true,
                searchable: true,
                title: "<?php echo e(__('promotion.lbl_expired')); ?>",
                width: '5%',

            },

            {
                data: 'updated_at',
                name: 'updated_at',
                title: "<?php echo e(__('promotion.lbl_update_at')); ?>",
                orderable: true,
                visible: false,
            },

        ]



        let finalColumns = [
            ...columns,
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.coupon_data", $promotion_id)); ?>',
                finalColumns,
                advanceFilter: () => {
                    return {}
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
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Promotion/Resources/views/backend/promotions/coupon_datatable.blade.php ENDPATH**/ ?>