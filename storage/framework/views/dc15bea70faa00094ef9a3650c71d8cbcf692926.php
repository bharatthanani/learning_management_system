

<?php $__env->startSection('content'); ?>

<div class="bg-page">
<!-- Page Header Start -->
<header class="page-banner-header gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="page-banner-content text-center">
                        <h3 class="page-banner-heading text-white pb-15"><?php echo e(__(@$pageTitle)); ?></h3>

                        <!-- Breadcrumb Start-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item font-14"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                                <li class="breadcrumb-item font-14 active" aria-current="page"><?php echo e(__(@$pageTitle)); ?></li>
                            </ol>
                        </nav>
                        <!-- Breadcrumb End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Header End -->

<!-- Course Single Details Area Start -->
<section class="blog-page-area section-t-space">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8">

                <div class="blog-page-left-content">

                    <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <!-- Blog Item Start -->
                    <div class="blog-item">

                        <div class="blog-item-img-wrap overflow-hidden position-relative">
                            <a href="<?php echo e(route('blog-details', $blog->slug)); ?>"><img src="<?php echo e(getImageFile($blog->image_path)); ?>" alt="img" class="img-fluid"></a>
                            <div class="blog-item-tag position-absolute text-uppercase font-12 font-semi-bold text-white bg-hover radius-3"><?php echo e(__(@$blog->category->name)); ?></div>
                        </div>

                        <div class="blog-item-bottom-part">
                            <h3 class="card-title blog-title"><a href="<?php echo e(route('blog-details', $blog->slug)); ?>"><?php echo e(__($blog->title)); ?></a></h3>
                            <p class="blog-author-name-publish-date font-13 font-medium color-gray text-uppercase">By: <?php echo e($blog->user->name); ?> / <?php echo e($blog->created_at->format(' j  M, Y')); ?></p>
                            <p class="card-text blog-content"><?php echo Str::limit($blog->details, 200); ?></p>

                            <div class="blog-read-more-btn">
                                <a href="<?php echo e(route('blog-details', $blog->slug)); ?>" class="theme-btn font-15 ps-0 font-medium text-capitalize color-hover"><?php echo e(__('Read More')); ?> <i data-feather="arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="no-course-found text-center">
                            <img src="<?php echo e(asset('frontend/assets/img/empty-data-img.png')); ?>" alt="img" class="img-fluid">
                            <h5 class="mt-3"><?php echo e(__('Blog Not Found')); ?></h5>
                        </div>
                    <?php endif; ?>
                    <div class="col-12">
                    <!-- Pagination Start -->
                    <?php if(@$blogs->hasPages()): ?>
                        <?php echo e(@$blogs->links('frontend.paginate.paginate')); ?>

                    <?php endif; ?>
                    <!-- Pagination End -->
                    </div>

                </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4">
                <div class="blog-page-right-content bg-white">

                    <div class="blog-sidebar-box">
                        <form class="blog-sidebar-search-box position-relative">
                            <div class="input-group">
                                <input class="form-control border-0 searchBlog" type="search" placeholder="Search...">
                                <button class="bg-transparent border-0"><span class="iconify" data-icon="akar-icons:search"></span></button>
                            </div>

                            <!-- Search Bar Suggestion Box Start -->
                            <div class="search-bar-suggestion-box searchBlogBox d-none custom-scrollbar">
                                <ul class="appendBlogSearchList">

                                </ul>
                            </div>
                            <!-- Search Bar Suggestion Box End -->

                        </form>
                    </div>

                    <div class="blog-sidebar-box">
                        <h6 class="blog-sidebar-box-title text-uppercase"><?php echo e(__('Recent Blogs')); ?></h6>
                        <ul class="popular-posts">
                            <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="sidebar-blog-item d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="sidebar-blog-item-img-wrap overflow-hidden">
                                            <a href="<?php echo e(route('blog-details', $recentBlog->slug)); ?>"><img src="<?php echo e(getImageFile($recentBlog->image_path)); ?>" alt="img" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 <?php echo e(selectedLanguage()->rtl == 1 ? 'me-3' : 'ms-3'); ?>">
                                        <h6 class="sidebar-blog-item-title"><a href="<?php echo e(route('blog-details', $recentBlog->slug)); ?>"><?php echo e(__(@$recentBlog->title)); ?></a></h6>
                                        <p class="blog-author-name-publish-date font-12 font-medium color-gray text-uppercase mb-0"><?php echo e(@$recentBlog->created_at->format(' j  M, Y')); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="blog-sidebar-box">
                        <h6 class="blog-sidebar-box-title text-uppercase"><?php echo e(__('Categories')); ?></h6>
                        <ul class="blog-sidebar-categories">
                            <?php $__currentLoopData = $blogCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('categoryBlogs', $blogCategory->slug)); ?>" class="font-15"><?php echo e(__($blogCategory->name)); ?> (<?php echo e($blogCategory->active_blogs_count); ?>)</a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="blog-sidebar-box">
                        <h6 class="blog-sidebar-box-title text-uppercase"><?php echo e(__('Tags')); ?></h6>
                        <ul class="blog-sidebar-tags">
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e($tag->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Course Single Details Area End -->

</div>

<input type="hidden" class="searchBlogRoute" value="<?php echo e(route('search-blog.list')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!-- Start:: Blog Search  -->
    <script src="<?php echo e(asset('frontend/assets/js/custom/search-blog-list.js')); ?>"></script>
    <!-- End:: Blog Search  -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/blog/blogs.blade.php ENDPATH**/ ?>