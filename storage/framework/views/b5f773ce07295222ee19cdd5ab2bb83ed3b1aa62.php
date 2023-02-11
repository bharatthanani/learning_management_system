<style>
    .menu-section-area .navbar-brand img{
        width:135px;
    }
    .footer-widget img{
        width: 34%;
    }
</style>

<section class="menu-section-area <?php if(auth()->guard()->check()): ?> isLoginMenu <?php endif; ?>">
    <!-- Navigation -->
    <nav class="navbar sticky-header navbar-expand-lg" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(getImageFile(get_option('app_logo'))); ?>" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="main-menu-collapse collapse navbar-collapse" id="navbarSupportedContent">

                <!--<div class="header-nav-left-side mx-auto d-flex">-->
                <!--    <ul class="navbar-nav mb-2 mb-lg-0">-->
                <!--        <li class="nav-item dropdown dropdown-top-space">-->
                <!--            <a class="nav-link dropdown-toggle" href="#" id="librariesDropdown" data-bs-toggle="dropdown">-->
                <!--                 __('Courses') -->
                <!--            </a>-->
                <!--            <ul class="dropdown-menu <?php echo e(selectedLanguage()->rtl == 1 ? 'dropdown-menu-end' : ''); ?>">-->
                <!--                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                <!--                    <li>-->
                <!--                        <a href="<?php echo e(route('category-courses', $category->slug)); ?>"-->
                <!--                           class="dropdown-item <?php if(count($category->subcategories) > 0): ?> dropdown-toggle <?php endif; ?>"><?php echo e($category->name); ?></a>-->
                <!--                        <?php if(count($category->subcategories) > 0): ?>-->
                <!--                            <ul class="submenu dropdown-menu">-->
                <!--                                <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                <!--                                    <li><a class="dropdown-item" href="<?php echo e(route('subcategory-courses', $subcategory->slug)); ?>"><?php echo e($subcategory->name); ?></a></li>-->
                <!--                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                <!--                            </ul>-->
                <!--                        <?php endif; ?>-->
                <!--                    </li>-->
                <!--                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                <!--                <li><hr class="dropdown-divider"></li>-->
                <!--                <li><a href="<?php echo e(route('courses')); ?>"> __('All Courses') </a></li>-->
                <!--            </ul>-->
                <!--        </li>-->
                <!--    </ul>-->

                <!--    <form action="#">-->
                <!--        <div class="input-group">-->
                <!--            <button class="input-group-text pe-0" id="basic-addon1"><img src="<?php echo e(asset('frontend/assets/img/icons-svg/search.svg')); ?>" alt="Search"></button>-->
                <!--            <input class="form-control me-2 searchCourse" type="search" name="keyword" value="<?php echo e(request('keyword')); ?>" placeholder="__('Search Course')..."-->
                <!--                   aria-label="Search">-->
                <!--        </div>-->

                        <!-- Search Bar Suggestion Box Start -->
                <!--        <div class="search-bar-suggestion-box searchBox d-none custom-scrollbar">-->
                <!--            <ul class="appendCourseSearchList">-->

                <!--            </ul>-->
                <!--        </div>-->
                        <!-- Search Bar Suggestion Box End -->
                <!--    </form>-->
                <!--</div>-->
               
                <div class="header-nav-right-side mx-auto d-flex">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo e(__('Pages')); ?></a>
                            <ul class="dropdown-menu">
                                <?php $__currentLoopData = $staticMenus ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staticMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="dropdown-item" href="<?php echo e(route( $staticMenu->slug )); ?>"> <?php echo e(__($staticMenu->name)); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $dynamicMenus ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dynamicMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('page', @$dynamicMenu->page->slug)); ?>"><?php echo e(__($dynamicMenu->name)); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <?php if(@auth::user()->role == 2 || @auth::user()->role == 3): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('forum.index')); ?>"><?php echo e(__('Forum')); ?></a>
                            </li>
                            <?php if(@auth::user()->role == 3 ): ?>
                                <?php if(@auth::user()->instructor): ?>
                                    <li class="nav-item">
                                        <span class="nav-link"><?php echo e(__('Request Pending')); ?></span>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('student.become-an-instructor')); ?>"><?php echo e(__('Instructor')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php elseif(@auth::user()->role == 2): ?>
                                <!-- Status 1 = Approved,  Status 2 = Blocked,  Status 0 = Pending -->
                                <?php if(@auth::user()->instructor->status == 1): ?>
                                    <?php if(\Illuminate\Support\Str::contains(url()->current(), 'instructor')): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('student.dashboard')); ?>"><?php echo e(__('Student Panel')); ?></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('instructor.dashboard')); ?>"><?php echo e(__('Instructor Panel')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php elseif(@auth::user()->instructor->status == 2): ?>
                                    <li class="nav-item">
                                        <span class="nav-link"><?php echo e(__('Blocked From Instructor Panel')); ?></span>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item">
                                        <span class="nav-link"><?php echo e(__('Request Pending')); ?></span>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('forum.index')); ?>"><?php echo e(__('Forum')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('blogs')); ?>"><?php echo e(__('Blog')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo e(route('contact')); ?>"><?php echo e(__('Contact')); ?></a>
                            </li>
                        <?php endif; ?>
                        <!--<li class="nav-item dropdown menu-round-btn menu-language-btn dropdown-top-space">-->
                        <!--    <a class="nav-link" href="#">-->
                        <!--        <img src="<?php echo e(asset(selectedLanguage()->flag)); ?>" alt="Flag" class="radius-50">-->
                        <!--    </a>-->
                        <!--    <ul class="dropdown-menu <?php echo e(selectedLanguage()->rtl == 1 ? 'dropdown-menu-start' : 'dropdown-menu-end'); ?>" data-bs-popper="none">-->
                        <!--        <?php $__currentLoopData = appLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app_lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                        <!--            <li><a class="dropdown-item" href="<?php echo e(url('/local/'.$app_lang->iso_code)); ?>">-->
                        <!--                    <img src="<?php echo e(asset($app_lang->flag)); ?>" alt="Flag" class="radius-50"><?php echo e($app_lang->language); ?></a></li>-->
                        <!--        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<?php if(@auth()->user()->role != 1): ?>-->
                        <!--<?php if(auth::user()): ?>-->
                            <!-- Menu Notification Option Start -->
                        <!--    <li class="nav-item dropdown menu-round-btn menu-notification-btn dropdown-top-space">-->
                        <!--        <a class="nav-link menu-cart-btn" href="#">-->
                        <!--            <i data-feather="bell"></i>-->
                        <!--            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">-->
                        <!--       <?php echo e(count($student_notifications) + count($instructor_notifications)); ?>-->
                        <!--      </span>-->
                        <!--        </a>-->
                        <!--        <div class="dropdown-menu <?php echo e(selectedLanguage()->rtl == 1 ? 'dropdown-menu-start' : 'dropdown-menu-end'); ?>" data-bs-popper="none">-->
                        <!--            <ul class="nav nav-pills menu-notification-tab-list" id="pills-tab" role="tablist">-->
                        <!--                <li class="nav-item" role="presentation">-->
                        <!--                    <button class="nav-link active" id="pills-student-tab" data-bs-toggle="pill" data-bs-target="#pills-student" type="button" role="tab"-->
                        <!--                            aria-controls="pills-student" aria-selected="false"><?php echo e(__('Student')); ?></button>-->
                        <!--                </li>-->
                        <!--                <li class="nav-item" role="presentation">-->
                        <!--                    <button class="nav-link " id="pills-instructor-tab" data-bs-toggle="pill" data-bs-target="#pills-instructor" type="button"-->
                        <!--                            role="tab" aria-controls="pills-instructor" aria-selected="true"><?php echo e(__('Instructor')); ?></button>-->
                        <!--                </li>-->
                        <!--            </ul>-->
                        <!--            <div class="tab-content menu-notification-tab-content custom-scrollbar" id="pills-tabContent">-->
                        <!--                <div class="tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">-->
                        <!--                    <?php $__empty_1 = true; $__currentLoopData = $student_notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>-->
                                                <!-- Message User Item Start -->
                        <!--                        <a href="<?php echo e(route('notification.url', [$student_notification->uuid])); ?>" class="message-user-item cursor d-flex align-items-center">-->
                        <!--                            <div class="message-user-item-left">-->
                        <!--                                <div class="d-flex align-items-center">-->
                        <!--                                    <div class="flex-shrink-0">-->
                        <!--                                        <div class="user-img-wrap position-relative radius-50">-->
                        <!--                                            <img src="<?php echo e(asset($student_notification->sender->image_path)); ?>" alt="img" class="radius-50">-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="flex-grow-1 <?php echo e(selectedLanguage()->rtl == 1 ? 'me-2' : 'ms-2'); ?>">-->
                        <!--                                        <h6 class="color-heading font-14 text-capitalize"><?php echo e($student_notification->sender->name); ?></h6>-->
                        <!--                                        <p class="font-13"><?php echo e($student_notification->text); ?></p>-->
                        <!--                                        <div class="font-11 color-gray mt-1"><?php echo e(@$student_notification->created_at->diffForHumans()); ?></div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </a>-->
                                                <!-- Message User Item End -->
                        <!--                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>-->
                        <!--                        <div class="no-notification-found-box">-->
                        <!--                            <p class="text-center"><?php echo e(__('No Data Found')); ?></p>-->
                        <!--                        </div>-->
                        <!--                    <?php endif; ?>-->
                        <!--                </div>-->

                        <!--                <div class="tab-pane fade " id="pills-instructor" role="tabpanel" aria-labelledby="pills-instructor-tab">-->
                        <!--                    <?php $__empty_1 = true; $__currentLoopData = $instructor_notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor_notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>-->
                                                <!-- Message User Item Start -->
                        <!--                        <a href="<?php echo e(route('notification.url', [$instructor_notification->uuid])); ?>" class="message-user-item d-flex align-items-center">-->
                        <!--                            <div class="message-user-item-left">-->
                        <!--                                <div class="d-flex align-items-center">-->
                        <!--                                    <div class="flex-shrink-0">-->
                        <!--                                        <div class="user-img-wrap position-relative radius-50">-->
                        <!--                                            <img src="<?php echo e(asset($instructor_notification->sender->image_path)); ?>" alt="img" class="radius-50">-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="flex-grow-1 <?php echo e(selectedLanguage()->rtl == 1 ? 'me-2' : 'ms-2'); ?>">-->
                        <!--                                        <h6 class="color-heading font-14 text-capitalize"><?php echo e($instructor_notification->sender->name); ?></h6>-->
                        <!--                                        <p class="font-13"><?php echo e($instructor_notification->text); ?></p>-->
                        <!--                                        <div class="font-11 color-gray mt-1"><?php echo e(@$instructor_notification->created_at->diffForHumans()); ?></div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </a>-->
                                                <!-- Message User Item End -->
                        <!--                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>-->
                        <!--                    <div class="no-notification-found-box">-->
                        <!--                        <p class="text-center"><?php echo e(__('No Data Found')); ?></p>-->
                        <!--                    </div>-->
                        <!--                    <?php endif; ?>-->
                        <!--                </div>-->


                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </li>-->
                            <!-- Menu Notification Option End -->
                        <!--<?php endif; ?>-->

                        <!-- Menu Cart Option Start -->
                        <!--<li class="nav-item menu-round-btn menu-cart-btn">-->
                        <!--    <a class="nav-link menu-cart-btn" aria-current="page" href="<?php echo e(route('student.cartList')); ?>">-->
                        <!--        <i data-feather="shopping-bag"></i>-->
                        <!--        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cartQuantity">-->
                        <!--        <?php echo e(@$cartQuantity); ?>-->
                        <!--      </span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!-- Menu Cart Option End -->
                        <?php endif; ?>
                        <?php if(Route::has('login')): ?>
                            <?php if(auth()->guard()->check()): ?>
                                <!-- Menu User Dropdown Menu Option Start -->
                                <li class="nav-item dropdown menu-round-btn menu-user-btn dropdown-top-space">
                                    <a class="nav-link" href="#">
                                        <img src="<?php echo e(asset(auth::user()->image_path)); ?>" alt="user" class="radius-50">
                                    </a>
                                    <div class="dropdown-menu <?php echo e(selectedLanguage()->rtl == 1 ? 'dropdown-menu-start' : 'dropdown-menu-end'); ?>" data-bs-popper="none">

                                        <!-- Dropdown User Info Item Start -->
                                        <div class="dropdown-user-info">
                                            <div class="message-user-item d-flex align-items-center">
                                                <div class="message-user-item-left">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="user-img-wrap position-relative radius-50">
                                                                <img src="<?php echo e(asset(auth::user()->image_path)); ?>" alt="img" class="radius-50">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 <?php echo e(selectedLanguage()->rtl == 1 ? 'me-2' : 'ms-2'); ?>">
                                                            <h6 class="color-heading font-14 text-capitalize"><?php echo e(auth::user()->name); ?></h6>
                                                            <p class="font-13"><?php echo e(auth::user()->email); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dropdown User Info Item End -->
                                        <?php if(@auth()->user()->role != 1): ?>
                                        <ul class="user-dropdown-item-box">
                                            <li><a class="dropdown-item" href="<?php echo e(route('student.my-learning')); ?>"><span class="iconify"
                                                                                                                         data-icon="akar-icons:book"></span><?php echo e(__('My Learning')); ?>

                                                </a></li>
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(route('student.my-consultation')); ?>">
                                                    <span class="iconify mr-15" data-icon="ic:round-support-agent"></span> <?php echo e(__('My Consultation')); ?>

                                                </a>
                                            </li>

                                            <li><a class="dropdown-item" href="<?php echo e(route('student.wishlist')); ?>"><span class="iconify"
                                                                                                                      data-icon="bx:bx-heart"></span><?php echo e(__('Wishlist')); ?></a></li>
                                        </ul>
                                        <ul class="user-dropdown-item-box">
                                            <li>
                                                <a class="dropdown-item" href="<?php echo e(route('student.profile')); ?>"><span class="iconify" data-icon="bytesize:settings"></span>
                                                    <?php echo e(__('Profile Settings')); ?></a></li>
                                        </ul>
                                        <?php endif; ?>
                                        <?php if(@auth()->user()->role == 1): ?>
                                            <ul class="user-dropdown-item-box">
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--bxs" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="bxs:dashboard"><path fill="currentColor" d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path></svg>
                                                        <?php echo e(__('Admin Dashboard')); ?>

                                                    </a>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                        <ul class="user-dropdown-item-box">
                                            <li><a class="dropdown-item" href="<?php echo e(route('support-ticket-faq')); ?>"><span class="iconify"
                                                                                                                        data-icon="bx:bx-help-circle"></span><?php echo e(__('Help Support')); ?>

                                                </a></li>
                                            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><span class="iconify" data-icon="ic:round-logout"></span><?php echo e(__('Logout')); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Menu User Dropdown Menu Option End -->
                            <?php else: ?>
                                <li class="nav-item  menu-sign-in-btn">
                                    <a href="<?php echo e(route('login')); ?>" class="nav-link theme-button1" aria-current="page"><?php echo e(__('Sign In')); ?></a>
                                </li>

                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item  menu-sign-in-btn">
                                        <a href="<?php echo e(route('register')); ?>" class="nav-link theme-button1" aria-current="page"><?php echo e(__('Sign Up')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation -->
</section>

<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>