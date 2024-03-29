<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Course Lessons')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Course Lessons')); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <div class="item-title d-flex justify-content-between">
                            <h2><?php echo e(__('Course Lessons and Lectures')); ?></h2>
                        </div>

                        <!-- View Curriculum Start -->
                        <div class="admin-course-watch-page-area">
                            <div class="curriculum-content">
                                <div class="accordion" id="accordionExample">
                                    <?php $__empty_1 = true; $__currentLoopData = @$course->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading<?php echo e($key); ?>">
                                                <button class="accordion-button font-medium font-18 <?php echo e($key == 0 ? '' : 'collapsed'); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($key); ?>" aria-expanded="<?php echo e($key == 0 ? 'true' : 'false'); ?>" aria-controls="collapseOne">
                                                    <?php echo e($lesson->name); ?>

                                                </button>
                                            </h2>
                                            <div id="collapse<?php echo e($key); ?>" class="accordion-collapse collapse <?php echo e($key == 0 ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($key); ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="play-list">

                                                        <!-- Note End-->
                                                        <!-- If User Logged In then add Class Name in play-list-item = "venobox"-->
                                                        <!-- If Preview has for this course add Class Name in play-list-item = "preview-enabled"-->
                                                        <!-- Note Start-->

                                                        <?php $__empty_2 = true; $__currentLoopData = $lesson->lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                            <?php if($lecture->type == 'video'): ?>
                                                                <a title="See video preview" class="edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3" data-bs-toggle="modal" href="#html5VideoPlayerModal<?php echo e($lecture->id); ?>">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/play.svg')); ?>" alt="play"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview </span>
                                                                        <span class="video-time-count"><?php echo e($lecture->file_duration); ?></span>
                                                                    </div>
                                                                </a>

                                                                <!-- HTML5 Video Player Modal Start-->
                                                                <div class="modal fade VideoTypeModal" id="html5VideoPlayerModal<?php echo e($lecture->id); ?>" tabindex="-1" aria-hidden="true">

                                                                    <div class="modal-header border-bottom-0">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
                                                                    </div>
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <div class="video-player-area">
                                                                                    <!-- HTML 5 Video -->
                                                                                    <video class="js-player" id="playerVideoHTML5" playsinline controls  controlsList="nodownload">
                                                                                        <source src="<?php echo e(getVideoFile($lecture->file_path)); ?>" type="video/mp4" />
                                                                                    </video>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php elseif($lecture->type == 'youtube'): ?>
                                                                <a class="edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3" data-bs-toggle="modal" href="#newVideoPlayerModal<?php echo e($lecture->id); ?>">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/play.svg')); ?>" alt="play"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview</span>
                                                                        <span class="video-time-count"><?php echo e($lecture->file_duration); ?></span>
                                                                    </div>
                                                                </a>

                                                                <!-- Youtube Video Player Modal Start-->
                                                                <div class="modal fade VideoTypeModal" id="newVideoPlayerModal<?php echo e($lecture->id); ?>" tabindex="-1" aria-hidden="true">

                                                                    <div class="modal-header border-bottom-0">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
                                                                    </div>
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <div class="video-player-area">
                                                                                    <!-- Youtube Video -->
                                                                                    <div class="plyr__video-embed js-player" id="playerVideoYoutube">
                                                                                        <iframe
                                                                                            src="https://www.youtube.com/embed/<?php echo e($lecture->url_path); ?>"
                                                                                            allowfullscreen
                                                                                            allowtransparency
                                                                                            allow="autoplay"
                                                                                        ></iframe>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php elseif($lecture->type == 'vimeo'): ?>
                                                                <a class="edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3" data-bs-toggle="modal" href="#vimeoVideoPlayerModal<?php echo e($lecture->id); ?>">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/play.svg')); ?>" alt="play"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview Video</span>
                                                                    </div>
                                                                </a>

                                                                <!-- Vimeo Video Player Modal Start-->
                                                                <div class="modal fade VideoTypeModal" id="vimeoVideoPlayerModal<?php echo e($lecture->id); ?>" tabindex="-1" aria-hidden="true">

                                                                    <div class="modal-header border-bottom-0">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
                                                                    </div>
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <div class="video-player-area">
                                                                                    <!-- Vimeo Video -->
                                                                                    <div class="plyr__video-embed" id="playerVideoVimeo">
                                                                                        <iframe
                                                                                            src="https://player.vimeo.com/video/<?php echo e($lecture->url_path); ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                                                                                            allowfullscreen
                                                                                            allowtransparency
                                                                                            allow="autoplay"
                                                                                        ></iframe>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Vimeo Video Player Modal End-->
                                                            <?php elseif($lecture->type == 'text'): ?>
                                                                <a type="button" data-lecture_text="<?php echo e($lecture->text); ?>"
                                                                   class="lectureText edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3"
                                                                   data-bs-toggle="modal" href="#textUploadModal">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/text.svg')); ?>" alt="text"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview</span>
                                                                        <span class="video-time-count"><?php echo e($lecture->file_duration); ?></span>
                                                                    </div>
                                                                </a>
                                                            <?php elseif($lecture->type == 'image'): ?>
                                                                <a data-lecture_image="<?php echo e(getImageFile($lecture->image)); ?>"
                                                                   class="lectureImage edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3"
                                                                   data-bs-toggle="modal" href="#imageUploadModal">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/preview-image.svg')); ?>" alt="image"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview Image </span>
                                                                    </div>
                                                                </a>
                                                            <?php elseif($lecture->type == 'pdf'): ?>
                                                                <a class="edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3"
                                                                   data-maxwidth="800px" target="_blank" href="<?php echo e(getImageFile($lecture->pdf)); ?>">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/file-pdf.svg')); ?>" alt="PDF"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview PDF</span>
                                                                    </div>
                                                                </a>
                                                            <?php elseif($lecture->type == 'slide_document'): ?>
                                                                <a data-lecture_slide="<?php echo e($lecture->slide_document); ?>"
                                                                   class="lectureSlide edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3"
                                                                   data-bs-toggle="modal" href="#slideModal">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div><img src="<?php echo e(asset('frontend/assets/img/courses-img/slide-preview.svg')); ?>" alt="Slide Doc"></div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview Slide</span>
                                                                    </div>
                                                                </a>
                                                            <?php elseif($lecture->type == 'audio'): ?>
                                                                <a class="edit-lecture-preview-show d-flex align-items-center justify-content-between color-heading font-medium font-16 mb-3" data-bs-toggle="modal" href="#audioPlayerModal<?php echo e($lecture->id); ?>">
                                                                    <div class="d-flex flex-grow-1">
                                                                        <div>
                                                                            <img src="<?php echo e(asset('frontend/assets/img/courses-img/preview-audio-o.svg')); ?>" alt="play">
                                                                        </div>
                                                                        <div class="font-medium font-16 lecture-edit-title"><?php echo e($lecture->title); ?></div>
                                                                    </div>

                                                                    <div class="upload-course-video-6-text flex-shrink-0">
                                                                        <span class="see-preview-video font-medium font-16">Preview</span>
                                                                    </div>
                                                                </a>

                                                                <!-- Audio Player Modal Start-->
                                                                <div class="modal fade venoBoxTypeModal" id="audioPlayerModal<?php echo e($lecture->id); ?>" tabindex="-1" aria-hidden="true">

                                                                    <div class="modal-header border-bottom-0">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
                                                                    </div>
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <!--Audio -->
                                                                                <audio class="js-player" id="player" controls>
                                                                                    <source src="<?php echo e(getVideoFile($lecture->audio)); ?>" type="audio/mp3" />
                                                                                </audio>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Audio Player Modal End-->
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                            <div class="row">
                                                                <p><?php echo e(__('No Data Found')); ?></p>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="row">
                                            <p><?php echo e(__('No Data Found')); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- View Curriculam Start -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page content area end -->


    <!--  Text Upload Modal Start -->
    <div class="modal fade textUploadModal venoBoxTypeModal" id="textUploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="getLectureText"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Text Upload Modal End -->

    <!-- Image Upload Modal Start -->
    <div class="modal fade textUploadModal venoBoxTypeModal" id="imageUploadModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt="" class="img-fluid getLectureImage">
                </div>
            </div>
        </div>
    </div>
    <!-- Image Upload Modal End -->

    <!-- Slide Show Upload Modal Start-->
    <div class="modal fade venoBoxTypeModal" id="slideModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe class="getLectureSlide" src="" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide Show Upload Modal End-->

    <!-- Audio Player Modal Start-->
    <div class="modal fade venoBoxTypeModal" id="audioPlayerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-header border-bottom-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="iconify" data-icon="akar-icons:cross"></span></button>
        </div>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <!--Audio -->
                    <audio class="getLectureAudio" src="" type="audio/mp3" style="width: 550px" controls controlsList="nodownload">
                    </audio>
                </div>
            </div>
        </div>
    </div>
    <!-- Audio Player Modal End-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('frontend/assets/fonts/feather/feather.css')); ?>">

<!-- Video Player css -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/assets/vendor/video-player/plyr.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<!--Feather Icon-->
<script src="<?php echo e(asset('frontend/assets/js/feather.min.js')); ?>"></script>

<!-- Video Player js -->
<script src="<?php echo e(asset('frontend/assets/vendor/video-player/plyr.js')); ?>"></script>
<script>
    const players = Array.from(document.querySelectorAll('.js-player')).map((p) => new Plyr(p));
</script>
<!-- Video Player js -->

<script>
    "use strict"
    $('.lectureText').on('click', function () {
        var text = $(this).data("lecture_text")
        $('.getLectureText').html(text)
    })

    $('.lectureImage').on('click', function () {
        var image = $(this).data("lecture_image")
        $('.getLectureImage').attr('src', image)
    })

    $('.lectureSlide').on('click', function () {
        var slide = $(this).data("lecture_slide")
        $('.getLectureSlide').attr('src', slide)
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/admin/course/view.blade.php ENDPATH**/ ?>