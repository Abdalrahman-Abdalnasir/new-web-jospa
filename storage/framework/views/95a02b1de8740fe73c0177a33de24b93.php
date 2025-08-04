

<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('banner-button'); ?>
    <a href="<?php echo e(route("backend.$module_name.index")); ?>" class="btn btn-soft-dark"><i
            class="fa-solid fa-calendar-days me-2"></i><?php echo e(__('messages.calender_view')); ?></a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
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
                    <?php if(auth()->user()->can('edit_booking') || auth()->user()->can('delete_booking')): ?>
                        <?php if (isset($component)) { $__componentOriginal9c2603df095322fce98f15251ab0847f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2603df095322fce98f15251ab0847f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route('backend.bookings.bulk_action')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('backend.bookings.bulk_action')).'']); ?>
                            <div class="">
                                <select name="action_type" class="form-control select2 col-12" id="quick-action-type"
                                    style="width:100%">
                                    <option value=""><?php echo e(__('messages.no_action')); ?></option>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_booking')): ?>
                                        <option value="change-status"><?php echo e(__('messages.status')); ?></option>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_booking')): ?>
                                        <option value="delete"><?php echo e(__('messages.delete')); ?></option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="select-status d-none quick-action-field" id="change-status-action">
                                <select name="status" class="form-control select2" id="status" style="width:100px">
                                    <?php $__currentLoopData = $booking_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($value->name !== 'completed'): ?>
                                            <option value="<?php echo e($value->name); ?>"
                                                <?php echo e($filter['status'] == $value->name ? 'selected' : ''); ?>>
                                                <?php echo e($value->value); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <div>
                        <div class="datatable-filter">
                            <select name="column_status" id="column_status" class="select2 form-control p-10"
                                data-filter="select" style="width: 100%">
                                <option value=""><?php echo e(__('messages.all_status')); ?></option>
                                <?php $__currentLoopData = $booking_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->name); ?>"
                                        <?php echo e($filter['status'] == $value->name ? 'selected' : ''); ?>>
                                        <?php echo e($value->value); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control dt-search" placeholder="<?php echo e(__('messages.search')); ?>..."
                            aria-label="Search" aria-describedby="addon-wrapping">
                    </div>
                    <button class="btn btn-outline-primary btn-group" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i
                            class="fa-solid fa-filter"></i> <?php echo e(__('messages.advance_filter')); ?></button>
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
        </div>
        <div class="card-body" id="booking-datatable">
            <table id="datatable" class="table table-striped border table-responsive">
            </table>
        </div>
        <?php if (isset($component)) { $__componentOriginalda1c96c62b8380f4858a938b2701631b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda1c96c62b8380f4858a938b2701631b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.advance-filter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.advance-filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <h4> <?php echo e(__('booking.lbl_advanced_filter')); ?></h4>
             <?php $__env->endSlot(); ?>
            <form action="javascript:void(0)" class="datatable-filter">
                <div class="form-group">
                    <label for="form-label"> <?php echo e(__('booking.lbl_booking_date')); ?></label>
                    <input type="text" name="booking_date" id="booking_date"
                        placeholder="<?php echo e(__('booking.booking_date')); ?>" class="booking-date-range form-control" readonly />
                </div>
                <div class="form-group">
                    <label for="form-label"> <?php echo e(__('booking.lbl_customer_name')); ?> </label>
                    <select name="filter_user_id" id="column_user_id" data-placeholder="<?php echo e(__('booking.customer_name')); ?>"
                        name="column_user_id" data-filter="select" class="select2 form-control"
                        data-ajax--url="<?php echo e(route('backend.get_search_data', ['type' => 'customers'])); ?>"
                        data-ajax--cache="true">
                    </select>
                </div>
                <div class="form-group">
                    <label for="form-label"> <?php echo e(__('booking.lbl_staff_name')); ?> </label>
                    <select name="filter_employee_id" id="column_employee_id"
                        data-placeholder="<?php echo e(__('booking.staff_name')); ?>" name="column_employee_id" data-filter="select"
                        class="select2 form-control"
                        data-ajax--url="<?php echo e(route('backend.get_search_data', ['type' => 'employees'])); ?>"
                        data-ajax--cache="true">
                    </select>
                </div>
                <div class="form-group">
                    <label for="form-label"> <?php echo e(__('booking.lbl_services')); ?> </label>
                    <select name="filter_service_id" id="column_service_id"
                        data-placeholder="<?php echo e(__('booking.select_service')); ?>" name="column_service_id[]"
                        data-filter="select" class="select2 form-control" multiple
                        data-ajax--url="<?php echo e(route('backend.get_search_data', ['type' => 'services'])); ?>"
                        data-ajax--cache="true">
                    </select>
                </div>
                <button type="reset" class="btn btn-danger" id="reset-filter"><?php echo e(__('messages.reset')); ?></button>
            </form>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda1c96c62b8380f4858a938b2701631b)): ?>
