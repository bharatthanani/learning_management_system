<!DOCTYPE html>
<html lang="en">
    
<head>
    <title><?php if(@$metaData['title']): ?> <?php echo $metaData['title']; ?> <?php else: ?> <?php echo e(@$pageTitle); ?> <?php endif; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="zainiktheme">

    <meta name="title" content="<?php if(@$metaData['title']): ?> <?php echo $metaData['title']; ?> <?php else: ?> LMSZAI <?php endif; ?>">
    <meta name="description" content="<?php if(@$metaData['meta_description']): ?> <?php echo $metaData['meta_description']; ?> <?php endif; ?>">
    <?php if(@$metaData['meta_keywords'] AND @$metaData['meta_keywords']): ?>
        <meta name="keywords" content="<?php echo $metaData['meta_keywords']; ?>">
    <?php endif; ?>
    <meta property="og:type" content="Web Template">
    <?php if(@$metaData['og_title']): ?>
        <meta property="og:title" content="<?php echo $metaData['og_title']; ?>">
    <?php endif; ?>
    <?php if(@$metaData['og_description'] AND @$metaData['og_description']): ?>
        <meta property="og:description" content="<?php echo @$metaData['og_description']; ?>">
    <?php endif; ?>
    <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo.png')); ?>">

    <meta name="twitter:card" content="zainiktheme">
    <meta name="twitter:title" content="LMSZAI- LMS Online Courses and Education">
    <meta name="twitter:description" content="LMSZAI- LMS Online Courses and Education">
    <meta name="twitter:image" content="<?php echo e(asset('frontend/assets/img/logo.png')); ?>">

    <meta name="msapplication-TileImage" content="<?php echo e(asset('frontend/assets/img/logo.png')); ?>">

    <meta name="msapplication-TileColor" content="rgba(103, 20, 222,.55)">
    <meta name="theme-color" content="#754FFE">



    <!--=======================================
      All Css Style link
    ===========================================-->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('frontend/assets/css/jquery-ui.min.css')); ?>" rel="stylesheet">

    <!-- Font Awesome for this template -->
    <link href="<?php echo e(asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if(get_option('app_font_design_type') == 2): ?>
        <?php if(empty(get_option('app_font_link'))): ?>
            <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <?php else: ?>
            <?php echo get_option('app_font_link'); ?>

        <?php endif; ?>
    <?php else: ?>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/fonts/feather/feather.css')); ?>">

    <!-- Animate Css-->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.theme.default.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/venobox.min.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>
    <?php echo toastr_css(); ?>
    <?php echo $__env->make('frontend.layouts.dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/css/extra.css')); ?>" rel="stylesheet">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">

    <!-- FAVICONS -->
    <link rel="icon" href="<?php echo e(asset('frontend/assets/img/favicon-16x16.png')); ?>" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/img/favicon-16x16.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/img/favicon.png')); ?>">

    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(asset('frontend/assets/img/apple-icon-72x72.png')); ?>" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(asset('frontend/assets/img/apple-icon-114x114.png')); ?>" sizes="114x114" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(asset('frontend/assets/img/apple-icon-144x144.png')); ?>" sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(asset('frontend/assets/img/favicon-16x16.png')); ?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="<?php echo e(selectedLanguage()->rtl == 1 ? 'direction-rtl' : 'direction-ltr'); ?>">

<?php if(get_option('allow_preloader') == 1): ?>
    <!-- Pre Loader Area start -->
    <div id="preloader">
        <div id="preloader_status"><img src="<?php echo e(getImageFile(get_option('app_preloader'))); ?>" alt="img" /></div>
    </div>
    <!-- Pre Loader Area End -->
<?php endif; ?>

<?php echo $__env->yieldContent('content'); ?>

<!--=======================================
    All Jquery Script link
===========================================-->
<!-- Bootstrap core JavaScript -->
<script src="<?php echo e(asset('frontend/assets/vendor/jquery/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/vendor/jquery/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

<!-- ==== Plugin JavaScript ==== -->
<script src="<?php echo e(asset('frontend/assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/assets/js/jquery-ui.min.js')); ?>"></script>

<!--WayPoints JS Script-->
<script src="<?php echo e(asset('frontend/assets/js/waypoints.min.js')); ?>"></script>

<!--Counter Up JS Script-->
<script src="<?php echo e(asset('frontend/assets/js/jquery.counterup.min.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>"></script>

<!-- Range Slider -->
<script src="<?php echo e(asset('frontend/assets/js/price_range_script.js')); ?>"></script>

<!--Feather Icon-->
<script src="<?php echo e(asset('frontend/assets/js/feather.min.js')); ?>"></script>

<!--Iconify Icon-->
<script src="<?php echo e(asset('common/js/iconify.min.js')); ?>"></script>

<!--Venobox-->
<script src="<?php echo e(asset('frontend/assets/js/venobox.min.js')); ?>"></script>

<!-- Menu js -->
<script src="<?php echo e(asset('frontend/assets/js/menu.js')); ?>"></script>

<?php echo $__env->yieldPushContent('script'); ?>
<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
<!-- Custom scripts for this template -->
<script src="<?php echo e(asset('frontend/assets/js/frontend-custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/layouts/auth.blade.php ENDPATH**/ ?>