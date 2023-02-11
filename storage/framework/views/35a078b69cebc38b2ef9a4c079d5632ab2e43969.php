

<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Update Teacher Profile')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Update Teacher Profile')); ?></li>
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
                            <h2><?php echo e(__('Update Teacher Profile')); ?></h2>
                        </div>
                        <form action="<?php echo e(route('teacher-profile.store')); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($data['teacher_profile']->id); ?>" name="id" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label><?php echo e(__('Title')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="<?php echo e($data['teacher_profile']->title ?? old('title')); ?>" placeholder="<?php echo e(__('Title')); ?>" class="form-control" required>
                                        <?php if($errors->has('title')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('title')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label><?php echo e(__('Hobbies')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="hobbies" value="<?php echo e($data['teacher_profile']->hobbies ?? old('hobbies')); ?>" placeholder="<?php echo e(__('Hobbies')); ?>" class="form-control" required>
                                        <?php if($errors->has('hobbies')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('hobbies')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input__group mb-25">
                                        <label><?php echo e(__('Youtube Intro Link')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" name="youtube_intro" value="<?php echo e($data['teacher_profile']->youtube_intro ?? old('youtube_intro')); ?>" placeholder="<?php echo e(__('Paste Link')); ?>" class="form-control" required>
                                        <?php if($errors->has('youtube_intro')): ?>
                                            <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('youtube_intro')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                 <div class="row col-md-6">
                                <div class="col-md-12">
                                    <div class="upload-img-box mb-25">
                                        <img src="<?php echo e(getImageFile($data['teacher_profile']->thumbnail ? @"teacher_profile/thumbnail/".$data['teacher_profile']->thumbnail : '')); ?>">
                                        <input type="file" name="thumbnail" id="image" accept="image/*" onchange="previewFile(this)">
                                        <div class="upload-img-box-icon">
                                            <i class="fa fa-camera"></i>
                                            <p class="m-0"><?php echo e(__('Thumbnail')); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php if($errors->has('thumbnail')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('thumbnail')); ?></span>
                                <?php endif; ?>
                            </div>
                                 <div class="col-md-12">
                                <div class="custom-form-group mb-3">
                                <label for="desc" class="text-lg-right text-black"> <?php echo e(__('Description')); ?> </label>
                                <div class="col-lg-12">
                                    <textarea name="tool_desc" class="form-control" rows="5" id="tool_desc"><?php echo e($data['teacher_profile']->tool_desc ?? old('tool_desc')); ?></textarea>
                                    <?php if($errors->has('tool_desc')): ?>
                                        <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('tool_desc')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="upload-img-box mb-25">
                                        <img src="<?php echo e(getImageFile($data['teacher_profile']->image ? @"teacher_profile/".$data['teacher_profile']->image : '')); ?>">
                                        <input type="file" name="image" id="image" accept="image/*" onchange="previewFile(this)">
                                        <div class="upload-img-box-icon">
                                            <i class="fa fa-camera"></i>
                                            <p class="m-0"><?php echo e(__('Image')); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php if($errors->has('image')): ?>
                                    <span class="text-danger"><i class="fas fa-exclamation-triangle"></i> <?php echo e($errors->first('image')); ?></span>
                                <?php endif; ?>
                                <p><?php echo e(__('Accepted Image Files')); ?>: JPEG, JPG, PNG <br> <?php echo e(__('Accepted Size')); ?>: 300 x 300 (1MB)</p>
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
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom/image-preview.css')); ?>">
      <link href="<?php echo e(asset('common/css/summernote/summernote.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('common/css/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('admin/js/custom/image-preview.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/custom/admin-profile.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/custom/slug.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/custom/form-editor.js')); ?>"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="<?php echo e(asset('common/js/summernote/summernote-lite.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#tool_desc").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/admin/teacher-tool/add.blade.php ENDPATH**/ ?>