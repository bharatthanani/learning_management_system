<?php $__env->startSection('content'); ?>

    <!-- Header Start -->
    <header class="hero-area gradient-bg position-relative main-banner-start">
        <div class="section-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="hero-content">
                            <h6 class="come-for-learn-text">
                                <!--<?php $__currentLoopData = @$home->banner_mini_words_title ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_mini_word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                                <!--    <span></span>-->
                                <!--<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                                <span>EXPLORE NEW LANGUAGES AND CULTURES WITH US</span>
                            </h6>

                            <div class="text banner-all-text">
                                <!--<h1 class="hero-heading"></h1>-->
                                <h1 class="hero-heading">Impelling Your Way To Excellence!</h1>
                                <!--<h1 class="hero-heading">-->
                                <!--    <span class="main-middle-text"></span>-->
                                <!--    <?php $__currentLoopData = @$home->banner_second_line_changeable_words ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_second_line_changeable_word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                                <!--    <span class="word"></span>-->
                                <!--    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                                <!--</h1>-->
                                <!--<h1 class="hero-heading hero-heading-last-word"></h1>-->
                            </div>

                            <!--<p> </p>-->
                            <!--<div class="hero-btns">-->
                            <!--    <a href="" class="theme-btn theme-button1"> <i data-feather="arrow-right"></i></a>-->
                            <!--</div>-->
                            <div class="row">
                                <div class="col-xl-10 col-lg-9 col-md-10 col-11">
                                <div class="butt" data-aos="fade-right" data-aos-delay="700"
                                    data-aos-duration="2000">
                                    <input type="text" placeholder="What d you want to learn?"> <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="hero-right-side">
                            <img src="<?php echo e(getImageFile(@$home->banner_image)); ?>" alt="hero-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    
    
    <section class="sec-learning">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-10 col-xxl-10">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="img-box">
                                <!-- <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/learning.png"> -->
                                <!-- <iframe class="img-fluid"  src="https://www.youtube.com/watch?v=H7nI5Q8GVvQ&t=1s" ></iframe> -->
                                    <!-- <iframe class="img-fluid" width="100%" height="315" src="https://www.youtube.com/embed/H7nI5Q8GVvQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                        <video class="img-fluid" controls autoplay>
                                            <source src="<?php echo e(asset('frontend/assets/videos/Intro Video Lana.mp4')); ?>">
                                        </video>
                            </div>
                        </div>
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="content-box">
                                <h3>Owner’s Profile </h3>
                                <h2>Teaching To Build Your Foundation</h2>
                                <p class="para">Nabu Tutoring is an initiative by an Iraqi-American Tutor brought up in Jordan, Lana, who has taught at many different international schools with different curriculums. Lana also has many degrees in Special Education and Teaching English as a second language, which makes her capable of being personable and catering to the student's individual needs. </p>
                                <p class="para">She works hard with the students in order to empower them and not just follow a curriculum that can make things dry. She has summoned all the essential teaching material from around the World at Nabu Tutoring for the students to make the lessons enjoyable and beneficial. From general knowledge, functional English, everyday English, reading, and comprehension to grade 1-8 Mathematics, Lana covers all the academic courses at Nabu Tutoring to build the strong educational foundations of her students.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--  <section data-aos="fade-up" data-aos-duration="3000" class="main-sec-feat-cour">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-lg-11">-->
    <!--                <div class="feat-cour-head">-->
    <!--                    <h1 class="feat-cour-secondary-text">Popular languages and tutors</h1>-->
    <!--                </div>-->
    <!--                <div class="feat-card-slider">-->
    <!--                    <div class="my-card">-->
    <!--                        <div class="card-content">-->
    <!--                            <div class="img-place">-->
    <!--                                <div class="card-img">-->
    <!--                                    <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/p1.png" alt="" style="height: 100%; width: 100%;">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="card-text">-->
    <!--                                <h5 class="card-main-tiile">English tutors</h5>-->
    <!--                                    <div class="row">-->
    <!--                                    <div class="col-7 panel d-flex">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <span>2.379 $</span>-->
    <!--                                            <h6 class="leson">/ lesson</h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="col-5 panel">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <a class="card-button" href="javascript:;">VIEW MORE</a>-->
    <!--                                        </div>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="my-card">-->
    <!--                        <div class="card-content">-->
    <!--                            <div class="img-place">-->
    <!--                                <div class="card-img">-->
    <!--                                    <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/p2.png" alt="" style="height: 100%; width: 100%;">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="card-text">-->
    <!--                                <h5 class="card-main-tiile">English tutors</h5>-->
    <!--                                    <div class="row">-->
    <!--                                    <div class="col-7 panel d-flex">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <span>2.379 $</span>-->
    <!--                                            <h6 class="leson">/ lesson</h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="col-5 panel">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <a class="card-button" href="javascript:;">VIEW MORE</a>-->
    <!--                                        </div>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="my-card">-->
    <!--                        <div class="card-content">-->
    <!--                            <div class="img-place">-->
    <!--                                <div class="card-img">-->
    <!--                                    <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/p3.png" alt="" style="height: 100%; width: 100%;">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="card-text">-->
    <!--                                <h5 class="card-main-tiile">English tutors</h5>-->
    <!--                                    <div class="row">-->
    <!--                                    <div class="col-7 panel d-flex">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <span>2.379 $</span>-->
    <!--                                            <h6 class="leson">/ lesson</h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="col-5 panel">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <a class="card-button" href="javascript:;">VIEW MORE</a>-->
    <!--                                        </div>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="my-card">-->
    <!--                        <div class="card-content">-->
    <!--                            <div class="img-place">-->
    <!--                                <div class="card-img">-->
    <!--                                    <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/p4.png" alt="" style="height: 100%; width: 100%;">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="card-text">-->
    <!--                                <h5 class="card-main-tiile">English tutors</h5>-->
    <!--                                    <div class="row">-->
    <!--                                    <div class="col-7 panel d-flex">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <span>2.379 $</span>-->
    <!--                                            <h6 class="leson">/ lesson</h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="col-5 panel">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <a class="card-button" href="javascript:;">VIEW MORE</a>-->
    <!--                                        </div>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="my-card">-->
    <!--                        <div class="card-content">-->
    <!--                            <div class="img-place">-->
    <!--                                <div class="card-img">-->
    <!--                                    <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/p1.png" alt="" style="height: 100%; width: 100%;">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="card-text">-->
    <!--                                <h5 class="card-main-tiile">English tutors</h5>-->
    <!--                                    <div class="row">-->
    <!--                                    <div class="col-7 panel d-flex">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <span>2.379 $</span>-->
    <!--                                            <h6 class="leson">/ lesson</h6>-->
    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                    <div class="col-5 panel">-->
    <!--                                        <div class="car-tx-balanc h-100">-->
    <!--                                            <a class="card-button" href="javascript:;">VIEW MORE</a>-->
    <!--                                        </div>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                      
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- featured course section end -->
    
    
     <section class="new-lag-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-sm 12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="new-lang-balane">
                                <div class="new-lang-tab-head">
                                    <h6 class="new-lag-primary-text">EXPLORE NEW LANGUAGES AND CULTURES WITH US</h6>
                                    <h1 class="new-lang-secondary-text">4 reasons to learn with US</h1>
                                </div>
                                <ul>
                                    <li data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"
                                        class="new-lang-list">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                            <ul class="lag-box ">
                                            <li class="lang-num">1</li>
                                            <li class="lang-pd">
                                                <h6 class="lang-list-sec-tex">Inexpensive Courses</h6>
                                                <p class="lang-list-prm-txt">The courses at Nabu Tutoring are economical and easy to get, exclusively for the students looking to learn in a new and friendly environment.</p>
                                            </li>
                                        </ul>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                            <ul class="lag-box ">
                                            <li class="lang-num">1</li>
                                            <li class="lang-pd">
                                                <h6 class="lang-list-sec-tex">Flexible Scheduling</h6>
                                                <p class="lang-list-prm-txt">Course completion time at Nabu Tutoring is designed to make it adjustable for the students to enroll and learn effectively.</p>
                                            </li>
                                        </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                            <ul class="lag-box ">
                                            <li class="lang-num">1</li>
                                            <li class="lang-pd">
                                                <h6 class="lang-list-sec-tex">Easy Lessons & Course Outline</h6>
                                                <p class="lang-list-prm-txt">Our course outline makes it less complicated for the students by adopting a practical approach instead of a theoretical one.</p>
                                            </li>
                                        </ul>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                            <ul class="lag-box ">
                                            <li class="lang-num">1</li>
                                            <li class="lang-pd">
                                                <h6 class="lang-list-sec-tex">Experienced Tutor</h6>
                                                <p class="lang-list-prm-txt">Lana is occupied with all the compulsory material and skills to help the students groom their scope of knowledge through expert mentorship.</p>
                                            </li>
                                        </ul>
                                            </div>
                                        </div>

                                  
                                </ul>
                                <div class="mar-div">
                                   <a class="oner-prof-button" href="javascript:;">START FINDING TUTORS</a>
                                   </div>
                            </div>
                          
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6  col-xl-6 col-xxl-6">
                            <div class="img-box">
                                <img class="img-fluid" src="http://lana.customweb.digital/public/frontend/assets/img/new-lang-img.png">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- new language sec -->
    
    
     <!-- join imple start -->
    <section class="join-imple-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="main-imple-head-txt">
                        <h1 class="imple-head-text">How To Join Nabu Tutoring?</h1>
                    </div>
                    <div class="row gy-4">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 panel panel_padding_res">
                            <div data-aos="fade-down-right" class="impl-card h-100">
                                <div class="imple-card-content">
                                    <div class="lang-num">1</div>
                                    <h5 class="imple-card-main-primary-text">
                                     Sign Up On The Website
                                    </h5>
                                    <p class="imple-card-secondary-text">
                                    Sign up on the website for free to begin the learning adventure.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 panel panel_padding_res">
                            <div data-aos="fade-up" class="impl-card h-100">
                                <div class="imple-card-content">
                                    <div class="lang-num">2</div>
                                    <h5 class="imple-card-main-primary-text">
                                     Simple Interviewing Process
                                    </h5>
                                    <p class="imple-card-secondary-text">
                                    A simple interview with Lana will lead your way to a greater prospect.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 panel panel_padding_res">
                            <div class="impl-card h-100">
                                <div data-aos="fade-up" class="imple-card-content">
                                    <div class="lang-num">3</div>
                                    <h5 class="imple-card-main-primary-text">
                                        Select Your Course 
                                    </h5>
                                    <p class="imple-card-secondary-text">
                                     Choose your course to start acing a new experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 panel panel_padding_res">
                            <div data-aos="fade-down-left" class="impl-card h-100">
                                <div class="imple-card-content">
                                    <div class="lang-num">4</div>
                                    <h5 class="imple-card-main-primary-text">
                                     Join Our Online Classes
                                    </h5>
                                    <p class="imple-card-secondary-text">
                                        Enroll and join the classes to nourish your knowledge.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- koin imple end -->
    
    
    
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
                                <h1 class="secondary-text-testi">Let My Students Do The Talking!</h1>
                                <p class="sub-secondary-text">Lana has helped many kids from KG to 8th grade and adults across the World through her educational videos and online teachings. She is an aspirant to exploring various new cultures and wants her students to do the same. Her teaching style, plus the curriculum selection, makes it easier for the students to adopt new modes of learning.</p>
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
                                        <p class="tstipara">"I was looking for an "English Reading & Comprehension" course for my daughter, and I discovered Nabu Tutoring. The fee is not too much, and you can be sure that you will ace your lessons as the Tutor tests you frequently to authenticate clarity at the end of each session. I found Lana very reliable and respectable, as my daughter had a great time in her classes. Really Satisfied!".
                                        </p>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="un">Jesse S. Brown</h5>
                                        <!--<p class="uc">MDS MANUFACTORING</p>-->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-four.png" alt="">
                                    <div class="stars">
                                        <img src="images/trsimonial-img-one.png" alt="">
                                    </div>
                                    <div class="para">
                                        <p class="tstipara">"I've been trying to learn simple English vocabulary from a number of sources, such as self-study, apps, different online learning programs, high school, and college. But by far, the experience with Nabu Tutoring has been the best. I've advanced more quickly with my tutor in this school than I ever have. Her teaching method is fascinating, and she helps you design a study program that works best for you. Great Experience!"
                                        </p>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="un">Lachlan Holloway</h5>
                                        <!--<p class="uc">MDS MANUFACTORING</p>-->
                                    </div>
                                </div>
                            </div>
                            
                             <div class="item">
                                <div class="testimonial-content">
                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-three.png" alt="">
                                    <div class="stars">
                                        <img src="images/trsimonial-img-one.png" alt="">
                                    </div>
                                    <div class="para">
                                        <p class="tstipara">"We are overwhelmed to have discovered this school for our son. The curriculum is very easy to understand and is really helping my son to be proficient in Mathematics. He has received a lot of assistance from Lana in developing basic addition and subtraction skills. I can't thank you enough, really. The website is easy to use, and the tutor quickly answers messages. I think everyone who wants to improve their kid’s learning foundations should think about enrolling in Nabu Tutoring."
                                        </p>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="un">Samantha Morrill</h5>
                                        <!--<p class="uc">MDS MANUFACTORING</p>-->
                                    </div>
                                </div>
