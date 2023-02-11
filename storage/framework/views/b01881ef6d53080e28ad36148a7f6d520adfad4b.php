

<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Edit Ranking Level')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('ranking.index')); ?>"><?php echo e(__('All Ranking Level')); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Edit Blog')); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title d-flex justify-content-between">
                            <h2><?php echo e(__('Edit Ranking Level')); ?></h2>
                        </div>
                        <form action="<?php echo e(route('ranking.update', [$level->uuid])); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="upload-img-box">
                                        <?php if($level->badge_image): ?>
                                            <img src="<?php echo e(getImageFile($level->image_path)); ?>">
                                        <?php else: ?>
                                            <img src="">
                                        <?php endif; ?>
                                        <input type="file" name="badge_image" id="badge_image" accept="image/*" onchange="previewFile(this)">
                                        <div class="upload-img-box-icon">
                                            <i class="fa fa-camera"></i>
                                            <p class="m-0"><?php echo e(__('Badge Image')); ?></p>
                                        </div>
                                    </div>
                                    <?php if($errors->has('badge_image')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('badge_image')); ?></span>
                                    <?php endif; ?>
                                    <p><?php echo e(__('Accepted Image Files')); ?>: PNG,JPG <br> <?php echo e(__('Accepted Size')); ?>: 86 x 66 (1MB)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label><?php echo e(__('Name')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="name" value="<?php echo e($level->name); ?>" placeholder="Type name" class="form-control">
                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label for="serial_no"><?php echo e(__('Serial No')); ?> <span class="text-danger">*</span></label>
                                        <input type="number" name="serial_no" value="<?php echo e($level->serial_no); ?>" placeholder="Type serial no" class="form-control" required>
                                        <?php if($errors->has('serial_no')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('serial_no')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label for="earning"><?php echo e(__('Earning')); ?> <span class="text-danger">*</span></label>
                                        <input type="number" name="earning" value="<?php echo e($level->earning); ?>" placeholder="Type name" class="form-control">
                                        <?php if($errors->has('earning')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('earning')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label for="student"><?php echo e(__('Student')); ?> <span class="text-danger">*</span></label>
                                        <input type="number" name="student" id="student" placeholder="Type student"
                                               value="<?php echo e($level->student); ?>"
                                               class="form-control" required>
                                        <?php if($errors->has('student')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('student')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-12 text-right">
                                    <?php echo $__env->make('layouts.element.form.update-button', [], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom/image-preview.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/custom/image-preview.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/admin/ranking/edit.blade.php ENDPATH**/ ?>