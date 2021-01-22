<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personal_avatar;
use App\Models\Trainer;
use App\Models\Personal_Membership;
use App\Models\Bank;
use App\Models\Document;


class PersonalController extends Controller
{
    // public function __invoke(User $user)
    //     {
    //         return $user;
    //     }
    public function index(){
        $avatar = Personal_Avatar::where('user_id',auth()->user()->id)->first();
        $company = Trainer::where('user_id',auth()->user()->id)->first();
        $membership = Personal_Membership::where('user_id',auth()->user()->id)->get();
        $document = Document::where('user_id',auth()->user()->id)->first();

        return view('personal.personal_profile')
        ->with('document', $document)
        ->with('personal_avatar', $avatar)
        ->with('company_data', $company)
        ->with('membership', $membership);  
    }
    
    public function personal_membership_index(){
        $membership = Personal_Membership::where('user_id',auth()->user()->id)->get();
        return view('personal.personal_membership')->with('membership', $membership);
    }

    public function reset(Request $request) {
        $user_id = auth()->user()->id;

        Personal_Avatar::where('user_id',$user_id)->delete();
        Trainer::where('user_id',$user_id)->delete();
        Personal_Membership::where('user_id',$user_id)->delete();
        return back();
    }
    //avatar
    public function avatar(Request $request){
        if(getImageSize($request->avatar)[0] != 512 || getImageSize($request->avatar)[1] != 512)
            return back();
        $imageName = time().'.'.$request->avatar->extension();  
        $request->avatar->move(public_path('upload/avatar'), $imageName);
        $path = "upload/avatar/".$imageName;
        $avatar = Personal_avatar::where('user_id',auth()->user()->id)->first();
        if($avatar){
            $avatar->avatar = $path;
            $avatar->user_id = auth()->user()->id;
            $avatar->save();
        }else{
            $avatar_data = new personal_avatar();
            $avatar_data->avatar = $path;
            $avatar_data->user_id = auth()->user()->id;
            $avatar_data->save();
        }
        return back();
    }
    //company
    public function personal_company(Request $request){
      
        $company = Trainer::where('user_id', auth()->user()->id)->first();
       
        if($company){
            $company->company_name      =   $request->company_name;
            //$company->telephone         =   $request->telephone;
            $company->country           =   $request->country;
            $company->website           =   $request->website;
            $company->email             =   $request->email;
            $company->phone_number      =   $request->phone_number;
            $company->gender            =   $request->gender;
            $company->session           =   $request->session;
            $company->personal_training =   $request->personal_training;
            $company->group_training    =   $request->group_training;
            $company->nutrition         =   $request->nutrition;
            $company->one_training      =   $request->one_training;
            $company->facebook          =   $request->facebook;
            $company->instagram         =   $request->instagram;
            $company->twitter           =   $request->twitter;
//            $company->youtube           =   $request->youtube;
            $company->youtube_link      =   $request->youtube_link;
            $company->user_id           =   auth()->user()->id;
            $company->save();
        }else{
            $company_data = new Trainer();
            $company_data->company_name      =   $request->company_name;
            //$company_data->telephone         =   $request->telephone;
            $company_data->country           =   $request->country;
            $company_data->website           =   $request->website;
            $company_data->email             =   $request->email;
            $company_data->phone_number      =   $request->phone_number;
            $company_data->gender            =   $request->gender;
            $company_data->session           =  $request->session;
            $company_data->personal_training =  $request->personal_training;
            $company_data->group_training    =  $request->group_training;
            $company_data->nutrition         =  $request->nutrition;
            $company_data->one_training      =  $request->one_training;
            $company_data->facebook          =  $request->facebook;
            $company_data->instagram         =  $request->instagram;
            $company_data->twitter           =  $request->twitter;
//            $company_data->youtube           =   $request->youtube;
            $company_data->youtube_link      =   $request->youtube_link;
            $company_data->user_id           =   auth()->user()->id;
            $company_data->save();
        }
	    // Mail::send([], [], function($message) {
        //     $message->from('vendors@gymscanner.com', 'GymScannerNotification');
        //     $message->to('admin@gymscanner.com','admin')->subject("Notification")
		// 	->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
        //            <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
        //            </head><h1>'".auth()->user()->email."'New profile submited!</h1>", 'text/html');;
        // });
        return back();
    }
    //membership
    public function personal_membership(Request $request){
   
        $membership = new Personal_Membership;
        $membership->price      =   $request->price;
        $membership->duration   =   $request->duration;
        $membership->service    =   $request->service;
        $membership->perk       =   $request->perk;
        if($request->app == "app"){
            $membership->app    =   $request->app;
        }else{
            $membership->app    = "computer";
        }
        $membership->user_id    =   auth()->user()->id;
        $membership->save();
        return back();
    }
    public function personal_membership_del($id){
        $membership = Personal_Membership::find($id);
        $membership->delete();
        return back();
    }
    public function bank(){

        $bank = Bank::where('user_id', auth()->user()->id)->get();
        return view('personal.bank')->with('bank', $bank);
    }
    public function bank_update(Request $request){
        $bank = new Bank();
        $bank->bank_name = $request->bank_name;
        $bank->bank_number = $request->bank_number;
        $bank->swift_code = $request->swift_code;
        $bank->holder_name = $request->holder_name;
        $bank->iban = $request->iban;
        $bank->user_id = auth()->user()->id;
        $bank->save();
        return back();
    }
    public function bank_delete($id){
        $bank = Bank::find($id);
        $bank->delete();
        return back();
    }

    public function change_pass(Request $request) {
        return view('personal.change_password');
    }
}
