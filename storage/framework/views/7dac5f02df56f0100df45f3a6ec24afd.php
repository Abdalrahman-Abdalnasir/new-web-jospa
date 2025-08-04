<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal46776d0b7db5693fe6a82b4f364cd987 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal46776d0b7db5693fe6a82b4f364cd987 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.services-section','data' => ['services' => $services,'categories' => $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.services-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($services),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal46776d0b7db5693fe6a82b4f364cd987)): ?>
<?php $attributes = $__attributesOriginal46776d0b7db5693fe6a82b4f364cd987; ?>
<?php unset($__attributesOriginal46776d0b7db5693fe6a82b4f364cd987); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal46776d0b7db5693fe6a82b4f364cd987)): ?>
<?php $component = $__componentOriginal46776d0b7db5693fe6a82b4f364cd987; ?>
<?php unset($__componentOriginal46776d0b7db5693fe6a82b4f364cd987); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalfc63de52e08f3d4397c936ba02c6fea4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc63de52e08f3d4397c936ba02c6fea4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.gift-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.gift-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc63de52e08f3d4397c936ba02c6fea4)): ?>
<?php $attributes = $__attributesOriginalfc63de52e08f3d4397c936ba02c6fea4; ?>
<?php unset($__attributesOriginalfc63de52e08f3d4397c936ba02c6fea4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc63de52e08f3d4397c936ba02c6fea4)): ?>
<?php $component = $__componentOriginalfc63de52e08f3d4397c936ba02c6fea4; ?>
<?php unset($__componentOriginalfc63de52e08f3d4397c936ba02c6fea4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal7aeab9953e2daca09d5e26e5c5d5626a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7aeab9953e2daca09d5e26e5c5d5626a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.premium-packages-section','data' => ['packages' => $packages]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.premium-packages-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['packages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($packages)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7aeab9953e2daca09d5e26e5c5d5626a)): ?>
<?php $attributes = $__attributesOriginal7aeab9953e2daca09d5e26e5c5d5626a; ?>
<?php unset($__attributesOriginal7aeab9953e2daca09d5e26e5c5d5626a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7aeab9953e2daca09d5e26e5c5d5626a)): ?>
<?php $component = $__componentOriginal7aeab9953e2daca09d5e26e5c5d5626a; ?>
<?php unset($__componentOriginal7aeab9953e2daca09d5e26e5c5d5626a); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal428ce2b846773f91eb7dd13597a849fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal428ce2b846773f91eb7dd13597a849fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.learn-about-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.learn-about-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal428ce2b846773f91eb7dd13597a849fe)): ?>
<?php $attributes = $__attributesOriginal428ce2b846773f91eb7dd13597a849fe; ?>
<?php unset($__attributesOriginal428ce2b846773f91eb7dd13597a849fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal428ce2b846773f91eb7dd13597a849fe)): ?>
<?php $component = $__componentOriginal428ce2b846773f91eb7dd13597a849fe; ?>
<?php unset($__componentOriginal428ce2b846773f91eb7dd13597a849fe); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal4366ad76ea80245c8f669ce008aa0956 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4366ad76ea80245c8f669ce008aa0956 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.goals-vision-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.goals-vision-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4366ad76ea80245c8f669ce008aa0956)): ?>
<?php $attributes = $__attributesOriginal4366ad76ea80245c8f669ce008aa0956; ?>
<?php unset($__attributesOriginal4366ad76ea80245c8f669ce008aa0956); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4366ad76ea80245c8f669ce008aa0956)): ?>
<?php $component = $__componentOriginal4366ad76ea80245c8f669ce008aa0956; ?>
<?php unset($__componentOriginal4366ad76ea80245c8f669ce008aa0956); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/Modules/rontend/Resources/views/index.blade.php ENDPATH**/ ?>