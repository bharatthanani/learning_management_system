

<?php $__env->startSection('content'); ?>

    <div class="bg-page">
        <!-- Course Single Page Header Start -->
        <header class="page-banner-header gradient-bg position-relative">
            <div class="section-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="page-banner-content text-center">
                                <h3 class="page-banner-heading text-white pb-15"><?php echo e(__('Terms & Conditions')); ?></h3>

                                <!-- Breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item font-14"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
                                        <li class="breadcrumb-item font-14 active" aria-current="page"><?php echo e(__('Terms Conditions')); ?></li>
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
                <!-- Tab Content-->
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <?php echo @$policy->description; ?>

                    </div>
                </div>

            </div>
        </section>
        <!-- FAQ Area End -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/terms-conditions.blade.php ENDPATH**/ ?>