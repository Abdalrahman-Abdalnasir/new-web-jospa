<link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">

<section class="py-5" style="margin-top: 100px;">
    <div class="container" style="padding:0 5rem">
        <div class="row align-items-center g-5">
            <!-- Left: Text -->
            <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <h2 class="fw-bold mb-4" style="font-size: 44.8px;margin-bottom: 15px;font-family: 'Lama Sans', sans-serif !important;font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important'); ?>;">
                    <span style="color: var(--primary-color);">
                        <?php echo e(__('messagess.title_part1')); ?>

                    </span>
                    <?php echo e(__('messagess.title_part2')); ?>

                </h2>
                    <div style="display: flex; align-items: center;width: 100%;">
        <div style="height: 2px; width: 50px; background: #bc9a69; border-radius: 2px;"></div>
        <div style="margin: 0 10px; color: #bc9a69; font-size: 25px;">
          &#10048;
        </div>
        <div style="height: 2px; width: 50px; background: #bc9a69; border-radius: 2px;"></div>
      </div>
                <p class="mb-4" style="margin-top: 47px;color: #000;font-size: 17.6px;line-height: 1.8;margin-bottom: 30px !important;font-weight: 400;font-family: 'Lama Sans', sans-serif !important;font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important'); ?>;">
  <?php echo e(__('messagess.description2')); ?>                </p>
                <?php echo $__env->make('components.frontend.gift-button', [
                    'text' => __('messagess.read_more'),
                    'href' =>  route('frontend.about'),
                    'class' => 'fs-4 px-5 py-3 border-0',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- Right: Image -->
            <div class="col-12 col-lg-6 text-center" data-aos="fade-left" data-aos-delay="200">
                <img src="<?php echo e(asset('images/frontend/learn.webp')); ?>" alt="Learn about Jo Spa" class="img-fluid rounded-4 shadow" style="max-width: 90%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ once: true });
</script>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/components/frontend/learn-about-section.blade.php ENDPATH**/ ?>