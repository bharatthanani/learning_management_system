<footer class="footer-area footer-gradient-bg position-relative">
    <div class="section-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <!-- footer-widget-area -->
            <div class="row footer-top-part section-p-t-b-90">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="footer-widget footer-about">
                        <img src="{{asset(get_option('app_logo'))}}" alt="Logo">
                        <p>{{ __(get_option('footer_quote')) }}</p>
                        <div class="footer-social mt-30">
                            <ul class="d-flex align-items-center">
                                <li><a href="{{get_option('facebook_url')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="{{get_option('twitter_url')}}"><i class="fa-brands fa-twitter"></i></a></li>
                                <!--<li><a href="{{get_option('linkedin_url')}}"><span class="iconify" data-icon="ant-design:linkedin-filled"></span></a></li>-->
                                <!--<li><a href="{{get_option('pinterest_url')}}"><span class="iconify" data-icon="fa-brands:pinterest-square" data-width="1em" data-height="1em"></span></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="footer-widget">
                        <h6 class="footer-widget-title">{{__('QUICK LINKS')}}</h6>
                        <div class="footer-links d-flex">
                            <ul>
                                <li><a class="ql" href="{{ route('about') }}">{{ __('About')  }}</a></li>
                                <li><a class="ql" href="{{ route('faq') }}">{{__('FAQ')}}</a></li>
                                <li><a class="ql" href="{{ route('blogs') }}">{{ __('Blogs') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<div class="col-12 col-sm-6 col-md-6 col-lg-3">-->
                <!--    <div class="footer-widget">-->
                <!--        <h6 class="footer-widget-title">{{__('Support')}}</h6>-->
                <!--        <div class="footer-links d-flex">-->
                <!--            <ul>-->
                <!--                <li><a href="{{ route('contact') }}">{{  __('Contact')  }}</a></li>-->
                <!--                <li><a href="{{ route('support-ticket-faq') }}">{{  __('Support')  }}</a></li>-->
                <!--                <li><a href="{{ route('courses') }}">{{ __('Courses')  }}</a></li>-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget footer-contact-info">
                        <h6 class="footer-widget-title">{{__('Contact Info')}}</h6>

                        <div class="footer-links d-flex">
                            <ul>
                                <li><span class="main-head">ADDRESS</span><span>{{ __(get_option('app_location')) }}</span></li>
                                <li><span  class="main-head">PHONE</span></span><a href="tel:12457835">{{ __(get_option('app_contact_number')) }}</a></li>
                                <li><span  class="main-head">EMAIL ADDRESS</span><a href="mailto:demo@gmail.com">{{ __(get_option('app_email')) }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--copyright-text-->
            <div class="row copyright-wrapper">
                <!--<div class="col-12 col-md-4">-->
                <!--    <div class="footer-payment">-->
                <!--        <img src="{{ asset('frontend/assets/img/payment-cards.png') }}" alt="payments">-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-12 col-md-4">
                    <div class="copyright-text text-center">
                        <p class="text-white font-13">{{ __(get_option('app_copyright')) }}</p>
                    </div>
                </div>
                <!--<div class="col-12 col-md-4">-->
                <!--    <div class="footer-bottom-nav">-->
                <!--        <ul class="d-flex justify-content-end">-->
                <!--            <li><a href="{{ route('student.become-an-instructor') }}">{{__('Become Instructor')}}</a></li>-->
                <!--            <li><a href="{{ route('privacy-policy') }}">{{__('Privacy Policy')}}</a></li>-->
                <!--            <li><a href="{{ route('cookie-policy') }}">{{__('Cookie Policy')}}</a></li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
                </div>
            </div>
        </div>
    </div>
</footer>
