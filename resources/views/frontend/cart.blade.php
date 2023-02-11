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
                                    <h1 class="secondary-banner-text"> Cart
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
    
     <section class="section-cart">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <table class="table cart-table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Products</th>
                                <th scope="col"></th>
                                <th scope="col">quantity</th>
                                <th scope="col">price</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="images/meet-3.png" class="img-fluid cart-img" alt="">
                                </td>

                                <td>
                                    <div class="cart-desc">
                                        <h6 class="pro-name">Product name</h6>
                                        <h6 class="pro-categ">Product category</h6>
                                    </div>
                                </td>

                                <td>
                                    <div class="input-group quantity">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-quant btn-number"
                                                data-type="minus" data-field="">
                                                <i class="fal fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-quant btn-number"
                                                data-type="plus" data-field="">
                                                <i class="fal fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="price">$45.90</h6>
                                </td>
                                <td>
                                    <h6 class="price">$91.80</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="checkout-btn-main">
                            <a href="javascript:" class="btn continue-btn">Continue Shopping</a>
                            <a href="checkout" class="btn checkout-btn">Process Checkout</a>
                            </div>
                        </div>
                    </div>
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