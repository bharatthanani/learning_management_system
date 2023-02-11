@extends('frontend.layouts.app')

@section('content')
<!-- Page Header Start -->


<header class="page-banner-header gradient-bg position-relative main-banner-featured">
    <div class="section-overlay">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-11">
                    <div class="row">
                       <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-6">
                          <div class="page-banner-content text-center balance ">
                              <div class="banner-all-text">
                                 <h3 class="page-banner-heading text-white pb-15 secondary-banner-text">{{ __('About Us') }}</h3> 
                              </div>
                              
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




 <section class="owners-prof-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="sec-two-balane h-100">
                                <a data-aos="zoom-out-left" href="javascript:;"> <img class="oner-sec-img img-fluid"
                                        src="{{ getImageFile($data['aboutUsGeneral']->gallery_second_image) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="sec-two-balane h-100">
                                <div data-aos="zoom-in" class="onwners-porf-alltext">
                                    <h6 class="owner-prf-primary-text">{{$data['aboutUsGeneral']->gallery_area_subtitle}}</h6>

                                    <h1 class="owner-prf-secondary-text">{{$data['aboutUsGeneral']->gallery_area_title}}</h1>
                                    <div>
                                        {!! $data['aboutUsGeneral']->gallery_area_desc !!}
                                    </div>
                                    <!--<p class="owner-prf-sub-secondory-text">{!! $data['aboutUsGeneral']->gallery_area_desc !!}</p>-->
                                    <!--<p class="owner-prf-sub-secondory-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                                    <!--<p class="owner-prf-sub-secondory-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>-->
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="about-inner-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="content-box">
                                <h2>About  Nabu Tutoring</h2>
                                <p class="para"> Nabu Tutoring is an initiative by an Iraqi-American Tutor brought up in Jordan, Lana, who has taught at many different international schools with different curriculums. Lana also has many degrees in Special Education and Teaching English as a second language, which makes her capable of being personable and catering to the student's individual needs. She works hard with the students in order to empower them and not just follow a curriculum that can make things dry. She has summoned all the essential teaching material from around the World at  Nabu Tutoring for the students to make the lessons enjoyable and beneficial. From general knowledge, functional English, everyday English, reading, and comprehension to grade 1-8 Mathematics, Lana covers all the academic courses at  Nabu Tutoring to build the strong educational foundations of her students.</p>
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="img-box">
                                <img class="img-fluid" src="https://lana.customweb.digital/public/frontend/assets/img/about-content-1.png">
                            </div>
                        </div>
                           <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="img-box">
                                <img class="img-fluid" src="https://lana.customweb.digital/public/frontend/assets/img/about-content-2.png">
                            </div>
                        </div>
                          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="content-box">
                                <h2>Studies Can Be Interesting Too!</h2>
                                <p class="para">Lana began the initiative with the ambition of making the learning process cost-effective for the students to make it easier for them to adjust to their new environment easily. Since then, the objective of  Nabu Tutoring has been to add the element of fun and interest to the teaching strategy and to make students develop self-determination. Modern teaching methods are being introduced at  Nabu Tutoring for the children, especially from 1-8 grade, and adults to make their educational foundations concrete enough so that they can communicate, in English, their needs and be able to converse socially and with their colleagues at work.</p>
                                
                            </div>
                        </div>
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="content-box">
                                <h2>Tutor's Vision</h2>
                                <p class="para">Lana's tutoring vision is to improvise the teaching techniques in order to make it as easy as possible for the students, including kids from KG to 8th grade and adults. She covers all the grounds to deliver the lessons according to the student's needs and learning styles. Boosting the element of self-confidence and motivation in the students is how she perceives her teaching plan, and she introduces engaging lessons with exciting activities for that purpose. </p>
                                <p class="para">A good teacher always keeps track of her students, and Lana is no exception. Her fascinating reading and comprehension assessments help her to spot the students who need further concentration. Along with the homework and assignments for students to practice, she also adds her lessons to Google Classrooms or Google Drive and shares them with students to revise their skills. </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="img-box">
                                <img class="img-fluid" src="https://lana.customweb.digital/public/frontend/assets/img/about-content-3.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="about-inner-content content-banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="content-box">
                                <h2>What Lana has to offer</h2>
                                <ul>
                                    <li>Reading Comprehension Strategies</li>
                                    <li>Writing Strategies</li>
                                    <li>Study Skills</li>
                                    <li>Time Management</li>
                                    <li>Building students' confidence in English, speaking, reading, and writing.</li>
                                    <li>Support students' sense of curiosity and find answers for them.</li>
                                </ul>
                            </div>
                        </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="content-box">
                                <h2>Teaching Style</h2>
                                <ul>
                                    <li>Tailor the lesson to fit the student's needs and learning styles.</li>
                                    <li>Open teaching style with the students</li>
                                    <li>Build self-confidence and motivation in students.</li>
                                    <li>Engaging lessons with games and worksheets to make learning fun.</li>
                                    <li>Use of Google Classrooms or Google Drive</li>
                                    <li>Sharing lessons with students to revise their skills.</li>
                                    <li>Homework and assignments for students in order to practice what they learn.</li>
                                    <li>Reading and comprehension assessments to track the student's progress.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="tutor-bg">
        <div class="container">
                 <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-11 col-xxl-11">
                    <div class="sec-title">
                        <h2>Tutor’s Profile</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="list-box">
                            <h5><span><i class="fa-regular fa-graduation-cap"></i></span>Educational Background</h5>
                            <ul>
                                <li>2021 - 2021 TEFL.org Teaching English</li>
                                <li>2014 - 2016 University of East London Special and Additional Learning Needs</li>
                                <li>1997 - 1998 Purdue University Education (Learning and Mild Needs)</li>
                                <li>1995 - 1996 American University of Beirut Education (Teaching Diploma)</li>
                                <li>1991 - 1995 American University of Beirut Social and Behavioral Sciences</li>
                            </ul>
                            </div>
                              <div class="list-box">
                            <h5><span><i class="fa-regular fa-trophy-star"></i></span>Certifications</h5>
                            <ul>
                                <li>Teaching Diploma in Special Education</li>
                                <li>TEFL</li>
                            </ul>
                            </div>
                        
                        </div>
                                 <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <div class="list-box">
                            <h5><span><i class="fa-regular fa-screen-users"></i></span>Teaching Experience</h5>
                            <p class="para">Lana's diverse teaching experience, including Elementary, Middle, and High School levels (IB programs, IGCSE, and American Common Core), has made her improvise all the teaching tools for kids and adults.</p>
                            <ul>
                                <li>2017 - 2021 American Community School- Amman</li>
                                <li>2013 - 2017 International School of Tanganyika</li>
                                <li>2017 - 2021 American Community School</li>
                                <li>2011 - 2013 NIST International School</li>
                                <li>2009 - 2011 ASCOT International School</li>
                                <li>2006 - 2009 International Academy- Amman</li>
                                <li>2002 - 2006 Bishop Mackenzie International School</li>
                            </ul>
                            <h6>Special Education</h6>
                            <p class="para">Lana also taught Special Education Students at Purdue University for three terms. 
Special Education experience under her belt made her capable of making learning interesting for special students.
</p>
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
