<?php
    $currentLocale = session('locale', app()->getLocale());
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(__('messagess.giftcard')); ?> - JOSPA</title>
    <link rel="stylesheet" href="jospa-gift-card.css">
    
    <!--Font Family-->
    <link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <style>
        #toast-container > .toast {
          background-color: #333 !important;
          color: #fff !important;
        }

        #toast-container > .toast-success {
          background-color: #51A351 !important;
          color: #fff !important;
        }

        #toast-container > .toast-error {
          background-color: #BD362F !important;
          color: #fff !important;
        }

        #toast-container > .toast-info {
          background-color: #2F96B4 !important;
          color: #fff !important;
        }

        #toast-container > .toast-warning {
          background-color: #F89406 !important;
          color: #fff !important;
        }

        #toast-container > .toast-success .toast-message {
          color: #fff !important;
        }

        #toast-container > .toast-error .toast-message {
          color: #fff !important;
        }

        #toast-container > .toast-info .toast-message {
          color: #fff !important;
        }

        #toast-container > .toast-warning .toast-message {
          color: #fff !important;
        }
    </style>

    
    <style>
        body {
            font-family: 'Lama Sans', sans-serif !important;
            font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic !important' : 'normal !important'); ?>;
            background: #f8f6f1;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .gift-form-wrapper {
            max-width: 1160px;
            margin: 40px auto 0 auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px #bc9a6920;
            padding: 32px 28px 24px 28px;
            animation: fadeInUp 0.7s cubic-bezier(.4, 1.6, .6, 1);
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gift-title {
            text-align: center;
            color: #bc9a69;
            font-size: 1.7rem;
            font-weight: bold;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .section-title {
            color: #a8834b;
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: right;
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .section-icon {
            font-size: 1.3em;
            color: #d2b07a;
            margin-left: 6px;
            font-family: inherit;
            font-weight: bold;
            line-height: 1;
        }

        .radio-group {
            display: flex;
            gap: 18px;
            margin-bottom: 18px;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.13rem;
            color: #222;
            cursor: pointer;
            background: #faf5ef;
            border-radius: 14px;
            padding: 12px 28px 12px 18px;
            font-weight: bold;
            border: none;
            transition: background 0.18s, box-shadow 0.18s;
            box-shadow: 0 1px 6px #bc9a6920;
            position: relative;
        }

        .radio-item input[type="radio"] {
            display: none;
        }

        .radio-indicator {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 2.5px solid #bbb;
            background: #fff;
            display: inline-block;
            position: relative;
            transition: border 0.2s, box-shadow 0.2s;
        }

        .radio-item input[type="radio"]:checked+.radio-indicator {
            border: 2.5px solid #1877f2;
            box-shadow: 0 0 0 3px #e3eaff;
            background: #fff;
        }

        .radio-item input[type="radio"]:checked+.radio-indicator::after {
            content: '';
            display: block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #1877f2;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        a svg {
            color: white;
        }

        .radio-item input[type="radio"]:checked~.radio-text {
            color: #222;
        }

        .radio-item input[type="radio"]:checked~.radio-indicator,
        .radio-item input[type="radio"]:checked~.radio-text {
            font-weight: bold;
        }

        .radio-item input[type="radio"]:checked~.radio-indicator {
            border-color: #1877f2;
        }

        .radio-item input[type="radio"]:checked~.radio-text {
            color: #222;
        }

        .radio-item:has(input[type="radio"]:checked) {
            background: #faf5ef;
            box-shadow: 0 2px 10px #e3eaff40;
        }

        .radio-text {
            font-size: 1.08rem;
            color: #222;
        }

        .section {
            margin-bottom: 24px;
        }

        .input-row {
            display: flex;
            gap: 18px;
            margin-bottom: 18px;
        }

        .input-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .input-label {
            font-size: 1.08rem;
            color: #bc9a69;
            margin-bottom: 6px;
            font-weight: 500;
            text-align: right;
        }

        .form-input,
        .form-textarea {
            border: 1.5px solid #e2c89c;
            border-radius: 10px;
            padding: 12px 14px;
            font-size: 1.1rem;
            margin-bottom: 6px;
            background: #faf8f5;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 4px #bc9a6920;
            resize: none;
        }

        .form-input:focus,
        .form-textarea:focus {
            border-color: #bc9a69;
            outline: none;
            background: #fff;
            box-shadow: 0 2px 12px #bc9a6920;
        }

        .form-textarea {
            min-height: 60px;
            max-height: 120px;
        }

        .full-width {
            width: 100%;
        }

        .services-container {
            margin-bottom: 24px;
        }

        .service-notes {
            background: #f7f2eb;
            border-radius: 16px;
            border: 2px solid #ede3d3;
            padding: 32px 38px 32px 24px;
            margin-bottom: 18px;
            box-shadow: none;
            color: #555;
            font-size: 1.13rem;
            position: relative;
        }

        .notes-title {
            color: #bc9a69;
            font-weight: bold;
            font-size: 1.18rem;
            margin-bottom: 18px;
            text-align: right;
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .notes-title::before {
            content: '✽';
            color: #d2b07a;
            font-size: 1.2em;
            margin-left: 7px;
            font-weight: bold;
        }

        .notes-list {
            color: #555;
            font-size: 1.13rem;
            padding-right: 18px;
            margin: 0;
            list-style: disc inside;
            text-align: right;
        }

        .notes-list li {
            margin-bottom: 12px;
            line-height: 2.1;
            font-weight: 500;
        }

        .notes-list li:last-child {
            margin-bottom: 0;
        }

        .pricing-summary {
            background: #f7f2eb;
            border-radius: 16px;
            padding: 32px 38px 32px 24px;
            margin-bottom: 18px;
            box-shadow: none;
            min-height: 80px;
        }

        .price-label {
            color: #222;
            font-size: 1.18rem;
            font-weight: bold;
            margin-left: 12px;
            text-align: right;
        }

        .price-value {
            color: #222;
            font-size: 1.18rem;
            font-weight: bold;
            margin-right: 12px;
            text-align: left;
        }

        .add-to-cart-button {
            white-space: nowrap;
            text-decoration-line: none;
            background: #c7a36a;
            color: #fff;
            border: none;
            border-radius: 32px;
            padding: 16px 44px 16px 38px;
            font-size: 1.18rem;
            font-weight: bold;
            width: 239px;
            margin: 0;
            box-shadow: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: background 0.22s, transform 0.18s;
        }

        .add-to-cart-button svg {
            width: 20px;
        }

        .add-to-cart-button:hover {
            background: #b8934d;
            transform: scale(1.04);
        }

        .container {
            border-radius: 15px;
        }

        .clickable-div {
            color: black !important;
            padding: 15px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 1px 1px #a8834b;
            margin-bottom: 20px;
        }

        .clickable-div:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px #a8834b;
        }

        .clickable-div:active {
            transform: translateY(0);
        }

        .checkbox-list {
            display: none;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 15px;
            border: 2px solid #e9ecef;
        }

        .checkbox-list.show {
            display: block;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 8px;
            border-radius: 8px;
            transition: background-color 0.2s ease;
        }

        .checkbox-item:hover {
            background-color: #e9ecef;
        }

        .checkbox-item:last-child {
            margin-bottom: 0;
        }

        .checkbox-item input[type="checkbox"] {
            margin-left: 10px;
            transform: scale(1.2);
            accent-color: #4CAF50;
        }

        .checkbox-item label {
            cursor: pointer;
            font-size: 16px;
            color: #333;
            flex: 1;
        }

        .icon {
            margin-left: 10px;
            font-size: 20px;
        }

        .view-counter {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            color: #b6a07a;
            font-size: 1.08rem;
            margin-top: 8px;
            margin-bottom: 0;
        }

        .view-dots {
            font-size: 1.2rem;
            letter-spacing: 2px;
        }

        .page-footer {
            background: #fff;
            border-radius: 0 0 24px 24px;
            box-shadow: 0 -2px 12px #bc9a6920;
            margin-top: 32px;
            padding: 18px 0;
            text-align: center;
        }

        .footer-link {
            color: #bc9a69;
            font-size: 1.1rem;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.2s;
        }

        .footer-link:hover {
            color: #a8834b;
            text-decoration: underline;
        }

        @media (max-width: 900px) {
            .input-row {
                flex-wrap: wrap;
            }

            .main-container {
                flex-direction: column;
            }

            .product-gallery {
                border-left: none;
                border-bottom: 1.5px solid #f3e6d7;
            }

            .form-container {
                padding: 24px 10px;
            }
        }

        @media (max-width: 600px) {
            .input-row {
                flex-wrap: wrap;
            }

            .main-container {
                border-radius: 0;
                box-shadow: none;
            }

            .product-gallery {
                padding: 12px 2px;
            }

            .form-container {
                padding: 10px 2px;
            }
        }

        .slider-track {
            display: flex;
            width: max-content;
            animation: scroll-left 20s linear infinite;
        }

        .slider-item {
            flex-shrink: 0;
            margin-right: 16px;
        }

        .slider-item img {
            height: 192px;
            width: 288px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .slider-item img:hover {
            transform: scale(1.07) rotate(-2deg);
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @media (max-width: 700px) {
            .slider-img {
                width: 120px;
                height: 70px;
            }

            .slider-container {
                height: 80px;
            }

            .slider-track {
                height: 80px;
            }
        }

        .form-container {
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 6px 32px #bc9a6920, 0 1.5px 8px #bc9a6910;
            padding: 38px 32px 32px 32px;
            margin: 0 auto 32px auto;
            max-width: 700px;
            min-width: 1160px;
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.7s cubic-bezier(.4, 1.6, .6, 1);
        }

        .page-title {
            text-align: center;
            color: #bc9a69;
            font-size: 2.1rem;
            font-weight: bold;
            margin-bottom: 32px;
            letter-spacing: 1px;
            margin: 30px;
        }

        @media (max-width: 900px) {
            .form-container {
                padding: 22px 6px;
                max-width: 98vw;
            }
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 8px 2px;
                min-width: unset;
            }
        }

        .section-title::before {
            content: "❀";
            font-size: 1rem;
            color: rgb(191, 148, 87);
            opacity: 0.8;
        }
    </style>

</head>

<body dir="<?php echo e($currentLocale === 'ar' ? 'rtl' : 'ltr'); ?>" lang="<?php echo e($currentLocale); ?>">
    <?php echo $__env->make('components.frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.frontend.second-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div
        style="background-image: url(https://jospa.tayasmart.com/images/frontend/slider2.webp);background-position: top;background-repeat: no-repeat;background-size: cover;width: 100%;height: 293px;">
    </div>

    <div style="position: relative; overflow: hidden; background: white; direction: ltr; width: 1520px;"
        class="d-none d-md-block">
        <div class="slider-track" style="padding: 25px;">
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/6d2e0c3d-fe2f-4c8e-b539-4cadc279f73f-1.jpeg"
                    alt="Image 1"></div>
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/83e49680-69b5-4d8d-b152-5fcb2a1b1efe-1.jpeg.webp"
                    alt="Image 2"></div>
            <div class="slider-item"><img src="<?php echo e(asset('images/gph1.webp')); ?>" alt="Image 1"></div>
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/6d2e0c3d-fe2f-4c8e-b539-4cadc279f73f-1.jpeg"
                    alt="Image 1"></div>
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/83e49680-69b5-4d8d-b152-5fcb2a1b1efe-1.jpeg.webp"
                    alt="Image 2"></div>
            <div class="slider-item"><img src="<?php echo e(asset('images/gph2.webp')); ?>" alt="Image 2"></div>
            <!-- كرر الصور -->
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/6d2e0c3d-fe2f-4c8e-b539-4cadc279f73f-1.jpeg"
                    alt="Image 1"></div>
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/83e49680-69b5-4d8d-b152-5fcb2a1b1efe-1.jpeg.webp"
                    alt="Image 2"></div>
            <div class="slider-item"><img src="<?php echo e(asset('images/gph2.webp')); ?>" alt="Image 1"></div>
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/6d2e0c3d-fe2f-4c8e-b539-4cadc279f73f-1.jpeg"
                    alt="Image 1"></div>
            <div class="slider-item"><img
                    src="https://jospa-sa.com/wp-content/uploads/2023/02/83e49680-69b5-4d8d-b152-5fcb2a1b1efe-1.jpeg.webp"
                    alt="Image 2"></div>
            <div class="slider-item"><img src="<?php echo e(asset('images/gph2.webp')); ?>" alt="Image 2"></div>
        </div>
    </div>


    <div class="main-container">
        <div class="gift-card-container">

            <h1 class="page-title"><?php echo e(__('messagess.perfect_gift')); ?></h1>
            <!-- Right side - Form -->
            <div class="form-container">
                <form method="post" action= "<?php echo e(route('gift.create')); ?>">
                    <?php echo csrf_field(); ?>
                    <!-- Delivery Method Section -->
                    <div class="section delivery-section">
                        <h3 class="section-title fw-bold"><?php echo e(__('messagess.delivery_method')); ?></h3>
                        <div class="radio-group">
                            <label class="radio-item">
                                <input type="radio" name="delivery_method" value="في المحل" checked>
                                <span class="radio-indicator"></span>
                                <span class="radio-text"><?php echo e(__('messagess.traditional_gift_card')); ?></span>
                            </label>
                            <label class="radio-item">
                                <input type="radio" name="delivery_method" value='بطاقة الكترونية'>
                                <span class="radio-indicator"></span>
                                <span class="radio-text"><?php echo e(__('messagess.email_delivery')); ?></span>
                            </label>
                        </div>
                    </div>

                    <!-- Card Information Section -->
                    <div class="section card-info-section">
                        <h3 class="section-title fw-bold"><?php echo e(__('messagess.card_info')); ?></h3>

                        <div class="input-row">
                            <div class="input-group">
                                <label class="input-label"><?php echo e(__('messagess.gifter_name')); ?></label>
                                <input type="text" name="sender_name" class="form-input" required>
                            </div>
                            <div class="input-group">
                                <label class="input-label"><?php echo e(__('messagess.recipient_name')); ?></label>
                                <input type="text" name="recipient_name" class="form-input" required>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <label class="input-label"><?php echo e(__('messagess.gifter_phone')); ?></label>
                                <input type="tel" name="sender_phone" class="form-input">
                            </div>
                            <div class="input-group">
                                <label class="input-label"><?php echo e(__('messagess.recipient_phone')); ?></label>
                                <input type="tel" name="recipient_phone" class="form-input">
                            </div>
                        </div>

                        <div class="input-group full-width">
                            <label class="input-label"><?php echo e(__('messagess.optional_services')); ?></label>
                            <textarea class="form-textarea" name="optional_services" maxlength="100"
                                placeholder="<?php echo e(__('messagess.optional_services')); ?>..."></textarea>
                        </div>
                    </div>

                    <!-- Services Selection -->
                    <div class="services-container">
                        <h3 class="section-title fw-bold"><?php echo e(__('messagess.service_selection')); ?></h3>



                        <input type="hidden" id="tlt" value="" name="subtotal">
                        <!-- 1 -->
                        <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="container">
                                <div class="clickable-div" onclick="toggleList(this)">
                                    <?php echo e($sub->name); ?>

                                </div>
                                <div class="checkbox-list">
                                    <?php $__currentLoopData = $sub->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="checkbox-item">
                                          <input type="checkbox" id="service_<?php echo e($service->id); ?>" name="requested_services[]" value="<?php echo e($service->id); ?>" data-price="<?php echo e($service->default_price); ?>">
                                          <label for="service_<?php echo e($service->id); ?>">
                                                <?php echo e($service->name); ?> -
                                                <?php echo e($service->default_price); ?> <?php echo e(__('messages.currency')); ?>

                                            </label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>

                    <!-- Service Notes -->
                    <div class="service-notes">
                        <p class="notes-title"> <?php echo e(__('messagess.soft_notes')); ?></p>
                        <ul class="notes-list">
                            <li><?php echo e(__('messagess.note_1')); ?></li>
                            <li><?php echo e(__('messagess.note_2')); ?></li>
                            <li><?php echo e(__('messagess.note_3')); ?></li>
                            <li><?php echo e(__('messagess.note_4')); ?></li>
                        </ul>
                    </div>

                    <!-- Pricing Section -->
                    <div class="pricing-summary">

                        <div style="display: flex;justify-content: space-between;margin-bottom: 10px;">
                            <h3><?php echo e(__('messagess.total_amount')); ?></h3>
                            <h3>SR<span id="displayAmount">0.00</span></h3>
                        </div>
                        <button type="submit" class="add-to-cart-button">
                            <svg class="svg-inline--fa fa-credit-card ml-2" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="credit-card" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z">
                                </path>
                            </svg>
                            <?php echo e(__('messagess.proceed_to_payment')); ?>

                        </button>
                    </div>

                </form>
            </div>
            <?php echo $__env->make('components.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>

    <script>
        // drop down
        function toggleList($par) {
            console.log()
            const list = $par.nextElementSibling;
            list.classList.toggle('show');
        }

        // Image gallery functionality
        function switchMainImage(thumbnailElement) {
            const mainImage = document.getElementById('mainProductImage');
            const allThumbnails = document.querySelectorAll('.thumbnail-img');

            // Update main image source
            const newImageSrc = thumbnailElement.src.replace('w=100&h=80', 'w=600&h=400');
            mainImage.src = newImageSrc;

            // Update active thumbnail
            allThumbnails.forEach(thumb => thumb.classList.remove('active'));
            thumbnailElement.classList.add('active');
        }
        document.addEventListener("DOMContentLoaded", function () {
        const checkboxes = document.querySelectorAll('input[name="requested_services[]"]');
        const displayAmount = document.getElementById('displayAmount');

        function calculateTotal() {
            let total = 0;
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    const price = parseFloat(checkbox.dataset.price || 0);
                    total += price;
                }
            });
            displayAmount.textContent = total.toFixed(2); // عرض الرقم بصيغة 00.00
            document.getElementById('tlt').value = total.toFixed(2); // عرض الرقم بصيغة 00.00
        }

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', calculateTotal);
        });

        calculateTotal(); // لحساب القيمة أول ما الصفحة تفتح
    });
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        <?php if(session('success')): ?>
            toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>

        <?php if(session('error')): ?>
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>
</body>

</html>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/salon/gift.blade.php ENDPATH**/ ?>