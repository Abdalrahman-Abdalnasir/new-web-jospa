

<?php $__env->startSection('title'); ?> <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?> <?php $__env->stopSection(); ?>

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
                    <?php if (isset($component)) { $__componentOriginal9c2603df095322fce98f15251ab0847f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2603df095322fce98f15251ab0847f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route('backend.state.bulk_action')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('backend.state.bulk_action')).'']); ?>
                        <div class="">
                            <select name="action_type" class="form-control select2 col-12" id="quick-action-type"
                                style="width:100%">
                                <option value=""><?php echo e(__('messages.no_action')); ?></option>
                                <option value="change-status"><?php echo e(__('messages.status')); ?></option>
                                <option value="delete"><?php echo e(__('messages.delete')); ?></option>
                            </select>
                        </div>
                        <div class="select-status d-none quick-action-field" id="change-status-action">
                            <select name="status" class="form-control select2" id="status" style="width:100%">
                                <option value="1" selected><?php echo e(__('messages.active')); ?></option>
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
                </div>
                 <?php $__env->slot('toolbar', null, []); ?> 

                    <div>
                        <div class="datatable-filter">
                            <select name="column_status" id="column_status" class="select2 form-control"
                                data-filter="select" style="width: 100%">
                                <option value=""><?php echo e(__('messages.all')); ?></</option>
                                <option value="0" <?php echo e($filter['status'] == '0' ? 'selected' : ''); ?>>
                                    <?php echo e(__('messages.inactive')); ?></option>
                                <option value="1" <?php echo e($filter['status'] == '1' ? 'selected' : ''); ?>>
                                    <?php echo e(__('messages.active')); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control dt-search" placeholder="<?php echo e(__('messages.search')); ?>..." aria-label="Search"
                            aria-describedby="addon-wrapping">
                    </div>
                    <?php if(Auth::user()->can('add_service')): ?>
                        <?php if (isset($component)) { $__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.offcanvas','data' => ['target' => '#form-offcanvas','title' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.offcanvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['target' => '#form-offcanvas','title' => '']); ?>
                        <?php echo e(__('messages.new')); ?> <?php echo $__env->renderComponent(); ?>
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
    <div data-render="app">
        <state-form-offcanvas create-title="<?php echo e(__('messages.new')); ?> <?php echo e(__('state.singule_title')); ?>"
            edit-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__('state.singule_title')); ?>">
        </state-form-offcanvas>
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
            <h4><?php echo e(__('service.lbl_advanced_filter')); ?></h4>
         <?php $__env->endSlot(); ?>
        <button type="reset" class="btn btn-danger" id="reset-filter">Reset</button>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
<link rel="stylesheet" href="<?php echo e(mix('modules/world/style.css')); ?>">
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
<script src="<?php echo e(mix('modules/world/script.js')); ?>"></script>
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
                data: 'name',
                name: 'name',
                title: "<?php echo e(__('service.lbl_name')); ?>"
            },
            {
                data: 'country_id',
                name: 'country_id',
                title: "<?php echo e(__('country.singular_title')); ?>"
            },
            {
                data: 'status',
                name: 'status',
                orderable: true,
                searchable: true,
                title: "<?php echo e(__('service.lbl_status')); ?>",
                width: '5%'
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

        let finalColumns = [
            ...columns,
            ...actionColumn
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.index_data")); ?>',
                finalColumns,
                orderColumn: [[ 4, "desc" ]],
                advanceFilter: () => {
                    return {
                    }
                }
            });
        })

        function resetQuickAction () {
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

      $('#quick-action-type').change(function () {
        resetQuickAction()
      });

      $(document).on('update_quick_action', function() {
        // resetActionButtons()
      })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/World/Resources/views/backend/state/index_datatable.blade.php ENDPATH**/ ?>