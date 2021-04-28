<?php $__env->startSection('title'); ?>
Documents ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .custom-control{
        padding-left: 0px!important;
    }
    .dropzone{
        border: 2px dotted rgba(0,0,0,0.3);
        background: #fafafa!important;
    }
    .dropzone .dz-message 
    {
        margin:0px!important;
    }
</style>

        <!--<div class="container"> -->

            <div class="row layout-top-spacing w-100">

                <!-- <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing"> -->
                    <div class="statbox widget box box-shadow w-100">
                       
                        <div class="widget-header">                                
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4 style="font-size: 26px;color: #393939;font-weight: 600;font-family: "Nunito";">Document Upload</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form  action="<?php echo e(route('upload_document')); ?>" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">
                                    <?php if(auth()->user()->role==2): ?>

                                        Please upload your Gym License :

                                    <?php elseif(auth()->user()->role==3): ?>

                                        Please upload your Personal ID :

                                    <?php endif; ?>
                                    </label>
                                     <!--<a href="<?php echo e(($document)?URL::asset('upload/documents/'.$document->document_path):''); ?>" target="_blank"><?php echo e(($document)?$document->document_path:'No document uploaded'); ?></a>-->
                                </div>
                                
                            </form>
                            
                        </div>
                        
                    </div>
                <!-- </div> -->
                
           
            

           
            
        <!-- </div> -->
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
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

	        dictDefaultMessage: "<i class='far fa-image' style='font-size: 50px;margin-bottom: 15px;color: #393939;font-weight: 600;font-family: 'Nunito';'></i><h5 style='font-size: 26px;color: #393939;font-weight: 600;font-family: 'Nunito';'>Select files here to upload</h5> <br><span>( File type: PDF,PNG,JPG,JPEG )</span>",

            addRemoveLinks: true,

            timeout: 50000,

            removedfile: function (file) {

                var name = file.upload.filename;

                $.ajax({

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

                    },

                    type: 'POST',

                    url: '<?php echo e(route("document_delete")); ?>',

                    data: {filename: name},

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

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/vendor.gymscanner.com/resources/views/user/document.blade.php ENDPATH**/ ?>