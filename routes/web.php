<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

include('web_builder.php');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes();
Auth::routes(['verify' => true]);

/* Route::get('/', function () {
    return back();
})->middleware('auth'); */

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::resource('users', 'UsersController');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('thank-you','ProfileController@thankyou')->name('thank-you');
Route::get('verify','ProfileController@verify_email')->name('verify');
Route::post('Login','ProfileController@login_view')->name('Login');
Route::post('Logout','ProfileController@logout')->name('Logout');
Route::get('/homes', 'ProfileController@view_dashboard')->name('homes');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/thank-you');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('myprofile', 'ProfileController@index')->name('myprofile')->middleware('verified');
// Route::group(['middleware' => 'verified'], function () {
    // Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => 'gym'], function () {
            // Route::get('myprofile', 'ProfileController@index')->name('myprofile');
            //avatar
            Route::post('profile/avatar', 'ProfileController@avatar')->name('avatar');
            //company
            Route::post('profile/company', 'ProfileController@company')->name('company');

            Route::post('profile/reset', 'ProfileController@reset')->name('profile.reset');
            
            //banner
            //dropzone
            Route::post('upload/store', 'ImageUploadController@store');
            Route::post('delete', 'ImageUploadController@delete');
            //banner
            Route::post('profile/banner/delete/{id}', 'ProfileController@banner_del')->name('banner.delete');
            
            Route::get('myprofile/touristpass', 'ProfileController@touristpass')->name('myprofile.touristpass');
            Route::post('myprofile/publish_tourist', 'ProfileController@touristpass_save')->name('publish_tourist');
            Route::get('myprofile/touristpass/delete/{id}', 'ProfileController@touristpass_delete')->name('touristpass.delete');

        });

        Route::group(['middleware' => 'admin'], function () {
            //admin
            // Route::get('admin', 'AdminController@handleAdmin')->name('admin.index')->middleware('admin');
            Route::get('admin/verify', 'AdminController@verify')->name('admin.verify');

            Route::post('admin/confirm', 'AdminController@confirm')->name('admin_confirm');
            
            Route::group(['middleware' => 'admin_verify'], function () {
                Route::get('admin', 'AdminController@dashboard')->name('admin');
                Route::get('admin/users', 'AdminController@users')->name('admin.users');
                Route::get('admin/edit/{id}', 'AdminController@edit')->name('admin.user_edit');
                Route::get('admin/change_pass/{id}', 'AdminController@change_pass')->name('admin.user_change_pass');
                Route::post('admin/save_pass', 'AdminController@save_pass')->name('admin.save_pass');
                Route::get('admin/delete/{id}', 'AdminController@destroy')->name('admin.user_delete');
                Route::get('admin/gym_delete/{id}', 'AdminController@gym_destroy')->name('admin.gym_delete');
                Route::post('admin/update_gym', 'AdminController@update_gym')->name('admin.update_gym');
                Route::post('admin/update_personal', 'AdminController@update_personal')->name('admin.update_personal');
                
                Route::get('admin/membership', 'AdminController@membership')->name('admin.membership');
                Route::get('admin/membership_edit/{id}', 'AdminController@membership_edit')->name('admin.membership_edit');
                Route::get('admin/membership_delete/{id}', 'AdminController@membership_delete')->name('admin.membership_delete');
                Route::post('admin/update_membership', 'AdminController@update_membership')->name('admin.update_membership');

                Route::get('admin/document', 'AdminController@document')->name('admin.document');
                Route::get('admin/document_edit/{id}', 'AdminController@document_edit')->name('admin.document_edit');
                Route::post('admin/document_delete', 'AdminController@document_delete')->name('admin.document_delete');
                Route::post('admin/update_document', 'AdminController@update_document')->name('admin.update_document');

                Route::get('admin/tourist', 'AdminController@tourist')->name('admin.tourist');
                Route::get('admin/tourist_edit/{id}', 'AdminController@tourist_edit')->name('admin.tourist_edit');
                Route::get('admin/tourist_delete/{id}', 'AdminController@tourist_delete')->name('admin.tourist_delete');
                Route::post('admin/update_tourist', 'AdminController@update_tourist')->name('admin.update_tourist');

                Route::get('admin/bank', 'AdminController@bank')->name('admin.bank');
                Route::get('admin/bank_edit/{id}', 'AdminController@bank_edit')->name('admin.bank_edit');
                Route::get('admin/bank_delete/{id}', 'AdminController@bank_delete')->name('admin.bank_delete');
                Route::post('admin/update_bank', 'AdminController@update_bank')->name('admin.update_bank');

            });
        });

        Route::group(['middleware' => 'trainer'], function () {
            //personal trainer
            Route::get('personal_myprofile', 'PersonalController@index')->name('personal_myprofile');
            //avatar
            Route::post('personal_profile/avatar', 'PersonalController@avatar')->name('personal_avatar');
            Route::get('personal_profile/changepass', 'PersonalController@change_pass')->name('personal_profile.changepass');
            Route::post('personal_profile/reset', 'PersonalController@reset')->name('personal_profile.reset');
            //company
            Route::post('personal_profile/company', 'PersonalController@personal_company')->name('personal_company');
            //membership
            Route::get('personal_membership', 'PersonalController@personal_membership_index')->name('personal_membership.index');
            Route::post('personal_profile/membership', 'PersonalController@personal_membership')->name('personal_membership');
            Route::get('personal_profile/membership/delete/{id}', 'PersonalController@personal_membership_del')->name('personal_membership.delete');
            //banner
            Route::post('personal_profile/banner', 'PersonalController@banner')->name('personal_banner');
            Route::get('personal_profile/banner/delete/{id}', 'PersonalController@banner_del')->name('personal_banner.delete');
            //bank account
            Route::get('personal_profile/bank', 'PersonalController@bank')->name('personal_profile.bank');
            Route::post('personal_profile/bank', 'PersonalController@bank_update')->name('personal_profile.bank.update');
            Route::get('personal_profile/bank_delete/{id}', 'PersonalController@bank_delete')->name('personal_profile.bank.delete');
        
        });

        
        Route::get('myprofile/changepass', 'ProfileController@change_pass')->name('myprofile.changepass');
        Route::post('myprofile/save_pass)', 'ProfileController@save_pass')->name('myprofile.save_pass');
        //membership
        Route::get('membership', 'ProfileController@membership_index')->name('membership.index');
        Route::post('profile/membership', 'ProfileController@membership')->name('membership');
        Route::get('profile/membership/delete/{id}', 'ProfileController@membership_del')->name('membership.delete');
        //bank
        Route::get('myprofile/bank', 'ProfileController@bank')->name('myprofile.bank');
        Route::post('myprofile/bank', 'ProfileController@bank_update')->name('myprofile.bank.update');
        Route::get('myprofile/bank_delete/{id}', 'ProfileController@bank_delete')->name('myprofile.bank.delete');
        
        Route::get('myprofile/document', 'ProfileController@document')->name('myprofile.document');
        Route::post('myprofile/upload_document)', 'ProfileController@upload_document')->name('upload_document');
        Route::post('myprofile/document_delete)', 'ProfileController@document_delete')->name('document_delete');

        Route::get('myprofile/sumbit_admin','ProfileController@submit_admin')->name('myprofile.sumbit_admin');
        Route::get('profile/send_notification_admin', 'ProfileController@send_notification_admin')->name('send_notification_admin');

        //edit end
        // Route::get('builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

        // Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

        // Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

        // Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

        // Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

        // Route::post(
        //     'generator_builder/generate-from-file',
        //     '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
        // )->name('io_generator_builder_generate_from_file');
    // });
// });
// });
 
// Route::get('{name?}', 'JoshController@showView');
