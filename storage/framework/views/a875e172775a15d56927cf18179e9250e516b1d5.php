
<?php $__env->startSection('content'); ?>
    <div class="">

        <!-- Forum Page Header Start -->
        <header class="page-banner-header blank-page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="blank-page-banner-wrap banner-less-header-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="page-banner-content">

                                    <!-- Breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item font-14"><a href="<?php echo e(route('main.index')); ?>"><span class="iconify" data-icon="bx:home-alt"></span> <?php echo e(__('Home')); ?></a>
                                            </li>
                                            <li class="breadcrumb-item font-14" aria-current="page"><a href="<?php echo e(route('forum.index')); ?>"><?php echo e(__('Forum')); ?></a></li>
                                            <li class="breadcrumb-item font-14 active" aria-current="page"><?php echo e(__($forumCategory->title)); ?></li>
                                        </ol>
                                    </nav>
                                    <!-- Breadcrumb End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Forum Page Header End -->

        <!-- Ask a question area start -->
        <section class="forum-categories-area section-b-space">
            <div class="container">
                <div class="row">
                    <!-- Forum Categories Left Start -->
                    <div class="col-12 col-md-12 col-xl-8">
                        <div class="forum-categories-left">
                            <h3 class="mb-4 forumCategoryTitle"><?php echo e(__($forumCategory->title)); ?></h3>

                            <div class="forum-categories-filter-box d-flex align-items-center">
                                <select id="inputState" class="form-select color-heading forumCategory">
                                    <option value=""><?php echo e(__('All Category')); ?></option>
                                    <?php $__currentLoopData = $forumCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php if($forumCategory->id == $category->id): ?> selected <?php endif; ?>><?php echo e($category->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="forum-categories-wrap appendForumCategoryPosts">
                                <?php echo $__env->make('frontend.forum.partial.render-forum-posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                        </div>
                    </div>
                    <!-- Forum Categories Left End -->

                    <!-- Forum Categories Right Start -->
                    <div class="col-12 col-md-12 col-xl-4">
                        <div class="forum-categories-right">
                            <a href="<?php echo e(route('forum.askQuestion')); ?>" class="w-100 theme-btn theme-button1 theme-button3 forum-ask-question-btn"><?php echo e(__('Ask a Question')); ?></a>
                            <ul class="forum-link-box radius-4 border-1 mt-4">
                                <li class="forum-link-box-title font-20 color-heading font-medium"><span class="iconify me-2" data-icon="bi:star"></span><?php echo e(__('Top Contributors')); ?></li>
                                <?php $__currentLoopData = $topContributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topContributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="forum-author-item d-flex align-items-center justify-content-between">
                                            <div class="forum-author-item-left">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <a href="#" class="forum-author-img-wrap radius-50 overflow-hidden">
                                                            <img src="<?php echo e(getImageFile($topContributor->image_path)); ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <a href="#" class="flex-grow-1 mx-2 font-18 font-medium color-heading forum-author-name">
                                                        <?php if(@$topContributor->role == 1): ?>
                                                            <?php echo e($topContributor->name); ?>


                                                        <?php elseif(@$topContributor->role == 2): ?>
                                                            <?php echo e($topContributor->instructor->name); ?>


                                                        <?php elseif(@$topContributor->role == 3): ?>
                                                            <?php echo e($topContributor->student->name); ?>

                                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="author-item-right d-flex align-items-center">
                                                <span class="iconify" data-icon="bi:star"></span><span><?php echo e($topContributor->totalComments); ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li class="forum-link-box-title font-18 color-heading font-medium text-center">
                                    <a href="<?php echo e(route('forum.forumLeaderboard')); ?>">View All <i data-feather="arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Forum Categories Right End -->
                </div>
            </div>
        </section>
        <!-- Ask a question area end -->

        <?php if(count($blogs) >= 1): ?>
            <!-- Forum community blog articles Area Start -->
            <section class="community-blog-articles-area section-t-space section-b-85-space bg-page">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="section-heading"><?php echo e(__('Community Blog Articles')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Blog Item Start -->
                            <div class="col-md-6">
                                <div class="blog-item">

                                    <div class="blog-item-img-wrap overflow-hidden position-relative">
                                        <a href="<?php echo e(route('blog-details', $blog->slug)); ?>"><img src="<?php echo e(getImageFile($blog->image)); ?>" alt="img" class="img-fluid"></a>
                                        <div
                                            class="blog-item-tag position-absolute text-uppercase font-12 font-semi-bold text-white bg-hover radius-3"><?php echo e(__(@$blog->category->name)); ?></div>
                                    </div>

                                    <div class="blog-item-bottom-part">
                                        <h3 class="card-title blog-title"><a href="<?php echo e(route('blog-details', $blog->slug)); ?>"><?php echo e(Str::limit($blog->title, 50)); ?></a></h3>
                                        <p class="blog-author-name-publish-date font-13 font-medium color-gray text-uppercase"><?php echo e($blog->user->name); ?>

                                            / <?php echo e($blog->created_at->format(' j  M, Y')); ?></p>
                                        <p class="card-text blog-content"><?php echo Str::limit($blog->details, 200); ?></p>

                                        <div class="blog-read-more-btn">
                                            <a href="<?php echo e(route('blog-details', $blog->slug)); ?>"
                                               class="theme-btn font-15 ps-0 font-medium text-capitalize color-hover"><?php echo e(__('Read More')); ?> <i
                                                    data-feather="arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Item Start -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- section button start-->
                        <div class="col-12 text-center section-btn">
                            <a href="<?php echo e(route('blogs')); ?>" class="theme-btn theme-button1"><?php echo e(__('All Blogs')); ?> <i data-feather="arrow-right"></i></a>
                        </div>
                        <!-- section button end-->
                    </div>
                </div>
            </section>
            <!-- Forum community blog articles Area End -->
        <?php endif; ?>
    </div>
    <input type="hidden" class="renderForumCategoryPostsRoute" value="<?php echo e(route('forum.renderForumCategoryPosts')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        'use strict'

        $(document).on('change', '.forumCategory', function () {
            var forum_category_id = this.value;
            var renderForumCategoryPostsRoute = $('.renderForumCategoryPostsRoute').val();
            $.ajax({
                type: "GET",
                url: renderForumCategoryPostsRoute,
                data: {"forum_category_id": forum_category_id,},
                datatype: "json",
                success: function (response) {
                    $('.appendForumCategoryPosts').html(response)
                    var title = $('.getForumCategoryName').val();
                    if (title) {
                        $('.forumCategoryTitle').html(title);
                    } else {
                        $('.forumCategoryTitle').html('All Categories');
                    }

                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/forum/forum-category-posts.blade.php ENDPATH**/ ?>