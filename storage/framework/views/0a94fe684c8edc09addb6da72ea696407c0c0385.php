

<?php $__env->startSection('content'); ?>


<!--Content here-->

 <!-- banner start -->
    <section class="main-banner-featured page-banner-header gradient-bg">
        <div class="section-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-6">
                            <div class="balance">
                                <div class="banner-all-text">
                                    <h1 class="secondary-banner-text">PACKAGES AND PAYMENT
                                    </h1>
                                    <!-- <span class="blue-dash"></span> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner end -->
    
      <section class="price-plan">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-xxl-9 col-12 col-sm-12 px-lg-3">
                        <div class="sec-title">
                            <h2>our <span>packages</span></h2>
                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit,Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        </div>
                        <div class="plan-listing">
                            <div class="row justify-content-center">
                                <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="price-item">
                                        <div class="head">
                                            <h3><?php echo e($package->title); ?></h3>
                                            <h5><?php echo e($package->sub_title); ?></h5>
                                        </div>
                                        <div class="body">
                                            <div class="price">
                                                <h4 class="new-price">$<?php echo e($package->price); ?></h4>
                                                <h4 class="old-price">Only <span>$<?php echo e($package->real_price); ?></span></h4>
                                            </div>
                                           <div>
                                               <?php echo $package->description; ?>

                                           </div>
                                            <div class="plan-btn">
                                                <a class="choose-plan" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <select name="" id="">
  <option value="">1</option>
</select>

<style>
    select::-ms-expand {
    display: none;
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  text-indent: 1px;
  text-overflow: '';
}
</style>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!-- Include Shuffle Plugins -->
    <script src="<?php echo e(asset('frontend/assets/js/shuffle.min.js')); ?>"></script>
    <!-- Include Shuffle Plugins -->

    <!-- Shuffle js filter and masonry Start -->
    <script>
        var Shuffle = window.Shuffle;
        var jQuery = window.jQuery;

        var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
            itemSelector: '.shuffle-item',
            buffer: 1
        });

        jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
            var input = evt.currentTarget;
            if (input.checked) {
                myShuffle.filter(input.value);
            }
        });
    </script>
    <!-- Shuffle js filter and masonry Start -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/packages.blade.php ENDPATH**/ ?>