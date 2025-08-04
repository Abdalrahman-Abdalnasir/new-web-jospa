<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(language_direction()); ?>" class="theme-fs-sm">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(app_name()); ?></title>

    <link rel="stylesheet" href="<?php echo e(mix('css/libs.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('css/backend.css')); ?>">
    <?php if(language_direction() == 'rtl'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/rtl.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('custom-css/frontend.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <?php echo $__env->yieldPushContent('after-styles'); ?>
    <!-- Toastr CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
      
    <link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/lama-sans" rel="stylesheet">

</head>
<body class="bg-white">
    <!-- Lightning Progress Bar -->
    <?php echo $__env->make('components.frontend.progress-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Hero Section (30% of screen) -->
    <div class="position-relative" style="height: 290.79px;">
        <img src="<?php echo e(asset('images/frontend/slider1.webp')); ?>" alt="Contact Hero" class="w-100 h-100" style="object-fit: cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.35);"></div>

        <!-- First Navbar -->
        <?php echo $__env->make('components.frontend.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Second Navbar -->
        <?php echo $__env->make('components.frontend.second-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lama Sans', sans-serif !important;
                font-style: <?php echo e(app()->getLocale() == 'ar' ? 'italic !important' : 'normal important'); ?>;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .table-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table-header {
            background: linear-gradient(135deg, #d4af8c, #c09660);
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title {
            font-size: 24px;
            font-weight: 600;
        }

        .appointment-btn {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .appointment-btn:hover {
            background: #34495e;
        }

        .table-controls {
            padding: 20px;
            background: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e9ecef;
        }

        .control-group {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn {
            padding: 8px 16px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn.active {
            background: #2c3e50;
            color: white;
            border-color: #2c3e50;
        }

        .search-input {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }

        .new-btn {
            background: #d4af8c;
            color: white;
            border: none;
        }

        .new-btn:hover {
            background: #c09660;
        }

        .filter-btn {
            background: white;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th {
background: #99764c;
    padding: 12px;
    text-align: center;
    font-weight: 600;
    color: #000000;
    border-bottom: 1px solid #e9ecef;
        }

        td {
            background: #a17a5194;
            padding: 12px;
            text-align: center;
            font-weight: 600;
            color: #000000;
            border-bottom: 1px solid #e9ecef;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        .service-image {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            object-fit: cover;
        }

        .service-name {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .price {
            font-weight: 600;
            color: #333;
        }

        .category-tag {
            color: #666;
            font-size: 13px;
        }

        .branch-count, .staff-count {
            background: #d4af8c;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .status-toggle {
            position: relative;
            width: 44px;
            height: 24px;
            background: #d4af8c;
            border-radius: 12px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .status-toggle::after {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: white;
            top: 3px;
            right: 3px;
            transition: transform 0.3s;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .view-btn { background: #3498db; color: white; }
        .edit-btn { background: #f39c12; color: white; }
        .delete-btn { background: #e74c3c; color: white; }

        .checkbox {
            width: 16px;
            height: 16px;
            accent-color: #d4af8c;
        }
    </style>
    <div class="container py-4 " style="min-height:100vh">
        <h2 class="mb-4 text-center"><?php echo e(__('profile.my_bookings')); ?></h2>
        <div class="table-responsive">
            <table style="font-family: 'Lama Sans';font-style: normal;">
                <thead>
                <tr>
                    <th><?php echo e(__('profile.id')); ?></th>
                    <th><?php echo e(__('profile.service')); ?></th>
                    <th><?php echo e(__('profile.price')); ?></th>
                    <th><?php echo e(__('profile.date')); ?></th>
                    <th><?php echo e(__('profile.time')); ?></th>
                    <th><?php echo e(__('profile.employee')); ?></th>
                    <th><?php echo e(__('profile.branch')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php $__currentLoopData = $booking->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($service->service_name ?? '---'); ?></td>
                        <td><?php echo e($service->service->default_price ?? 0); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($booking->start_date_time)->format('Y-m-d')); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($booking->start_date_time)->format('H:i')); ?></td>
                        <td><?php echo e($service->employee->full_name ?? '---'); ?></td>
                        <td><?php echo e($booking->branch->name ?? '---'); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="13"><?php echo e(__('profile.no_bookings')); ?></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>

    <?php echo $__env->make('components.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script>
      document.addEventListener("DOMContentLoaded", function () {
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
      });
  </script>
</body>
</html>
<?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/components/frontend/auth/my-bookings.blade.php ENDPATH**/ ?>