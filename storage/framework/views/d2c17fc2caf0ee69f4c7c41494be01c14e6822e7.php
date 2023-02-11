<div class="sidebar__area">
    <div class="sidebar__close">
        <button class="close-btn">
            <i class="fa fa-close"></i>
        </button>
    </div>

    <div class="sidebar__brand">
        <a href="<?php echo e(route('admin.dashboard')); ?>">
            <?php if(get_option('app_logo') != ''): ?>
                <img src="<?php echo e(getImageFile(get_option('app_logo'))); ?>">
            <?php else: ?>
                <img src="">
            <?php endif; ?>
        </a>
    </div>

    <ul id="sidebar-menu" class="sidebar__menu">

        <li class=" <?php echo e(active_if_full_match('admin/dashboard')); ?> ">
            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <span class="iconify" data-icon="bxs:dashboard"></span>
                <span><?php echo e(__('Dashboard')); ?></span>
            </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage_course', 'pending_course', 'hold_course', 'approved_course', 'all_course'])): ?>
            <li>
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="dashicons:welcome-learn-more"></span>
                    <span><?php echo e(__('Manage Course')); ?></span>
                </a>
                <ul>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pending_course')): ?>
                        <li class="<?php echo e(active_if_match('admin/course/review-pending')); ?>">
                            <a href="<?php echo e(route('admin.course.review_pending')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Review Pending')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hold_course')): ?>
                        <li class="<?php echo e(active_if_match('admin/course/hold')); ?>">
                            <a href="<?php echo e(route('admin.course.hold')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Hold')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('approved_course')): ?>

                        <li class="<?php echo e(active_if_match('admin/course/approved')); ?>">
                            <a href="<?php echo e(route('admin.course.approved')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Approved')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_course')): ?>
                        <li class="<?php echo e(active_if_full_match('admin/course')); ?>">
                            <a href="<?php echo e(route('admin.course.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('All Courses')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="<?php echo e(active_if_full_match('admin/course/enroll')); ?>">
                        <a href="<?php echo e(route('admin.course.enroll')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Enroll in Course')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage_course_reference', 'manage_course_category', 'manage_course_subcategory', 'manage_course_tag', 'manage_course_language', 'manage_course_difficulty_level'])): ?>
            <li class="<?php echo e(@$navCourseActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="codicon:references"></span>
                    <span><?php echo e(__('Course Reference')); ?></span>
                </a>
                <ul>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_course_category')): ?>
                        <li class="<?php echo e(active_if_match('admin/category')); ?>">
                            <a href="<?php echo e(route('category.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Categories')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_course_subcategory')): ?>
                        <li class="<?php echo e(active_if_match('admin/subcategory')); ?>">
                            <a href="<?php echo e(route('subcategory.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Subcategory')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_course_tag')): ?>

                        <li class="<?php echo e(active_if_match('admin/tag')); ?>">
                            <a href="<?php echo e(route('tag.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Tags')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_course_language')): ?>
                        <li class="<?php echo e(active_if_match('admin/course-language')); ?>">
                            <a href="<?php echo e(route('course-language.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Languages')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_course_difficulty_level')): ?>

                        <li class="<?php echo e(active_if_match('admin/difficulty-level')); ?>">
                            <a href="<?php echo e(route('difficulty-level.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Difficulty Levels')); ?></span>
                            </a>
                        </li>

                    <?php endif; ?>

                    <li class="<?php echo e(@$subNavSpecialPromotionIndexActiveClass); ?>">
                        <a href="<?php echo e(route('special_promotional_tag.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Promotional Tag')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_match('admin/course-upload-rules')); ?>">
                        <a href="<?php echo e(route('course-rules.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Rules & Benefits')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['manage_instructor', 'pending_instructor', 'approved_instructor', 'all_instructor'])): ?>
            <li>
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="la:chalkboard-teacher"></span>
                    <span><?php echo e(__('Manage Instructor')); ?></span>
                </a>
                <ul>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pending_instructor')): ?>
                        <li class="<?php echo e(active_if_match('admin/instructor/pending')); ?>">
                            <a href="<?php echo e(route('instructor.pending')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Pending Instructor')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('approved_instructor')): ?>
                        <li class="<?php echo e(active_if_match('admin/instructor/approved')); ?>">
                            <a href="<?php echo e(route('instructor.approved')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Approved Instructors')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('approved_instructor')): ?>
                        <li class="<?php echo e(active_if_match('admin/instructor/blocked')); ?>">
                            <a href="<?php echo e(route('instructor.blocked')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Blocked Instructors')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_instructor')): ?>

                        <li class="
                        <?php echo e(active_if_full_match('admin/instructor')); ?>

                        <?php echo e(active_if_match('admin/instructor/view/*')); ?>

                    ">
                            <a href="<?php echo e(route('instructor.index')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('All Instructors')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add_instructor')): ?>
                    <li class="<?php echo e(active_if_match('admin/instructor/create')); ?>">
                        <a href="<?php echo e(route('instructor.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Add Instructor')); ?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_student')): ?>
            <li class=" <?php echo e(active_if_full_match('admin/student')); ?> ">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="ph:student"></span>
                    <span><?php echo e(__('Manage Student')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(active_if_match('admin/student')); ?>">
                        <a href="<?php echo e(route('student.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('All Student')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_match('admin/student/create')); ?>">
                        <a href="<?php echo e(route('student.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Add Student')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_coupon')): ?>
            <li class="<?php echo e(@$navCouponActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="ri:coupon-3-fill"></span>
                    <span><?php echo e(__('Manage Coupon')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(@$subNavCouponIndexActiveClass); ?>">
                        <a href="<?php echo e(route('coupon.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Coupon List')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$navCouponAddActiveClass); ?>">
                        <a href="<?php echo e(route('coupon.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Add Coupon')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_promotion')): ?>
        <li class="<?php echo e(@$navPromotionParentActiveClass); ?>">
            <a class="has-arrow" href="#">
                <span class="iconify" data-icon="ic:round-discount"></span>
                <span><?php echo e(__('Manage Promotion')); ?></span>
            </a>
            <ul>
                <li class="<?php echo e(@$subNavPromotionIndexActiveClass); ?>">
                    <a href="<?php echo e(route('promotion.index')); ?>">
                        <i class="fa fa-circle"></i>
                        <span><?php echo e(__('Promotion List')); ?></span>
                    </a>
                </li>
                <li class="<?php echo e(@$subNavAddPromotionActiveClass); ?>">
                    <a href="<?php echo e(route('promotion.create')); ?>">
                        <i class="fa fa-circle"></i>
                        <span><?php echo e(__('Add Promotion')); ?></span>
                    </a>
                </li>
            </ul>
        </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payout')): ?>
            <li class="<?php echo e(@$navFinanceParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="clarity:dollar-bill-solid"></span>
                    <span><?php echo e(__('Manage Payout')); ?></span>
                </a>
                <ul class="<?php echo e(@$navFinanceShowClass); ?>">
                    <li class="<?php echo e(@$subNavFinanceNewWithdrawActiveClass); ?>">
                        <a href="<?php echo e(route('payout.new-withdraw')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('Request Withdrawal')); ?></span>
                        </a>
                    </li>

                    <li class="<?php echo e(@$subNavFinanceCompleteWithdrawActiveClass); ?>">
                        <a href="<?php echo e(route('payout.complete-withdraw')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Complete Withdrawal')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavFinancerejectedWithdrawActiveClass); ?>">
                        <a href="<?php echo e(route('payout.rejected-withdraw')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Rejected Withdrawal')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finance')): ?>
            <li class="">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="map:finance"></span>
                    <span><?php echo e(__('Financial Report')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(active_if_full_match('admin/report/course-revenue-report')); ?><?php echo e(active_if_full_match('admin/report/bundle-revenue-report')); ?><?php echo e(active_if_full_match('admin/report/consultation-revenue-report')); ?>">
                        <a href="<?php echo e(route('course-report.revenue-report')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Revenue Report')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_full_match('admin/report/order-report')); ?>">
                        <a href="<?php echo e(route('report.order-report')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Order Report')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_full_match('admin/report/order-pending')); ?>">
                        <a href="<?php echo e(route('report.order-pending')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Order Pending')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_full_match('admin/report/order-cancelled')); ?>">
                        <a href="<?php echo e(route('report.order-cancelled')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Order Cancelled')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_full_match('admin/report/cancel-consultation-list')); ?>">
                        <a href="<?php echo e(route('report.cancel-consultation-list')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Consultation Cancel')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_certificate')): ?>
            <li class="<?php echo e(@$navCertificateActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="fluent:certificate-20-filled"></span>
                    <span><?php echo e(__('Certificate')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(@$subNavAllCertificateActiveClass); ?>">
                        <a href="<?php echo e(route('certificate.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('All Certificates')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavAddCertificateActiveClass); ?>">
                        <a href="<?php echo e(route('certificate.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Add Certificate')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ranking_level')): ?>
            <li class="<?php echo e(@$navRankingActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="fa6-solid:ranking-star"></span>
                    <span><?php echo e(__('Ranking Level')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(@$subNavRankingActiveClass); ?>">
                        <a href="<?php echo e(route('ranking.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('All Level')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_language')): ?>
            <li>
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="fa6-solid:language"></span>
                    <span><?php echo e(__('Manage Language')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(active_if_match('admin/language')); ?>">
                        <a href="<?php echo e(route('language.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Language Settings')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('support_ticket')): ?>
            <li class="<?php echo e(@$navSupportTicketParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="ic:twotone-support-agent"></span>
                    <span><?php echo e(__('Support Ticket')); ?></span>
                </a>
                <ul class="">
                    <li class="<?php echo e(@$subNavSupportTicketIndexActiveClass); ?>">
                        <a href="<?php echo e(route('support-ticket.admin.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('All Tickets')); ?> </span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavSupportTicketOpenActiveClass); ?>">
                        <a href="<?php echo e(route('support-ticket.admin.open')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Open Ticket')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>
        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('packages')): ?>
            <li class="<?php echo e(@$navPackageParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="ic:twotone-support-agent"></span>
                    <span><?php echo e(__('Packages')); ?></span>
                </a>
                <ul class="">
                    <li class="<?php echo e(@$subNavPackageIndexActiveClass); ?>">
                        <a href="<?php echo e(route('packages.packages.add')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('Add Packages')); ?> </span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavPackageIndexActiveClass); ?>">
                        <a href="<?php echo e(route('packages.packages.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('View Packages')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>
        
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('teacher-profile')): ?>
            <li class="<?php echo e(@$navTeacherProfileParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="ic:twotone-support-agent"></span>
                    <span><?php echo e(__('Teacher Profile')); ?></span>
                </a>
                <ul class="">
                    <li class="<?php echo e(@$subNavTeacherProfileIndexActiveClass); ?>">
                        <a href="<?php echo e(route('teacher-profile.update')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('View')); ?> </span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management')): ?>
            <li class="<?php echo e(@$navUserParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="bxs:user-account"></span>
                    <span><?php echo e(__('Admin Management')); ?></span>
                </a>
                <ul class="<?php echo e(@$navUserParentShowClass); ?>">
                    <li class="<?php echo e(@$subNavUserCreateActiveClass); ?>">
                        <a href="<?php echo e(route('user.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('Add User')); ?> </span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavUserActiveClass); ?>">
                        <a href="<?php echo e(route('user.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('All Users')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavUserRoleActiveClass); ?>">
                        <a href="<?php echo e(route('role.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Roles')); ?></span>
                        </a>
                    </li>


                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management')): ?>
            <li class="<?php echo e(@$navEmailActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="dashicons:email"></span>
                    <span><?php echo e(__('Email Management')); ?></span>
                </a>
                <ul class="<?php echo e(@$navEmailParentShowClass); ?>">
                    <li class="<?php echo e(@$subNavEmailTemplateActiveClass); ?>">
                        <a href="<?php echo e(route('email-template.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Email Template')); ?></span>
                        </a>
                    </li>

                    <li class="<?php echo e(@$subNavSendMailActiveClass); ?>">
                        <a href="<?php echo e(route('email-template.send-email')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Send Email')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>


        <li class="<?php echo e(@$navPageParentActiveClass); ?>">
            <a class="has-arrow" href="#">
                <span class="iconify" data-icon="dashicons:edit-page"></span>
                <span><?php echo e(__('Manage Page')); ?></span>
            </a>
            <ul class="">
                <li class="<?php echo e(@$subNavPageAddActiveClass); ?>">
                    <a href="<?php echo e(route('page.create')); ?>">
                        <i class="fa fa-circle"></i>
                        <span> <?php echo e(__('Add Page')); ?> </span>
                    </a>
                </li>
                <li class="<?php echo e(@$subNavPageIndexActiveClass); ?>">
                    <a href="<?php echo e(route('page.index')); ?>">
                        <i class="fa fa-circle"></i>
                        <span><?php echo e(__('All Pages')); ?></span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="<?php echo e(@$navMenuParentActiveClass); ?>">
            <a class="has-arrow" href="#">
                <span class="iconify" data-icon="bi:menu-up"></span>
                <span><?php echo e(__('Manage Menu')); ?></span>
            </a>
            <ul class="">
                <li class="<?php echo e(@$subNavStaticMenuIndexActiveClass); ?>">
                    <a href="<?php echo e(route('menu.static')); ?>">
                        <i class="fa fa-circle"></i>
                        <span><?php echo e(__('Static Menu')); ?></span>
                    </a>
                </li>
                <li class="<?php echo e(@$subNavDynamicMenuIndexActiveClass); ?>">
                    <a href="<?php echo e(route('menu.dynamic')); ?>">
                        <i class="fa fa-circle"></i>
                        <span><?php echo e(__('Dynamic Menu')); ?></span>
                    </a>
                </li>

            </ul>
        </li>


        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['application_setting', 'global_setting', 'home_setting', 'mail_configuration', 'payment_option', 'content_setting'])): ?>
            <li class="<?php echo e(@$navApplicationSettingParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="mdi:application-cog-outline"></span>
                    <span><?php echo e(__('Application Settings')); ?></span>
                </a>
                <ul class="">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('global_setting')): ?>
                        <li class="<?php echo e(@$subNavGlobalSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.general_setting')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Global Settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>


                    <li class="<?php echo e(@$subNavLocationSettingsActiveClass); ?>">
                        <a href="<?php echo e(route('settings.location.country.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Location Settings')); ?></span>
                        </a>
                    </li>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('home_setting')): ?>
                        <li class="<?php echo e(@$subNavHomeSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.section-settings')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Home Settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mail_configuration')): ?>

                        <li class="<?php echo e(@$subNavMailConfigSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.mail-configuration')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Mail Configuration')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('payment_option')): ?>
                        <li class="<?php echo e(@$subNavPaymentOptionsSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.payment_method_settings')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Payment Options')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_setting')): ?>
                        <li class="<?php echo e(@$subNavInstructorSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.instructor-feature')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Become Instructor')); ?></span>
                            </a>
                        </li>

                        <li class="<?php echo e(@$subNavFAQSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.faq.cms')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('FAQ')); ?></span>
                            </a>
                        </li>
                        <li class="<?php echo e(@$subNavSupportSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.support-ticket.cms')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Support Ticket')); ?></span>
                            </a>
                        </li>

                        <li class="<?php echo e(@$subNavAboutUsSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.about.gallery-area')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('About Us')); ?></span>
                            </a>
                        </li>

                        <li class="<?php echo e(@$subNavContactUsSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.contact.cms')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Contact Us')); ?></span>
                            </a>
                        </li>
                        <li class="<?php echo e(@$subNavMaintenanceModeSettingsActiveClass); ?>">
                            <a href="<?php echo e(route('settings.maintenance')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Maintenance Mode')); ?></span>
                            </a>
                        </li>
                        <li class="<?php echo e(@$subNavCacheActiveClass); ?>">
                            <a href="<?php echo e(route('settings.cache-settings')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Cache Settings')); ?></span>
                            </a>
                        </li>
                        <li class="<?php echo e(@$subNavMigrateActiveClass); ?>">
                            <a href="<?php echo e(route('settings.migrate-settings')); ?>">
                                <i class="fa fa-circle"></i>
                                <span><?php echo e(__('Migrate Settings')); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <li class="<?php echo e(@$navPolicyActiveClass); ?>">
            <a class="has-arrow" href="#">
                <span class="iconify" data-icon="dashicons:privacy"></span>
                <span><?php echo e(__('Policy Setting')); ?></span>
            </a>
            <ul>
                <li class="<?php echo e(@$subNavTermConditionsActiveClass); ?>">
                    <a href="<?php echo e(route('admin.terms-conditions')); ?>">
                        <i class="fa fa-circle"></i>
                        <span> <?php echo e(__('Terms Conditions')); ?> </span>
                    </a>
                </li>
                <li class="<?php echo e(@$subNavPrivacyPolicyActiveClass); ?>">
                    <a href="<?php echo e(route('admin.privacy-policy')); ?>">
                        <i class="fa fa-circle"></i>
                        <span> <?php echo e(__('Privacy Policy')); ?> </span>
                    </a>
                </li>
                <li class="<?php echo e(@$subNavCookiePolicyActiveClass); ?>">
                    <a href="<?php echo e(route('admin.cookie-policy')); ?>">
                        <i class="fa fa-circle"></i>
                        <span> <?php echo e(__('Cookie Policy')); ?> </span>
                    </a>
                </li>
            </ul>
        </li>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_setting')): ?>
            <li class="<?php echo e(@$navContactUsParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="fluent:contact-card-32-regular"></span>
                    <span><?php echo e(__('Contact Us')); ?></span>
                </a>
                <ul class="<?php echo e(@$navContactUsParentShowClass); ?>">
                    <li class="<?php echo e(@$subNavContactUsIndexActiveClass); ?>">
                        <a href="<?php echo e(route('contact.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('All Contact Us')); ?> </span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavContactUsIssueIndexActiveClass); ?>">
                        <a href="<?php echo e(route('contact.issue.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('All Contact Us Issue')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavContactUsIssueAddActiveClass); ?>">
                        <a href="<?php echo e(route('contact.issue.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Add Contact Us Issue')); ?></span>
                        </a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_blog')): ?>
            <li class="<?php echo e(@$navBlogParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="dashicons:welcome-write-blog"></span>
                    <span><?php echo e(__('Manage Blog')); ?> </span>
                </a>
                <ul>
                    <li class="<?php echo e(active_if_full_match('admin/blog/create')); ?>">
                        <a href="<?php echo e(route('blog.create')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Add Blog')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_full_match('admin/blog')); ?> <?php echo e(active_if_full_match('admin/blog/edit/*')); ?>">
                        <a href="<?php echo e(route('blog.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('All Blog')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavBlogCommentListActiveClass); ?>">
                        <a href="<?php echo e(route('blog.blog-comment-list')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Blog Comment List')); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo e(@$subNavBlogCategoryIndexActiveClass); ?>">
                        <a href="<?php echo e(route('blog.blog-category.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Blog Category')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <li class="<?php echo e(@$navForumParentActiveClass); ?>">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="dashicons:welcome-write-blog"></span>
                    <span><?php echo e(__('Manage Forum')); ?></span>
                </a>
                <ul>
                    <li class="<?php echo e(@$subNavForumCategoryIndexActiveClass); ?>">
                        <a href="<?php echo e(route('admin.forum.category.index')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Forum Category')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('account_setting')): ?>
            <li class="mb-5">
                <a class="has-arrow" href="#">
                    <span class="iconify" data-icon="bytesize:settings"></span>
                    <span><?php echo e(__('Account Settings')); ?></span>
                </a>
                <ul class="<?php echo e(@$navUserParentShowClass); ?>">
                    <li class="<?php echo e(active_if_full_match('admin/profile')); ?>">
                        <a href="<?php echo e(route('admin.profile')); ?>">
                            <i class="fa fa-circle"></i>
                            <span> <?php echo e(__('Profile')); ?> </span>
                        </a>
                    </li>
                    <li class="<?php echo e(active_if_full_match('admin/profile/change-password')); ?>">
                        <a href="<?php echo e(route('admin.change-password')); ?>">
                            <i class="fa fa-circle"></i>
                            <span><?php echo e(__('Change Password')); ?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

    </ul>
</div>
<?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/admin/common/sidebar.blade.php ENDPATH**/ ?>