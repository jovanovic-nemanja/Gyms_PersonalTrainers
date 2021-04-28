<?php $__env->startSection('title'); ?>
Bank Account ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<!-- page vendors -->
<link href="<?php echo e(asset('css/pages.css')); ?>" rel="stylesheet">


<!--end of page vendors -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<!-- /.content -->
        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Bank Acount Details</h4>
                                </div>
                            </div>
                            <?php if(Session::get('success')): ?>
                  
                                <div class="row">
                                    <div class="col-md-12 mt-1">
                                        
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo e(Session::get('success')); ?>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            
                                    </div>
                                </div>
                            
                                <?php endif; ?>
                                
                        </div>                     
                        <div class="widget-content widget-content-area">
                            <form action="<?php echo e(route('personal_profile.bank.update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Bank Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Bank Name" name="bank_name" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Account Holder Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Account holder name" name="holder_name" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Account Number</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Account number" name="bank_number" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Bank Swift Code</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Bank swift code" name="swift_code" required>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">IBAN</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="IBAN" name="iban" required>
                                </div>

                                <input type="submit" name="time" class="btn btn-primary" value="Save Changes">
                                
                            </form>
                            <hr>
                            <div class="row mt-3">
                                <?php $i = 0;?>
                                <?php if($bank): ?>
                                <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++;?>
                                <div class="col-xl-4 col-lg-6 col-sm-6 col-xs-12 mb-3">
                                    
                                    <div class="card component-card_1" style="width: 100%!important;">
                                        <div class="card-body">
                                            
                                           <h5 class="card-title">Bank <?php echo e($i); ?></h5>
                                            <p style="text-align:center; color:black;background-color:gray;">Bank Name: <?php echo e($temp->bank_name); ?></p>
                                            <p style="text-align:center;background-color:gray;color:black;">Account Holder Name: <?php echo e($temp->holder_name); ?></p>
                                            <p style="text-align:center;background-color:gray;color:black;">Account Number: <?php echo e($temp->bank_number); ?></p>
                                            <p style="text-align:center;background-color:gray;color:black;"> Bank Swift Code: <?php echo e($temp->swift_code); ?></p>
                                            <p style="text-align:center;background-color:gray;color:black;">IBAN: <?php echo e($temp->iban); ?></p>
                                            <a href="<?php echo e(route('personal_profile.bank.delete',$temp->id)); ?>" style="color:black;">
                                            <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
           <!-- </div>-->

           

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

<?php echo $__env->make('layouts.personal_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/vendor.gymscanner.com/resources/views/personal/bank.blade.php ENDPATH**/ ?>