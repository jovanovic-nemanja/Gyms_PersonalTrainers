<?php $__env->startSection('title'); ?>
Notify Gymscanner ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .custom-control{
        padding-left: 0px!important;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Complete Your Profile</h4>
                                </div>
                            </div>
                        </div>
                       
                        <div class="widget-content widget-content-area">
                            <form method="post" enctype="multipart/form-data">

                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Profile</label>
                                    <?php if($profile): ?>
                                    <span style="color: #0ae60a;"><i data-feather="check-circle"></i></span>
                                    <?php else: ?>
                                    <span style="color: red;"><i data-feather="x-circle"></i></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">My Branding</label>
                                    <span style="color: red;"><i data-feather="x-circle"></i></span>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Membership</label>
                                    <?php if($membership): ?>
                                    <span style="color: #0ae60a;"><i data-feather="check-circle"></i></span>
                                    <?php else: ?>
                                    <span style="color: red;"><i data-feather="x-circle"></i></span>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if(auth()->user()->role==2): ?>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Tourist Pass </label>
                                     <?php if($touristpass): ?>
                                   <span style="color: #0ae60a;"><i data-feather="check-circle"></i></span>
                                    <?php else: ?>
                                    <span style="color: red;"><i data-feather="x-circle"></i></span>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>

                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Bank Account </label>
                                    <?php if($bank): ?>
                                   <span style="color: #0ae60a;"><i data-feather="check-circle"></i></span>
                                    <?php else: ?>
                                    <span style="color: red;"><i data-feather="x-circle"></i></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="formGroupExampleInput">Legal Documents </label>
                                     <?php if($document): ?>
                                  <span style="color: #0ae60a;"><i data-feather="check-circle"></i></span>
                                    <?php else: ?>
                                    <span style="color: red;"><i data-feather="x-circle"></i></span>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if(auth()->user()->role==3): ?>
                                    <?php if($document&&$bank&&$membership&&$profile): ?>

                                    <a href="<?php echo e(route("send_notification_admin")); ?>" class="btn btn-primary">Submit</a>

                                    <?php endif; ?>
                                <?php endif; ?>
                                <?php if(auth()->user()->role==2): ?>
                                    <?php if($document&&$bank&&$membership&&$profile&&$touristpass): ?>

                                    <a href="<?php echo e(route("send_notification_admin")); ?>" class="btn btn-primary">Submit</a>

                                    <?php endif; ?>
                                <?php endif; ?>
                                
                            </form>
                           
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            <!-- </div> >

           
            
        <!-- </div> -->
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/vendor.gymscanner.com/resources/views/user/submit_admin.blade.php ENDPATH**/ ?>