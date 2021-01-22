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
        <h1>Create Membership Plans</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <!-- membership-->
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                       MEMBERSHIP
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('membership')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-body">
                                <div class="form-group pad-top40">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            Price
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Dollar"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Price" id="inputUsername3" 
                                                name="price" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                    <label for="pricelabel" class="col-md-2 control-label">
                                        Duration
                                    </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Calendar-4"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Duration" id="inputUsername3" 
                                                name="duration" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            Service
                                        </label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="im im-icon-Dollar"></i></span>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Service" id="inputUsername3" 
                                                name="service" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            Additional Perk
                                        </label>
                                        <div class="col-md-5">
                                            
                                                
                                                <textarea class="form-control resize_vertical" id="message1" name="perk" placeholder="Additional Perk" rows="3" required></textarea>
                                                
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="pricelabel" class="col-md-2 control-label">
                                            App Exclusive
                                        </label>
                                        <div class="col-md-5">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="incustomCheck19" name="app" value="app">
                                                <label class="custom-control-label" for="incustomCheck19">App</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-success">Publish Offer</button>
                        </div>
                    </form>
                    <div class="row">
                        
                        <?php $i = 0;?>
                        <?php if($membership): ?>
                            <?php $__currentLoopData = $membership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++;?>
                                <div class="col-lg-3">
                                    <?php if($temp->app=="app"): ?>
                                        <?php $i--;?>
                                        <h5 style="text-align:center;">App exclusive</h5>
                                    <?php else: ?>
                                        <h5 style="text-align:center;">PLAN <?php echo e($i); ?></h5>
                                    <?php endif; ?>
                                    <p style="text-align:center; color:black;background-color:gray;"> Price:   <?php echo e($temp->price); ?></p>
                                    <p style="text-align:center;background-color:black;color:white;">Duration: <?php echo e($temp->duration); ?></p>
                                    <p style="text-align:center;background-color:lightblue;color:black;">Service: <?php echo e($temp->service); ?></p>
                                    <p style="text-align:center;background-color:lightgreen;color:black;">Additional Perk: <?php echo e($temp->perk); ?></p>
                                    <a href="<?php echo e(route('membership.delete',$temp->id)); ?>" style="color:black;">
                                    <button type="button" class="btn btn-block btn-sm btn-warning">Delete</button></a>
                                </div>
                                <div class="col-1"></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <div class="col-lg-1"></div>
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

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/user/membership.blade.php ENDPATH**/ ?>