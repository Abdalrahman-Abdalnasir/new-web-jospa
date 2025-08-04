<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('modules/constant/style.css')); ?>">
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
                <div class="d-flex flex-wrap gap-3">
                    <?php if(auth()->user()->can('edit_staff') || auth()->user()->can('delete_staff')): ?>
                        <?php if (isset($component)) { $__componentOriginal9c2603df095322fce98f15251ab0847f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2603df095322fce98f15251ab0847f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route("backend.$module_name.bulk_action")).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route("backend.$module_name.bulk_action")).'']); ?>
                            <div class="">
                                <select name="action_type" class="form-control select2 col-12" id="quick-action-type"
                                    style="width:100%">
                                    <option value=""><?php echo e(__('messages.no_action')); ?></option>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_staff')): ?>
                                        <option value="change-status"><?php echo e(__('messages.status')); ?></option>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_staff')): ?>
                                        <option value="delete"><?php echo e(__('messages.delete')); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="select-status d-none quick-action-field" id="change-status-action">
                                <select name="status" class="form-control select2" id="status" style="width:100%">
                                    <option value="1"><?php echo e(__('messages.active')); ?></option>
                                    <option value="0"><?php echo e(__('messages.inactive')); ?></option>
                                </select>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c2603df095322fce98f15251ab0847f)): ?>
<?php $attributes = $__attributesOriginal9c2603df095322fce98f15251ab0847f; ?>
<?php unset($__attributesOriginal9c2603df095322fce98f15251ab0847f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c2603df095322fce98f15251ab0847f)): ?>
<?php $component = $__componentOriginal9c2603df095322fce98f15251ab0847f; ?>
<?php unset($__componentOriginal9c2603df095322fce98f15251ab0847f); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <div>
                        <button type="button" class="btn btn-secondary" data-modal="export">
                            <i class="fa-solid fa-download"></i> <?php echo e(__('messages.export')); ?>

                        </button>
                        
                        
                        
                    </div>
                </div>
                 <?php $__env->slot('toolbar', null, []); ?> 
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control dt-search" placeholder="<?php echo e(__('messages.search')); ?>..."
                            aria-label="Search" aria-describedby="addon-wrapping">
                    </div>
                    <?php if(Auth::user()->can('add_staff')): ?>
                        <?php if (isset($component)) { $__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.offcanvas','data' => ['target' => '#form-offcanvas','title' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.offcanvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['target' => '#form-offcanvas','title' => '']); ?><?php echo e(__('messages.new')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8)): ?>
<?php $attributes = $__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8; ?>
<?php unset($__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8)): ?>
<?php $component = $__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8; ?>
<?php unset($__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8); ?>
<?php endif; ?>
                    <?php endif; ?>
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

    <div data-render="app" class="<?php echo e($selected_branch_id); ?>">
        <employee-offcanvas :selected-session-branch-id="<?php echo e($selected_branch_id !== '' ? $selected_branch_id : null); ?>"
            default-image="<?php echo e(default_user_avatar()); ?>"
            create-title="<?php echo e(__('messages.new')); ?> <?php echo e(__('employee.singular_title')); ?> "
            edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__('employee.singular_title')); ?>"
            :customefield="<?php echo e(json_encode($customefield)); ?>">
        </employee-offcanvas>
        <change-password create-title="<?php echo e(__('messages.change_password')); ?> "></change-password>
        <service-view-offcanvas></service-view-offcanvas>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(mix('modules/employee/script.js')); ?>"></script>
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
            data: 'employee_id',
            name: 'employee_id',
             title: "<?php echo e(__('booking.lbl_staff_name')); ?>"    
            },
            // {
            //     data: 'image',
            //     name: 'image',
            //     title: "<?php echo e(__('employee.lbl_image')); ?>",
            //     orderable: false,
            //     searchable: false
            // },
            // {
            //     data: 'first_name',
            //     name: 'first_name',
            //     title: "<?php echo e(__('employee.lbl_first_name')); ?>"
            // },
            // {
            //     data: 'last_name',
            //     name: 'last_name',
            //     title: "<?php echo e(__('employee.lbl_last_name')); ?>"
            // },
            // {
            //     data: 'email',
            //     name: 'email',
            //     title: "<?php echo e(__('employee.lbl_Email')); ?>"
            // },
            {
                data: 'service',
                name: 'service',
                title: "<?php echo e(__('package.lbl_no_name')); ?>",
                orderable: false,
                searchable: false
            },
            {
                data: 'branch_id',
                name: 'branch_id',
                title: "<?php echo e(__('branch.title')); ?>",
                orderable: false,
                searchable: false
            },
            {
                data: 'shift_id',
                name: 'shift_id',
                title: "<?php echo e(__('employee.lbl_shift')); ?>",
                orderable: false,
                searchable: false
            },
            {
                data: 'is_manager',
                name: 'is_manager',
                title: "<?php echo e(__('employee.lbl_role')); ?>"
            },
            {
                data: 'email_verified_at',
                name: 'email_verified_at',
                orderable: true,
                searchable: false,
                title: "<?php echo e(__('employee.lbl_verification_status')); ?>"
            },
            {
                data: 'wallet_balance',
                name: 'wallet_balance',
                orderable: false,
                searchable: true,
                title: "<?php echo e(__('customer.wallet_balance')); ?>"
            },
            {
                data: 'created_at',
                name: 'created_at',
                title: "<?php echo e(__('customer.lbl_create_at')); ?>",
                orderable: true,
                visible: false,
            },

            // {
            //     data: 'is_banned',
            //     name: 'is_banned',
            //     orderable: true,
            //     searchable: true,
            //     title: "<?php echo e(__('employee.lbl_blocked')); ?>"
            // },
            {
                data: 'status',
                name: 'status',
                orderable: true,
                searchable: true,
                title: "<?php echo e(__('employee.lbl_status')); ?>"
            },
            {
                data: 'updated_at',
                name: 'updated_at',
                title: "<?php echo e(__('customer.lbl_update_at')); ?>",
                orderable: true,
                visible: false,
            },
        ]

        const actionColumn = [{
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
             title: "<?php echo e(__('employee.lbl_action')); ?>"
       }]

        const customFieldColumns = JSON.parse(<?php echo json_encode($columns, 15, 512) ?>)

        let finalColumns = [
            ...columns,
            ...customFieldColumns,
            ...actionColumn
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.index_data")); ?>',
                finalColumns,
                orderColumn: [
                    [7, "desc"]
                ],
            })
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

        $(document).on('update_quick_action', function() {
            // resetActionButtons()
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Employee/Resources/views/backend/employees/index.blade.php ENDPATH**/ ?>