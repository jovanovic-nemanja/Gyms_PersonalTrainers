

<?php $__env->startSection('title'); ?>
Edit Membership Plans ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
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
                                    <h4>Edit Membership Plan</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form  action="<?php echo e(route('update_personal_membership')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($membership->id); ?>">
                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">MemberShip Type<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: 12 sessions" name="service" required  value="<?php echo e($membership->service); ?>">
                                    </div>

                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Duration<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: 30 days" name="duration" required value="<?php echo e($membership->duration); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-9">

                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Regular Price<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"  placeholder="For example: USD $50" name="price" required value="<?php echo e($membership->price); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                                
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Currency</label>
                                        <select class="form-control" name="currency"  id="exampleFormControlSelect1" style=" font-size: 15px!important;color: #393939!important;font-weight: 400!important;font-family: "Nunito"; required>
                                                <option value="USD $" <?php echo e($membership->currency == 'USD $'?'selected':''); ?>>USD $</option>
                                                <option value="EURO €" <?php echo e($membership->currency == 'EURO €'?'selected':''); ?>>EURO €</option>
                                                <option value="KWD KD" <?php echo e($membership->currency == 'KWD KD'?'selected':''); ?>>KWD KD</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-sm-12">
                                                
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Discount (If you aren't offering any special discount, leave it empty)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="For example: USD $10" name="discount" value="<?php echo e($membership->discount); ?>">
                                    </div>

                                </div>
                                
                                <div class="col-sm-12">
                                                
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Additional Perk (If any)</label>
                                          <?php $perk = json_decode($membership->perk); ?>
                                                    
                                        <textarea rows="3" class="form-control" id="formGroupExampleInput" placeholder="For example: 1 session free&#13;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;Free Nutritional Guide&#10;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;4 zoom calls/month" name="perk"><?php foreach(@$perk as $key => $v){ if(!empty($v)){ echo $v; } } ?></textarea>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <label class="new-control new-checkbox checkbox-info" style="margin-left: 2px;">
                                        <input type="checkbox" class="new-control-input" name="featured" value="featured" style="width: 20px;height: 30px;border-radius: 3px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #ffffff;border: 1px solid #161616;vertical-align:middle;" <?php echo e($membership->featured !='none'?'checked':''); ?>>
                                        <span class="new-control-indicator"></span> <span style="margin-top: 5px;position: absolute;margin-left: 15px;">Set as Featured Plan</span>
                                    </label>
                                </div>      

                                <div class="col-lg-12">
                                    <label class="new-control new-checkbox checkbox-info" style="margin-left: 2px;">
                                        <input type="checkbox" class="new-control-input" name="app" value="app" style="width: 20px;height: 30px;border-radius: 3px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #ffffff;border: 1px solid #161616;vertical-align:middle;" <?php echo e($membership->app !='computer'?'checked':''); ?>>
                                        <span class="new-control-indicator"></span> <span style="margin-top: 5px;position: absolute;margin-left: 15px;">App Exclusive (This plan will be available on the Gymscanner mobile app only)</span>
                                    </label>
                                </div>                                          
                                <div class="col-lg-12">
                                        <input type="submit" name="time" class="btn btn-primary mt-2" value="Publish Offer">
                                </div>

                            </div>                            
                                
                            </form>
                   
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            

           
            
        <!-- </div> -->
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.personal_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/vendor.gymscanner.com/resources/views/personal/personal_membership_edit.blade.php ENDPATH**/ ?>