

<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Application Settings')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('settings.meta.index')); ?>"><?php echo e(__('Meta Management')); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__(@$title)); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <?php echo $__env->make('admin.application_settings.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="email-inbox__area form-horizontal__item bg-style bg-style admin-dashboard-meta-settings">
                        <div class="item-top mb-30"><h2><?php echo e(__(@$title) . ' - ' . $meta->page_name); ?></h2></div>
                        <form action="<?php echo e(route('settings.meta.update', [$meta->uuid])); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="input__group mb-25 row">
                                <label for="meta_title" class="col-lg-3 text-lg-right text-black mb-2"> <?php echo e(__('Meta Title')); ?> </label>
                                <div class="col-lg-9">
                                    <textarea name="meta_title" id="meta_title" class="form-control" rows="5" required><?php echo e($meta->meta_title); ?></textarea>
                                </div>
                            </div>

                            <div class="input__group mb-25 row">
                                <label for="meta_description" class="col-lg-3 text-lg-right text-black mb-2"> <?php echo e(__('Meta Description')); ?> </label>
                                <div class="col-lg-9">
                                    <textarea name="meta_description" id="meta_description" rows="5" class="form-control" required><?php echo e($meta->meta_description); ?></textarea>
                                </div>
                            </div>

                            <div class="input__group mb-25 row">
                                <label for="meta_keyword" class="col-lg-3 text-lg-right text-black mb-2"> <?php echo e(__('Meta Keywords')); ?> (<?php echo e(__('Separate with commas')); ?>)</label>
                                <div class="col-lg-9">
                                    <textarea name="meta_keyword" id="meta_keyword" rows="5" class="form-control"><?php echo e($meta->meta_keyword); ?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="input__group general-settings-btn">
                                        <div class="float-right">
                                            <?php echo $__env->make('layouts.element.form.update-button', [], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customweb/public_html/lana.customweb.digital/resources/views/admin/application_settings/meta_manage/edit.blade.php ENDPATH**/ ?>