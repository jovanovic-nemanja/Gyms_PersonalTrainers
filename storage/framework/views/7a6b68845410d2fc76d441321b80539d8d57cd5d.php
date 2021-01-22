

<?php $__env->startSection('title'); ?>
Advanced Data Tables ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<!-- page vendors -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/datatables/css/dataTables.bootstrap4.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('vendors/datatables/css/buttons.bootstrap4.min.css')); ?>">




<!--end of page vendors -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Users Table</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>


</section>

<!-- content start-->
<section class="content">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="card panel-info filterable">
                <div class="card-header bg-secondary text-white">
                    <h3 class="card-title d-inline">
                        Users
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>

                <div class="card-body table-responsive-lg table-responsive-md table-responsive-sm">
                    <table class="table  table-bordered" id="table1" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>role</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($temp->role!=1): ?>
                            <tr>
                                <td><?php echo e($temp->name); ?></td>
                                <td><?php echo e($temp->email); ?></td>
                                <td><?php echo e($temp->website); ?></td>
                                <td> 
                                    <?php if($temp->role == 2): ?> Gym
                                    <?php else: ?> Personal
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?php echo e(route('admin.user_edit',$temp->id)); ?>" class="mr-3"> <i class="im im-icon-Pencil"></i> </a>
                                    <a href="<?php echo e(route('admin.user_change_pass',$temp->id)); ?>" class="mr-3"> <i class="fas fa-key"></i> </a>
                                    <?php if($temp->role == 2): ?> <a href="<?php echo e(route('admin.gym_delete', $temp->id)); ?>"> <i class="fa fa-trash "></i> </a></td>
                                    <?php else: ?> <a href="<?php echo e(route('admin.user_delete', $temp->id)); ?>"> <i class="fa fa-trash "></i> </a></td>
                                    <?php endif; ?>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>










</section>
<!-- content end-->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
<!--   page level js ----------->
<script src="<?php echo e(asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/dataTables.buttons.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/buttons.bootstrap4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/buttons.html5.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/buttons.print.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/pdfmake.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('vendors/datatables/js/vfs_fonts.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/pages/advanced_table.js')); ?>"></script>
<!-- end of page level js -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/admin/user_table.blade.php ENDPATH**/ ?>