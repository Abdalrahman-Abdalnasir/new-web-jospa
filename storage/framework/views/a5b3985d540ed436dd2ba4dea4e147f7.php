<div style="width: 25%;">
  <?php if(count($data->services) > 1 ||  $data->bookedPackageService->count() > 1): ?>
    <a class="badge bg-info text-white" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#service-detail-modal-<?php echo e($data->id); ?>">Multiple</a>

    <!-- Modal -->
    <div class="modal fade" id="service-detail-modal-<?php echo e($data->id); ?>" tabindex="-1" aria-labelledby="service-detail-modal-<?php echo e($data->id); ?>-Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="service-detail-modal-<?php echo e($data->id); ?>-Label">Service Details</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered m-0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Service Name</th>
                  <th>Price</th>
                  <th>Duration (Min)</th>
                </tr>
              </thead>
              <tbody>

                <?php $__currentLoopData = $data->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e(++$key); ?></td>
                    <td><?php echo e($service->service_name); ?></td>
                    <td><?php echo e(Currency::format($service->service_price ?? 0)); ?></td>
                    <td><?php echo e($service->duration_min); ?></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if(!is_null($data->bookedPackageService) && $data->bookedPackageService->isNotEmpty()): ?>
                <?php $__currentLoopData = $data->bookedPackageService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e(++$key + $data->services->count()); ?></td>
                    <td><?php echo e($service->service_name); ?></td>
                    <td><?php echo e(Currency::format($service->packageService->service_price ?? 0)); ?></td>
                    <td><?php echo e($service->packageService->services->duration_min); ?></td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php elseif( !is_null($data->services) && $data->services->isNotEmpty()): ?>
    <small class="badge bg-primary"><?php echo e($data->services->first()->service_name ?? '-'); ?></small>
    <?php elseif(!is_null($data->bookedPackageService) && $data->bookedPackageService->isNotEmpty()): ?>
        <small class="badge bg-primary"><?php echo e($data->bookedPackageService->first()->service_name ?? '-'); ?></small>
    <?php endif; ?>

  <?php if($data->services->isEmpty() && $data->bookedPackageService->count() == 0): ?>
    <small class="badge bg-primary"><?php echo e('-'); ?></small>
  <?php endif; ?>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/Booking/Resources/views/backend/bookings/datatable/services.blade.php ENDPATH**/ ?>