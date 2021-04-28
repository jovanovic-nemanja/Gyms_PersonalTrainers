<?php $__env->startSection('title'); ?>
Membership Plans ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .custom-control{
            padding-left: 0px!important;
        }
        .component-card_1 .card-title{
            margin-bottom:8px!important;
        }
        .component-card_1 .card-body {
            padding: 15px 0px;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
            opacity: 1;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 25rem;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            top: -1rem;
            left: 110%;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 100%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent black transparent transparent;
        }
        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>

    <div class="row layout-top-spacing w-100">
        <div class="statbox widget box box-shadow w-100">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Membership Plans</h4>
                    </div>
                </div>
                <?php if(Session::get('success')): ?>
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="widget-content widget-content-area">
                <form  action="<?php echo e(route('personal_membership')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="membership_plan_id" id="membership_plan_id" class="membership_plan_id" value="" />
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Membership Type<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="service" placeholder="For example: 12 sessions" name="service" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Duration<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="duration" placeholder="For example: 30 days" name="duration" required>
                                    </div>
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Regular Price<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="price" placeholder="For example: USD $50" name="price" required>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Currency</label>
                                        <select class="form-control" name="currency"  id="currency" style=" font-size: 15px!important;color: #393939!important;font-weight: 400!important;font-family: "Nunito"; required>
                                                <option value="USD $">USD $</option>
                                                <option value="EURO €">EURO €</option>
                                                <option value="KWD KD">KWD KD</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-sm-12">
                                    
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Discount (If you aren't offering any special discount, leave it empty)</label>
                                        <input type="text" class="form-control" id="discount" placeholder="For example: USD $10" name="discount">
                                    </div>

                                </div>

                                <div class="col-sm-12">
                                    
                                    <div class="form-group mb-4">
                                        <label for="formGroupExampleInput">Additional Perk (If any)</label>
                                        <textarea rows="3" class="form-control" id="perk" placeholder="For example: 1 session free&#13;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;Free Nutritional Guide&#10;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;4 zoom calls/month" name="perk"></textarea>
                                    </div>
                                </div>
                           
                                <div class="col-lg-12">
                                    <label class="new-control new-checkbox checkbox-info" style="margin-left: 2px;">
                                        <input type="checkbox" class="new-control-input" name="featured" value="featured" style="width: 20px; height: 30px; border-radius: 3px; filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1)); background-color: #ffffff;border: 1px solid #161616; vertical-align:middle;">
                                        <span class="new-control-indicator"></span> <span style="margin-top: 5px; margin-left: 15px;">Set as Featured Plan</span>
                                        
                                        <div class="tooltip">
                                            <i class="fa fa-question-circle"></i>&nbsp;&nbsp;
                                            <span class="tooltiptext">Featured Plans are displayed more prominently on the Gymscanner website and mobile app.</span>
                                        </div>
                                    </label>
                                </div>      

                                <div class="col-lg-12">
                                    <label class="new-control new-checkbox checkbox-info" style="margin-left: 2px;">
                                        <input type="checkbox" class="new-control-input" name="app" value="app" style="width: 20px;height: 30px;border-radius: 3px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: #ffffff;border: 1px solid #161616;vertical-align:middle;">
                                        <span class="new-control-indicator"></span> <span style="margin-top: 5px; margin-left: 15px;">App Exclusive</span>

                                        <div class="tooltip">
                                            <i class="fa fa-question-circle"></i>&nbsp;&nbsp;
                                            <span class="tooltiptext">Marking a plan as App Exclusive will only make it available on Gymscanner mobile apps and not on website.</span>
                                        </div>
                                    </label>
                                </div>                                          
                                <div class="col-lg-12">
                                     <input type="submit" name="time" class="btn btn-primary mt-2" value="Publish Offer">
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <?php $i = 0;?>
                                <?php if($membership): ?>
                                    <?php $__currentLoopData = $membership; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $i++;?>
                                        <div class="col-xl-4 col-lg-12 col-sm-12 col-xs-12 mb-3">
                                            
                                            <div class="card component-card_1" style="margin-top: 21px;">
                                                <?php if($temp->featured!="featured"): ?>
                                                    <?php $color = "#393939"; ?>
                                                <?php else: ?>
                                                    <?php $color = "#dc3545"; ?>
                                                <?php endif; ?>
                                                
                                                <div class="card-body" style="border-radius: 5px 5px 0px 0px;filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1));background-color: <?= $color ?>">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <?php if($temp->app=="app"): ?>
                                                                <?php $i--;?>
                                                                <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: Nunito;margin-bottom:8px!important;margin-top:10px;">App Exclusive</h5>
                                                            <?php else: ?>
                                                                <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: Nunito;margin-top:10px;">PLAN <?php echo e($i); ?></h5>
                                                            <?php endif; ?>
                                                            <h1 class="text-center" style="font-size: 34px;color: #eaeaea;font-weight: 600;font-family: "Nunito";"><?php echo e($temp->service); ?></h1>
                                                            <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: "Nunito";"><?php echo e($temp->duration); ?></h5>
                                                        </div>
                                                        <div class="col-lg-12 text-center">
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body" style="border-radius: 5px;background-color: #ffffff;padding: 15px 42px!important;">
                                                    <p style="text-align:center; color:#393939;margin-top:27px;"> <?php echo e($temp->service); ?></p><hr style="border-top: 3px solid #f1f2f3!important;">
                                                    <?php $perk = json_decode($temp->perk);
                                                        foreach(@$perk as $key => $v){ if(!empty($v)){?>
                                                            <p style="text-align:center; color:#393939;"> <?php echo e($v); ?></p><hr style="border-top: 3px solid #f1f2f3!important;">
                                                    <?php } } ?>

                                                    <div class="row" style="justify-content: center;">
                                                        <a class="personal_membership_id" data-value="<?php echo e($temp->id); ?>" style="color: green;" title="Edit">
                                                            <i data-feather="edit" style="height: 3rem; width: auto!important;"></i>
                                                        </a>&nbsp;&nbsp;

                                                        <button type="button" class="btn btn-dark" style="font-weight:600;"><?php echo e($temp->currency); ?><?php echo e($temp->price); ?></button>&nbsp;&nbsp;

                                                        <a onclick="return confirm_delete()" href="<?php echo e(route('personal_membership.delete',$temp->id)); ?>" style="color: red; cursor: pointer;" title="Delete">
                                                            <i data-feather="trash" style="height: 3rem; width: auto!important;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>                                        
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12 mb-3">
                                            
                                    <div class="card component-card_1 box_preview" style="margin-top: 21px;">
                                        <div class="card-body" style="border-radius: 5px 5px 0px 0px; filter: drop-shadow(0px 2px 1px rgba(0,0,0,0.1)); background-color: #393939;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="card-title text-center" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: Nunito;margin-top:10px;">Preview Plan</h5>
                                                    <h1 class="text-center service_txt" style="font-size: 34px;color: #eaeaea;font-weight: 600;font-family: "Nunito";"></h1>
                                                    <h5 class="card-title text-center duration_txt" style="font-size: 14px;color: #eaeaea;font-weight: 600;font-family: "Nunito";"></h5>
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body" style="border-radius: 5px;background-color: #ffffff;padding: 15px 42px!important;">
                                            <p style="text-align:center; color:#393939;margin-top:27px;" class="service_txt"> </p>
                                            <hr style="border-top: 3px solid #f1f2f3!important;" id="service_hr">

                                            <!-- <p style="text-align:center; color:#393939;"> </p><hr style="border-top: 3px solid #f1f2f3!important;"> -->

                                            <button type="button" class="btn btn-dark currency_price" style="background-color:black!important;position:absolute;margin-left: 58px;font-weight:600;"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row mt-3">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript">
        $('document').ready(function() {
            var service_txt = '';
            var duration_txt = '';
            var price_txt = '';
            var currency_txt = $("#currency option:selected").html();
            var discount_txt = '';
            var perk_txt = '';
            PreviewPlanTable(service_txt, duration_txt, price_txt, currency_txt, discount_txt, perk_txt);

            $('#service').blur(function() {
                service_txt = $(this).val();
                duration_txt = $('#duration').val();
                price_txt = $('#price').val();
                currency_txt = $("#currency option:selected").html();
                discount_txt = $('#discount').val();
                perk_txt = $('#perk').val();

                PreviewPlanTable(service_txt, duration_txt, price_txt, currency_txt, discount_txt, perk_txt);
            });

            $('#duration').blur(function() {
                duration_txt = $(this).val();
                service_txt = $('#service').val();
                price_txt = $('#price').val();
                currency_txt = $("#currency option:selected").html();
                discount_txt = $('#discount').val();
                perk_txt = $('#perk').val();

                PreviewPlanTable(service_txt, duration_txt, price_txt, currency_txt, discount_txt, perk_txt);
            });

            $('#price').blur(function() {
                price_txt = $(this).val();
                service_txt = $('#service').val();
                duration_txt = $('#duration').val();
                currency_txt = $("#currency option:selected").html();
                discount_txt = $('#discount').val();
                perk_txt = $('#perk').val();

                PreviewPlanTable(service_txt, duration_txt, price_txt, currency_txt, discount_txt, perk_txt);
            });

            $('#currency').blur(function() {
                price_txt = $('#price').val();
                service_txt = $('#service').val();
                duration_txt = $('#duration').val();
                currency_txt = $("#currency option:selected").html();
                discount_txt = $('#discount').val();
                perk_txt = $('#perk').val();

                PreviewPlanTable(service_txt, duration_txt, price_txt, currency_txt, discount_txt, perk_txt);
            });

            $('#perk').blur(function() {
                price_txt = $('#price').val();
                service_txt = $('#service').val();
                duration_txt = $('#duration').val();
                currency_txt = $("#currency option:selected").html();
                discount_txt = $('#discount').val();
                perk_txt = $(this).val();

                PreviewPlanTable(service_txt, duration_txt, price_txt, currency_txt, discount_txt, perk_txt);
            });

            $('.personal_membership_id').click(function() {
                var id = $(this).attr('data-value');
                if (id) {
                    $.ajax({
                        url: "/personal_membership/getPlaninfor",
                        type: "get",
                        data: { id: id },
                        success: function(result, status) {
                            if (status == "success") {
                                if (result) {
                                    var membership_plan_id = result.data.plan_id;
                                    var service_val = result.data.membership.service;
                                    var duration_val = result.data.membership.duration;
                                    var currency_val = result.data.membership.currency;
                                    var discount_val = result.data.membership.discount;
                                    var price_val = result.data.membership.price;
                                    var featured_val = result.data.membership.featured;
                                    var app_val = result.data.membership.app;

                                    var perk1_val = JSON.parse(result.data.membership.perk);
                                    var perk_val = '';
                                    if (perk1_val) {
                                        for (var i = 0; i < perk1_val.length; i++) {
                                            perk_val += perk1_val[i] + "\n";
                                        }
                                    }

                                    $(window).scrollTop(0);

                                    $('#membership_plan_id').val('');
                                    $('#service').val('');
                                    $('#duration').val('');
                                    $('#price').val('');
                                    $('#currency').val('');
                                    $('#discount').val('');
                                    $('#perk').val('');

                                    $('#membership_plan_id').val(membership_plan_id);
                                    $('#service').val(service_val);
                                    $('#duration').val(duration_val);
                                    $('#price').val(price_val);
                                    $('#currency').val(currency_val);
                                    $('#discount').val(discount_val);
                                    $('#perk').val(perk_val);

                                    if (featured_val == "featured") {
                                        $('input[name="featured"]').attr('checked', true);
                                    }else{
                                        $('input[name="featured"]').attr('checked', false);
                                    }

                                    if (app_val == "app") {
                                        $('input[name="app"]').attr('checked', true);
                                    }else{
                                        $('input[name="app"]').attr('checked', false);
                                    }
                                }
                            }
                        }
                    })
                }
            });
        });

        function PreviewPlanTable(service, duration, price, currency, discount, perk) {
            $('.service_txt').text(service);
            $('.duration_txt').text(duration);
            $('.currency_price').text(currency + price);

            if (perk) {
                var arr_perks = perk.split('\n');
                if (arr_perks) {
                    $('.p_perk').remove();
                    $('.hr_perk').remove();
                    var element = "";
                    for (var i = 0; i < arr_perks.length; i++) {
                        element +=  "<p style='text-align:center; color:#393939;margin-top:27px;' class='p_perk'>" + arr_perks[i] + "</p><hr style='border-top: 3px solid #f1f2f3!important;' class='hr_perk'>";
                    }

                    $('#service_hr').after(element);
                }
            }else{
                $('.p_perk').remove();
                $('.hr_perk').remove();
            }
        }


        function confirm_delete() {
            if(confirm('Are you sure you want to delete this plan?')) {
                return true;
            }
            return false;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.personal_default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\sources\randy\resources\views/personal/personal_membership.blade.php ENDPATH**/ ?>