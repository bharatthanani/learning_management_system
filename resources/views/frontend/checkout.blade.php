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
                                    <h1 class="secondary-banner-text">checkout
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
    
      <section class="section-checkout">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <form action="" class="checkout-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

                                <div class="form-head">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <h5 class="form-h">BUYER INFO</h5>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <p class="form-p">Returning User? <a href="javascript:" class="signup-a">
                                                    Log In here</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">FULL NAME</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">ADDRESS</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">land mark</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">city</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row gx-xxl-5 gx-xl-5 gx-lg-5">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="" class="custom-label">state</label>
                                        <select class="form-select check-select custom-control" aria-label="Default select example">
                                            <option selected="">select state</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="" class="custom-label">zip code</label>
                                        <input type="text" class="form-control custom-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <form action="" class="checkout-form">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

                                <div class="form-head">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <h5 class="form-h">PAYMENT METHOD</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">NAME ON CARD</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="custom-label">CARD NUMBER</label>
                                <input type="text" class="form-control custom-control" placeholder="">
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="row gx-xxl-2 gx-xl-2 gx-lg-2 justify-content-between">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                        <label for="" class="custom-label">month</label>
                                        <!-- <select class="form-select check-select custom-control" aria-label="Default select example ">
                                            <option selected="">select month</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select> -->
                                        <input type="month" class="form-control custom-control" placeholder="">
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <label for="" class="custom-label">year</label>
                                        <select class="form-select check-select custom-control" aria-label="Default select example">
                                            <option selected="">select year</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <a href="javascript:" class="btn login-btn">place order</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    
    
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
    
    
    
  
@endpush