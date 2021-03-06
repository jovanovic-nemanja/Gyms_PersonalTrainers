<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Gymscanner|Vendor Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('img/circles.png')); ?>" />
    <!--page level css -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/auth.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://edge.avangate.net/static/css-cpanel4avangate-c1213e0d984916369196eb6c2b0d6ed4-V104/20201126143128.css">
    <!--end of page level css-->
    <style>
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 12px;
            position: relative;
            z-index: 99;
        }
    </style>
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
                                        <h3 class="active fs-18">Sign in to your account</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="<?php echo e(route('login')); ?>" id="authentication" method="post"
                                            class="sign_validator">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-addon" id="email-addon"> <div class="icon icon-user"></div></span>
                                                    <input name="email" type="email" id="email" value="" class="form-control no-left-border" placeholder="Username" aria-describedby="email-addon" value="<?php echo e(old('email')); ?>" required>
                                                    
                                                </div>
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="about-my-username">
                                                <div class="username-info">
                                                <a href="#">
                                                    <span class="caret username-info-toggle-action"></span>
                                                    <span class="username-info-toggle-action">What is my <strong>username</strong>?</span>
                                                </a>
                                                </div>
                                                <div class="username-text">
                                                    <p> If your account has been upgraded from the previous 2Checkout Admin Area, please login using the same <span>username</span>. Otherwise, please log in using your account <span>email address.</span> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mt-1">
                                                    <span class="input-group-addon" id="pass-addon"><div class="icon icon-key"></div></span>
                                                    <input name="password" type="password" id="password" size="40" class="form-control no-left-border" placeholder="Password" aria-describedby="pass-addon" required>
                                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="changetype()"></span>
                                                   
                                                </div>
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <?php if($msg = Session::get('message')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($msg); ?></strong>
                                                </span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group mt-1">
                                                    
                                                    <div class="g-recaptcha" data-sitekey="6LdZ5wcaAAAAAOrSi3zsrgtiyFT38MGSUmGl20FG" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                    <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="submit" value="Log In" class="btn btn-primary btn-block" />
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-sm-12 mt-2">
                                                <p class="recover_password mb-0"><a href="<?php echo e(route('password.request')); ?>">Forgot your password?</a></p>
                                                <p class="recover_password"><a href="<?php echo e(route('register')); ?>">Not  Gymscanner.com client, yet?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 signup-form">
                            <img src="<?php echo e(asset('images/login-pic.png')); ?>" class="img-responsive my-1 pt-3 mr-1">
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
<?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/auth/login.blade.php ENDPATH**/ ?>