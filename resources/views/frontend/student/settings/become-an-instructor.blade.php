@extends('frontend.layouts.app')

@section('content')

 <section class="main-banner-start profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                            <div class="main-sect">
                                <div class="breadcrumbs">
                                    <ul class="links">
                                        <li>Index</li>
                                        <li>/</li>
                                        <li>Tutors</li>
                                    </ul>
                                </div>
                                <div class="img-cont-sect">
                                    <div class="img-circle">
                                        <img src="{{getImageFile($data['teacher_profile']->image ? @"teacher_profile/".$data['teacher_profile']->image : '')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="main-cont-sect">
                                        <div class="main-head">
                                            <h3>{{$data['teacher_profile']->title}}</h3>
                                        </div>
                                        <div class="sub-head">
                                            <h4>{{$data['teacher_profile']->hobbies}}</h4>
                                        </div>
                                        {{--<div class="sub-text">
                                            <h5><strong>834</strong> English Sessions Completed</h5>
                                        </div>--}}
                                    </div>
                                </div>
                              {{--  <div class="intro">
                                    <h1>Introdcution</h1>
                                </div>
                                <div class="instant">
                                    <h4>Instant tutoring<i class="fa-solid fa-bolt-lightning"></i></h4>
                                </div>
                                <div class="lang">
                                    <span><strong>Speaks :</strong></span>
                                    <span>English</span>
                                    <span>Native</span>
                                    <span>,</span>
                                    <span>Arabic</span>
                                    <span>Native</span>
                                </div> --}}
                                <div class="para">
                                   {!! $data['teacher_profile']->tool_desc !!}
                                </div>
                                <div class="view-btn">
                                    <a href="javascript:;">View full introduction <i
                                            class="fa-regular fa-angle-down"></i></a>
                                </div>
                                <div class="videos-sect">
                                    <div class="videos-head">
                                        <h2>Videos</h2>
                                    </div>
                                    <div class="video-part" data-fancybox="" data-type="video"
                                        href="{{$data['teacher_profile']->youtube_intro}}">
                                        <img src="{{getImageFile($data['teacher_profile']->thumbnail ? @"teacher_profile/thumbnail/".$data['teacher_profile']->thumbnail : '')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="video-sub">
                                        <h4>Self-Intro Video</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="learn-btn">
                                            <a href="javascript:;"><i class="fa-solid fa-user"></i>Learn more about this
                                                lesson</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="learn-btn">
                                            <a href="javascript:;"><i class="fa-solid fa-clock"></i>More available time
                                                slots</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                            <div class="package-sect-main">
                                <div class="packages-sect">
                                    <div class="package-head">
                                        <h2>Packages</h2>
                                    </div>
                                    <div class="package-box">
                                        <div class="package-price">
                                            <h2>CA$17.15</h2>
                                            <h4>25min Trial</h4>
                                        </div>
                                        <div class="arrow-icon">
                                            <a href="javascript:;"><i class="fa-solid fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="packages-tab">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                    aria-selected="true">25 mins</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile" type="button" role="tab"
                                                    aria-controls="profile" aria-selected="false">50 mins</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <span>5% off</span>
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <span>10% off</span>
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <span>15% off</span>
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <span>5% off</span>
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <span>10% off</span>
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="package-box pckg-base">
                                                    <div class="package-price">
                                                        <h2>CA$17.15</h2>
                                                        <h4>25min Trial</h4>
                                                    </div>
                                                    <div class="arrow-icon">
                                                        <span>15% off</span>
                                                        <a href="javascript:;"><i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact">
                                    <div class="contact btn">
                                        <a href="{{route('contact')}}">Contact Tutor</a>
                                    </div>
                                    <div class="social-icons">
                                        <ul class="social">
                                            {{--<li><a href="javascript:;"><i class="fa-solid fa-heart"></i></a></li>--}}
                                            <li><a href="{{get_option('facebook_url')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="{{get_option('twitter_url')}}"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="mailto:{{ __(get_option('app_email')) }}"><i class="fa-solid fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@push('script')
   
@endpush
