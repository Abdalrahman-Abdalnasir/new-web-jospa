

<div class="iq-navbar-header navs-bg-color" style="height: 120px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="px-4">
                        <h2><?php echo e(__($module_title ?? '')); ?></h2>
                    </div>
                    <div>
                      <?php if(!isset($global_booking)): ?>
                        <?php if(Auth::user()->can('add_booking')): ?>
                        <a href="javascript:void(0)" class="btn btn-secondary" id="appointment-button"><i class="fa-solid fa-plus"></i> <?php echo e(__('messages.appointment')); ?></a>
                        <?php endif; ?>
                        <?php endif; ?>
                      <?php echo $__env->yieldContent('banner-button'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
    </div>
</div>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/components/partials/sub-header.blade.php ENDPATH**/ ?>