<?php $__env->startSection('title'); ?>
Dashboard ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<!-- page vendors -->
<link href="<?php echo e(asset('css/pages.css')); ?>" rel="stylesheet">
<style>
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: 10px;
        position: relative;
        z-index: 50;
    }
</style>


<!--end of page vendors -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Complete Your Profile</h1>

    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>
<!-- /.content -->
<section class="content">
    <div class="row">
        <!-- membership-->
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-16">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                       Notify Gymscanner
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <label for="inputCurrentPass" class="col-md-12 control-label">
                                    Profile  
                                        <?php if($profile): ?>
                                        <span toggle="#currentPass" class="fa fa fa-check-circle" style="color: #0ae60a;"></span>
                                        <?php else: ?>
                                        <span toggle="#currentPass" class="im im-icon-Close" style="color:red"></span>
                                        <?php endif; ?>
                                </label>
                            </div>
                            <div class="row">
                                <label for="inputCurrentPass" class="col-md-12 control-label">
                                    Membership  
                                    <?php if($membership): ?>
                                        <span toggle="#currentPass" class="fa fa fa-check-circle" style="color: #0ae60a;"></span>
                                        <?php else: ?>
                                        <span toggle="#currentPass" class="im im-icon-Close" style="color:red"></span>
                                        <?php endif; ?>
                                </label>
                            </div>
                            <?php if(auth()->user()->role==2): ?>
                            <div class="row">
                                <label for="inputCurrentPass" class="col-md-12 control-label">
                                    Tourist Pass  
                                    <?php if($touristpass): ?>
                                    <span toggle="#currentPass" class="fa fa fa-check-circle" style="color: #0ae60a;"></span>
                                    <?php else: ?>
                                    <span toggle="#currentPass" class="im im-icon-Close" style="color:red"></span>
                                    <?php endif; ?>
                                </label>
                            </div>
                            <?php endif; ?>
                            <div class="row">
                                <label for="inputCurrentPass" class="col-md-12 control-label">
                                    Bank Account  
                                    <?php if($bank): ?>
                                    <span toggle="#currentPass" class="fa fa fa-check-circle" style="color: #0ae60a;"></span>
                                    <?php else: ?>
                                    <span toggle="#currentPass" class="im im-icon-Close" style="color:red"></span>
                                    <?php endif; ?>
                                </label>
                            </div>
                            <div class="row">
                                <label for="inputCurrentPass" class="col-md-12 control-label">
                                    Legal Documents  
                                    <?php if($document): ?>
                                    <span toggle="#currentPass" class="fa fa fa-check-circle" style="color: #0ae60a;"></span>
                                    <?php else: ?>
                                    <span toggle="#currentPass" class="im im-icon-Close" style="color:red"></span>
                                    <?php endif; ?>
                                </label>
                            </div>
                        </div>
			<?php if(auth()->user()->role==3): ?>
                        <?php if($document&&$bank&&$membership&&$profile): ?>
                        <div class="form-actions">
                            <a href="<?php echo e(route("send_notification_admin")); ?>" class="btn btn-sm btn-primary">Submit</a>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
			<?php if(auth()->user()->role==2): ?>
                        <?php if($document&&$bank&&$membership&&$profile&&$touristpass): ?>
                        <div class="form-actions">
                            <a href="<?php echo e(route("send_notification_admin")); ?>" class="btn btn-sm btn-primary">Submit</a>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                    </form>
                    <!-- Modal -->
                    <button type="button" class="btn btn-sm btn-primary" hidden data-toggle="modal" data-target="#exampleModal" id="showmodal">Submit</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header mt-0">
                               <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body" id="modal_body">
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-primary" data-dismiss="modal">OK
                               </button>
                               
                           </div>
                       </div>
                   </div>
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
<!-- end of page level js -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/user/submit_admin.blade.php ENDPATH**/ ?>