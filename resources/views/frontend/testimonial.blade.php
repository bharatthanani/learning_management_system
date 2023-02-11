@extends('frontend.layouts.app')

@section('content')


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
                                    <h1 class="secondary-banner-text">Testimonial
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
    
   <!-- testimoniaal sections start -->
     <section class="main-testimonial">
        <div class="container-fluid px-0">
            <div class="mar-div">
            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"
                                class="tastimonial-text col-11">
                                <h6 class="primary-text-texti">TESTIMONIALS</h6>
                                <h1></h1>
                                <h1 class="secondary-text-testi">Conect With Other Members</h1>
                                <p class="sub-secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a class="testi-btn" href="javascript:;">GET STARTED</a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                            <!-- testimimonial seection start -->
                            <div  class="owl-carousel owl-theme testimonial-slider">

                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-two.png" alt="">
                                    <div class="stars">
                                        <img src="images/trsimonial-img-one.png" alt="">
                                    </div>
                                    <div class="para">
                                        <p class="tstipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="un">MICHAEL</h5>
                                        <p class="uc">MDS MANUFACTORING</p>
                                    </div>
                                </div>
</div>

<!--                                <div class="item">-->
<!--                                <div class="testimonial-content">-->
<!--                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-three.png" alt="">-->
<!--                                    <div class="stars">-->
<!--                                        <img src="images/trsimonial-img-one.png" alt="">-->
<!--                                    </div>-->
<!--                                    <div class="para">-->
<!--                                        <p class="tstipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                    <div class="user-name">-->
<!--                                        <h5 class="un">SHERYl</h5>-->
<!--                                        <p class="uc">MDS MANUFACTORING</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--</div>-->

                                <div class="item">
                                <div class="testimonial-content">
                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-four.png" alt="">
                                    <div class="stars">
                                        <img src="images/trsimonial-img-one.png" alt="">
                                    </div>
                                    <div class="para">
                                        <p class="tstipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="un">MICHAEL</h5>
                                        <p class="uc">MDS MANUFACTORING</p>
                                    </div>
                                </div>
</div>

                                <div class="item">
                                <div class="testimonial-content">
                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-two.png" alt="">
                                    <div class="stars">
                                        <img src="images/trsimonial-img-one.png" alt="">
                                    </div>
                                    <div class="para">
                                        <p class="tstipara">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="un">SHERYl</h5>
                                        <p class="uc">MDS MANUFACTORING</p>
                                    </div>
                                </div>

</div>

                            </div>
                            </div>
</section>
                            <!-- teestimonial section end -->



@endsection

@push('script')
    <!-- Include Shuffle Plugins -->
    <script src="{{ asset('frontend/assets/js/shuffle.min.js') }}"></script>
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
    
      <script>
        $('.testimonial-slider').owlCarousel({
  loop:true,
  margin:35,
  nav:true,
  autoWidth: true,
  dots: false,
  responsive:{
      0:{
          items:1,
          autoWidth: false,
      },
      600:{
          items:2,
          // margin:10,
          // autoWidth: false,
      },
      1000:{
          items:3
      }
  }
})
    </script>
@endpush