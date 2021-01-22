<?php $__env->startSection('title'); ?>
Dashboard ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
<!-- page vendors -->
<link href="<?php echo e(asset('css/pages.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('vendors/toastr/css/toastr.css')); ?>"  rel="stylesheet" type="text/css" />


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

        <!-- avatar -->
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <form action="<?php echo e(route('avatar')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="picture-container">
                    <div class="picture">
                        
                        <?php if($avatar): ?>
                            <img src="<?php echo e(asset($avatar->avatar)); ?>" class="picture-src" id="wizardPicturePreview" title="">
                        <?php else: ?>
                        <?php endif; ?>
                        <input type="file" id="wizard-picture" name="avatar"  accept="image/*">
                    </div>
                    <h6 class="">Logo ( 512px*512px )</h6>
                </div>
                <button type="submit" style="top:-300px; position:absolute" id="avatar" ></button>
            </form>
        </div>
        <div class="col-lg-2 col-md-4"></div>

        <!-- company information -->
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-16">
            <div class="card">
                <div class="card-header bg-secondary text-white ">
                    <h3 class="card-title d-inline">
                        Company Information
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('company')); ?>" method="post" enctype="multipart/form-data" class="dropzone" id="dropzone">
                        <?php echo csrf_field(); ?>
                        <div class="form-body">
                            <!-- gym name -->
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       GYM Name
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username" id="gym_name" 
                                            name="company_name" value="<?php echo e(($company_data)?$company_data->company_name:''); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- country -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        Country
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Globe"></i>
                                                </span>
                                            </span>
                                        <select class="browser-default custom-select" name="country" style="height:40px;">
                                            <option value="not" class="hidden defaultText">Country</option>
                                            <option value="ax">    Aaland Islands                          </option>
                                            <option value="af">    Afghanistan                          </option>
                                            <option value="al">    Albania                          </option>
                                            <option value="dz">    Algeria                          </option>
                                            <option value="as">    American Samoa                          </option>
                                            <option value="ad">    Andorra                          </option>
                                            <option value="ao">    Angola                          </option>
                                            <option value="ai">    Anguilla                          </option>
                                            <option value="aq">    Antarctica                          </option>
                                            <option value="ag">    Antigua and Barbuda                          </option>
                                            <option value="ar">    Argentina                          </option>
                                            <option value="am">    Armenia                          </option>
                                            <option value="aw">    Aruba                          </option>
                                            <option value="au">    Australia                          </option>
                                            <option value="at">    Austria                          </option>
                                            <option value="az">    Azerbaijan                          </option>
                                            <option value="bs">    Bahamas, The                          </option>
                                            <option value="bh">    Bahrain                          </option>
                                            <option value="bd">    Bangladesh                          </option>
                                            <option value="bb">    Barbados                          </option>
                                            <option value="by">    Belarus                          </option>
                                            <option value="be">    Belgium                          </option>
                                            <option value="bz">    Belize                          </option>
                                            <option value="bj">    Benin                          </option>
                                            <option value="bm">    Bermuda                          </option>
                                            <option value="bt">    Bhutan                          </option>
                                            <option value="bo">    Bolivia                          </option>
                                            <option value="bq">    Bonaire, Sint Eustatius and Saba                          </option>
                                            <option value="ba">    Bosnia and Herzegovina                          </option>
                                            <option value="bw">    Botswana                          </option>
                                            <option value="bv">    Bouvet Island                          </option>
                                            <option value="br">    Brazil                          </option>
                                            <option value="io">    British Indian Ocean Territory                          </option>
                                            <option value="vg">    British Virgin Islands                          </option>
                                            <option value="bn">    Brunei                          </option>
                                            <option value="bg">    Bulgaria                          </option>
                                            <option value="bf">    Burkina Faso                          </option>
                                            <option value="bi">    Burundi                          </option>
                                            <option value="kh">    Cambodia                          </option>
                                            <option value="cm">    Cameroon                          </option>
                                            <option value="ca">    Canada                          </option>
                                            <option value="ic">    Canary Islands                          </option>
                                            <option value="cv">    Cape Verde                          </option>
                                            <option value="ky">    Cayman Islands                          </option>
                                            <option value="cf">    Central African Republic                          </option>
                                            <option value="td">    Chad                          </option>
                                            <option value="cl">    Chile                          </option>
                                            <option value="cn">    China                          </option>
                                            <option value="cx">    Christmas Island                          </option>
                                            <option value="cc">    Cocos (Keeling) Islands                          </option>
                                            <option value="co">    Colombia                          </option>
                                            <option value="km">    Comoros                          </option>
                                            <option value="cg">    Congo                          </option>
                                            <option value="ck">    Cook Islands                          </option>
                                            <option value="cr">    Costa Rica                          </option>
                                            <option value="hr">    Croatia                          </option>
                                            <option value="cw">    Cura�ao                          </option>
                                            <option value="cy">    Cyprus                          </option>
                                            <option value="cz">    Czech Republic                          </option>
                                            <option value="cd">    Democratic Republic of the Congo                          </option>
                                            <option value="dk">    Denmark                          </option>
                                            <option value="dj">    Djibouti                          </option>
                                            <option value="dm">    Dominica                          </option>
                                            <option value="do">    Dominican Republic                          </option>
                                            <option value="tl">    East Timor                          </option>
                                            <option value="ec">    Ecuador                          </option>
                                            <option value="eg">    Egypt                          </option>
                                            <option value="sv">    El Salvador                          </option>
                                            <option value="gq">    Equatorial Guinea                          </option>
                                            <option value="er">    Eritrea                          </option>
                                            <option value="ee">    Estonia                          </option>
                                            <option value="et">    Ethiopia                          </option>
                                            <option value="fk">    Falkland Islands (Malvinas)                          </option>
                                            <option value="fo">    Faroe Islands                          </option>
                                            <option value="fj">    Fiji                          </option>
                                            <option value="fi">    Finland                          </option>
                                            <option value="fr">    France                          </option>
                                            <option value="gf">    French Guiana                          </option>
                                            <option value="pf">    French Polynesia                          </option>
                                            <option value="tf">    French Southern/Antarctic Lands                          </option>
                                            <option value="ga">    Gabon                          </option>
                                            <option value="gm">    Gambia                          </option>
                                            <option value="ge">    Georgia                          </option>
                                            <option value="de">    Germany                          </option>
                                            <option value="gh">    Ghana                          </option>
                                            <option value="gi">    Gibraltar                          </option>
                                            <option value="gr">    Greece                          </option>
                                            <option value="gl">    Greenland                          </option>
                                            <option value="gd">    Grenada                          </option>
                                            <option value="gp">    Guadeloupe                          </option>
                                            <option value="gu">    Guam                          </option>
                                            <option value="gt">    Guatemala                          </option>
                                            <option value="gg">    Guernsey                          </option>
                                            <option value="gn">    Guinea                          </option>
                                            <option value="gw">    Guinea-Bissau                          </option>
                                            <option value="gy">    Guyana                          </option>
                                            <option value="ht">    Haiti                          </option>
                                            <option value="hm">    Heard and McDonald Islands                          </option>
                                            <option value="hn">    Honduras                          </option>
                                            <option value="hk">    Hong Kong                          </option>
                                            <option value="hu">    Hungary                          </option>
                                            <option value="is">    Iceland                          </option>
                                            <option value="in">    India                          </option>
                                            <option value="id">    Indonesia                          </option>
                                            <option value="iq">    Iraq                          </option>
                                            <option value="ie">    Ireland                          </option>
                                            <option value="il">    Israel                          </option>
                                            <option value="it">    Italy                          </option>
                                            <option value="ci">    Ivory Coast                          </option>
                                            <option value="jm">    Jamaica                          </option>
                                            <option value="jp">    Japan                          </option>
                                            <option value="je">    Jersey                          </option>
                                            <option value="jo">    Jordan                          </option>
                                            <option value="kz">    Kazakhstan                          </option>
                                            <option value="ke">    Kenya                          </option>
                                            <option value="ki">    Kiribati                          </option>
                                            <option value="kr">    Korea, South                          </option>
                                            <option value="xk">    Kosovo                          </option>
                                            <option value="kw">    Kuwait                               </option>
                                            <option value="kg">    Kyrgyzstan                           </option>
                                            <option value="la">    Lao Peoples Democratic Republic      </option>
                                            <option value="lv">    Latvia                          </option>
                                            <option value="lb">    Lebanon                          </option>
                                            <option value="ls">    Lesotho                          </option>
                                            <option value="lr">    Liberia                          </option>
                                            <option value="li">    Liechtenstein                          </option>
                                            <option value="lt">    Lithuania                          </option>
                                            <option value="lu">    Luxembourg                          </option>
                                            <option value="mo">    Macau                          </option>
                                            <option value="mk">    Macedonia                          </option>
                                            <option value="mg">    Madagascar                          </option>
                                            <option value="mw">    Malawi                          </option>
                                            <option value="my">    Malaysia                          </option>
                                            <option value="mv">    Maldives                          </option>
                                            <option value="ml">    Mali                          </option>
                                            <option value="mt">    Malta                          </option>
                                            <option value="im">    Man, Isle of                          </option>
                                            <option value="mh">    Marshall Islands                          </option>
                                            <option value="mq">    Martinique                          </option>
                                            <option value="mr">    Mauritania                          </option>
                                            <option value="mu">    Mauritius                          </option>
                                            <option value="yt">    Mayotte                          </option>
                                            <option value="mx">    Mexico                          </option>
                                            <option value="fm">    Micronesia                          </option>
                                            <option value="md">    Moldova, Republic of                          </option>
                                            <option value="mc">    Monaco                          </option>
                                            <option value="mn">    Mongolia                          </option>
                                            <option value="ms">    Monserrat                          </option>
                                            <option value="me">    Montenegro                          </option>
                                            <option value="ma">    Morocco                          </option>
                                            <option value="mz">    Mozambique                          </option>
                                            <option value="mm">    Myanmar (Burma)                          </option>
                                            <option value="na">    Namibia                          </option>
                                            <option value="nr">    Nauru                          </option>
                                            <option value="np">    Nepal                          </option>
                                            <option value="nl">    Netherlands                          </option>
                                            <option value="nc">    New Caledonia                          </option>
                                            <option value="nz">    New Zealand                          </option>
                                            <option value="ni">    Nicaragua                          </option>
                                            <option value="ne">    Niger                          </option>
                                            <option value="ng">    Nigeria                          </option>
                                            <option value="nu">    Niue                          </option>
                                            <option value="nf">    Norfolk Island                          </option>
                                            <option value="mp">    Northern Mariana Islands                          </option>
                                            <option value="no">    Norway                          </option>
                                            <option value="om">    Oman                          </option>
                                            <option value="pk">    Pakistan                          </option>
                                            <option value="pw">    Palau                          </option>
                                            <option value="ps">    Palestinian territory, ocupied                          </option>
                                            <option value="pa">    Panama                          </option>
                                            <option value="pg">    Papua New Guinea                          </option>
                                            <option value="py">    Paraguay                          </option>
                                            <option value="pe">    Peru                          </option>
                                            <option value="ph">    Philippines                          </option>
                                            <option value="pn">    Pitcairn                          </option>
                                            <option value="pl">    Poland                          </option>
                                            <option value="pt">    Portugal                          </option>
                                            <option value="pr">    Puerto Rico                          </option>
                                            <option value="qa">    Qatar                          </option>
                                            <option value="re">    Reunion                          </option>
                                            <option value="ro">    Romania                          </option>
                                            <option value="ru">    Russia                          </option>
                                            <option value="rw">    Rwanda                          </option>
                                            <option value="lc">    Saint Lucia                          </option>
                                            <option value="mf">    Saint Martin                          </option>
                                            <option value="ws">    Samoa                          </option>
                                            <option value="sm">    San Marino                          </option>
                                            <option value="st">    Sao Tome and Principe                          </option>
                                            <option value="sa">    Saudi Arabia                          </option>
                                            <option value="sn">    Senegal                          </option>
                                            <option value="rs">    Serbia                          </option>
                                            <option value="sc">    Seychelles                          </option>
                                            <option value="sl">    Sierra Leone                          </option>
                                            <option value="sg">    Singapore                          </option>
                                            <option value="sx">    Sint Maarten                          </option>
                                            <option value="sk">    Slovakia                          </option>
                                            <option value="si">    Slovenia                          </option>
                                            <option value="sb">    Solomon Islands                          </option>
                                            <option value="so">    Somalia                          </option>
                                            <option value="za">    South Africa                          </option>
                                            <option value="gs">    South Georgia/Sandwich Islands                          </option>
                                            <option value="es">    Spain                          </option>
                                            <option value="lk">    Sri Lanka                          </option>
                                            <option value="sh">    St. Helena                          </option>
                                            <option value="kn">    St. Kitts and Nevis                          </option>
                                            <option value="pm">    St. Pierre and Miquelon                          </option>
                                            <option value="vc">    St. Vincent and the Grenadines                          </option>
                                            <option value="sr">    Suriname                          </option>
                                            <option value="sj">    Svalbard/Jan Mayen Islands                          </option>
                                            <option value="sz">    Swaziland                          </option>
                                            <option value="se">    Sweden                          </option>
                                            <option value="ch">    Switzerland                          </option>
                                            <option value="tw">    Taiwan                          </option>
                                            <option value="tj">    Tajikistan                          </option>
                                            <option value="tz">    Tanzania, United Republic of                          </option>
                                            <option value="th">    Thailand                          </option>
                                            <option value="tg">    Togo                          </option>
                                            <option value="tk">    Tokelau                          </option>
                                            <option value="to">    Tonga                          </option>
                                            <option value="tt">    Trinidad and Tobago                          </option>
                                            <option value="tn">    Tunisia                          </option>
                                            <option value="tr">    Turkey                          </option>
                                            <option value="tm">    Turkmenistan                          </option>
                                            <option value="tc">    Turks and Caicos Islands                          </option>
                                            <option value="tv">    Tuvalu                          </option>
                                            <option value="um">    U.S. Minor Outlying Islands                          </option>
                                            <option value="ug">    Uganda                          </option>
                                            <option value="ua">    Ukraine                          </option>
                                            <option value="ae">    United Arab Emirates                          </option>
                                            <option value="gb">    United Kingdom                          </option>
                                            <option value="us">    United States of America                          </option>
                                            <option value="uy">    Uruguay                          </option>
                                            <option value="uz">    Uzbekistan                          </option>
                                            <option value="vu">    Vanuatu                          </option>
                                            <option value="va">    Vatican City State (Holy See)                          </option>
                                            <option value="ve">    Venezuela                          </option>
                                            <option value="vn">    Vietnam                          </option>
                                            <option value="vi">    Virgin Islands                          </option>
                                            <option value="wf">    Wallis and Futuna Islands                          </option>
                                            <option value="eh">    Western Sahara                          </option>
                                            <option value="ye">    Yemen                          </option>
                                            <option value="zm">    Zambia                          </option>
                                            <option value="zw">    Zimbabwe                          </option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- location -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        Location
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Location-2"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress4"
                                                placeholder=" Address" name="address" value="<?php echo e(($company_data)?$company_data->address:''); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Email"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress4"
                                                placeholder=" Email" name="email" value="<?php echo e(($company_data)?$company_data->email:''); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- website -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        WEBSITE
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Computer"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress4"
                                            placeholder="Website" name="website" value="<?php echo e(($company_data)?$company_data->website:''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT PERSON -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        CONTACT PERSON
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Address-Book"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress4"
                                            placeholder="Contact Person" name="about" value="<?php echo e(($company_data)?$company_data->contact:''); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber3" class="col-md-3 control-label">
                                        MOBILE
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber3" name="phone_number" value="<?php echo e(($company_data)?$company_data->phone_number:''); ?>" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- gym info -->
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 col-lg-3 col-12 control-label" for="message1">GYM Info</label>
                                    <div class="col-md-9 col-lg-9 col-12">
                                        <textarea class="form-control resize_vertical" id="message1" name="message" placeholder="Please enter your message here..." rows="5" required><?php echo e(($company_data)?$company_data->message:''); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- Gym select -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><label>DESCRIPTION OF GYM FACILITIES</label></div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck20" name="Bodybuilding" value="Bodybuilding"
                                                    <?php echo e(($company_data)?(($company_data->Bodybuilding=="Bodybuilding")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck20">Bodybuilding</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck21" name="Bootcamp" value="Bootcamp"
                                                    <?php echo e(($company_data)?(($company_data->Bootcamp=="Bootcamp")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck21">Bootcamp</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck22" name="boxing" value="Boxing"
                                                    <?php echo e(($company_data)?(($company_data->boxing=="Boxing")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck22">Boxing</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck23" name="crosstraing" value="Crosstraing"
                                                    <?php echo e(($company_data)?(($company_data->crosstraing=="Crosstraing")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck23">Cross training</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck24" name="EMS" value="EMS"
                                                    <?php echo e(($company_data)?(($company_data->EMS=="EMS")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck24">EMS</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck25" name="Gym" value="Gym"
                                                    <?php echo e(($company_data)?(($company_data->Gym=="Gym")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck25">Gym</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck26" name="Gymnastics" value="Gymnastics"
                                                    <?php echo e(($company_data)?(($company_data->Gymnastics=="Gymnastics")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck26">Gymnastics</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck13" name="karate" value="Karate"
                                                    <?php echo e(($company_data)?(($company_data->karate=="Karate")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck13">Karate</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck27" name="KickBoxing" value="KickBoxing"
                                                    <?php echo e(($company_data)?(($company_data->KickBoxing=="KickBoxing")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck27">Kick Boxing</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck28" name="MartialArts" value="MartialArts"
                                                    <?php echo e(($company_data)?(($company_data->MartialArts=="MartialArts")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck28">Martial Arts</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck11" name="mma" value="MMA"
                                                    <?php echo e(($company_data)?(($company_data->mma=="MMA")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck11">MMA</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck29" name="PersonalFitness" value="PersonalFitness"
                                                    <?php echo e(($company_data)?(($company_data->PersonalFitness=="PersonalFitness")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck29">Personal Fitness</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck10" name="pilates" value="Pilates"
                                                    <?php echo e(($company_data)?(($company_data->pilates=="Pilates")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck10">Pilates</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck30" name="Spinning" value="Spinning"
                                                    <?php echo e(($company_data)?(($company_data->Spinning=="Spinning")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck30">Spinning</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck" name="weightlift" value="WeightLefting"
                                                    <?php echo e(($company_data)?(($company_data->weightlift=="WeightLefting")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck">Weightlifting</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck9" name="yoga" value="Yoga"
                                                    <?php echo e(($company_data)?(($company_data->yoga=="Yoga")?'checked':''):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck9">Yoga</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr><br>
                            <!-- working hours -->
                            <div class="form-group pad-top40">
                                <div class="row" >
                                    
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                        WORKING HOURS<br>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" onclick="working(this)" class="custom-control-input" id="incustomCheck15" name="all_check" value="all"
                                            <?php echo e(($company_data)?(($company_data->all_check=="all") ? "checked":""):''); ?> >
                                            <label class="custom-control-label" for="incustomCheck15">Open 24x7</label>
                                        </div>
                                    </label>
                                        
                                    <div class="col-md-9">
                                        <div class="row" id="working">
                                            <!-- monday -->
                                            <?php if($company_data){ $week = json_decode($company_data->week_date);}?>
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck1" name="week_date[]" value="Monday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Monday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck1">Mon</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="mon_from" value="<?php echo e(($company_data)?$company_data->mon_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="mon_to" value="<?php echo e(($company_data)?$company_data->mon_to:''); ?>">
                                                </div>
                                            </div>
                                            <!-- tuesday -->
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck2" name="week_date[]" value="Tuesday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Tuesday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck2">Tue</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="tue_from" value="<?php echo e(($company_data)?$company_data->tue_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="tue_to" value="<?php echo e(($company_data)?$company_data->tue_to:''); ?>">
                                                </div>
                                            </div>
                                            <!-- wednesday -->
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck3" name="week_date[]" value="Wednesday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Wednesday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck3">Wed</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="wed_from" value="<?php echo e(($company_data)?$company_data->wed_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="wed_to" value="<?php echo e(($company_data)?$company_data->wed_to:''); ?>">
                                                </div>
                                            </div>
                                            <!-- thursday -->
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck4" name="week_date[]" value="Thursday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Thursday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck4">Thu</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="thu_from" value="<?php echo e(($company_data)?$company_data->thu_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="thu_to" value="<?php echo e(($company_data)?$company_data->thu_to:''); ?>">
                                                </div>
                                            </div>
                                            <!-- friday -->
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck5" name="week_date[]" value="Friday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Friday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck5">Fri</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="fri_from" value="<?php echo e(($company_data)?$company_data->fri_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="fri_to" value="<?php echo e(($company_data)?$company_data->fri_to:''); ?>">
                                                </div>
                                            </div>
                                            <!-- saturday -->
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck6" name="week_date[]" value="Saturday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Saturday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck6">Sat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="sat_from" value="<?php echo e(($company_data)?$company_data->sat_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="sat_to" value="<?php echo e(($company_data)?$company_data->sat_to:''); ?>">
                                                </div>
                                            </div>
                                            <!-- sunday -->
                                            <div class="col-md-2">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck7" name="week_date[]" value="Sunday"
                                                    <?php echo e(($company_data)?(($company_data->week_date && in_array("Sunday",json_decode($company_data->week_date))) ? "checked":""):''); ?>>
                                                    <label class="custom-control-label" for="incustomCheck7">Sun</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="From" id="inputUsername3" 
                                                    name="sun_from" value="<?php echo e(($company_data)?$company_data->sun_from:''); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                        <i class="im im-icon-Clock"></i></span>
                                                    </span>
                                                    <input type="number" class="form-control" placeholder="To" id="inputUsername3" 
                                                    name="sun_to" value="<?php echo e(($company_data)?$company_data->sun_to:''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- social link -->
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       Network
                                    </label>
                                    <div class="col-md-9">
                                        <label for="inputUsername3" >
                                        Account Link
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       Facebook
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="im im-icon-Facebook"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Facebook" id="inputUsername3" 
                                            name="facebook" value="<?php echo e(($company_data)?$company_data->facebook:''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       Twitter
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="im im-icon-Twitter"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Twitter" id="inputUsername3" 
                                            name="twitter" value="<?php echo e(($company_data)?$company_data->twitter:''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       Instagram
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="fab fa-instagram"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Instagram" id="inputUsername3" 
                                            name="instagram" value="<?php echo e(($company_data)?$company_data->instagram:''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       Youtube Video Link
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="im im-icon-Youtube"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=" id="inputUsername3" 
                                                name="youtube" value="<?php echo e(($company_data)?$company_data->youtube:''); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- image banner -->
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-lg-12 control-label">
                                       Image Banner 
                                    </label>
                                    <div class="col-md-9">
                                   
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="form-actions" style="bottom:0px;">
                            <button type="submit" style="opacity:0;" id="real_submit">Submit Profile</button>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <?php if($banner): ?>
                            <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3" id="banner-preview-<?php echo e($temp->id); ?>">
                                <span style="float:right; font-size:25px; cursor:pointer;" onclick="image_del(<?php echo e($temp->id); ?>)">x</span>
                                <img src="upload/<?php echo e($temp->image_path); ?>" style="width:100%; height:120px;" class="img-rounded" />
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-actions" style="bottom:0px;">
                        <button class="btn btn-sm btn-success" id="toast-success" onclick="submit_fun()">Submit Profile</button>
                        <button type="submit" class="btn btn-sm btn-danger" id="toast-warning" onclick="reset_fun()">Reset</button>                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-12 col-md-24">
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="<?php echo e(asset('vendors/chartjs/js/Chart.js')); ?>"></script>
<script src="<?php echo e(asset('js/pages/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/toastr/js/toastr.js')); ?>" ></script>
<script src="<?php echo e(asset('js/pages/toastr.js')); ?>"></script>
<script>
    function avatar(){
        document.getElementById("avatar").click();
    }

    function submit_fun(){
        document.getElementById("real_submit").click();
    }
    function reset_fun() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "profile/reset",
            type:'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(){
                location.reload();
            }
        });
    }
    function image_del(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "profile/banner/delete/"+id,
            type:'post',
            headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
            success: function(){
                $("#banner-preview-"+id).hide();
            }
        });
    }
    function working(e){
        var checking = e.checked;
        if(checking == true){
           $("#working").children().children().children("input").css({ 
                "background-color": "gray", 
            }); 
        }
        else{
            $("#working").children().children().children("input").css({ 
                "background-color": "white", 
            }); 
        }
    }
</script>
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
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
	dictDefaultMessage: "<h5>Drop files here to upload</h5> <br><span>( size:1280px X 780px, type:png, jpg )</span>",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '<?php echo e(url("delete")); ?>',
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
                console.log(response);
            },
            error: function (file, response) {
                return (ref = file.previewElement) != null ?
                    ref.removeChild(file.previewElement) : void 0;
                // alert();
            }
        };
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wa7ash23/public_html/vendor/resources/views/user/myprofile.blade.php ENDPATH**/ ?>