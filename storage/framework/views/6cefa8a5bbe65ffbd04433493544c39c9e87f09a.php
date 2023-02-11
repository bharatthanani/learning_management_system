

<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Add Template')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('email-template.index')); ?>"><?php echo e(__('Email Template')); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__($title)); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-horizontal__item bg-style">
                        <div class="item-top mb-30">
                            <h2><?php echo e(__('Add Template')); ?></h2>
                        </div>
                        <form action="<?php echo e(route('email-template.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="custom-form-group mb-3 row">
                                <label for="name" class="col-lg-3 text-lg-right text-black"> <?php echo e(__('Name')); ?> </label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" class="form-control flat-input" placeholder=" <?php echo e(__('Name')); ?> ">
                                    <?php if($errors->has('name')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="custom-form-group mb-3 row">
                                <label for="subject" class="col-lg-3 text-lg-right text-black"> <?php echo e(__('Subject')); ?> </label>
                                <div class="col-lg-9">
                                    <input type="text" name="subject" id="subject" value="<?php echo e(old('subject')); ?>" class="form-control flat-input" placeholder=" <?php echo e(__('Subject')); ?> ">
                                    <?php if($errors->has('subject')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('subject')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="custom-form-group mb-3 row">
                                <label for="body" class="col-lg-3 text-lg-right text-black"> <?php echo e(__('Body')); ?> </label>
                                <div class="col-lg-9">
                                   <textarea name="body" id="body" class="form-control" placeholder="<?php echo e(__('Body')); ?>" rows="10"><?php echo e(old('body')); ?></textarea>
                                    <?php if($errors->has('body')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('body')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="col-md-12 text-right">
                                    <?php echo $__env->make('layouts.element.form.save-with-another', [], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content area end -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/admin/emailTemplate/create.blade.php ENDPATH**/ ?>