<?php $attributes = $__attributesOriginalda1c96c62b8380f4858a938b2701631b; ?>
<?php unset($__attributesOriginalda1c96c62b8380f4858a938b2701631b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda1c96c62b8380f4858a938b2701631b)): ?>
<?php $component = $__componentOriginalda1c96c62b8380f4858a938b2701631b; ?>
<?php unset($__componentOriginalda1c96c62b8380f4858a938b2701631b); ?>
<?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(mix('modules/booking/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>
    <!-- DataTables Core and Extensions -->

    <script type="text/javascript">
        const range_flatpicker = document.querySelectorAll('.booking-date-range')
        Array.from(range_flatpicker, (elem) => {
            if (typeof flatpickr !== typeof undefined) {
                flatpickr(elem, {
                    mode: "range",
                    dateFormat: "Y-m-d",
                })
            }
        })
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
                data: 'id',
                name: 'id',
                title: "ID",
                orderable: true,
                visible: true,
            },
            {
                data: 'start_date_time',
                name: 'start_date_time',
                title: "<?php echo e(__('booking.lbl_date')); ?>",
                orderable: true,
            },
            {
                data: 'user_id',
                name: 'user_id',
                title: "<?php echo e(__('booking.lbl_customer_name')); ?>"
            },
            {
                data: 'service_amount',
                name: 'service_amount',
                title: "<?php echo e(__('booking.lbl_amount')); ?>",
                orderable: true,
                searchable: false,
                // render: function(data, type, row) {

                //     return currencyFormat(data);

                // }
            },
            {
                data: 'service_duration',
                name: 'service_duration',
                title: "<?php echo e(__('booking.lbl_duration')); ?>",
                orderable: true,
                searchable: false,
            },
            {
                data: 'employee_id',
                name: 'employee_id',
                title: "<?php echo e(__('booking.lbl_staff_name')); ?>"
            },
            {
                data: 'services',
                name: 'services',
                title: "<?php echo e(__('booking.lbl_services')); ?>",
                orderable: false,
                searchable: true,
                width: '10%'
            },
            {
                data: 'packages',
                name: 'packages',
                title: "<?php echo e(__('booking.lbl_packages')); ?>",
                orderable: false,
                searchable: false,
                width: '10%'
            },
            {
                data: 'updated_at',
                name: 'updated_at',
                title: "<?php echo e(__('booking.lbl_update_at')); ?>",
                orderable: true,
                visible:false,
            },
            {
                data: 'status',
                name: 'status',
                orderable: true,
                searchable: true,
                title: "<?php echo e(__('booking.lbl_status')); ?>",
                width: '10%',
            },
            {
                data: 'payment_status',
                name: 'payment_status',
                orderable: false,
                searchable: false,
                title: "<?php echo e(__('booking.lbl_payment_status')); ?>",
                width: '10%',
            },
        ]

        const actionColumn = [{
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            title: "<?php echo e(__('booking.lbl_action')); ?>",
            width: '10%'
        }]

        let finalColumns = [
            ...columns,
            ...actionColumn
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.index_data")); ?>',
                finalColumns,
                orderColumn: [
                    [9, "desc"]
                ],
                advanceFilter: () => {
                    return {
                        booking_date: $('#booking_date').val(),
                        user_id: $('#column_user_id').val(),
                        emploee_id: $('#column_employee_id').val(),
                        service_id: $('#column_service_id').val(),
                    }
                }
            })
        })
        const offcanvasElem = document.querySelector('#offcanvasExample')
        offcanvasElem.addEventListener('shown.bs.offcanvas', function() {
            $('form.datatable-filter .select2').select2({
                dropdownParent: $('#offcanvasExample')
            });
        })

        $('#reset-filter').on('click', function(e) {
            $('#column_status').val('')
            $('#booking_date').val('')
            $('#column_user_id').val('')
            $('#column_employee_id').val('')
            $('#column_service_id').val('')
            $('form.datatable-filter .select2').empty()
            $('form.datatable-filter .select2').select2()

            const range_flatpickers = document.querySelectorAll('.booking-date-range');
            Array.from(range_flatpickers, (elem) => {
                const flatpickrInstance = elem._flatpickr;
                if (flatpickrInstance) {
                    flatpickrInstance.clear();
                }
            });

            window.renderedDataTable.ajax.reload(null, false)
        })

        $('#booking_date').on('change', function() {
            window.renderedDataTable.ajax.reload(null, false)
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Booking/Resources/views/backend/bookings/index_datatable.blade.php ENDPATH**/ ?>