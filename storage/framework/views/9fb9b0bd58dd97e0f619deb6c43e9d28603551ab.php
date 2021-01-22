<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
         Gymscanner.com
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('img/circles.png')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('fonts/iconmind.css')); ?>">

    <!-- global css -->
    <link type="text/css" href="<?php echo e(asset('css/app1.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/custom1.css')); ?>">
    <!-- dropzone js and css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <style>
        #demo {
            position: relative;

            overflow: auto;
        }
        /* avater upload */
        .picture-container{
            position: relative;
            cursor: pointer;
            text-align: center;
        }
        .picture{
            width: 106px;
            height: 106px;
            background-color: #999999;
            border: 4px solid #CCCCCC;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 0px auto;
            overflow: hidden;
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
        }
        .picture:hover{
            border-color: #2ca8ff;
        }
        .content.ct-wizard-green .picture:hover{
            border-color: #05ae0e;
        }
        .content.ct-wizard-blue .picture:hover{
            border-color: #3472f7;
        }
        .content.ct-wizard-orange .picture:hover{
            border-color: #ff9500;
        }
        .content.ct-wizard-red .picture:hover{
            border-color: #ff3b30;
        }
        .picture input[type="file"] {
            cursor: pointer;
            display: block;
            height: 100%;
            left: 0;
            opacity: 0 !important;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .picture-src{
            width: 100%;
            
        }
        .dropzone {
            border:2px white;
        }
        
        
    </style>
    <!-- end of global css -->
    
    <!-- vendors  css -->
    <?php echo $__env->yieldContent('header_styles'); ?>
</head>

<body>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
            <a href="javascript:void(0)" class="ml-100 toggle-right d-xl-none d-lg-block">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo e(asset('img/images/toggle.png')); ?>" alt="logo" />


            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->

            <div class="navbar-right ml-auto">
                <ul class="navbar-nav nav">

                    
                <li class="dropdown notifications-menu nav-item dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                        id="navbarDropdown">
                        <?php if(@$avatar_img): ?>
                        <img src="<?php echo e(asset($avatar_img)); ?>" alt="img"
                        class="rounded-circle img-fluid pull-left" style="width: 30px"/>
                        <?php else: ?>
                        <i class="im im-icon-Boy fs-16"></i>
                        <?php endif; ?>


                    </a>
                    <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">
                        <li class="dropdown-footer">
                            <span style="margin-left: 15px;"><?php echo strtoupper($uuid); ?></span>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="get" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown-->
                
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper">

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-aside">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar metismenu sidebar-res">
                <?php echo $__env->make("layouts/leftmenu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>


        <!--            right side bar ----------->
        <aside class="right-aside">
            <?php echo $__env->yieldContent('content'); ?>
        </aside>
    </div>
    <!-- ./wrapper -->
    <!-- Footer end -->
    <!-- SCRIPTS -->
    <!-- global js -->
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- Start of vendor js -->
    <?php echo $__env->yieldContent('footer_scripts'); ?>

    <script src="<?php echo e(asset('vendors/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script>
        //avater upload
        $(document).ready(function(){
        // Prepare the preview for profile picture
            $("#wizard-picture").change(function(){
                readURL(this);
            });
        });
        function readURL(input) {
            var _URL = window.URL || window.webkitURL;
            if (input.files && input.files[0]) {
                img = new Image();
                var objectUrl = _URL.createObjectURL(input.files[0]);
                img.onload = function () {
                    if (img.width == 512 && img.height == 512) {
                        $('#wizardPicturePreview').attr('src', objectUrl).fadeIn('slow');
                        document.getElementById('avatar').click();
                    } else {
                        alert("Image size must be as like as 512px*512px");
                        $(input).val("");
                    }
                    _URL.revokeObjectURL(objectUrl);
                };
                img.src = objectUrl;
            }
        }
    </script>
</body>

</html>
<?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/layouts/default.blade.php ENDPATH**/ ?>