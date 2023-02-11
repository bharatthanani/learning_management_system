

<?php $__env->startSection('content'); ?>
    <!-- Page content area start -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2><?php echo e(__('Translate language')); ?></h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('language.index')); ?>"><?php echo e(__('Language Settings')); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Translate Language')); ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row admin-dashboard-translate-your-language-page">
                <div class="col-md-12">
                    <div class="customers__area bg-style mb-30">
                        <button class="btn btn-success btn-sm mb-2" type="button" data-bs-toggle="modal" data-bs-target="#add-todo-modal">
                            <i class="fa fa-plus"></i> <?php echo e(__('Import Keywords')); ?>

                        </button>
                        <form action="<?php echo e(route('update.translate', [$language->id])); ?>" method="post" enctype="multipart/form-data" data-parsley-validate>

                            <div class="item-title d-flex justify-content-between">
                                <h2> Translate Your Language (English => <?php echo e($language->language); ?> ) </h2>
                                <div>
                                <button class="btn btn-primary addmore"> <i class="fa fa-plus"></i>
                                    <?php echo e(__('Add More')); ?></button>
                                <button type="submit" class="btn btn-primary"><?php echo e(__('Update Language')); ?></button>
                                </div>
                            </div>
                            <div class="card-body">

                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <table class="row-border data-table-filter table-style">
                                        <thead>
                                        <tr>
                                            <th><?php echo e(__('Key')); ?></th>
                                            <th><?php echo e(__('Value')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody id="append">
                                        <?php $__currentLoopData = $translators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <textarea type="text" name="key[]" class="form-control"><?php echo $key; ?></textarea>
                                                </td>
                                                <td>
                                                    <textarea type="text" name="value[]" class="form-control"><?php echo $value; ?></textarea>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="row justify-content-end">
                                        <div class="col-md-6">
                                            <div class="form-group float-end">
                                                <button type="submit" class="btn btn-blue"><?php echo e(__('Update')); ?></button>
                                            </div>
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

    <!-- Add Modal section start -->
    <div class="modal fade" id="add-todo-modal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Import Language')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('language.import')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="current" value="<?php echo e($language->iso_code); ?>">
                    <div class="modal-body">
                        <div class="mb-30">
                            <span class="text-danger text-center"><?php echo e(__('Note: If you import keywords, your current keywords will be deleted and replaced by the imported keywords.')); ?></span>
                        </div>
                        <div class="input__group mb-30">
                            <label for="status" class="text-lg-right text-black"> <?php echo e(__('Language')); ?> </label>
                            <select name="import" class="custom-select export" id="inputGroupSelect02">
                                <option selected> <?php echo e(__('Select Option')); ?> </option>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $la): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($la->iso_code); ?>"><?php echo e(__($la->language)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-purple"><?php echo e(__('Import')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add Modal section end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            let i = <?php echo e($translators != null ? count($translators) : 0); ?>;
            $('.addmore').on('click', function (e) {
                e.preventDefault()
                let html = `
                        <tr>
                            <td>
                                <textarea type="text" name="key[]" class="form-control"></textarea>
                            </td>
                            <td>
                                <textarea type="text" name="value[]" class="form-control"></textarea>
                            </td>
                        </tr>
            `;
                i++;
                $('#append').prepend(html);
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Nabu\resources\views/admin/language/translate.blade.php ENDPATH**/ ?>