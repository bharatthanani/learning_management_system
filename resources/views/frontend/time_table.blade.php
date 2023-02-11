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
                                    <h1 class="secondary-banner-text"> Timetable
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


 <section class="timetable-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dropdown-sect d-flex">
                        <div class="event-select-box">
                            <select class="form-select" aria-label="Default select example">
                                <option value= "1">All Events</option>
                                <option value="2">English Classes</option>
                                <option value="3">Math Classes</option>
                            </select>
                        </div>
                        <div class="pdf-btn">
                            <a href="#">Generate PDF</a>
                        </div>
                    </div>

                    <div class="week-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center table-active">
                                    <td scope="col"></td>
                                    <td scope="col">Monday</td>
                                    <td scope="col">Tuesday</td>
                                    <td scope="col">Wednesday</td>
                                    <td scope="col">Thursday</td>
                                    <td scope="col">Friday</td>
                                    <td scope="col">Saturday</td>
                                    <td scope="col">Sunday</td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td scope="row">07.00 - 08.00</td>
                                    <td class="class-day">English Class<br>
                                        <span> English Class</span><br>
                                        <span> 07.00 - 08.00 </span>
                                    </td>
                                    <td class="class-day">English Class<br>
                                        <span> English Class</span><br>
                                       <span> 07.00 - 08.00 </span>
                                    </td>
                                    <td class="class-day">English Class<br>
                                        <span> English Class</span><br>
                                       <span> 07.00 - 08.00 </span>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <tr class="table-active">
                                    <td scope="row">08.00 - 09.00</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="class-day">English Class<br>
                                        <span> English Class</span><br>
                                      <span>  08.00 - 09.00 </span>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <tr>
                                    <td scope="row">09.00 - 10.00</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="class-day">Math Class<br>
                                        <span> Math Class</span><br>
                                       <span> 09.00 - 10.00 </span>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr class="table-active">
                                <td scope="row">10.00 - 11.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                <td scope="row">11.00 - 12.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="table-active">
                                    <td scope="row">12.00 - 13.00</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td></td>
                                    <td class="class-day">Math Class<br>
                                        <span> Math Class</span><br>
                                       <span> 12.00 - 13.00 </span>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                                <tr>
                                <td scope="row">13.00 - 14.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="table-active">
                                <td scope="row">14.00 - 15.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td scope="row">15.00 - 16.00</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td class="class-day">Math Class<br>
                                        <span> Math Class</span><br>
                                        <span> 15.00 - 16.00 </span>
                                     </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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