

<?php $__env->startSection('title'); ?>
<?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('after-styles'); ?>
<link rel="stylesheet" href="<?php echo e(mix('modules/tax/style.css')); ?>">
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

            <div>
                <?php if(auth()->user()->can('edit_tax') || auth()->user()->can('delete_tax')): ?>
                <?php if (isset($component)) { $__componentOriginal9c2603df095322fce98f15251ab0847f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2603df095322fce98f15251ab0847f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route('backend.tax.bulk_action')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('backend.tax.bulk_action')).'']); ?>
                    <div class="">
                        <select name="action_type" class="form-control select2 col-12" id="quick-action-type" style="width:100%">
                            <option value=""><?php echo e(__('messages.no_action')); ?></option>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_tax')): ?>
                            <option value="change-status"><?php echo e(__('messages.status')); ?></option>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_tax')): ?>
                            <option value="delete"><?php echo e(__('messages.delete')); ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="select-status d-none quick-action-field" id="change-status-action">
                        <select name="status" class="form-control select2 p-2" id="status" style="width:100%">
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
            </div>
             <?php $__env->slot('toolbar', null, []); ?> 
                <div>
                    <div class="datatable-filter">
                        <select name="column_status" id="column_status" class="select2 form-control p-10" data-filter="select" style="width: 100%">
                            <option value=""><?php echo e(__('messages.all')); ?></option>
                            <option value="0" <?php echo e($filter['status'] == '0' ? "selected" : ''); ?>><?php echo e(__('messages.inactive')); ?></option>
                            <option value="1" <?php echo e($filter['status'] == '1' ? "selected" : ''); ?>><?php echo e(__('messages.active')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="input-group flex-nowrap">
                  <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass"></i></span>
                  <input type="text" class="form-control dt-search" placeholder="<?php echo e(__('messages.search')); ?>..." aria-label="Search" aria-describedby="addon-wrapping">
                </div>
                  <?php if(Auth::user()->can('add_tax')): ?>
                      <button type="button" class="btn btn-primary" data-crud-id="<?php echo e(0); ?>" title=""><i class="fas fa-plus-circle me-2"></i><?php echo e(__('messages.new')); ?></button>
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
            <table id="datatable" class="table border table-responsive">
            </table>
        </div>

        <div data-render="app">
            <tax-form-offcanvas create-title="<?php echo e(__('messages.new')); ?> <?php echo e(__($module_title)); ?>"
                edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__($module_title)); ?>"></tax-form-offcanvas>
        </div>
    </div>

    <div data-render="app">
        <tax-form-offcanvas create-title="<?php echo e(__('messages.create')); ?> <?php echo e(__($module_title)); ?>" edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__($module_title)); ?>"></tax-form-offcanvas>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
<!-- DataTables Core and Extensions -->
<script src="<?php echo e(mix('modules/tax/script.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

<script type="text/javascript">
    const finalColumns = [{
            name: 'check',
            data: 'check',
            title: '<input type="checkbox" class="form-check-input" name="select_all_table" id="select-all-table" onclick="selectAllTable(this)">',
            width: '0%',
            exportable: false,
            orderable: false,
            searchable: false,
        },
        {
            data: 'title',
            name: 'title',
            title: "<?php echo e(__('tax.lbl_title')); ?>",
            width: '15%',
        },
        {
            data: 'value',
            name: 'value',
            title: "<?php echo e(__('tax.lbl_value')); ?>",
            width: '15%'
        },
        {
            data: 'type',
            name: 'type',
            title: "<?php echo e(__('tax.lbl_Type')); ?>",
            width: '15%',
        },
        {
            data: 'module_type',
            name: 'module_type',
            title: "<?php echo e(__('tax.lbl_module_type')); ?>",
            width: '15%',
        },
        {
            data: 'status',
            name: 'status',
            title: "<?php echo e(__('tax.lbl_status')); ?>",
            width: '5%',
        },
        {
            data: 'action',
            name: 'action',
            title: "<?php echo e(__('tax.lbl_action')); ?>",
            orderable: false,
            searchable: false,
            width: '5%',
        },
        {
            data: 'updated_at',
            name: 'updated_at',
            title: "<?php echo e(__('tax.lbl_updated')); ?>",
            width: '5%',
            visible: false,
        },
    ]
    document.addEventListener('DOMContentLoaded', (event) => {
        initDatatable({
            url: '<?php echo e(route("backend.$module_name.index_data")); ?>',
            finalColumns,
            orderColumn: [[ 7, "desc" ]],
        })
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Tax/Resources/views/backend/tax/index_datatable.blade.php ENDPATH**/ ?>