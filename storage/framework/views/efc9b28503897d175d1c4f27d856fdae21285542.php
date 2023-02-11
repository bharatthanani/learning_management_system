<header class="header__area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="header__navbar">
                    <div class="header__navbar__left">
                        <button class="sidebar-toggler">
                            <img src="<?php echo e(asset('admin/images/icons/header/bars.svg')); ?>" alt="">
                        </button>
                        <a href="<?php echo e(route('main.index')); ?>">
                            <button class="btn btn-primary bg-primary text-white"><?php echo e(__('Visit Site')); ?></button>
                        </a>
                    </div>

                    <div class="header__navbar__right">
                        <ul class="header__menu">

                            <li class="admin-notification-menu position-relative">
                                <a href="#" class="btn btn-dropdown site-language" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo e(@$totalAdminNotifications); ?></span>
                                    <img src="<?php echo e(asset('admin/images/icons/header/notification.svg')); ?>" alt="icon">
                                </a>
                                <!-- Notification Dropdown Start -->
                                <ul class="dropdown-menu custom-scrollbar" aria-labelledby="dropdownNotification">
                                    <?php $__empty_1 = true; $__currentLoopData = @$adminNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php if($notification->sender): ?>
                                            <li>
                                                <a href="<?php echo e(route('notification.url', [$notification->uuid])); ?>" class="message-user-item dropdown-item">
                                                    <div class="message-user-item-left">
                                                        <div class="single-notification-item d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <div class="user-img-wrap position-relative radius-50">
                                                                    <img src="<?php echo e(asset($notification->sender->image_path)); ?>" alt="img" class="radius-50">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                                <h6 class="color-heading font-14 text-capitalize"><?php echo e($notification->sender->name); ?></h6>
                                                                <p class="font-13 mb-0"><?php echo e($notification->text); ?></p>
                                                                <div class="font-11 color-gray mt-1"><?php echo e($notification->created_at->diffForHumans()); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <p class="text-center"><?php echo e(__('No Data Found')); ?></p>
                                    <?php endif; ?>
                                </ul>
                                <!-- Notification Dropdown End -->
                            </li>

                            <li>
                                <a href="#" class="btn btn-dropdown site-language" id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo e(asset(selectedLanguage()->flag)); ?>" alt="icon">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                    <?php $__currentLoopData = appLanguages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app_lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo e(url('/local/'.$app_lang->iso_code)); ?>">
                                                <img src="<?php echo e(asset($app_lang->flag)); ?>" alt="icon">
                                                <span><?php echo e($app_lang->language); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </li>
                            <li>
                                <a href="#" class="btn btn-dropdown user-profile" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo e(getImageFile(auth::user()->image_path)); ?>" alt="icon">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownUser">
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>">
                                            <img src="<?php echo e(asset('admin/images/icons/user.svg')); ?>" alt="icon">
                                            <span><?php echo e(__('Profile')); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('admin.change-password')); ?>">
                                            <img src="<?php echo e(asset('admin/images/icons/settings.svg')); ?>" alt="icon">
                                            <span><?php echo e(__('Change Password')); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
                                            <img src="<?php echo e(asset('admin/images/icons/logout.svg')); ?>" alt="icon">
                                            <span><?php echo e(__('Logout')); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/admin/common/header.blade.php ENDPATH**/ ?>