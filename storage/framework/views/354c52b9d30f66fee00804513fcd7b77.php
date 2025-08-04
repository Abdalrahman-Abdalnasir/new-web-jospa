

<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table table-striped border table-responsive">
            </table>
        </div>
    </div>
    <div data-render="app">
        <client-package-form-offcanvas>
        </client-package-form-offcanvas>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('modules/package/style.css')); ?>">
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(mix('modules/package/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form-offcanvas/index.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>

    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

    <script type="text/javascript" defer>
        const columns = [{
                data: 'username',
                name: 'username',
                title: "<?php echo e(__('customer.singular_title')); ?>"
            },
            {
                data: 'packagename',
                name: 'packagename',
                title: "<?php echo e(__('package.singular_title')); ?>"
            },
            {
                data: 'qty',
                name: 'qty',
                title: "<?php echo e(__('package.no_of_services')); ?>"
            },
            {
                data: 'package_price',
                name: 'package_price',
                title: "<?php echo e(__('package.lbl_package_price')); ?>"
            },
            {
                data: 'startdate',
                name: 'startdate',
                title: "<?php echo e(__('start Date')); ?>"
            },
            {
                data: 'expirydate',
                name: 'expirydate',
                title: "<?php echo e(__('expiry Date')); ?>"
            },
            {
                data: 'updated_at',
                name: 'updated_at',
                title: "<?php echo e(__('service.lbl_update_at')); ?>",
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

        // const customFieldColumns = JSON.parse(<?php echo json_encode($columns, 15, 512) ?>)

        let finalColumns = [
            ...columns,
            // ...customFieldColumns,
            ...actionColumn
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.clientPackageData")); ?>',
                finalColumns,
                orderColumn: [[ 6, "desc" ]],
                advanceFilter: () => {
                    return {}
        }
            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Package/Resources/views/backend/packages/clientPacakge_datatable.blade.php ENDPATH**/ ?>