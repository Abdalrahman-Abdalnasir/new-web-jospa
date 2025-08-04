

<?php $__env->startSection('title'); ?>
<?php echo e(__($module_action)); ?> <?php echo e(__($module_title)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title mb-0">Permission & Role</h4>
                </div>
                <div>
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

                        </div>
                         <?php $__env->slot('toolbar', null, []); ?> 


                            <div class="input-group flex-nowrap">
                            </div>

                            <?php if(Auth::user()->can('add_page')): ?>
                            <?php if (isset($component)) { $__componentOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalabb0b1ddc4ac4df74eba9fcbd7f771f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.offcanvas','data' => ['target' => '#form-offcanvas','title' => ''.e(__('messages.create')).' '.e(__('page.lbl_role')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.offcanvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['target' => '#form-offcanvas','title' => ''.e(__('messages.create')).' '.e(__('page.lbl_role')).'']); ?><?php echo e(__('messages.create')); ?>

                                <?php echo e(__('page.lbl_role')); ?> <?php echo $__env->renderComponent(); ?>
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


                </div>
            </div>
            <div class="card-body">
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($role->name !== 'admin' ): ?>
                <?php echo e(Form::open(['route' => ['backend.permission-role.store', $role->id],'method' => 'post'])); ?>


                <div class="permission-collapse border rounded p-3 mb-3" id="permission_<?php echo e($role->id); ?>">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6><?php echo e(ucfirst($role->title)); ?></h6>
                        <div class="toggle-btn-groups">
                            <?php if($role->is_fixed ==0): ?>
                            <button class="btn btn-danger" type="button" onclick="delete_role(<?php echo e($role->id); ?>)">
                                Delete
                            </button>
                            <?php endif; ?>
                            
                            <button class="btn btn-primary ms-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseBox1_<?php echo e($role->id); ?>" aria-expanded="false"
                                aria-controls="collapseExample_<?php echo e($role->id); ?>">
                                Permission
                            </button>
                        </div>
                    </div>
                    <div class="collapse pt-3" id="collapseBox1_<?php echo e($role->id); ?>">
                        <div class="table-responsive">
                        <table class="table table-condensed table-striped mb-0">
                            <thead class="sticky-top">
                                <tr>
                                    <th>Modules</th>
                                    <th>View</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th class="text-end"><?php echo e(Form::submit( __('messages.save'), ['class'=>'btn btn-md btn-secondary'])); ?>

                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mKey => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(ucwords($module['module_name'])); ?></td>
                                    <td>
                                        <?php if(isset($module['is_custom_permission']) && !$module['is_custom_permission']): ?>
                                        <span><input type="checkbox"
                                                id="role-<?php echo e($role->name); ?>-permission-view_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>"
                                                name="permission[view_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>][]"
                                                value="<?php echo e($role->name); ?>" class="form-check-input"
                                                <?php echo e((AuthHelper::checkRolePermission($role, 'view_'.strtolower(str_replace(' ', '_', $module['module_name'])))) ? 'checked' : ''); ?>></span>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if(isset($module['is_custom_permission']) && !$module['is_custom_permission']): ?>
                                        <span><input type="checkbox"
                                                id="role-<?php echo e($role->name); ?>-permission-add_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>"
                                                name="permission[add_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>][]"
                                                value="<?php echo e($role->name); ?>" class="form-check-input"
                                                <?php echo e((AuthHelper::checkRolePermission($role, 'add_'.strtolower(str_replace(' ', '_', $module['module_name'])))) ? 'checked' : ''); ?>></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if(isset($module['is_custom_permission']) && !$module['is_custom_permission']): ?>
                                        <span><input type="checkbox"
                                                id="role-<?php echo e($role->name); ?>-permission-edit_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>"
                                                name="permission[edit_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>][]"
                                                value="<?php echo e($role->name); ?>" class="form-check-input"
                                                <?php echo e((AuthHelper::checkRolePermission($role, 'edit_'.strtolower(str_replace(' ', '_', str_replace(' ', '_', $module['module_name']))))) ? 'checked' : ''); ?>></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if(isset($module['is_custom_permission']) && !$module['is_custom_permission']): ?>
                                        <span><input type="checkbox"
                                                id="role-<?php echo e($role->name); ?>-permission-delete_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>"
                                                name="permission[delete_<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>][]"
                                                value="<?php echo e($role->name); ?>" class="form-check-input"
                                                <?php echo e((AuthHelper::checkRolePermission($role, 'delete_'.strtolower(str_replace(' ', '_', $module['module_name'])))) ? 'checked' : ''); ?>></span>
                                        <?php endif; ?>
                                    </td>

                                    <?php if(isset($module['more_permission']) && is_array($module['more_permission'])): ?>

                                    <td
                                        class="text-end">

                                        <a data-bs-toggle="collapse" data-bs-target="#demo_<?php echo e($mKey); ?>" class="accordion-toggle  btn btn-primary btn-xs"><i
                                                class="fa-solid fa-chevron-down me-2"> </i>More</a>
                                    </td>

                                    <?php else: ?>

                                    <td >

                                    </td>
                                    <?php endif; ?>
                                </tr>

                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                        <div class="accordian-body collapse" id="demo_<?php echo e($mKey); ?>">
                                            <table class="table table-striped mb-0">
                                                <tbody>
                                                    <?php if(isset($module['more_permission']) && is_array($module['more_permission'])): ?>

                                                    <?php $__currentLoopData = $module['more_permission']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="text-center">
                                                        <?php echo e(ucwords($module['module_name'])); ?>

                                                            <?php echo e(ucwords(str_replace('_', ' ', $permission_data))); ?>


                                                            <span class="ms-5"><input type="checkbox"
                                                                id="role-<?php echo e($role->name); ?>-permission-<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>_<?php echo e(strtolower(str_replace(' ', '_', $permission_data))); ?>"
                                                                name="permission[<?php echo e(strtolower(str_replace(' ', '_', $module['module_name']))); ?>_<?php echo e(strtolower(str_replace(' ', '_', $permission_data))); ?>][]"
                                                                value="<?php echo e($role->name); ?>" class="form-check-input"
                                                                <?php echo e((AuthHelper::checkRolePermission($role, strtolower(str_replace(' ', '_', $module['module_name']).'_'.strtolower(str_replace(' ', '_', $permission_data))))) ? 'checked' : ''); ?>></span>
                                                        </td>
                                                    </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                        </div>
                    </div>
                </div>


                <?php echo e(Form::close()); ?>


                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>
        </div>

        <div data-render="app">
            <manage-role-form create-title="<?php echo e(__('messages.create')); ?>  <?php echo e(__('page.lbl_role')); ?>">
            </manage-role-form>

        </div>

    </div>
</div>



<script>
function reset_permission(role_id) {

    var url = "/app/permission-role/reset/" + role_id;

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            successSnackbar(response.message);
            window.location.reload();
        },
        error: function(response) {
            alert('error');
        }
    });
}



function delete_role(role_id) {
    var url = "<?php echo e(route('backend.role.destroy', ['role' => ':role_id'])); ?>";
    url = url.replace(':role_id', role_id);

    $.ajax({
        url: url,
        type: 'DELETE',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            $('#permission_' + role_id).hide();
            successSnackbar(response.message);

        },
        error: function(response) {
            alert('error');
        }
    });
}
</script>



<?php $__env->startPush('after-scripts'); ?>
<script src="<?php echo e(mix('js/vue.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/form-offcanvas/index.js')); ?>" defer></script>

<?php $__env->stopPush(); ?>

<style>
.permission-collapse table tr td.hiddenRow {
    padding: 0;
}
.permission-collapse table tr td.hiddenRow table td {
    padding: 20px;
}
.permission-collapse table tr td.hiddenRow table tr:last-child td {
    border: none;
}
</style>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/permission-role/permissions.blade.php ENDPATH**/ ?>