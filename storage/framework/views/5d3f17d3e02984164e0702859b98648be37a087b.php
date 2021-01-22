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

        <h1>Dashboard</h1>



    </div>

    <div class="separator-breadcrumb border-top"></div>

</section>

<!-- /.content -->

<section class="content">

    <div class="row">

        <div class="col-md-6 col-xl-3 col-12 mb-20">

            <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Add-Cart im-icon-set float-right bg-primary"></i>

                <h3><?php echo e($num_gym); ?></h3>

                <p>Number of Gyms</p>

            </div>

        </div>



        <div class="col-md-6 col-xl-3 col-12  mb-20">

            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>

                <h3><?php echo e($num_tra); ?></h3>

                <p>Personal Trainers</p>

            </div>

        </div>



        <div class="col-md-6 col-xl-3 col-12  mb-20">

            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>

                <h3><?php echo e($num_touri); ?></h3>

                <p>Tourist Passes</p>

            </div>

        </div>





        <div class="col-md-6 col-xl-3 col-12  mb-20">

            <div class="bg-white dashboard-col pl-15 pb-15 pt-15">

                <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>

                <h3><?php echo e($num_memship); ?></h3>

                <p>Membership Plans</p>

                </p>

            </div>

        </div>

    </div>





    <div class="row">

        <div class="col-xl-12 col-12 mt-20 ">

            <div class="bg-white dashboard-col">

                <h5 class="card-header">New Registered Users</h5>

                

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>

                            <tr>

                                <th scope="col">Name</th>

                                <th scope="col">Picture</th>

                                <th scope="col">Email Address</th>

                                <th scope="col">Web site</th>

                                <th scope="col">Role</th>

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

    </div>

    

</section>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>

<!--   page level js ----------->

<script language="javascript" type="text/javascript" src="<?php echo e(asset('vendors/chartjs/js/Chart.js')); ?>"></script>

<script src="<?php echo e(asset('js/pages/dashboard.js')); ?>"></script>



<!-- end of page level js -->

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/admin/dash.blade.php ENDPATH**/ ?>