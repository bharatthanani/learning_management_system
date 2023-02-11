<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(__(@$title)); ?></title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('admin/sweetalert2/sweetalert2.css')); ?>">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldPushContent('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/metisMenu.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/styles/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/admin-extra.css')); ?>">
    <link href="<?php echo e(asset('common/css/select2.css')); ?>" rel="stylesheet">
    <?php echo toastr_css(); ?>

</head>
<body class=" <?php echo e(selectedLanguage()->rtl == 1 ? 'direction-rtl' : 'direction-ltr'); ?> ">

<?php if(get_option('allow_preloader') == 1): ?>
    <!-- Pre Loader Area start -->
    <div id="preloader">
        <div id="preloader_status"><img src="<?php echo e(getImageFile(get_option('app_preloader'))); ?>" alt="img" /></div>
    </div>
    <!-- Pre Loader Area End -->
<?php endif; ?>

<!-- Sidebar area start -->
<?php echo $__env->make('admin.common.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Sidebar area end -->

<!-- Main Content area start -->
<div class="main-content">

    <!-- Header section start -->
    <?php echo $__env->make('admin.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header section end -->

    <!-- page content wrap start -->
    <div class="page-content-wrap">
        <!-- Page content area start -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- Page content area end -->

        <!-- Footer section start -->
        <?php echo $__env->make('admin.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer section end -->
    </div>
    <!-- page content wrap end -->

</div>
<!-- Main Content area end -->

<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">

<!-- All Javascript files included here -->
<script src="<?php echo e(asset('frontend/assets/vendor/jquery/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('common/js/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/sweetalert2/sweetalert2.all.js')); ?>"></script>
<script src="<?php echo e(asset('common/js/iconify.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>
<script src="<?php echo e(asset('admin/js/admin-custom.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('common/js/select2.min.js')); ?>"></script>

<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>

<?php if(@$errors->any()): ?>
    <script>
        "use strict";
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("<?php echo e($error); ?>")
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>
<?php if(session()->has('success')): ?>
    <script>
        "use strict";
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.success("<?php echo e(session()->get('success')); ?>")
    </script>
<?php endif; ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/layouts/admin.blade.php ENDPATH**/ ?>