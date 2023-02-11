
<?php $__env->startSection('content'); ?>
    <div class="">
        <!-- Consultation Page Header Start -->
        <header class="page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="page-banner-content forum-banner-content">
                                <h3 class="page-banner-heading text-white pb-15"><?php echo e(__('Forum')); ?></h3>
                                <div class="forum-banner-search-ask-wrap d-flex align-items-center">
                                    <div class="input-group position-relative">
                                        <input class="form-control border-0 bg-transparent searchForumBar" type="search"
                                            placeholder="Type to search for solutions...">
                                        <button class="bg-transparent border-0"><span class="iconify"
                                                data-icon="akar-icons:search"></span></button>

                                        <!-- Search Bar Suggestion Box Start -->
                                        <div class="search-bar-suggestion-box searchBlogBox custom-scrollbar searchForumBox d-none">
                                            <ul class="appendForumSearchList">

                                            </ul>
                                        </div>
                                        <!-- Search Bar Suggestion Box End -->
                                    </div>

                                    <p class="font-24 font-medium text-white px-4"><?php echo e(__('or')); ?></p>
                                    <a href="<?php echo e(route('forum.askQuestion')); ?>"
                                        class="theme-button1"><?php echo e(__('Ask a Question')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="forum-banner-right-img">
                                <img src="<?php echo e(asset('frontend/assets/img/forum-banner-right-img.png')); ?>" alt="lmszai forum"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Consultation Page Header End -->

        <!-- Special Feature / Forum Categories Area Start -->
        <section class="special-feature-area forum-categories-area section-t-space section-b-85-space bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title ">
                            <h3 class="section-heading"><?php echo e(__('Forum Categories')); ?></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $forumCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forumCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Single Feature Item start-->
                        <div class="col-md-4">
                            <div class="single-feature-item d-flex align-items-center">
                                <div class="flex-shrink-0 feature-img-wrap">
                                    <a href="<?php echo e(route('forum.forumCategoryPosts', $forumCategory->uuid)); ?>"><img
                                            src="<?php echo e(getImageFile($forumCategory->logo)); ?>" alt="feature"></a>
                                </div>
                                <div class="flex-grow-1 ms-3 feature-content">
                                    <h6><a
                                            href="<?php echo e(route('forum.forumCategoryPosts', $forumCategory->uuid)); ?>"><?php echo e($forumCategory->title); ?></a>
                                    </h6>
                                    <p><?php echo e(Str::limit($forumCategory->subtitle, 70)); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Feature Item End-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <!-- Special Feature / Forum Categories Area End -->

        <!-- Forum Countdown Area Start -->
        <section class="forum-countdown-area gradient-bg p-0">
            <div class="section-overlay section-t-space section-b-space">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="single-feature-item d-flex align-items-center bg-transparent">
                                <div class="flex-shrink-0 feature-img-wrap">
                                    <img src="<?php echo e(asset('frontend/assets/img/feature-img/forum-countdown1.png')); ?>"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 feature-content">
                                    <h6 class="text-white"><?php echo e(__('Categories')); ?></h6>
                                    <p><?php echo e(count($forumCategories)); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-feature-item d-flex align-items-center bg-transparent">
                                <div class="flex-shrink-0 feature-img-wrap">
                                    <img src="<?php echo e(asset('frontend/assets/img/feature-img/forum-countdown2.png')); ?>"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 feature-content">
                                    <h6 class="text-white"><?php echo e(__('Post Topic')); ?></h6>
                                    <p><?php echo e($totalForumPost); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-feature-item d-flex align-items-center bg-transparent">
                                <div class="flex-shrink-0 feature-img-wrap">
                                    <img src="<?php echo e(asset('frontend/assets/img/feature-img/forum-countdown3.png')); ?>"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 feature-content">
                                    <h6 class="text-white"><?php echo e(__('Answers')); ?></h6>
                                    <p><?php echo e($totalForumAnswer); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-feature-item d-flex align-items-center bg-transparent">
                                <div class="flex-shrink-0 feature-img-wrap">
                                    <img src="<?php echo e(asset('frontend/assets/img/feature-img/forum-countdown4.png')); ?>"
                                        alt="feature">
                                </div>
                                <div class="flex-grow-1 ms-3 feature-content">
                                    <h6 class="text-white"><?php echo e(__('Members')); ?></h6>
                                    <p><?php echo e($totalMember); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Forum Countdown Area End -->

        <!-- Ask a question area start -->
        <section class="forum-categories-area section-t-space section-b-space">
            <div class="container">
                <div class="row">
                    <!-- Forum Categories Left Start -->
                    <div class="col-12 col-md-12 col-xl-8">
                        <div class="forum-categories-left">
                            <h3 class="mb-4"><?php echo e(__('Recent Discussions')); ?></h3>

                            <div class="forum-categories-filter-box d-flex align-items-center">
                                <select id="inputState" class="form-select color-heading forumCategory">
                                    <option value=""><?php echo e(__('All Categories')); ?></option>
                                    <?php $__currentLoopData = $forumCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forumCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($forumCategory->id); ?>"><?php echo e($forumCategory->title); ?></option>
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
                            <a href="<?php echo e(route('forum.askQuestion')); ?>"
                                class="w-100 theme-btn theme-button1 theme-button3 forum-ask-question-btn"><?php echo e(__('Ask a Question')); ?></a>

                            <ul class="forum-link-box radius-4 border-1 mt-4">
                                <li class="forum-link-box-title font-20 color-heading font-medium">
                                    <span class="iconify me-2" data-icon="bi:star"></span><?php echo e(__('Top Contributors')); ?>

                                </li>
                                <?php $__currentLoopData = $topContributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topContributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="forum-author-item d-flex align-items-center justify-content-between">
                                            <div class="forum-author-item-left">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <a href="#"
                                                            class="forum-author-img-wrap radius-50 overflow-hidden">
                                                            <img src="<?php echo e(getImageFile($topContributor->image_path)); ?>"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <a href="#"
                                                        class="flex-grow-1 mx-2 font-18 font-medium color-heading forum-author-name">
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
                                                <span class="iconify"
                                                    data-icon="bi:star"></span><span><?php echo e($topContributor->totalComments); ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li class="forum-link-box-title font-18 color-heading font-medium text-center">
                                    <a href="<?php echo e(route('forum.forumLeaderboard')); ?>"><?php echo e(__('View All')); ?> <i
                                            data-feather="arrow-right"></i></a>
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
                                        <a href="<?php echo e(route('blog-details', $blog->slug)); ?>"><img
                                                src="<?php echo e(getImageFile($blog->image)); ?>" alt="img"
                                                class="img-fluid"></a>
                                        <div
                                            class="blog-item-tag position-absolute text-uppercase font-12 font-semi-bold text-white bg-hover radius-3">
                                            <?php echo e(@$blog->category->name); ?></div>
                                    </div>

                                    <div class="blog-item-bottom-part">
                                        <h3 class="card-title blog-title"><a
                                                href="<?php echo e(route('blog-details', $blog->slug)); ?>"><?php echo e(Str::limit($blog->title, 50)); ?></a>
                                        </h3>
                                        <p
                                            class="blog-author-name-publish-date font-13 font-medium color-gray text-uppercase">
                                            <?php echo e($blog->user->name); ?>

                                            / <?php echo e($blog->created_at->format(' j  M, Y')); ?></p>
                                        <p class="card-text blog-content"><?php echo Str::limit($blog->details, 200); ?></p>

                                        <div class="blog-read-more-btn">
                                            <a href="<?php echo e(route('blog-details', $blog->slug)); ?>"
                                                class="theme-btn font-15 ps-0 font-medium text-capitalize color-hover"><?php echo e(__('Read More')); ?>

                                                <i data-feather="arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Item Start -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- section button start-->
                        <div class="col-12 text-center section-btn">
                            <a href="<?php echo e(route('blogs')); ?>" class="theme-btn theme-button1"><?php echo e(__('All Blogs')); ?> <i
                                    data-feather="arrow-right"></i></a>
                        </div>
                        <!-- section button end-->
                    </div>
                </div>
            </section>
            <!-- Forum community blog articles Area End -->
        <?php endif; ?>
    </div>
    <input type="hidden" class="renderForumCategoryPostsRoute" value="<?php echo e(route('forum.renderForumCategoryPosts')); ?>">
    <input type="hidden" class="searchForumRoute" value="<?php echo e(route('forum.search-forum.list')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        'use strict'

        $(document).on('change', '.forumCategory', function() {
            var forum_category_id = this.value;
            var renderForumCategoryPostsRoute = $('.renderForumCategoryPostsRoute').val();
            $.ajax({
                type: "GET",
                url: renderForumCategoryPostsRoute,
                data: {
                    "forum_category_id": forum_category_id,
                },
                datatype: "json",
                success: function(response) {
                    $('.appendForumCategoryPosts').html(response)
                }
            });
        });

        $(document).keyup('.searchForumBar',function() {
            var title = $('.searchForumBar').val()
            var searchForumRoute = $('.searchForumRoute').val()
            console.log(searchForumRoute, title)

            if (title) {
                $('.searchForumBox').removeClass('d-none')
                $('.searchForumBox').addClass('d-block')
            } else {
                $('.searchForumBox').removeClass('d-block')
                $('.searchForumBox').addClass('d-none')
            }

            $.ajax({
                type: "GET",
                url: searchForumRoute,
                data: {'title': title},
                success: function (response) {
                    $('.appendForumSearchList').html(response);
                }
            });
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/forum/index.blade.php ENDPATH**/ ?>