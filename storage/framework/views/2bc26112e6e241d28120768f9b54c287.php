<?php $__env->startSection('title', 'اسم الصفحة'); ?> 

<?php $__env->startPush('after-styles'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="iq-navbar-header navs-bg-color">
        <div style="margin: 0; padding: 0; background: transparent; box-shadow: none;">
            <h2 style="margin-top: -40px; padding: 0; font-size: 24px;">
                Contact Messages
            </h2>
        </div>

    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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
            background: #f8f9fa;
            padding: 12px;
            text-align: left;
            font-weight: 600;
            color: #666;
            border-bottom: 1px solid #e9ecef;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #f1f3f4;
            vertical-align: middle;
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
    <div class="table-container">
        <!-- Header -->

        <!-- Controls -->
        <div class="table-controls">
            <div class="control-group">
                <button class="btn">No Action</button>
                <button class="btn active">Export</button>
            </div>
            <div class="control-group">
                <select class="btn">
                    <option>All</option>
                </select>
                <input type="text" class="search-input" placeholder="Search...">
                <button class="btn new-btn">New</button>
                <button class="btn filter-btn">Advance Filter</button>
            </div>
        </div>

        <!-- Table -->
        <table>
            <thead>
            <tr>
                <th><input type="checkbox" class="checkbox"></th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><input type="checkbox" class="checkbox"></td>
                    <td><?php echo e($message->name); ?></td>
                    <td><?php echo e($message->email); ?></td>
                    <td><?php echo e($message->phone); ?></td>
                    <td><?php echo e(\Illuminate\Support\Str::limit($message->message, 50)); ?></td>
                    <td>
                        <div class="action-buttons">
                            <!-- Trigger Modal -->
                            <button class="action-btn reply-btn" style="font-size: 22px;" title="Reply" data-bs-toggle="modal" data-bs-target="#replyModal-<?php echo e($message->id); ?>">
                                📧
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="replyModal-<?php echo e($message->id); ?>" tabindex="-1" aria-labelledby="replyModalLabel-<?php echo e($message->id); ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="<?php echo e(route('admin.contact-messages.reply', $message->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="replyModalLabel-<?php echo e($message->id); ?>">Reply to <?php echo e($message->email); ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="replyMessage" class="form-label">Your Reply</label>
                                                <textarea name="message" class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Send Reply</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" style="text-align: center;">No messages found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-scripts'); ?>
    
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tayasmart/jospa.tayasmart.com/resources/views/home/contact.blade.php ENDPATH**/ ?>