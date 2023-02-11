

<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Packages Add')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item"><?php echo e(__('Packages')); ?></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Packages Add')); ?></li>
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
                            <h2><?php echo e(__('Packages Add')); ?></h2>
                        </div>
                        <form action="<?php echo e(route('packages.packages.update')); ?>" method="post" class="form-horizontal">
                            <?php echo csrf_field(); ?>
                            <input name="id" type="hidden" value="<?php echo e($package_data->id); ?>" />
                           <div class="input__group mb-25">
                                <label><?php echo e(__('Title')); ?> <span class="text-danger">*</span></label>
                                <input type="text" name="title" value="<?php echo e($package_data->title ?? old('title')); ?>" />

                                <?php if($errors->has('title')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('title')); ?></span>
                                <?php endif; ?>

                            </div>
                            
                             <div class="input__group mb-25">
                                <label><?php echo e(__('Sub Title')); ?> <span class="text-danger">*</span></label>
                                <input type="text" name="sub_title" value="<?php echo e($package_data->sub_title ?? old('sub_title')); ?>" />

                                <?php if($errors->has('sub_title')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('sub_title')); ?></span>
                                <?php endif; ?>

                            </div>
                            
                             <div class="input__group mb-25">
                                <label><?php echo e(__('Discounted Price')); ?> <span class="text-danger">*</span></label>
                                <input type="number" name="price" value="<?php echo e($package_data->price ?? old('price')); ?>" />

                                <?php if($errors->has('price')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('price')); ?></span>
                                <?php endif; ?>

                            </div>
                            
                             <div class="input__group mb-25">
                                <label><?php echo e(__('Original Price')); ?> <span class="text-danger">*</span></label>
                                <input type="number" name="real_price" value="<?php echo e($package_data->real_price ?? old('real_price')); ?>" />

                                <?php if($errors->has('real_price')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('real_price')); ?></span>
                                <?php endif; ?>

                            </div>
                            
                            <div class="input__group mb-25">
                                <label><?php echo e(__('Description')); ?> <span class="text-danger">*</span></label>
                                <textarea name="description" id="summernote"><?php echo e($package_data->description ?? old('description')); ?></textarea>

                                <?php if($errors->has('description')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('description')); ?></span>
                                <?php endif; ?>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" type="submit"><?php echo e(__('Save')); ?></button>
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
    <!-- Summernote CSS - CDN Link -->
    <link href="<?php echo e(asset('common/css/summernote/summernote.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('common/css/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/custom/slug.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/custom/form-editor.js')); ?>"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="<?php echo e(asset('common/js/summernote/summernote-lite.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/admin/packages/edit.blade.php ENDPATH**/ ?>