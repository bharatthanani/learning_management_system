

<?php $__env->startSection('content'); ?>

<div class="bg-page">
    <!-- Course Single Page Header Start -->
    <header class="page-banner-header gradient-bg position-relative">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="page-banner-content text-center">
                            <h3 class="page-banner-heading text-white pb-15"><?php echo e(__('FAQ')); ?></h3>

                            <!-- Breadcrumb Start-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item font-14"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                                    <li class="breadcrumb-item font-14 active" aria-current="page"><?php echo e(__('FAQ')); ?></li>
                                </ol>
                            </nav>
                            <!-- Breadcrumb End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Course Single Page Header End -->

    <!-- FAQ Area Start -->
    <section class="faq-area faq-page-area section-t-space">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h3 class="section-heading"><?php echo e(__(get_option('faq_title'))); ?></h3>
                    <p class="section-sub-heading"><?php echo e(__(get_option('faq_subtitle'))); ?></p>
                </div>
            </div>

            <!-- Tab panel nav list -->
            <div class="faq-tab-nav-wrap d-flex justify-content-between">
                <ul class="nav nav-tabs tab-nav-list border-0 row" id="myTab" role="tablist">

                    <li class="nav-item col-md-3" role="presentation">
                        <a class="nav-link text-center active" id="Support-tab" data-bs-toggle="tab" href="#Support" role="tab" aria-controls="Support" aria-selected="true">
                            <!-- faq tab nav Item start-->
                            <div class="faq-tab-nav-item bg-white">
                                <h6><?php echo e(Str::limit(get_option('faq_tab_first_title'), 22)); ?></h6>
                                <div class="faq-tab-nav-img-wrap">
                                    <img src="<?php echo e(asset('frontend/assets/img/icons-svg/faq-page-tab-icon.png')); ?>" alt="img">
                                </div>
                                <p><?php echo e(Str::limit(get_option('faq_tab_first_subtitle'), 80)); ?></p>
                            </div>
                            <!-- faq tab nav Item End-->
                        </a>
                    </li>
                    <li class="nav-item col-md-3" role="presentation">
                        <a class="nav-link" id="Licensing-tab" data-bs-toggle="tab" href="#Licensing" role="tab" aria-controls="Licensing" aria-selected="false">
                            <!-- faq tab nav Item start-->
                            <div class="">
                                <div class="faq-tab-nav-item bg-white">
                                    <h6><?php echo e(Str::limit(get_option('faq_tab_sec_title'), 22)); ?></h6>
                                    <div class="faq-tab-nav-img-wrap">
                                        <img src="<?php echo e(asset('frontend/assets/img/icons-svg/faq-page-tab-icon.png')); ?>" alt="img">
                                    </div>
                                    <p><?php echo e(Str::limit(get_option('faq_tab_sec_subtitle'), 80)); ?></p>
                                </div>
                            </div>
                            <!-- faq tab nav Item End-->
                        </a>
                    </li>
                    <li class="nav-item col-md-3" role="presentation">
                        <a class="nav-link" id="Account-tab" data-bs-toggle="tab" href="#Account" role="tab" aria-controls="Account" aria-selected="false">
                            <!-- faq tab nav Item start-->
                            <div class="">
                                <div class="faq-tab-nav-item bg-white">
                                    <h6><?php echo e(Str::limit(get_option('faq_tab_third_title'), 22)); ?></h6>
                                    <div class="faq-tab-nav-img-wrap">
                                        <img src="<?php echo e(asset('frontend/assets/img/icons-svg/faq-page-tab-icon.png')); ?>" alt="img">
                                    </div>
                                    <p><?php echo e(Str::limit(get_option('faq_tab_third_subtitle'), 80)); ?></p>
                                </div>
                            </div>
                            <!-- faq tab nav Item End-->
                        </a>
                    </li>
                    <li class="nav-item col-md-3" role="presentation">
                        <a class="nav-link" id="Tax-tab" data-bs-toggle="tab" href="#Tax" role="tab" aria-controls="Tax" aria-selected="false">
                            <!-- faq tab nav Item start-->
                            <div class="">
                                <div class="faq-tab-nav-item bg-white">
                                    <h6><?php echo e(Str::limit(get_option('faq_tab_four_title'), 22)); ?></h6>
                                    <div class="faq-tab-nav-img-wrap">
                                        <img src="<?php echo e(asset('frontend/assets/img/icons-svg/faq-page-tab-icon.png')); ?>" alt="img">
                                    </div>
                                    <p><?php echo e(Str::limit(get_option('faq_tab_four_subtitle'), 80)); ?></p>
                                </div>
                            </div>
                            <!-- faq tab nav Item End-->
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Tab panel nav list -->

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <?php $count = true ?>
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faqQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo e($faqQuestion->id); ?>">
                                    <button class="accordion-button font-medium font-18 <?php echo e($count ? null : 'collapsed'); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($faqQuestion->id); ?>"
                                            aria-expanded="<?php echo e($count ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($faqQuestion->id); ?>">
                                        <?php echo e($key+1); ?>. <?php echo e(__($faqQuestion->question)); ?>


                                    </button>
                                </h2>
                                <div id="collapse<?php echo e($faqQuestion->id); ?>" class="accordion-collapse collapse <?php echo e($count ? 'show' : null); ?>" aria-labelledby="heading<?php echo e($faqQuestion->id); ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo e(__($faqQuestion->answer)); ?>

                                    </div>
                                </div>
                            </div>
                            <?php $count = false ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Tab Content-->

        </div>
    </section>
    <!-- FAQ Area End -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/frontend/faq.blade.php ENDPATH**/ ?>