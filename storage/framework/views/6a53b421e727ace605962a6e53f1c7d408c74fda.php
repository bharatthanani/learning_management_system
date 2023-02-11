

<?php $__env->startSection('content'); ?>

    <div class="bg-page">
        <!-- Course Single Page Header Start -->
        <header class="page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="page-banner-content text-center">
                                <h3 class="page-banner-heading text-white pb-15"><?php echo e(__('Support Ticket')); ?></h3>

                                <!-- Breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page"><?php echo e(__('Support Ticket')); ?></li>
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
        <section class="faq-area support-tickets-page section-t-space">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h3 class="section-heading"><?php echo e(__(get_option('support_faq_title'))); ?></h3>
                        <p class="section-sub-heading"><?php echo e(__(get_option('support_faq_subtitle'))); ?></p>
                    </div>
                </div>


                <!-- Tab Content-->
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample">
                            <?php $count = true ?>
                            <?php $__currentLoopData = $faqQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faqQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                <div class="row">
                    <div class="col-12">
                        <div class="is-that-helpful-content text-center mt-30 pt-4">
                            <h5 class="mb-3"><?php echo e(__(get_option('ticket_title'))); ?></h5>
                            <h4 class="mb-3"><?php echo e(__(get_option('ticket_subtitle'))); ?></h4>
                            <div class="is-that-helpful-btns">
                                <a href="<?php echo e(route('student.support-ticket.create')); ?>" class="theme-btn theme-button1 default-hover-btn"><?php echo e(__('Create New Ticket')); ?></a>
                                <a href="<?php echo e(route('student.support-ticket.create')); ?>" class="theme-btn theme-button1 default-hover-btn green-theme-btn"><?php echo e(__('View Ticket')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- FAQ Area End -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/student/support_ticket/faq.blade.php ENDPATH**/ ?>