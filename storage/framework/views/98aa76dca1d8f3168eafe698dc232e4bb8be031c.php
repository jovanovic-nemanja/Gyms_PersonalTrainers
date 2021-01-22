<?php $__env->startSection('title'); ?>
Dashboard ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<!-- page vendors -->
<link href="<?php echo e(asset('css/pages.css')); ?>" rel="stylesheet">


<!--end of page vendors -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>My Profile</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <!-- membership-->
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                       Bank
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.update_bank')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden"  name="userid" value=<?php echo e($id); ?>>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Bank Name
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="bankname"
                                            placeholder=" Bank Name" name="bank_name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Account Holder Name
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="accountname"
                                            placeholder="Account Holder Name" name="holder_name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Account Number
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="accountnumber"
                                            placeholder=" Account Number" name="bank_number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    Bank Swift Code
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="bankswiftcode"
                                            placeholder="Bank Swift Code" name="swift_code" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputAddress4" class="col-md-3 control-label">
                                    IBAN
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="im im-icon-Location-2"></i>
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" id="iban"
                                            placeholder="IBAN" name="iban" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                    <div class="row">
                        <?php $i = 0;?>
                        <?php if($bank): ?>
                            <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++;?>
                                <div class="col-md-4">
                                    <h5 style="text-align:center;">Bank <?php echo e($i); ?></h5>
                                    <p style="text-align:center; color:black;background-color:gray;">Bank Name: <?php echo e($temp->bank_name); ?></p>
                                    <p style="text-align:center;background-color:gray;color:black;">Account Holder Name: <?php echo e($temp->holder_name); ?></p>
                                    <p style="text-align:center;background-color:gray;color:black;">Account Number: <?php echo e($temp->bank_number); ?></p>
                                    <p style="text-align:center;background-color:gray;color:black;"> Bank Swift Code: <?php echo e($temp->swift_code); ?></p>
                                    <p style="text-align:center;background-color:gray;color:black;">IBAN: <?php echo e($temp->iban); ?></p>
                                    <a href="<?php echo e(route('admin.bank_delete',$temp->id)); ?>" style="color:black;">
                                        <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <div class="col-lg-2 col-md-4"></div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="<?php echo e(asset('vendors/chartjs/js/Chart.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/dashboard.js')); ?>"></script>
<script>
    function avatar(){
        alert("hello");
        document.getElementById("avatar").click();
    }
</script>
<!-- end of page level js -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/admin/bank/bank_edit.blade.php ENDPATH**/ ?>