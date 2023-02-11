<?php $__empty_1 = true; $__currentLoopData = @$courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="search-bar-result-item">
        <a href="<?php echo e(route('course-details', $course->slug)); ?>">
            <img src="<?php echo e(getImageFile($course->image_path)); ?>" alt="img">
            <span><?php echo e(__($course->title)); ?></span>
        </a>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <li class="search-bar-result-item no-search-result-found"><?php echo e(__('No Data Found')); ?></li>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/render-search-course-list.blade.php ENDPATH**/ ?>