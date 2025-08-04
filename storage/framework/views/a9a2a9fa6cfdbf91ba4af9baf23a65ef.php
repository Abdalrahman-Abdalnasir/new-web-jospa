

<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('modules/earning/style.css')); ?>">
<?php $__env->stopPush(); ?>

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
                    
                    <div class="input-group flex-nowrap">
                      <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                      <input type="text" class="form-control dt-search" placeholder="<?php echo e(__('messages.search')); ?>..." aria-label="Search" aria-describedby="addon-wrapping">
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
            <table id="datatable" class="table border table-responsive">
            </table>
        </div>
    </div>
    <div data-render="app">
        <earning-form-offcanvas create-title="<?php echo e(__('messages.create')); ?> <?php echo e(__('messages.new')); ?> <?php echo e(__($module_title)); ?>"
            edit-title="<?php echo e(__('messages.create')); ?> <?php echo e(__('messages.create')); ?> <?php echo e(__('Staff Payout')); ?> "></earning-form-offcanvas>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <!-- DataTables Core and Extensions -->
    <script src="<?php echo e(mix('modules/earning/script.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', (event) => {
            window.renderedDataTable = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
              
                dom: '<"row align-items-center"><"table-responsive my-3" rt><"row align-items-center" <"col-md-6" l><"col-md-6" p>><"clear">',
                ajax: {
                    "type"   : "GET",
                    "url"    : '<?php echo e(route("backend.$module_name.index_data")); ?>',
                    "data"   : function( d ) {
                    d.search = {
                        value: $('.dt-search').val()
                    };
                    d.filter = {
                        column_status: $('#column_status').val()
                    }
                    },
                },
                columns: [
                    { data: 'first_name',name: 'first_name', title: "<?php echo e(__('messages.name')); ?>" ,  orderable: true },
                    { data: 'total_booking', name: 'total_booking', title: "<?php echo e(__('earning.lbl_tot_booking')); ?>",  orderable: false, searchable: false },
                    { data: 'total_service_amount', name: 'total_service_amount', title: "<?php echo e(__('earning.lbl_total_earning')); ?>",  orderable: true , searchable: false},
                    { data: 'total_commission_earn', name: 'total_commission_earn', title: "<?php echo e(__('earning.lbl_total_commission')); ?>", orderable: true, searchable: false},
                    { data: 'total_tips_earn', name: 'total_tips_earn', title: "<?php echo e(__('earning.lbl_total_tip')); ?>", orderable: true, searchable: false},
                    { data: 'total_pay', name: 'total_pay', title: "<?php echo e(__('earning.lbl_staff_earning')); ?>", orderable: false, searchable: false },
                    { data: 'action', name: 'action', title: "<?php echo e(__('earning.lbl_action')); ?>", orderable: false, searchable: false }
                ]
            });
        })


        const formOffcanvas = document.getElementById('form-offcanvas')

        const instance = bootstrap.Offcanvas.getOrCreateInstance(formOffcanvas)

        $(document).on('click', '[data-crud-id]', function() {
            setEditID($(this).attr('data-crud-id'), $(this).attr('data-parent-id'))
        })

        function setEditID(id, parent_id) {
            if (id !== '' || parent_id !== '') {
                const idEvent = new CustomEvent('crud_change_id', {
                    detail: {
                        form_id: id,
                        parent_id: parent_id
                    }
                })
                document.dispatchEvent(idEvent)
            } else {
                removeEditID()
            }
            instance.show()
        }

        function removeEditID() {
            const idEvent = new CustomEvent('crud_change_id', {
                detail: {
                    form_id: 0,
                    parent_id: null
                }
            })
            document.dispatchEvent(idEvent)
        }

        formOffcanvas?.addEventListener('hidden.bs.offcanvas', event => {
            removeEditID()
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Earning/Resources/views/backend/earnings/index_datatable.blade.php ENDPATH**/ ?>