</div>

                               

<!--                                <div class="item">-->
<!--                                <div class="testimonial-content">-->
<!--                                    <img class="testi-img" src="http://lana.customweb.digital/public/frontend/assets/img/trsimonial-img-two.png" alt="">-->
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

                            </div>
                            </div>
</section>
                            <!-- teestimonial section end -->
    

    <!-- Special Feature Area Start -->
    <!--<section class="special-feature-area p-0 <?php echo e(@$home->special_feature_area == 1 ? '' : 'd-none'); ?>">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
                <!-- Single Feature Item start-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="single-feature-item d-flex align-items-center">-->
    <!--                    <div class="flex-shrink-0 feature-img-wrap">-->
    <!--                        <img src="<?php echo e(getImageFile(get_option('home_special_feature_first_logo'))); ?>" alt="feature">-->
    <!--                    </div>-->
    <!--                    <div class="flex-grow-1 ms-3 feature-content">-->
    <!--                        <h6></h6>-->
    <!--                        <p></p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- Single Feature Item End-->
                <!-- Single Feature Item start-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="single-feature-item d-flex align-items-center">-->
    <!--                    <div class="flex-shrink-0 feature-img-wrap">-->
    <!--                        <img src="<?php echo e(getImageFile(get_option('home_special_feature_second_logo'))); ?>" alt="feature">-->
    <!--                    </div>-->
    <!--                    <div class="flex-grow-1 ms-3 feature-content">-->
    <!--                        <h6></h6>-->
    <!--                        <p></p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- Single Feature Item End-->
                <!-- Single Feature Item start-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="single-feature-item d-flex align-items-center">-->
    <!--                    <div class="flex-shrink-0 feature-img-wrap">-->
    <!--                        <img src="" alt="feature">-->
    <!--                    </div>-->
    <!--                    <div class="flex-grow-1 ms-3 feature-content">-->
    <!--                        <h6></h6>-->
    <!--                        <p></p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- Single Feature Item End-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Special Feature Area End -->

    

    <?php echo $__env->make('frontend.home.partial.consultation-booking-schedule-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- New Video Player Modal Start-->
    <div class="modal fade VideoTypeModal" id="newVideoPlayerModal" tabindex="-1" aria-labelledby="newVideoPlayerModal" aria-hidden="true">

        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="video-player-area">
                        <!-- HTML 5 Video -->
                        <video id="player" playsinline controls data-poster="<?php echo e(getImageFile(get_option('become_instructor_video_preview_image'))); ?>" controlsList="nodownload">
                            <source src="<?php echo e(getVideoFile(get_option('become_instructor_video'))); ?>" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Video Player Modal End-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <!-- Video Player css -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/video-player/plyr.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <!--Hero text effect-->
    <script src="<?php echo e(asset('frontend/assets/js/hero-text-effect.js')); ?>"></script>

    <script src="<?php echo e(asset('frontend/assets/js/course/addToCart.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/course/addToWishlist.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/custom/booking.js')); ?>"></script>

    <!-- Video Player js -->
    <script src="<?php echo e(asset('frontend/assets/vendor/video-player/plyr.js')); ?>"></script>
    <script>
        const zai_player = new Plyr('#player');
    </script>

    <!-- Video Player js -->
    
       <script>
        // course slider
$('.feat-card-slider').slick({
  dots: true,
  infinite: true,
  autoplay: false,
  prevArrow: false,
    nextArrow: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

    </script>
    
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
   
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/home/home.blade.php ENDPATH**/ ?>