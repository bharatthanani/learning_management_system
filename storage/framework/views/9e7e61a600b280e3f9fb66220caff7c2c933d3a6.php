<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <meta name="description" content="<?php if(@$metaData['meta_description']!=''): ?> <?php echo e((@$metaData['meta_description'])); ?> <?php endif; ?>">
    <?php if(isset($metaData['meta_keyword']) AND $metaData['meta_keyword'] != null): ?>
        <meta name="keywords" content="<?php echo e($metaData['meta_keyword']); ?>">
    <?php endif; ?>

    <meta name="author" content="zainiktheme">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <meta property="og:type" content="Learning">
    <meta property="og:title" content="<?php echo e(get_option('og_title')); ?>">
    <meta property="og:description" content="<?php echo e(get_option('og_description')); ?>">
    <meta property="og:image" content="<?php echo e(getImageFile(get_option('app_logo'))); ?>">

    <meta name="twitter:card" content="Learning">
    <meta name="twitter:title" content="<?php echo e(get_option('og_title')); ?>">
    <meta name="twitter:description" content="<?php echo e(get_option('og_description')); ?>">
    <meta name="twitter:image" content="<?php echo e(getImageFile(get_option('app_logo'))); ?>">

    <meta name="msapplication-TileImage" content="<?php echo e(getImageFile(get_option('app_logo'))); ?>">

    <meta name="msapplication-TileColor" content="rgba(103, 20, 222,.55)">
    <meta name="theme-color" content="#754FFE">

    <?php echo $__env->yieldContent('meta'); ?>
    <title><?php echo e(get_option('app_name')); ?> - <?php if(isset($data['pageTitle'])): ?> <?php echo e($data['pageTitle']); ?> <?php else: ?>  <?php echo e(__(@$pageTitle)); ?>  <?php endif; ?></title>

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

    <!-- Sweet Alert css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/sweetalert2/sweetalert2.css')); ?>">
    

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/css/extra.css')); ?>" rel="stylesheet">

    <!-- Responsive Css-->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/slick.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/slick-theme.css')); ?>">
     
        <link rel="stylesheet" href="css/owl.carousel.min.css">
          <link rel="stylesheet" href="css/owl.theme.default.min.css">
          
             <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>">

    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" sizes="114x114" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="<?php echo e(getImageFile(get_option('app_fav_icon'))); ?>" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $__env->yieldPushContent('style'); ?>
    <?php echo toastr_css(); ?>

    <?php echo $__env->make('frontend.layouts.dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="<?php echo e(selectedLanguage()->rtl == 1 ? 'direction-rtl' : 'direction-ltr'); ?>">

<?php if(get_option('allow_preloader') == 1): ?>
<!-- Pre Loader Area start -->
  <div id="preloader">
    <div id="preloader_status"><img src="<?php echo e(getImageFile(get_option('app_preloader'))); ?>" alt="img" /></div>
</div>
<!-- Pre Loader Area End -->
<?php endif; ?>

<!--Main Menu/Navbar Area Start -->
<?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Main Menu/Navbar Area Start -->

<!-- Main Content Start-->
<?php echo $__env->yieldContent('content'); ?>
<!-- Main Content End-->

<!-- Footer Start -->
<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Footer End -->

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
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo e(asset('frontend/assets/js/frontend-custom.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/slick.js')); ?>"></script>

<script src="js/owl.carousel.min.js"></script>

<script src="<?php echo e(asset('admin/sweetalert2/sweetalert2.all.js')); ?>"></script>
<input type="hidden" id="base_url" value="<?php echo e(url('/')); ?>">
<!-- Start:: Navbar Search  -->
<input type="hidden" class="search_route" value="<?php echo e(route('search-course.list')); ?>">
<script src="<?php echo e(asset('frontend/assets/js/custom/search-course.js')); ?>"></script>
<!-- End:: Navbar Search  -->





<?php echo $__env->yieldPushContent('script'); ?>

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
<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>