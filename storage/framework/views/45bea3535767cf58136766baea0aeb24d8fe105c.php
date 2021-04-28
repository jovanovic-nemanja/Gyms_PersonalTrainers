<?php $__env->startSection('title'); ?>
Dashboard ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .custom-control{
        padding-left: 0px!important;
    }

    .component-card_7{
        width:9rem;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Dashboard</h4>
                                </div>
                            </div>
                        </div>
                       
                        <div class="widget-content widget-content-area">

                            <div class="row">

                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text"><?php echo e($num_gym); ?></h5>
                                            <h6 class="rating-count">Number of Gyms</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text"><?php echo e($num_tra); ?></h5>
                                            <h6 class="rating-count">Personal Trainers</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text"><?php echo e($num_touri); ?></h5>
                                            <h6 class="rating-count">Tourist Passes</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text"><?php echo e($num_memship); ?></h5>
                                            <h6 class="rating-count">Membership Plans</h6>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="table-responsive mt-3">
                                <table class="table table-bordered mb-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Picture</th>
                                            <th>Email Address</th>
                                            <th>Web site</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($temp->name); ?></td>

                                            <?php if($temp->avatar): ?>

                                            <td><img src="<?php echo e(asset($temp->avatar)); ?>" alt="image missing"

                                                    class="rounded-circle img-size"></td>

                                            <?php else: ?>

                                            <td><img src="<?php echo e(asset('img/authors/user.jpg')); ?>" alt="image missing"

                                                class="rounded-circle img-size"></td>

                                            <?php endif; ?>

                                             <td><?php echo e($temp->email); ?></td>

                                            <td><?php echo e($temp->website); ?></td>

                                            <?php if($temp->role == 2): ?>

                                            <td><span class="badge badge-success float-left">Gym</span></td>

                                            <?php elseif($temp->role == 3): ?> <td><span class="badge badge-danger float-left">Personal</span></td>

                                            <?php else: ?> <td><span class="badge badge-primary float-left">Administrator</span></td>
                    
                                            <?php endif; ?>

                                        </tr>
                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            </div>

           
            
        <!-- </div> -->
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/vendor.gymscanner.com/resources/views/admin/dash.blade.php ENDPATH**/ ?>