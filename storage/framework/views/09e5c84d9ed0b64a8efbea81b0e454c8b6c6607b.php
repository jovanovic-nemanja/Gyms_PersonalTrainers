

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
        <!-- document-->
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                        DOCUMENT UPLOAD
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.update_document')); ?>" method="post" enctype="multipart/form-data"  class="dropzone" id="dropzone">
                        <?php echo csrf_field(); ?>
                        <input type="hidden"  name="userid" value=<?php echo e($id); ?>>
                        <!-- upload document -->
                        <div class="form-group pad-top40">
                            <div class="row">
                                <label for="inputUsername3" class="col-lg-12 control-label">
                                    
                                </label>
                                <div class="col-md-9">
                               
                                </div>
                            </div>
                        </div>
                    </form>
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
<!-- end of page level js -->

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            // acceptedFiles: ".jpeg,.jpg,.png,.gif",
	        dictDefaultMessage: "<h5>Select files here to upload</h5> <br><span>( file type:image, pdf )</span>",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '<?php echo e(route("admin.document_delete")); ?>',
                    data: {
                        filename: name,
                        user_id: <?php echo e($id); ?>

                        },
                    success: function (data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function (file, response) {
                // console.log(response);
            },
            error: function (file, response) {
                return (ref = file.previewElement) != null ?
                    ref.removeChild(file.previewElement) : void 0;
                // alert();
            }
        };
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/admin/document/document_edit.blade.php ENDPATH**/ ?>