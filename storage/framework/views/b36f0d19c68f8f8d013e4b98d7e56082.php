<link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">


<style>
.hero-btn:hover {
    background: black !important;
    transform: translateY(-5px);
}
      body {
font-family: 'Lama Sans', sans-serif !important;
font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic' : 'normal'); ?>;
}

</style>
<div class="position-absolute top-50 start-0 w-100" style="z-index: 10; transform: translateY(-50%);margin-top: 70px;">
    <div class="text-white container" style="margin: 0 auto; padding: 0 5rem">
        <h1 class="fw-bold text-white" style="font-size: 48px; margin-bottom: 20px; letter-spacing: -0.5px;">
            <?php echo e(__('messagess.hero_title')); ?>

        </h1>
        <h3 class="fw-light my-5 text-white" style="font-size: 19px;line-height: 1.8;">
            <?php echo e(__('messagess.hero_subtitle')); ?>

        </h3>
        <div class="my-5">
            <?php for($i = 0; $i < 5; $i++): ?>
                <svg width="25" height="25" fill="#FFD700" viewBox="0 0 16 16" class="mx-1">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.63.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            <?php endfor; ?>
        </div>
        <a href="#bookNaw" class="hero-btn btn text-white d-flex align-items-center justify-content-center gap-2" style="white-space: nowrap;width: 225px;height: 63.6px;font-weight: bold;background-color: var(--primary-color);border-right: 3px solid white;border-left: 3px solid white;font-size: 1.8rem;border-radius: 30px;padding: 15px 45px;color: white;display: flex;align-items: center;justify-content: center;gap: 10px;transition: background-color 0.3s ease, transform 0.3s ease;font-family: 'Lama Sans', sans-serif !important;font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic' : 'normal'); ?>;">

            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                 class="bi bi-calendar-check me-2" viewBox="0 0 16 16">
                <path
                    d="M10.854 8.146a.5.5 0 0 0-.708.708l1 1a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L11.5 8.793l-.646-.647z" />
                <path
                    d="M1 4a2 2 0 0 1 2-2h1V1.5a.5.5 0 0 1 1 0V2h4V1.5a.5.5 0 0 1 1 0V2h1a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h12V4a1 1 0 0 0-1-1H3zm11 3H2v7a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V6z" />
            </svg>
            <span><?php echo e(__('messagess.hero_book_now')); ?></span>
        </a>
    </div>
</div>

<?php /**PATH C:\laragon\www\jospa\resources\views/components/frontend/slider-hero.blade.php ENDPATH**/ ?>