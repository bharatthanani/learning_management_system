<div class="email__sidebar bg-style">
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Global Settings')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.general_setting')); ?>" class="list-item <?php echo e(@$generalSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Global Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.bbb-settings')); ?>" class="list-item <?php echo e(@$bbbSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('BigBlueButton Meeting Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.jitsi-settings')); ?>" class="list-item <?php echo e(@$jitsiSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Jitsi Meeting Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.social-login-settings')); ?>" class="list-item <?php echo e(@$socialLoginSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Social Login Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.cookie-settings')); ?>" class="list-item <?php echo e(@$cookieSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Cookie Settings')); ?></span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('settings.aws-settings')); ?>" class="list-item <?php echo e(@$awsSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('AWS Settings')); ?></span>
                </a>
            </li>


            <li>
                <a href="<?php echo e(route('settings.vimeo-settings')); ?>" class="list-item <?php echo e(@$vimeoSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Vimeo Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.currency.index')); ?>" class="list-item <?php echo e(@$subNavCurrencyActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Currency Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.meta.index')); ?>" class="list-item <?php echo e(@$metaIndexActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Meta Management')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.site-share-content')); ?>" class="list-item <?php echo e(@$siteShareContentActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Site Share Content')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.color-settings')); ?>" class="list-item <?php echo e(@$colorActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Color Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.font-settings')); ?>" class="list-item <?php echo e(@$fontActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Font Settings')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Location Settings')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.location.country.index')); ?>" class="list-item <?php echo e(@$subNavCountryActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Country')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.location.state.index')); ?>" class="list-item <?php echo e(@$subNavStateActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('State')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.location.city.index')); ?>" class="list-item <?php echo e(@$subNavCityActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('City')); ?></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Home Settings')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.section-settings')); ?>" class="list-item <?php echo e(@$sectionSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Section Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.banner-section')); ?>" class="list-item <?php echo e(@$bannerSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Banner Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.special-feature-section')); ?>" class="list-item <?php echo e(@$specialSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Special Feature Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.course-section')); ?>" class="list-item <?php echo e(@$courseSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Course Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.bundle-course-section')); ?>" class="list-item <?php echo e(@$bundleCourseSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Bundle Course Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.top-category-section')); ?>" class="list-item <?php echo e(@$topCategorySectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Top Category Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.top-instructor-section')); ?>" class="list-item <?php echo e(@$topInstructorSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Top Instructor Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.become-instructor-video-section')); ?>" class="list-item <?php echo e(@$becomeInstructorVideoSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Become Instructor Video Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.customer-say-section')); ?>" class="list-item <?php echo e(@$customerSaySectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Customer Say Section')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.achievement-section')); ?>" class="list-item <?php echo e(@$achievementSectionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Achievement Section')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Mail Configuration')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.mail-configuration')); ?>" class="list-item <?php echo e(@$mailConfigSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Mail Configuration')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Payment Options')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.payment_method_settings')); ?>" class="list-item <?php echo e(@$paymentMethodSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Payment Method')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.bank.index')); ?>" class="list-item <?php echo e(@$bankSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Bank')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Become an Instructor')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.instructor-feature')); ?>" class="list-item <?php echo e(@$instructorFeatureSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Instructor Feature')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.instructor-procedure')); ?>" class="list-item <?php echo e(@$instructorProcedureSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Instructor Procedure')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.instructor.cms')); ?>" class="list-item <?php echo e(@$instructorCMSSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Instructor CMS')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('FAQ')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.faq.cms')); ?>" class="list-item <?php echo e(@$faqCMSSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('FAQ CMS')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.faq.tab')); ?>" class="list-item <?php echo e(@$faqCMSTabActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('FAQ Tab')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.faq.question')); ?>" class="list-item <?php echo e(@$faqQuestionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Question & Answer')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Support Ticket')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.support-ticket.cms')); ?>" class="list-item <?php echo e(@$supportCMSSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Support Ticket CMS')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.support-ticket.question')); ?>" class="list-item <?php echo e(@$supportQuestionActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Question & Answer')); ?></span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('settings.support-ticket.department')); ?>" class="list-item <?php echo e(@$supportDepartmentActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Support Ticket Department Field')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.support-ticket.priority')); ?>" class="list-item <?php echo e(@$supportPriorityActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Support Ticket Priority Field')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.support-ticket.services')); ?>" class="list-item <?php echo e(@$supportRelatedActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Support Ticket Related Service')); ?></span>
                </a>
            </li>

        </ul>
    </div>

    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('About Us')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.about.gallery-area')); ?>" class="list-item <?php echo e(@$subNavGalleryAreaActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Gallery Area')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.about.our-history')); ?>" class="list-item <?php echo e(@$subNavOurHistoryActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Our History')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.about.upgrade-skill')); ?>" class="list-item <?php echo e(@$subNavUpgradeSkillActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Upgrade Skills')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.about.team-member')); ?>" class="list-item <?php echo e(@$subNavTeamMemberActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Team Member')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.about.instructor-support')); ?>" class="list-item <?php echo e(@$subNavInstructorSupportActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Instructor Support')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.about.client')); ?>" class="list-item <?php echo e(@$subNavClientActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Client')); ?></span>
                </a>
            </li>

        </ul>
    </div>

    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Contact Us')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.contact.cms')); ?>" class="list-item <?php echo e(@$contactUsSettingsActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Contact Us')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Maintenance Mode')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.maintenance')); ?>" class="list-item <?php echo e(@$maintenanceModeActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Maintenance Mode')); ?></span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar__item">
        <ul class="sidebar__mail__nav">
            <h2><?php echo e(__('Others Settings')); ?></h2>

            <li>
                <a href="<?php echo e(route('settings.cache-settings')); ?>" class="list-item <?php echo e(@$cacheActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Cache Settings')); ?></span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('settings.migrate-settings')); ?>" class="list-item <?php echo e(@$migrateActiveClass); ?>">
                    <img src="<?php echo e(asset('admin/images/heroicon/outline/cog.svg')); ?>" alt="icon">
                    <span><?php echo e(__('Migrate Settings')); ?></span>
                </a>
            </li>

        </ul>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\Nabu\resources\views/admin/application_settings/sidebar.blade.php ENDPATH**/ ?>