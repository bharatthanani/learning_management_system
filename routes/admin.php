<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ContactUsIssueController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseLanguageController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\TeacherProfileController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\difficultyLevelController;
use App\Http\Controllers\Admin\ForumCategoryController;
use App\Http\Controllers\Admin\HomeSettingController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PayoutController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\RankingLevelController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpecialPromotionTagController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\SupportTicketController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\EmailTemplateController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::group(['prefix' => 'payout', 'as' => 'payout.'], function () {
    Route::get('new-withdraw', [PayoutController::class, 'newWithdraw'])->name('new-withdraw');
    Route::get('complete-withdraw', [PayoutController::class, 'completeWithdraw'])->name('complete-withdraw');
    Route::get('rejected-withdraw', [PayoutController::class, 'rejectedWithdraw'])->name('rejected-withdraw');
    Route::post('change-withdraw-status', [PayoutController::class, 'changeWithdrawStatus'])->name('change-withdraw-status')->middleware('isDemo');
});

// email template

Route::group(['prefix' => 'email-template', 'as' => 'email-template.'], function () {
    Route::get('/', [EmailTemplateController::class, 'index'])->name('index');
    Route::get('create', [EmailTemplateController::class, 'create'])->name('create');
    Route::post('store', [EmailTemplateController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{uuid}', [EmailTemplateController::class, 'edit'])->name('edit');
    Route::post('update/{uuid}', [EmailTemplateController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{uuid}', [EmailTemplateController::class, 'delete'])->name('delete')->middleware('isDemo');

    Route::get('send-email', [EmailTemplateController::class, 'sendEmail'])->name('send-email');
    Route::post('send-email-to-user', [EmailTemplateController::class, 'sendEmailToUser'])->name('send-email-to-user')->middleware('isDemo');
});

// Start:: user management
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete')->middleware('isDemo');
});

Route::group(['prefix' => 'role', 'as' => 'role.'], function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('create', [RoleController::class, 'create'])->name('create');
    Route::post('store', [RoleController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{id}', [RoleController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [RoleController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{id}', [RoleController::class, 'delete'])->name('delete')->middleware('isDemo');
});

// End:: user management

Route::group(['prefix' => 'promotions', 'as' => 'promotion.'], function () {
    Route::get('/', [PromotionController::class, 'index'])->name('index');
    Route::get('create', [PromotionController::class, 'create'])->name('create');
    Route::post('store', [PromotionController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit-promotion-course/{uuid}', [PromotionController::class, 'editPromotionCourse'])->name('editPromotionCourse');
    Route::get('show/{uuid}', [PromotionController::class, 'show'])->name('show');
    Route::get('edit/{uuid}', [PromotionController::class, 'edit'])->name('edit');
    Route::put('update/{uuid}', [PromotionController::class, 'update'])->name('update')->middleware('isDemo');
    Route::delete('delete/{uuid}', [PromotionController::class, 'delete'])->name('delete')->middleware('isDemo');
    Route::post('change-promotion-status', [PromotionController::class, 'changePromotionStatus'])->name('changePromotionStatus')->middleware('isDemo');

    Route::get('add-promotion-course-list', [PromotionController::class, 'addPromotionCourseList'])->name('addPromotionCourseList');
    Route::get('remove-promotion-course-list', [PromotionController::class, 'removePromotionCourseList'])->name('removePromotionCourseList')->middleware('isDemo');
});

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('admin.course.index');
    Route::get('view/{uuid}', [CourseController::class, 'view'])->name('admin.course.view');
    Route::get('approved', [CourseController::class, 'approved'])->name('admin.course.approved');
    Route::get('review-pending', [CourseController::class, 'reviewPending'])->name('admin.course.review_pending');
    Route::get('hold', [CourseController::class, 'hold'])->name('admin.course.hold');
    Route::get('status-change/{uuid}/{status}', [CourseController::class, 'statusChange'])->name('admin.course.status-change')->middleware('isDemo');
    Route::get('delete/{uuid}', [CourseController::class, 'delete'])->name('admin.course.delete')->middleware('isDemo');


    Route::get('enroll', [CourseController::class, 'courseEnroll'])->name('admin.course.enroll');
    Route::post('enroll', [CourseController::class, 'courseEnrollStore'])->name('admin.course.enroll.store')->middleware('isDemo');
});

Route::get('course-upload-rules', [CourseController::class, 'courseUploadRuleIndex'])->name('course-rules.index');
Route::post('course-upload-rules/store', [CourseController::class, 'courseUploadRuleStore'])->name('course-rules.store')->middleware('isDemo');


Route::prefix('instructor')->group(function () {
    Route::get('/', [InstructorController::class, 'index'])->name('instructor.index');
    Route::get('view/{uuid}', [InstructorController::class, 'view'])->name('instructor.view');
    Route::get('edit/{uuid}', [InstructorController::class, 'edit'])->name('instructor.edit');
    Route::post('update/{uuid}', [InstructorController::class, 'update'])->name('instructor.update');
    Route::get('pending', [InstructorController::class, 'pending'])->name('instructor.pending');
    Route::get('approved', [InstructorController::class, 'approved'])->name('instructor.approved');
    Route::get('blocked', [InstructorController::class, 'blocked'])->name('instructor.blocked');
    Route::get('change-status/{uuid}/{status}', [InstructorController::class, 'changeStatus'])->name('instructor.status-change')->middleware('isDemo');
    Route::post('change-instructor-status', [InstructorController::class, 'changeInstructorStatus'])->name('admin.instructor.changeInstructorStatus')->middleware('isDemo');
    Route::get('delete/{uuid}', [InstructorController::class, 'delete'])->name('instructor.delete')->middleware('isDemo');

    Route::get('get-state-by-country/{country_id}', [InstructorController::class, 'getStateByCountry']);
    Route::get('get-city-by-state/{state_id}', [InstructorController::class, 'getCityByState']);

    Route::get('create', [InstructorController::class, 'create'])->name('instructor.create');
    Route::post('store', [InstructorController::class, 'store'])->name('instructor.store')->middleware('isDemo');
});

Route::prefix('student')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.index');
    Route::get('create', [StudentController::class, 'create'])->name('student.create');
    Route::post('store', [StudentController::class, 'store'])->name('student.store')->middleware('isDemo');
    Route::get('view/{uuid}', [StudentController::class, 'view'])->name('student.view');
    Route::get('edit/{uuid}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('update/{uuid}', [StudentController::class, 'update'])->name('student.update')->middleware('isDemo');
    Route::delete('delete/{uuid}', [StudentController::class, 'delete'])->name('student.delete')->middleware('isDemo');
    Route::post('change-student-status', [StudentController::class, 'changeStudentStatus'])->name('admin.student.changeStudentStatus')->middleware('isDemo');
});


Route::prefix('teacher-profile')->group(function () {
    Route::get('/', [TeacherProfileController::class, 'update'])->name('teacher-profile.update');
    Route::post('store', [TeacherProfileController::class, 'store'])->name('teacher-profile.store')->middleware('isDemo');
    Route::get('package/', [TeacherProfileController::class, 'packageIndex'])->name('teacher-profile.package');
    Route::post('package/store', [TeacherProfileController::class, 'packageStore'])->name('teacher-profile.package.create')->middleware('isDemo');
    // Route::get('view/{uuid}', [TeacherToolController::class, 'view'])->name('teacher-tool.view');
    // Route::get('edit/{uuid}', [TeacherToolController::class, 'edit'])->name('teacher-tool.edit');
    // Route::post('update/{uuid}', [TeacherToolController::class, 'update'])->name('teacher-tool.update')->middleware('isDemo');
    // Route::delete('delete/{uuid}', [TeacherToolController::class, 'delete'])->name('teacher-tool.delete')->middleware('isDemo');
    // Route::post('change-student-status', [TeacherToolController::class, 'changeStudentStatus'])->name('admin.teacher-tool.changeStudentStatus')->middleware('isDemo');
});

Route::prefix('report')->group(function () {
    Route::get('course-revenue-report', [ReportController::class, 'revenueReportCoursesIndex'])->name('course-report.revenue-report');
    Route::get('bundle-revenue-report', [ReportController::class, 'revenueReportBundlesIndex'])->name('bundle-report.revenue-report');
    Route::get('consultation-revenue-report', [ReportController::class, 'revenueReportConsultationIndex'])->name('consultation-report.revenue-report');
    Route::get('order-report', [ReportController::class, 'orderReportIndex'])->name('report.order-report');
    Route::get('order-pending', [ReportController::class, 'orderReportPending'])->name('report.order-pending');
    Route::get('order-cancelled', [ReportController::class, 'orderReportCancelled'])->name('report.order-cancelled');
    Route::get('order-paid/{uuid}/{status}', [ReportController::class, 'orderReportPaidStatus'])->name('report.order-paid');
    Route::get('cancel-consultation-list', [ReportController::class, 'cancelConsultationList'])->name('report.cancel-consultation-list');
    Route::post('change-consultation-status', [ReportController::class, 'changeConsultationStatus'])->name('report.changeConsultationStatus')->middleware('isDemo');
});

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('store', [CategoryController::class, 'store'])->name('category.store')->middleware('isDemo');
    Route::get('edit/{uuid}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('update/{uuid}', [CategoryController::class, 'update'])->name('category.update')->middleware('isDemo');
    Route::get('delete/{uuid}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('isDemo');
});

Route::prefix('subcategory')->group(function () {
    Route::get('/', [SubcategoryController::class, 'index'])->name('subcategory.index');
    Route::get('create', [SubcategoryController::class, 'create'])->name('subcategory.create');
    Route::post('store', [SubcategoryController::class, 'store'])->name('subcategory.store')->middleware('isDemo');
    Route::get('edit/{uuid}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
    Route::post('update/{uuid}', [SubcategoryController::class, 'update'])->name('subcategory.update')->middleware('isDemo');
    Route::get('delete/{uuid}', [SubcategoryController::class, 'delete'])->name('subcategory.delete')->middleware('isDemo');
});

Route::prefix('tag')->group(function () {
    Route::get('/', [TagController::class, 'index'])->name('tag.index');
    Route::get('create', [TagController::class, 'create'])->name('tag.create');
    Route::post('store', [TagController::class, 'store'])->name('tag.store')->middleware('isDemo');
    Route::get('edit/{uuid}', [TagController::class, 'edit'])->name('tag.edit');
    Route::patch('update/{uuid}', [TagController::class, 'update'])->name('tag.update')->middleware('isDemo');
    Route::get('delete/{uuid}', [TagController::class, 'delete'])->name('tag.delete')->middleware('isDemo');
});

Route::prefix('course-language')->group(function () {
    Route::get('/', [CourseLanguageController::class, 'index'])->name('course-language.index');
    Route::get('create', [CourseLanguageController::class, 'create'])->name('course-language.create');
    Route::post('store', [CourseLanguageController::class, 'store'])->name('course-language.store')->middleware('isDemo');
    Route::get('edit/{uuid}', [CourseLanguageController::class, 'edit'])->name('course-language.edit');
    Route::patch('update/{uuid}', [CourseLanguageController::class, 'update'])->name('course-language.update')->middleware('isDemo');
    Route::get('delete/{uuid}', [CourseLanguageController::class, 'delete'])->name('course-language.delete')->middleware('isDemo');
});

Route::prefix('difficulty-level')->group(function () {
    Route::get('/', [difficultyLevelController::class, 'index'])->name('difficulty-level.index');
    Route::get('create', [difficultyLevelController::class, 'create'])->name('difficulty-level.create');
    Route::post('store', [difficultyLevelController::class, 'store'])->name('difficulty-level.store')->middleware('isDemo');
    Route::get('edit/{uuid}', [difficultyLevelController::class, 'edit'])->name('difficulty-level.edit');
    Route::patch('update/{uuid}', [difficultyLevelController::class, 'update'])->name('difficulty-level.update')->middleware('isDemo');
    Route::get('delete/{uuid}', [difficultyLevelController::class, 'delete'])->name('difficulty-level.delete')->middleware('isDemo');
});

Route::group(['prefix' => 'special-promotional-tag', 'as' => 'special_promotional_tag.'], function () {
    Route::get('/', [SpecialPromotionTagController::class, 'index'])->name('index');
    Route::post('store', [SpecialPromotionTagController::class, 'store'])->name('store')->middleware('isDemo');
    Route::patch('update/{uuid}', [SpecialPromotionTagController::class, 'update'])->name('update')->middleware('isDemo');
    Route::delete('delete/{uuid}', [SpecialPromotionTagController::class, 'delete'])->name('delete')->middleware('isDemo');
    Route::get('edit-special-promotion-course/{uuid}', [SpecialPromotionTagController::class, 'editSpecialPromotionCourse'])->name('editSpecialPromotionCourse');

    Route::get('add-promotion-tag-course-list', [SpecialPromotionTagController::class, 'addPromotionCourseList'])->name('addPromotionTagCourseList')->middleware('isDemo');
    Route::get('remove-promotion-tag-course-list', [SpecialPromotionTagController::class, 'removePromotionCourseList'])->name('removePromotionTagCourseList')->middleware('isDemo');
});

Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
    Route::get('/', [CouponController::class, 'index'])->name('index');
    Route::get('create', [CouponController::class, 'create'])->name('create');
    Route::post('store', [CouponController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{uuid}', [CouponController::class, 'edit'])->name('edit');
    Route::post('update/{uuid}', [CouponController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{uuid}', [CouponController::class, 'delete'])->name('delete')->middleware('isDemo');
});

Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('create', [BlogController::class, 'create'])->name('create');
    Route::post('store', [BlogController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{uuid}', [BlogController::class, 'edit'])->name('edit');
    Route::post('update/{uuid}', [BlogController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{uuid}', [BlogController::class, 'delete'])->name('delete')->middleware('isDemo');
    Route::get('blog-comment-list', [BlogController::class, 'blogCommentList'])->name('blog-comment-list');
    Route::post('change-blog-comment-status', [BlogController::class, 'changeBlogCommentStatus'])->name('changeBlogCommentStatus')->middleware('isDemo');
    Route::get('blog-comment-delete/{id}', [BlogController::class, 'blogCommentDelete'])->name('blogComment.delete')->middleware('isDemo');

    Route::get('blog-category-index', [BlogCategoryController::class, 'index'])->name('blog-category.index');
    Route::post('blog-category-store', [BlogCategoryController::class, 'store'])->name('blog-category.store')->middleware('isDemo');
    Route::patch('blog-category-update/{uuid}', [BlogCategoryController::class, 'update'])->name('blog-category.update')->middleware('isDemo');
    Route::get('blog-category-delete/{uuid}', [BlogCategoryController::class, 'delete'])->name('blog-category.delete')->middleware('isDemo');
});

Route::group(['prefix' => 'certificate', 'as' => 'certificate.'], function () {
    Route::get('/', [CertificateController::class, 'index'])->name('index');
    Route::get('create', [CertificateController::class, 'create'])->name('create');
    Route::post('store', [CertificateController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{uuid}', [CertificateController::class, 'edit'])->name('edit');
    Route::post('update/{uuid}', [CertificateController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{uuid}', [CertificateController::class, 'delete'])->name('delete')->middleware('isDemo');
});

Route::group(['prefix' => 'ranking-levels', 'as' => 'ranking.'], function () {
    Route::get('index', [RankingLevelController::class, 'index'])->name('index');
    Route::post('store', [RankingLevelController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{uuid}', [RankingLevelController::class, 'edit'])->name('edit');
    Route::patch('update/{uuid}', [RankingLevelController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{uuid}', [RankingLevelController::class, 'delete'])->name('delete')->middleware('isDemo');
});

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('admin.profile');
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('admin.change-password');
    Route::post('change-password', [ProfileController::class, 'changePasswordUpdate'])->name('admin.change-password.update')->middleware('isDemo');
    Route::post('update', [ProfileController::class, 'update'])->name('admin.profile.update')->middleware('isDemo');
});


Route::prefix('language')->group(function () {
    Route::get('/', [LanguageController::class, 'index'])->name('language.index');
    Route::get('create', [LanguageController::class, 'create'])->name('language.create');
    Route::post('store', [LanguageController::class, 'store'])->name('language.store')->middleware('isDemo');
    Route::get('edit/{id}/{iso_code?}', [LanguageController::class, 'edit'])->name('language.edit');
    Route::post('update/{id}', [LanguageController::class, 'update'])->name('language.update');
    Route::get('translate/{id}', [LanguageController::class, 'translateLanguage'])->name('language.translate');
    Route::post('update-translate/{id}', [LanguageController::class, 'updateTranslate'])->name('update.translate')->middleware('isDemo');
    Route::get('delete/{id}', [LanguageController::class, 'delete'])->name('language.delete')->middleware('isDemo');
    Route::post('import',[LanguageController::class, 'import'])->name('language.import')->middleware('isDemo');
});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('contact-us-list', [ContactUsController::class, 'contactUsIndex'])->name('index');
    Route::delete('contact-us-delete/{id}', [ContactUsController::class, 'contactUsDelete'])->name('delete')->middleware('isDemo');
    Route::resource('issue', ContactUsIssueController::class);
});

Route::group(['prefix' => 'packages', 'as' => 'packages.'], function () {
    Route::get('/', [PackageController::class, 'index'])->name('packages.index');
    Route::get('add', [PackageController::class, 'addForm'])->name('packages.add');
    Route::post('create', [PackageController::class, 'create'])->name('packages.create');
    Route::post('change_status', [PackageController::class, 'changeStatus'])->name('packages.changePackagesStatus');
    Route::get('edit/{id}', [PackageController::class, 'show'])->name('packages.show');
    Route::get('delete/{id}', [PackageController::class, 'Delete'])->name('packages.delete');
    Route::post('update', [PackageController::class, 'update'])->name('packages.update');
    
    // Route::post('add', [PackageController::class, 'create'])->name('admin.create');
    // Route::get('open', [PackageController::class, 'ticketOpen'])->name('admin.open');
    // Route::get('show/{uuid}', [PackageController::class, 'ticketShow'])->name('admin.show');
    // Route::get('delete/{uuid}', [PackageController::class, 'ticketDelete'])->name('admin.delete')->middleware('isDemo');
});

Route::group(['prefix' => 'support-ticket', 'as' => 'support-ticket.'], function () {
    Route::get('index', [SupportTicketController::class, 'ticketIndex'])->name('admin.index');
    Route::get('open', [SupportTicketController::class, 'ticketOpen'])->name('admin.open');
    Route::get('show/{uuid}', [SupportTicketController::class, 'ticketShow'])->name('admin.show');
    Route::get('delete/{uuid}', [SupportTicketController::class, 'ticketDelete'])->name('admin.delete')->middleware('isDemo');
    Route::post('change-ticket-status', [SupportTicketController::class, 'changeTicketStatus'])->name('admin.changeTicketStatus')->middleware('isDemo');
    Route::post('message-store', [SupportTicketController::class, 'messageStore'])->name('admin.messageStore')->middleware('isDemo');
});

//Start:: Page
Route::group(['prefix' => 'pages', 'as' => 'page.'], function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('create', [PageController::class, 'create'])->name('create');
    Route::post('store', [PageController::class, 'store'])->name('store')->middleware('isDemo');
    Route::get('edit/{uuid}', [PageController::class, 'edit'])->name('edit');
    Route::post('update/{uuid}', [PageController::class, 'update'])->name('update')->middleware('isDemo');
    Route::get('delete/{uuid}', [PageController::class, 'delete'])->name('delete')->middleware('isDemo');
});
//End:: Page

//Start:: Menu
Route::group(['prefix' => 'menus', 'as' => 'menu.'], function () {
    Route::get('static-menu', [MenuController::class, 'staticMenu'])->name('static');
    Route::patch('static-menu/{slug}', [MenuController::class, 'staticMenuUpdate'])->name('static.update')->middleware('isDemo');
    Route::get('dynamic-menu', [MenuController::class, 'dynamicMenu'])->name('dynamic');
    Route::post('dynamic-menu-store', [MenuController::class, 'dynamicMenuStore'])->name('dynamic.store')->middleware('isDemo');
    Route::patch('dynamic-menu-update/{id}', [MenuController::class, 'dynamicMenuUpdate'])->name('dynamic.update')->middleware('isDemo');
    Route::get('dynamic-menu-delete/{id}', [MenuController::class, 'dynamicMenuDelete'])->name('dynamic.delete')->middleware('isDemo');
});
//End:: Menu

Route::name('admin.')->group(function (){
    Route::group(['prefix' => 'forum', 'as' => 'forum.'], function (){
        Route::get('category-index', [ForumCategoryController::class, 'index'])->name('category.index');
        Route::post('category-store', [ForumCategoryController::class, 'store'])->name('category.store')->middleware('isDemo');
        Route::patch('category-update/{uuid}', [ForumCategoryController::class, 'update'])->name('category.update')->middleware('isDemo');
        Route::get('category-delete/{uuid}', [ForumCategoryController::class, 'delete'])->name('category.delete')->middleware('isDemo');
    });
});

Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
    //Start:: General Settings
    Route::get('general-settings', [SettingController::class, 'GeneralSetting'])->name('general_setting');
    Route::post('general-settings-update', [SettingController::class, 'GeneralSettingUpdate'])->name('general_setting.cms.update')->middleware('isDemo');

    Route::get('metas', [SettingController::class, 'metaIndex'])->name('meta.index');
    Route::get('meta/edit/{uuid}', [SettingController::class, 'editMeta'])->name('meta.edit');
    Route::post('meta/update/{uuid}', [SettingController::class, 'updateMeta'])->name('meta.update')->middleware('isDemo');

    Route::get('site-share-content', [SettingController::class, 'siteShareContent'])->name('site-share-content')->middleware('isDemo');
    Route::get('color-settings', [SettingController::class, 'colorSettings'])->name('color-settings')->middleware('isDemo');
    Route::get('font-settings', [SettingController::class, 'fontSettings'])->name('font-settings')->middleware('isDemo');
    //End:: General Settings

    //Start:: Maintenance Mode
    Route::get('maintenance-mode-changes', [SettingController::class, 'maintenanceMode'])->name('maintenance');
    Route::post('maintenance-mode-changes', [SettingController::class, 'maintenanceModeChange'])->name('maintenance.change')->middleware('isDemo');
    //End:: Maintenance Mode

    //Start:: BigBlueButton Settings
    Route::get('bbb-settings', [SettingController::class, 'BBBSettings'])->name('bbb-settings');
    Route::post('bbb-settings-update', [SettingController::class, 'BBBSettingsUpdate'])->name('bbb-settings.update')->middleware('isDemo');

    //Start:: Jitsi Settings
    Route::get('jitsi-settings', [SettingController::class, 'JitsiSettings'])->name('jitsi-settings');
    Route::post('jitsi-settings-update', [SettingController::class, 'JitsiSettingsUpdate'])->name('jitsi-settings.update')->middleware('isDemo');

    //Start:: Social Login Settings
    Route::get('social-login-settings', [SettingController::class, 'socialLoginSettings'])->name('social-login-settings');
    Route::post('social-settings-update', [SettingController::class, 'socialLoginSettingsUpdate'])->name('social-login-settings.update')->middleware('isDemo');

    //Start:: Cookie Settings
    Route::get('cookie-settings', [SettingController::class, 'cookieSettings'])->name('cookie-settings');
    Route::post('cookie-settings-update', [SettingController::class, 'cookieSettingsUpdate'])->name('cookie-settings.update')->middleware('isDemo');

    //Start:: AWS S3 Settings
    Route::get('aws-settings', [SettingController::class, 'awsSettings'])->name('aws-settings');
    Route::post('aws-settings-update', [SettingController::class, 'awsSettingsUpdate'])->name('aws-settings.update')->middleware('isDemo');

    //Start:: Vimeo Settings
    Route::get('vimeo-settings', [SettingController::class, 'vimeoSettings'])->name('vimeo-settings');
    Route::post('vimeo-settings-update', [SettingController::class, 'vimeoSettingsUpdate'])->name('vimeo-settings.update')->middleware('isDemo');

    //Start:: Currency Settings
    Route::group(['prefix' => 'currency', 'as' => 'currency.'], function () {
        Route::get('', [CurrencyController::class, 'index'])->name('index');
        Route::post('currency', [CurrencyController::class, 'store'])->name('store')->middleware('isDemo');
        Route::get('edit/{id}/{slug?}', [CurrencyController::class, 'edit'])->name('edit');
        Route::patch('update/{id}', [CurrencyController::class, 'update'])->name('update')->middleware('isDemo');
        Route::delete('delete/{id}', [CurrencyController::class, 'delete'])->name('delete')->middleware('isDemo');
    });

    //Start:: Home Settings
    Route::get('section-settings', [HomeSettingController::class, 'sectionSettings'])->name('section-settings');
    Route::post('sectionSettingsStatusChange', [HomeSettingController::class, 'sectionSettingsStatusChange'])->name('sectionSettingsStatusChange')->middleware('isDemo');
    Route::get('banner-section-settings', [HomeSettingController::class, 'bannerSection'])->name('banner-section');
    Route::post('banner-section-settings', [HomeSettingController::class, 'bannerSectionUpdate'])->name('banner-section.update')->middleware('isDemo');
    Route::get('special-feature-section-settings', [HomeSettingController::class, 'specialFeatureSection'])->name('special-feature-section');
    Route::get('course-section-settings', [HomeSettingController::class, 'courseSection'])->name('course-section');
    Route::get('bundle-course-section-settings', [HomeSettingController::class, 'bundleCourseSection'])->name('bundle-course-section');
    Route::get('top-category-section-settings', [HomeSettingController::class, 'topCategorySection'])->name('top-category-section');
    Route::get('top-instructor-section-settings', [HomeSettingController::class, 'topInstructorSection'])->name('top-instructor-section');
    Route::get('become-instructor-video-section-settings', [HomeSettingController::class, 'becomeInstructorVideoSection'])->name('become-instructor-video-section');
    Route::get('customer-say-section-settings', [HomeSettingController::class, 'customerSaySection'])->name('customer-say-section');
    Route::get('achievement-section-settings', [HomeSettingController::class, 'achievementSection'])->name('achievement-section');
    //End:: Home Settings

    //Start:: Mail Config
    Route::get('mail-configuration', [SettingController::class, 'mailConfiguration'])->name('mail-configuration');
    Route::post('send-test-mail', [SettingController::class, 'sendTestMail'])->name('send.test.mail')->middleware('isDemo');
    Route::post('save-setting', [SettingController::class, 'saveSetting'])->name('save.setting')->middleware('isDemo');
    //End:: Mail Config

    //Start:: Become an Instructor
    Route::get('instructor-feature-settings', [SettingController::class, 'instructorFeatureSetting'])->name('instructor-feature');
    Route::post('instructor-feature-settings', [SettingController::class, 'instructorFeatureSettingUpdate'])->name('instructor-feature.update')->middleware('isDemo');

    Route::get('instructor-procedure-settings', [SettingController::class, 'instructorProcedureSetting'])->name('instructor-procedure');
    Route::post('instructor-procedure-settings', [SettingController::class, 'instructorProcedureSettingUpdate'])->name('instructor-procedure.update')->middleware('isDemo');
    Route::get('instructor-cms', [SettingController::class, 'instructorCMSSetting'])->name('instructor.cms');
    //End:: Become an Instructor

    //Start:: FAQ Question & Answer
    Route::get('faq-settings', [SettingController::class, 'faqCMS'])->name('faq.cms');
    Route::get('faq-tab', [SettingController::class, 'faqTab'])->name('faq.tab');
    Route::get('faq-question-settings', [SettingController::class, 'faqQuestion'])->name('faq.question');
    Route::post('faq-question-settings', [SettingController::class, 'faqQuestionUpdate'])->name('faq.question.update')->middleware('isDemo');
    //End:: FAQ Question & Answer

    //Start:: Support Ticket
    Route::group(['prefix' => 'support-ticket', 'as' => 'support-ticket.'], function () {
        Route::get('/', [SettingController::class, 'supportTicketCMS'])->name('cms');
        Route::get('question-answer', [SettingController::class, 'supportTicketQuesAns'])->name('question');
        Route::post('question-answer', [SettingController::class, 'supportTicketQuesAnsUpdate'])->name('question.update')->middleware('isDemo');

        Route::get('department', [SupportTicketController::class, 'Department'])->name('department');
        Route::post('department', [SupportTicketController::class, 'DepartmentStore'])->name('department.store')->middleware('isDemo');
        Route::delete('department-delete/{uuid}', [SupportTicketController::class, 'departmentDelete'])->name('department.delete')->middleware('isDemo');

        Route::get('priority', [SupportTicketController::class, 'Priority'])->name('priority');
        Route::post('priority', [SupportTicketController::class, 'PriorityStore'])->name('priority.store')->middleware('isDemo');
        Route::delete('priorities-delete/{uuid}', [SupportTicketController::class, 'priorityDelete'])->name('priority.delete')->middleware('isDemo');

        Route::get('services', [SupportTicketController::class, 'RelatedService'])->name('services');
        Route::post('services', [SupportTicketController::class, 'RelatedServiceStore'])->name('services.store')->middleware('isDemo');
        Route::delete('services-delete/{uuid}', [SupportTicketController::class, 'relatedServiceDelete'])->name('services.delete')->middleware('isDemo');
    });
    //End:: Support Ticket

    // Start:: Contact Us
    Route::get('contact-us-cms', [ContactUsController::class, 'contactUsCMS'])->name('contact.cms');
    // End:: Contact Us

    Route::get('payment-method', [SettingController::class, 'paymentMethod'])->name('payment_method_settings');

    //start:: Bank
    Route::group(['prefix' => 'bank'], function () {
        Route::get('/', [BankController::class, 'index'])->name('bank.index');
        Route::post('/store', [BankController::class, 'store'])->name('bank.store')->middleware('isDemo');
        Route::get('/edit/{id}', [BankController::class, 'edit'])->name('bank.edit');
        Route::patch('/update/{id}', [BankController::class, 'update'])->name('bank.update')->middleware('isDemo');
        Route::get('/status/{id}', [BankController::class, 'status'])->name('bank.status')->middleware('isDemo');
        Route::delete('delete/{id}', [BankController::class, 'delete'])->name('bank.delete')->middleware('isDemo');
    });

    // Start:: About Us
    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('about-us-gallery-area', [AboutUsController::class, 'galleryArea'])->name('gallery-area');
        Route::post('about-us-gallery-area', [AboutUsController::class, 'galleryAreaUpdate'])->name('gallery-area.update')->middleware('isDemo');

        Route::get('about-us-our-history', [AboutUsController::class, 'ourHistory'])->name('our-history');
        Route::post('about-us-our-history', [AboutUsController::class, 'ourHistoryUpdate'])->name('our-history.update')->middleware('isDemo');

        Route::get('about-us-upgrade-skill', [AboutUsController::class, 'upgradeSkill'])->name('upgrade-skill');
        Route::post('about-us-upgrade-skill', [AboutUsController::class, 'upgradeSkillUpdate'])->name('upgrade-skill.update')->middleware('isDemo');

        Route::get('about-us-team-member', [AboutUsController::class, 'teamMember'])->name('team-member');
        Route::post('about-us-team-member', [AboutUsController::class, 'teamMemberUpdate'])->name('team-member.update')->middleware('isDemo');

        Route::get('about-us-instructor-support', [AboutUsController::class, 'instructorSupport'])->name('instructor-support');
        Route::post('about-us-instructor-support', [AboutUsController::class, 'instructorSupportUpdate'])->name('instructor-support.update')->middleware('isDemo');

        Route::get('about-us-client', [AboutUsController::class, 'client'])->name('client');
        Route::post('about-us-client', [AboutUsController::class, 'clientUpdate'])->name('client.update')->middleware('isDemo');
    });
    // End:: About Us
    Route::group(['prefix' => 'locations', 'as' => 'location.'], function () {
        Route::get('country', [LocationController::class, 'countryIndex'])->name('country.index');
        Route::post('country', [LocationController::class, 'countryStore'])->name('country.store')->middleware('isDemo');
        Route::get('country/{id}/{slug?}', [LocationController::class, 'countryEdit'])->name('country.edit');
        Route::patch('country/{id}', [LocationController::class, 'countryUpdate'])->name('country.update')->middleware('isDemo');
        Route::delete('country/delete/{id}', [LocationController::class, 'countryDelete'])->name('country.delete')->middleware('isDemo');

        Route::get('state', [LocationController::class, 'stateIndex'])->name('state.index');
        Route::post('state', [LocationController::class, 'stateStore'])->name('state.store')->middleware('isDemo');
        Route::get('state/{id}/{slug?}', [LocationController::class, 'stateEdit'])->name('state.edit');
        Route::patch('state/{id}', [LocationController::class, 'stateUpdate'])->name('state.update')->middleware('isDemo');
        Route::delete('state/delete/{id}', [LocationController::class, 'stateDelete'])->name('state.delete')->middleware('isDemo');

        Route::get('city', [LocationController::class, 'cityIndex'])->name('city.index');
        Route::post('city', [LocationController::class, 'cityStore'])->name('city.store')->middleware('isDemo');
        Route::get('city/{id}/{slug?}', [LocationController::class, 'cityEdit'])->name('city.edit');
        Route::patch('city/{id}', [LocationController::class, 'cityUpdate'])->name('city.update')->middleware('isDemo');
        Route::delete('city/delete/{id}', [LocationController::class, 'cityDelete'])->name('city.delete')->middleware('isDemo');
    });

    //Migrate, Cache
    Route::get('cache-settings', [SettingController::class, 'cacheSettings'])->name('cache-settings');
    Route::get('cache-update/{id}', [SettingController::class, 'cacheUpdate'])->name('cache-update')->middleware('isDemo');
    Route::get('migrate-settings', [SettingController::class, 'migrateSettings'])->name('migrate-settings');
    Route::get('migrate-update', [SettingController::class, 'migrateUpdate'])->name('migrate-update')->middleware('isDemo');
});

Route::get('privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('admin.privacy-policy');
Route::post('privacy-policy', [PolicyController::class, 'privacyPolicyStore'])->name('admin.privacy-policy.store')->middleware('isDemo');

Route::get('terms-conditions', [PolicyController::class, 'termConditions'])->name('admin.terms-conditions');
Route::post('terms-conditions', [PolicyController::class, 'termConditionsStore'])->name('admin.terms-conditions.store')->middleware('isDemo');

Route::get('cookie-policy', [PolicyController::class, 'cookiePolicy'])->name('admin.cookie-policy');
Route::post('cookie-policy', [PolicyController::class, 'cookiePolicyStore'])->name('admin.cookie-policy.store')->middleware('isDemo');
