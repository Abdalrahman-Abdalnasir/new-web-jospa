

<?php $__env->startSection('title'); ?>
    <?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(mix('modules/category/style.css')); ?>">
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
                <?php if (isset($component)) { $__componentOriginal9c2603df095322fce98f15251ab0847f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c2603df095322fce98f15251ab0847f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route("backend.categories.bulk_action")).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route("backend.categories.bulk_action")).'']); ?>
                  <div class="">
                    <select name="action_type" class="form-control select2 col-12" id="quick-action-type" style="width:100%">
                        <option value=""><?php echo e(__('messages.no_action')); ?></option>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_<?php echo e(module); ?>')): ?>
                        <option value="change-status"><?php echo e(__('messages.status')); ?></option>
                        <?php endif; ?>
                        <option value="delete"><?php echo e(__('messages.delete')); ?></option>
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
                <div>
                  <button type="button" class="btn btn-secondary" data-modal="export">
                    <i class="fa-solid fa-download"></i> <?php echo e(__('messages.export')); ?>

                  </button>
                  
                  
                  
                </div>
              </div>
                 <?php $__env->slot('toolbar', null, []); ?> 
                    <div>
                        <div class="datatable-filter">
                          <select name="column_category" id="column_category" class="select2 form-control" data-filter="select" style="width: 100%">
                            <option value=""><?php echo e(__('category.all_categories')); ?></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($category->id); ?>" <?php if($category->id == $parentID): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>

                    <div>
                        <div class="datatable-filter">
                          <select name="column_status" id="column_status" class="select2 form-control" data-filter="select" style="width: 100%">
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
                    <?php if(Auth::user()->can('create_subcategories')): ?>
                      <button type="button" class="btn btn-primary" data-crud-id="<?php echo e(0); ?>"><i class="fas fa-plus-circle me-2"></i><?php echo e(__('messages.new')); ?></button>
                    <?php endif; ?>
                    <!-- <button class="btn btn-outline-primary btn-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="fa-solid fa-filter"></i></button> -->
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
        <form-offcanvas
            :is-sub-category="true"
            default-image="<?php echo e(default_feature_image()); ?>"
            create-nested-title="<?php echo e(__('messages.new')); ?>  <?php echo e(__('category.sub_category')); ?>" edit-nested-title="<?php echo e(__('messages.edit')); ?> <?php echo e(__('category.sub_category')); ?>"
            :category-id="<?php echo e(isset($category->id) ? $category->id : null); ?>"
            ></form-offcanvas>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="<?php echo e(asset('vendor/datatable/datatables.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(mix('modules/category/script.js')); ?>"></script>
    <script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>


    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

    <script type="text/javascript">

    const columns = [
            {
                name: 'check',
                data: 'check',
                title: '<input type="checkbox" class="form-check-input" name="select_all_table" id="select-all-table" onclick="selectAllTable(this)">',
                width: '0%',
                exportable: false,
                orderable: false,
                searchable: false,
            },
            // { data: 'image', name: 'image', title: "<?php echo e(__('category.lbl_image')); ?>" , width: '5%', orderable: false, },
            { data: 'name', name: 'name',  title: "<?php echo e(__('category.lbl_name')); ?>" ,width: '15%',  orderable: true },
            { data: 'mainCategory.name', name: 'mainCategory.name', title: "<?php echo e(__('category.lbl_category')); ?>" ,width: '15%', searchable: false },
            { data: 'created_at', name: 'created_at',  title: "<?php echo e(__('category.lbl_created_at')); ?>",width: '15%', orderable: true },
            { data: 'updated_at', name: 'updated_at', title: "<?php echo e(__('category.lbl_updated_at')); ?>" ,width: '15%', orderable: true },
            { data: 'status', name: 'status',  searchable: true, title: "<?php echo e(__('category.lbl_status')); ?>" ,width: '5%', orderable: false },
        ]

        const actionColumn = [
            { data: 'action', name: 'action', orderable: false, searchable: false, title: "<?php echo e(__('category.lbl_action')); ?>" ,width: '5%'}
        ]

        const customFieldColumns = JSON.parse(<?php echo json_encode($columns, 15, 512) ?>)

        let finalColumns = [
            ...columns,
            ...customFieldColumns,
            ...actionColumn
        ]

        document.addEventListener('DOMContentLoaded', (event) => {
            initDatatable({
                url: '<?php echo e(route("backend.$module_name.index_nested_data")); ?>',
                finalColumns,
                orderColumn: [[ 4, "desc" ]],
                advanceFilter: () => {
                  return {
                    column_category: $('#column_category').val()
                  }
                }
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
                    parent_id: -1
                }
            })
            document.dispatchEvent(idEvent)
        }

        formOffcanvas?.addEventListener('hidden.bs.offcanvas', event => {
            removeEditID()
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

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Category/Resources/views/backend/categories/index_nested_datatable.blade.php ENDPATH**/ ?>