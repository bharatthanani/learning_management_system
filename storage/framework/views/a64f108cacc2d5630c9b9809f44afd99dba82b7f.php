

<?php $__env->startSection('content'); ?>
    <!-- Sing Up Area Start -->
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
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <h5 class="mb-1"><?php echo e(__('Sign In')); ?></h5>
                            <p class="font-14 mb-30"><?php echo e(__('New User')); ?> ? <a href="<?php echo e(route('sign-up')); ?>" class="color-hover text-decoration-underline font-medium"><?php echo e(__('Create an Account')); ?></a></p>

                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3"><?php echo e(__('Email')); ?></label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control email" placeholder="<?php echo e(__('Type your email')); ?>">
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3"><?php echo e(__('Password')); ?></label>
                                    <div class="form-group mb-0 position-relative">
                                        <input class="form-control password" name="password" value="<?php echo e(old('password')); ?>" placeholder="*********" type="password">
                                        <span class="toggle cursor fas fa-eye pass-icon"></span>
                                    </div>

                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="row mb-30">
                                <div class="col-md-12"><a href="<?php echo e(route('forget-password')); ?>" class="color-hover text-decoration-underline font-medium"><?php echo e(__('Forgot Password')); ?>?</a></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <button type="submit" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100"><?php echo e(__('Sign In')); ?></button>
                                </div>
                            </div>

                            <div class="social-media-login-wrap">
                                <?php if(env('GOOGLE_LOGIN_STATUS') == 1): ?>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('login.google')); ?>" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100 google-login"><?php echo e(__('Sign in with Google')); ?></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(env('FACEBOOK_LOGIN_STATUS') == 1): ?>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('login.facebook')); ?>" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100 facebook-login"><?php echo e(__('Sign in with Facebook')); ?></a>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if(env('TWITTER_LOGIN_STATUS') == 1): ?>
                                <div class="row mb-0">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('login.twitter')); ?>" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100 twitter-login"><?php echo e(__('Sign in with Twitter')); ?></a>
                                    </div>
                                </div>
                                <?php endif; ?>                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sing Up Area End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/auth/login.blade.php ENDPATH**/ ?>