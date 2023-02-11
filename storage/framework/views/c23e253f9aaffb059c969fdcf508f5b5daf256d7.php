

<?php $__env->startSection('content'); ?>
    <!-- Sing In Area Start -->
    <section class="sign-up-page p-0">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-5">
                    <div class="sign-up-left-content">
                        <div class="sign-up-top-logo">
                            <a href="<?php echo e(route('main.index')); ?>"><img src="<?php echo e(getImageFile(get_option('app_logo'))); ?>" alt="logo"></a>
                        </div>
                        <p><?php echo e(__(get_option('sign_up_left_text'))); ?></p>
                        <?php if(get_option('sign_up_left_image')): ?>
                            <div class="sign-up-bottom-img">
                                <img src="<?php echo e(getImageFile(get_option('sign_up_left_image'))); ?>" alt="hero" class="img-fluid">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="sign-up-right-content bg-white">
                        <form action="<?php echo e(route('forget-password.email')); ?>" method="post">
                            <?php echo csrf_field(); ?>

                            <h5 class="mb-1"><?php echo e(__(get_option('forgot_title'))); ?></h5>
                            <div class="forgot-pass-text mb-25 mt-3">
                                <p class="mb-2"><?php echo e(__(get_option('forgot_subtitle'))); ?></p>
                            </div>

                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3"><?php echo e(__('Email')); ?></label>
                                    <input type="email" name="email" class="form-control" placeholder="Type your email">
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <button type="submit" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100"><?php echo e(__(get_option('forgot_btn_name'))); ?></button>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-12"><a href="<?php echo e(route('login')); ?>" class="color-hover text-decoration-underline font-medium"><?php echo e(__('Back to Login?')); ?></a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sing In Area End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/auth/forgot.blade.php ENDPATH**/ ?>