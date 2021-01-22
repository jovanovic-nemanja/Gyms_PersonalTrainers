<!DOCTYPE html>

<html lang="en-US">



<head>

    <title>Gymscanner|Email Verification</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo e(asset('img/circles.png')); ?>" />

    <!--page level css -->

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset('css/auth.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://edge.avangate.net/static/css-cpanel4avangate-c1213e0d984916369196eb6c2b0d6ed4-V104/20201126143128.css">

    <!--end of page level css-->

</head>



<body id="sign-up" class="login_backimg" onload="change_img()">

    <div class="container mt-3rem">

        <div class="card ">

            <div class="row ">

                

                    <div class="row card-align bg-white" id="card_name">

                        <div class="col-md-6  signup-form">

                            <div class="card-header border-bottom-0">

                                <div class="row">

                                    <div class="col-md-12">

                                        <img  class="title img-responsive pt-4" src="<?php echo e(asset('./images/gymscanner logo.png')); ?>" alt="" width="60%" />

                                    </div>

                                </div>

                            </div>

                            <div class="card-body pt-0">

                                <div class="row">

                                    <div class="col-md-12 signup-header-text" style="margin-top:21px;">

                                        <h3 class="active fs-18">Thank You For Verification</h3>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-12">

                                       

                                        <form class="d-inline" method="POST" action="<?php echo e(route('Logout')); ?>">

                                            <?php echo csrf_field(); ?>

                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline mt-15"><?php echo e(__('Please Go For Login')); ?></button>.

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6 signup-form">

                            <img src="<?php echo e(asset('./login-pic.png')); ?>" class="img-responsive my-1 pt-3 mr-1" style="width:102%; height:87%;">
			    <p style="text-align: end;font-style: italic;font-size: small;">Viktoria Kharlap, Athens, Greece</p>
                        </div>

                    </div>

                </div>

        </div>

    </div>

    <script>

        function changetype(){

            var pass = document.getElementById("password");

            var pass_type = pass.getAttribute("type");

            if(pass_type == "password"){

                pass.setAttribute("type", "text");

            }else{

                pass.setAttribute("type", "password");

            }

        }

        function change_img(){

            var img_width = screen.width;

            if(img_width<500){

                document.getElementById("card_name").setAttribute("class","row bg-white");

                document.getElementById("side_img").setAttribute("display","none");

            }

        }

    </script>

    <!-- begining of page level js -->

    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>



    <script src="<?php echo e(asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo e(asset('vendors/jquery.backstretch/js/jquery.backstretch.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/pages/register.js')); ?>"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="captcha/validator.js"></script>

    <script src="captcha/contact.js"></script>



</body>



</html>

<?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/thanks.blade.php ENDPATH**/ ?>