

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
                        <form method="POST" action="<?php echo e(route('store.sign-up')); ?>">
                            <?php echo csrf_field(); ?>
                            <h5 class="mb-1"><?php echo e(__('Create an Account')); ?></h5>
                            <p class="font-14 mb-30"><?php echo e(__('Already have an account?')); ?> <a href="<?php echo e(route('login')); ?>" class="color-hover text-decoration-underline font-medium"><?php echo e(__('Sign In')); ?></a></p>

                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3" for="email"><?php echo e(__('Email')); ?></label>
                                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Type your email">
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-6">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3" for="first_name"><?php echo e(__('First Name')); ?></label>
                                    <input type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name')); ?>" class="form-control" placeholder="<?php echo e(__('First Name')); ?>">
                                    <?php if($errors->has('first_name')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('first_name')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3" for="last_name"><?php echo e(__('Last Name')); ?></label>
                                    <input type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name')); ?>" class="form-control" placeholder="<?php echo e(__('Last Name')); ?>">
                                    <?php if($errors->has('last_name')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('last_name')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <label class="label-text-title color-heading font-medium font-16 mb-3" for="password"><?php echo e(__('Password')); ?></label>

                                    <div class="form-group mb-0 position-relative">
                                        <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control password" placeholder="*********" >
                                        <span class="toggle cursor fas fa-eye pass-icon"></span>
                                    </div>

                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label mb-0" for="flexCheckChecked">
                                                By clicking Create account, I agree that I have read and accepted the <a href="<?php echo e(route('terms-conditions')); ?>" class="color-hover text-decoration-underline">Terms of Use</a> and <a href="<?php echo e(route('privacy-policy')); ?>" class="color-hover text-decoration-underline">Privacy Policy.</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <button type="submit" class="theme-btn theme-button1 theme-button3 font-15 fw-bold w-100"><?php echo e(__('Sign Up')); ?></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sing Up Area End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/auth/sign-up.blade.php ENDPATH**/ ?>