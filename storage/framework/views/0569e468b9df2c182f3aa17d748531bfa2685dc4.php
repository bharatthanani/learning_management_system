<!-- forum-category-single-item start -->
<?php $__currentLoopData = $recent_discussions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent_discussion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="forum-category-single-item d-flex border-1 radius-4">
        <div class="forum-category-single-item-img-wrap flex-shrink-0 radius-50 small-background-img-prop"
             style="background-image: url('<?php echo e(getImageFile($recent_discussion->user->image_path)); ?>')">
        </div>
        <div class="forum-category-single-item-right flex-grow-1 ms-3">
            <p class="font-14 color-hover"><?php echo e(@$recent_discussion->forumCategory->title); ?></p>
            <h6 class="font-20"><a href="<?php echo e(route('forum.forumPostDetails', $recent_discussion->uuid)); ?>"><?php echo e(@$recent_discussion->title); ?></a></h6>
            <p class="font-15"><?php echo strip_tags(Str::words($recent_discussion->description, 60)); ?></p>

            <div class="forum-category-single-item-bottom d-flex justify-content-between">
                <ul class="forum-category-single-item-bottom-left d-flex align-items-center">
                    <?php if(@$recent_discussion->user->role == 1): ?>
                        <li class="forum-category-single-item-bottom-left-name font-14 radius-4">By
                            <a href="#" class="color-heading font-medium ps-2"><?php echo e($recent_discussion->user->name); ?></a>
                        </li>
                        <li>Admin</li>
                    <?php elseif(@$recent_discussion->user->role == 2): ?>
                        <li class="forum-category-single-item-bottom-left-name font-14 radius-4">By
                            <a href="#" class="color-heading font-medium ps-2"><?php echo e($recent_discussion->user->instructor->name); ?></a>
                        </li>
                        <li>Instructor</li>
                    <?php elseif(@$recent_discussion->user->role == 3): ?>
                        <li class="forum-category-single-item-bottom-left-name font-14 radius-4">By
                            <a href="#" class="color-heading font-medium ps-2"><?php echo e($recent_discussion->user->student->name); ?></a>
                        </li>
                        <li>Student</li>
                    <?php endif; ?>
                    <li><span class="iconify" data-icon="ci:calendar-calendar"></span><?php echo e($recent_discussion->created_at->format(' j  M, Y')); ?></li>
                </ul>
                <ul class="forum-category-single-item-bottom-right d-flex align-items-center">
                    <li><span class="iconify" data-icon="ant-design:star-outlined"></span><?php echo e(countUserReplies($recent_discussion->user_id)); ?></li>
                    <li><span class="iconify" data-icon="bi:eye"></span><?php echo e($recent_discussion->total_seen); ?></li>
                    <li><span class="iconify" data-icon="fluent:comment-24-regular"></span><?php echo e($recent_discussion->forumPostComments->count()); ?></li>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- forum-category-single-item end -->

<input type="hidden" class="getForumCategoryName" value="<?php echo e(@$forumCategory->title); ?>">
<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/forum/partial/render-forum-posts.blade.php ENDPATH**/ ?>