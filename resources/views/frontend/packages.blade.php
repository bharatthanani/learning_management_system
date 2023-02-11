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
                                @foreach($packages as $package)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="price-item">
                                        <div class="head">
                                            <h3>{{$package->title}}</h3>
                                            <h5>{{$package->sub_title}}</h5>
                                        </div>
                                        <div class="body">
                                            <div class="price">
                                                <h4 class="new-price">${{$package->price}}</h4>
                                                <h4 class="old-price">Only <span>${{$package->real_price}}</span></h4>
                                            </div>
                                           <div>
                                               {!! $package->description !!}
                                           </div>
                                            <div class="plan-btn">
                                                <a class="choose-plan" href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="price-item">
                                        <div class="head">
                                            <h3>Basic Package</h3>
                                            <h5>Limited Time Offer</h5>
                                        </div>
                                        <div class="body">
                                            <div class="price">
                                                <h4 class="new-price">$229</h4>
                                                <h4 class="old-price">Only <span>$398</span></h4>
                                            </div>
                                            <ul>
                                                <li> $199/mo for Company Members, which includes:</li>
                                                <li>Company Video for the company member to create or upload (similar to tutorial) - it's a free commercial for them, and they add their bio and includes link to their site</li>
                                                <li> 10 tutorial Listings</li>
                                                <li>Unlimited Access to tutorial Videos & Bio</li>
                                                <li> Access to 'Unlock' 50 Member Profiles which include tutorial</li>
                                                <li>Resume and Contact Info</li>
                                                <li>No charge for tutorial members who can have full access to Company profiles/videos(but not tutorial videos)</li>
                                            </ul>
                                            <h5 class="lower-main">Separate charges to additional package:</h5>
                                            <h6 class="lower">$25/mo unlock additional 50 tutorial profiles</h6>
                                            <h6 class="lower">$25/mo for each additional job listing over 10</h6>
                                            <div class="plan-btn">
                                                <a class="choose-plan" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
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
