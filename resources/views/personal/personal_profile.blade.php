@extends('layouts.personal_default')
{{-- Page title --}}
@section('title')
Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('css/pages.css')}}" rel="stylesheet">


<!--end of page vendors -->
@stop
@section('content')

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
            <form action="{{ route('personal_avatar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="picture-container">
                    <div class="picture">
                        
                        @if($personal_avatar)
                        <img src="{{ asset($personal_avatar->avatar)}}" class="picture-src" id="wizardPicturePreview" title="">
                        @else
                        @endif
                        <input type="file" id="wizard-picture" name="avatar">
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
                        General Information
                    </h3>
                    <span class="float-right">
                        <i class="fa fa-chevron-up clickable"></i>
                    </span>
                </div>
                <div class="card-body">
                    <form action="{{ route('personal_company')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <!-- gym name -->
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       TRAINER NAME
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="im im-icon-Add-User"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Username" id="inputUsername3" 
                                            name="company_name" value="{{($company_data)?$company_data->company_name:''}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- country -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        COUNTRY
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
                            
                            <!-- email -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputAddress4" class="col-md-3 control-label">
                                        EMAIL
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Email"></i>
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" id="inputAddress4"
                                                placeholder=" Email" name="email" value="{{($company_data)?$company_data->email:''}}" required>
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
                                            placeholder="Website" name="website" value="{{($company_data)?$company_data->website:''}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Gender -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><label>GENDER</label></div>
                                    <div class="col-md-8">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="materialInline1" name="gender" value="male"
                                            {{($company_data)?(($company_data->gender=="male")?'checked':''):''}}>
                                            <label class="form-check-label active" for="materialInline1">Male</label>
                                        </div>
                                        <!-- Material inline 2 -->
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="materialInline2" name="gender" value="female"
                                            {{($company_data)?(($company_data->gender=="female")?'checked':''):''}}>
                                            <label class="form-check-label" for="materialInline2">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile -->
                            <div class="form-group">
                                <div class="row">
                                    <label for="inputnumber3" class="col-md-3 control-label">
                                        CONTACT MOBILE
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="im im-icon-Phone-Wifi"></i>
                                                </span>
                                            </span>
                                            <input type="text" placeholder="Phone Number" class="form-control"
                                                id="inputnumber3" name="phone_number" value="{{($company_data)?$company_data->phone_number:''}}"/ required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><label>DESCRIPTION OF TRAINER SERVICES</label></div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck20" name="session" value="session"
                                                    {{($company_data)?(($company_data->session=="session")?'checked':''):''}}>
                                                    <label class="custom-control-label" for="incustomCheck20">Live Session</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck21" name="personal_training" value="personal_training"
                                                    {{($company_data)?(($company_data->personal_training=="personal_training")?'checked':''):''}}>
                                                    <label class="custom-control-label" for="incustomCheck21">Personal Training</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck22" name="group_training" value="group_training"
                                                    {{($company_data)?(($company_data->group_training=="group_training")?'checked':''):''}}>
                                                    <label class="custom-control-label" for="incustomCheck22">Group Training</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck23" name="nutrition" value="nutrition"
                                                    {{($company_data)?(($company_data->nutrition=="nutrition")?'checked':''):''}}>
                                                    <label class="custom-control-label" for="incustomCheck23">Nutrition/Meal Plan</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="incustomCheck24" name="one_training" value="one_training"
                                                    {{($company_data)?(($company_data->one_training=="one_training")?'checked':''):''}}>
                                                    <label class="custom-control-label" for="incustomCheck24">1/1 Training</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr><br>
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
                                            name="facebook" value="{{($company_data)?$company_data->facebook:''}}" required>
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
                                            name="twitter" value="{{($company_data)?$company_data->twitter:''}}" required>
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
                                            name="instagram" value="{{($company_data)?$company_data->instagram:''}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- youtube link -->
                            <div class="form-group pad-top40">
                                <div class="row">
                                    <label for="inputUsername3" class="col-md-3 control-label">
                                       Youtube
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="im im-icon-Youtube"></i></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Youtube" id="inputUsername3" 
                                            name="youtube_link" value="{{($company_data)?$company_data->youtube_link:''}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-sm btn-primary">Submit Profile</button>
                            &nbsp;
                            <button type="button" class="btn btn-sm btn-warning" onclick="reset_fun()">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4"></div>
    </div>
</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>
<script>
    function reset_fun() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route("personal_profile.reset")}}',
            type:'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(){
                location.reload();
            }
        });
    }
</script>
<!-- end of page level js -->
@stop
