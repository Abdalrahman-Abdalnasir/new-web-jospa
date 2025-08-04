

<?php $__env->startSection('title'); ?>
<?php echo e($module_title); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startPush('after-styles'); ?>
<link rel="stylesheet" href="<?php echo e(mix('modules/service/style.css')); ?>">
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.quick-action','data' => ['url' => ''.e(route('backend.employees.bulk_action_review')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.quick-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => ''.e(route('backend.employees.bulk_action_review')).'']); ?>
          <div class="">
            <select name="action_type" class="form-control select2 col-12" id="quick-action-type" style="width:100%">
              <option value=""><?php echo e(__('messages.no_action')); ?></option>
              <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_review')): ?>
              <option value="delete"><?php echo e(__('messages.delete')); ?></option>
              <?php endif; ?>
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
        </div>
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
    <table id="datatable" class="table table-striped border table-responsive">
    </table>
  </div>
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
    <h4>Advanced Filter</h4>
   <?php $__env->endSlot(); ?>
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
<script src="<?php echo e(asset('js/form-modal/index.js')); ?>" defer></script>
<!-- DataTables Core and Extensions -->
<script type="text/javascript" src="<?php echo e(asset('vendor/datatable/datatables.min.js')); ?>"></script>

<script type="text/javascript" defer>
  const range_flatpicker = document.querySelectorAll('.booking-date-range')
  Array.from(range_flatpicker, (elem) => {
    if (typeof flatpickr !== typeof undefined) {
      flatpickr(elem, {
        mode: "range",
        dateFormat: "d-m-Y",
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
    //  {
    //   data: 'image',
    //   name: 'image',
    //   title: "<?php echo e(__('employee.lbl_image')); ?>",
    //   orderable: false,
    //   width: '0%'
    // }, 
    {
      data: 'user_id',
      name: 'user_id',
      title: "<?php echo e(__('customer.singular_title')); ?>",
      width: '10%'
    },
    {
      data: 'employee_id',
      name: 'employee_id',
      title: "<?php echo e(__('employee.singular_title')); ?>",
      width: '10%'
    },
    {
      data: 'review_msg',
      name: 'review_msg',
      title: "<?php echo e(__('employee.lbl_message')); ?>",
      width: '10%'
    },
    {
      data: 'rating',
      name: 'rating',
      title: "<?php echo e(__('employee.lbl_rating')); ?>",
      width: '5%'
    },
    {
      data: 'updated_at',
      name: 'updated_at',
      title: "<?php echo e(__('employee.lbl_updated')); ?>",
      width: '5%'
    }

  ]

  const actionColumn = [{
    data: 'action',
    name: 'action',
    orderable: false,
    searchable: false,
    title: "<?php echo e(__('employee.lbl_action')); ?>",
    width: '5%'
  }]


  let finalColumns = [
    ...columns,
    ...actionColumn
  ]


  document.addEventListener('DOMContentLoaded', (event) => {
    initDatatable({
      url: '<?php echo e(route("backend.employees.review_data")); ?>',
      finalColumns,
      orderColumn: [[ 5, "desc" ]],
      advanceFilter: () => {
        return {
          booking_date: $('#booking_date').val(),

        }
      }
    });

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
  })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', ['isNoUISlider' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Employee/Resources/views/backend/employees/review.blade.php ENDPATH**/ ?>