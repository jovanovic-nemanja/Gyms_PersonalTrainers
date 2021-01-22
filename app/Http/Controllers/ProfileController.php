<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Hash;

use App\Models\User;
use App\Models\Avatar;
use App\Models\Company;
use App\Models\Banner;
use App\Models\Membership;
use App\Models\Bbank;
use App\Models\Touristpass;
use App\Models\Document;
use App\Models\Personal_Membership;
use App\Models\Trainer;
use App\Models\Bank;

class ProfileController extends Controller
{
    // public function __invoke(User $user)
    //     {
    //         return $user;
    //     }
    public function index() {
        $data = array('name'=>"Virat Gandhi");
        
	//$this->send_email( "Login Success ", "Notification" );

        $avatar = Avatar::where('user_id',auth()->user()->id)->first();
        $company = Company::where('user_id',auth()->user()->id)->first();
        $membership = Membership::where('user_id',auth()->user()->id)->get();
        $banner = Banner::where('user_id',auth()->user()->id)->get();
        $document = Document::where('user_id',auth()->user()->id)->first();

        return view('user.myprofile')
        ->with('avatar', $avatar)
        ->with('document', $document)
        ->with('company_data', $company)
        ->with('membership', $membership)
        ->with('banner', $banner);
    }

    public function membership_index(){
        $membership = Membership::where('user_id',auth()->user()->id)->get();
        return view('user.membership')->with('membership', $membership);
    }

    public function send_email( $text, $subject ) {

        Mail::send([], [], function($message) use($text, $subject) {
            $message->from('vendors@gymscanner.com', 'GYMSCANNER');
            $message->to(auth()->user()->email,auth()->user()->name)->subject($subject)
			->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
                   <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
                   </head>".$text, 'text/html');;
        });
    }
    //avatar
    public function avatar(Request $request){

        if(getImageSize($request->avatar)[0] != 512 || getImageSize($request->avatar)[1] != 512)
            return back();
        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('upload/avatar'), $imageName);
        $path = "upload/avatar/".$imageName;
        $avatar = Avatar::where('user_id',auth()->user()->id)->first();
        if($avatar){
            $avatar->avatar = $path;
            $avatar->user_id = auth()->user()->id;
            $avatar->save();
        }else{
            $avatar_data = new Avatar();
            $avatar_data->avatar = $path;
            $avatar_data->user_id = auth()->user()->id;
            $avatar_data->save();
        }
        return back();
    }
    public function reset(Request $request) {
        $user_id = auth()->user()->id;
        
        Avatar::where('user_id',$user_id)->delete();
        Company::where('user_id',$user_id)->delete();
        Membership::where('user_id',$user_id)->delete();
        Banner::where('user_id',$user_id)->delete();
        return back();

    }

    //company
    public function company(Request $request) {
        
        if($request->hasfile('file')) {
            
            $image = $request->file('file');
            if(getImageSize($image)[0] != 1280 || getImageSize($image)[1] != 780)
                return response()->json(['error' => 'Error msg'], 404); // Status code here

                
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('upload'), $imageName);
    
            $imageUpload = new Banner();
            $imageUpload->image_path = $imageName;
            $imageUpload->user_id = auth()->user()->id;
            $imageUpload->save();
        } 

        $company = Company::where('user_id', auth()->user()->id)->first();

        if($request->all_check =="all") {

                $mon_from   =   "0";
                $mon_to     =   "24";

                $tue_from   =   "0";
                $tue_to     =   "24";
           
                $wed_from   =   "0";
                $wed_to     =   "24";
            
                $thu_from   =   "0";
                $thu_to     =   "24";
            
                $fri_from   =   "0";
                $fri_to     =   "24";
            
                $sat_from   =   "0";
                $sat_to     =   "24";
            
                $sun_from   =   "0";
                $sun_to     =   "24";

                $week_date   =   array("Monday","Tuesday","Wednesday", "Thursday","Friday","Saturday","Sunday");
        }else if($request->has('week_date')){
            if(in_array('Monday',$request->week_date)){
                $mon_from = $request->mon_from;
                $mon_to =   $request->mon_to;
            }else{
                $mon_from   =   "from";
                $mon_to     =   "to";
            }
            if(in_array('Tuesday',$request->week_date)){
                $tue_from = $request->tue_from;
                $tue_to =   $request->tue_to;
            }else{
                $tue_from   =   "from";
                $tue_to     =   "to";
            }
            if(in_array('Wednesday',$request->week_date)){
                $wed_from = $request->wed_from;
                $wed_to =   $request->wed_to;
            }else{
                $wed_from   =   "from";
                $wed_to     =   "to";
            }
            if(in_array('Thursday',$request->week_date)){
                $thu_from = $request->thu_from;
                $thu_to =   $request->thu_to;
            }else{
                $thu_from   =   "from";
                $thu_to     =   "to";
            }
            if(in_array('Friday',$request->week_date)){
                $fri_from = $request->fri_from;
                $fri_to =   $request->fri_to;
            }else{
                $fri_from   =   "from";
                $fri_to     =   "to";
            }
            if(in_array('Saturday',$request->week_date)){
                $sat_from = $request->sat_from;
                $sat_to =   $request->sat_to;
            }else{
                $sat_from   =   "from";
                $sat_to     =   "to";
            }
            if(in_array('Sunday',$request->week_date)){
                $sun_from = $request->sun_from;
                $sun_to =   $request->sun_to;
            }else{
                $sun_from   =   "from";
                $sun_to     =   "to";
            }
        }
        else {
            
            $mon_from   =   "from";
            $mon_to     =   "to";

            $tue_from   =   "from";
            $tue_to     =   "to";
       
            $wed_from   =   "from";
            $wed_to     =   "to";
        
            $thu_from   =   "from";
            $thu_to     =   "to";
        
            $fri_from   =   "from";
            $fri_to     =   "to";
        
            $sat_from   =   "from";
            $sat_to     =   "to";
        
            $sun_from   =   "from";
            $sun_to     =   "to";
        }
        
        if($company){
            $company->company_name  =   $request->company_name;
            $company->address       =   $request->address;
            $company->country       =   $request->country;
            $company->website       =   $request->website;
            $company->email         =   $request->email;
            $company->phone_number  =   $request->phone_number;
            $company->contact       =   $request->about;
            $company->message       =   $request->message;
            $company->Bodybuilding  = $request->Bodybuilding;
            $company->Bootcamp      = $request->Bootcamp;
            $company->EMS           = $request->EMS;
            $company->Gym           = $request->Gym;
            $company->Gymnastics    = $request->Gymnastics;
            $company->KickBoxing    = $request->KickBoxing;
            $company->MartialArts   = $request->MartialArts;
            $company->PersonalFitness    = $request->PersonalFitness;
            $company->Spinning      =   $request->Spinning;
            $company->weightlift    =   $request->weightlift;
            $company->yoga          =   $request->yoga;
            $company->pilates       =   $request->pilates;
            $company->mma           =   $request->mma;
            $company->boxing        =   $request->boxing;
            $company->karate        =   $request->karate;
            $company->crosstraing   =   $request->crosstraing;
            if($request->all_check){
                $company->week_date     =   json_encode($week_date);
            }else if($request->has('week_date')){
                $company->week_date     =   json_encode($request->week_date);
            } else {    
                $company->week_date     =    json_encode([""]);
            }
            $company->mon_from      =   $mon_from;
            $company->mon_to        =   $mon_to;
            $company->tue_from      =   $tue_from;
            $company->tue_to        =   $tue_to;
            $company->wed_from      =   $wed_from;
            $company->wed_to        =   $wed_to;
            $company->thu_from      =   $thu_from;
            $company->thu_to        =   $thu_to;
            $company->fri_from      =   $fri_from;
            $company->fri_to        =   $fri_to;
            $company->sat_from      =   $sat_from;
            $company->sat_to        =   $sat_to;
            $company->sun_from      =   $sun_from;
            $company->sun_to        =   $sun_to;
            $company->facebook      =   $request->facebook;
            $company->twitter       =   $request->twitter;
            $company->instagram     =   $request->instagram;
            $company->youtube       =   $request->youtube;
            $company->all_check     =   $request->all_check;
            $company->user_id       =   auth()->user()->id;
            $company->save();
        }else{
            $company_data = new Company();
            $company_data->company_name  = $request->company_name;
            $company_data->address       = $request->address;
            $company_data->country       = $request->country;
            $company_data->website       = $request->website;
            $company_data->email         = $request->email;
            $company_data->phone_number  = $request->phone_number;
            $company_data->contact       = $request->about;
            $company_data->message       = $request->message;
            $company_data->Bodybuilding  = $request->Bodybuilding;
            $company_data->Bootcamp      = $request->Bootcamp;
            $company_data->EMS           = $request->EMS;
            $company_data->Gym           = $request->Gym;
            $company_data->Gymnastics    = $request->Gymnastics;
            $company_data->KickBoxing    = $request->KickBoxing;
            $company_data->MartialArts   = $request->MartialArts;
            $company_data->PersonalFitness    = $request->PersonalFitness;
            $company_data->Spinning      =   $request->Spinning;
            $company_data->weightlift    =   $request->weightlift;
            $company_data->yoga          =   $request->yoga;
            $company_data->pilates       =   $request->pilates;
            $company_data->mma           =   $request->mma;
            $company_data->boxing        =   $request->boxing;
            $company_data->karate        =   $request->karate;
            $company_data->crosstraing   =   $request->crosstraing;
            if($request->all_check){
                $company_data->week_date     =   json_encode($week_date);
            }else if($request->has('week_date')){
                $company->week_date     =   json_encode($request->week_date);
            } else {    
                $company->week_date     =    json_encode([""]);
            }
            $company_data->mon_from      =   $mon_from;
            $company_data->mon_to        =   $mon_to;
            $company_data->tue_from      =   $tue_from;
            $company_data->tue_to        =   $tue_to;
            $company_data->wed_from      =   $wed_from;
            $company_data->wed_to        =   $wed_to;
            $company_data->thu_from      =   $thu_from;
            $company_data->thu_to        =   $thu_to;
            $company_data->fri_from      =   $fri_from;
            $company_data->fri_to        =   $fri_to;
            $company_data->sat_from      =   $sat_from;
            $company_data->sat_to        =   $sat_to;
            $company_data->sun_from      =   $sun_from;
            $company_data->sun_to        =   $sun_to;
            $company_data->facebook      =   $request->facebook;
            $company_data->twitter       =   $request->twitter;
            $company_data->instagram     =   $request->instagram;
            $company_data->youtube       =   $request->youtube;
            $company_data->all_check     =   $request->all_check;
            $company_data->user_id       =   auth()->user()->id;
            $company_data->save();
        }
	    // Mail::send([], [], function($message) {
        //     $message->from('vendors@gymscanner.com', 'GymScannerNotification');
        //     $message->to('admin@gymscanner.com','admin')->subject("Notification")
		// 	->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
        //            <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
        //            </head><h1>'".auth()->user()->email."'New profile submited!</h1>", 'text/html');
        // });

        return back();
    }
    //membership
    public function membership(Request $request){
        $membership = new Membership;
        $membership->price      =   $request->price;
        $membership->duration   =   $request->duration;
        $membership->service    =   $request->service;
        $membership->perk       =   $request->perk;
        if($request->app == "app") {
            $membership->app    =   $request->app;
        }else{
            $membership->app    = "computer";
        }
        $membership->user_id    =   auth()->user()->id;
        $membership->save();
        return back();
    }
    public function membership_del($id){
        $membership = Membership::find($id);
        $membership->delete();
        return back();
    }

    public function touristpass_save(Request $request){
        $membership = new Touristpass;
        $membership->price      =   $request->price;
        $membership->duration   =   $request->duration;
        $membership->facility    =   $request->facility;
        $membership->user_id    =   auth()->user()->id;
        $membership->save();
        return back();
    }
    
    public function touristpass() {
        $touristpass = Touristpass::where('user_id',auth()->user()->id)->get();
        return view('user.touristpass')->with('touristpass', $touristpass);
    }



    public function touristpass_delete($id) {
        $tourstpass = Touristpass::find($id);
        $tourstpass->delete();
        return back();
    }

    public function upload_document(Request $request) {
        if($request->hasfile('file')) {
            
            $document = $request->file('file');
                
            $documentName = $document->getClientOriginalName();
            $document->move(public_path('upload/documents'), $documentName);
            $doc = Document::where('user_id', auth()->user()->id);
            $doc->delete();
            
            $document_data = new Document();
            $document_data->user_id = auth()->user()->id;
            $document_data->document_path = $documentName;
            $document_data->save();
        }
        
        return back();
    }

    public function document_delete(Request $request)
    {
        $filename = $request->get('filename');
        Document::where('document_path', $filename)->delete();
        $path = public_path() . '/upload/documents/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }

    public function document() {
	$document = Document::where('user_id',auth()->user()->id)->first();
        return view('user.document')->with('document', $document);
    }

    //image banner
    public function banner(Request $request){
        $imageName = time().'.'.$request->image_name->extension();  
        $request->image_name->move(public_path('upload/banner'), $imageName);
        $path = "upload/banner/".$imageName;

        $banner_data = new Banner();
        $banner_data->user_id = auth()->user()->id;
        $banner_data->image_path  =     $path;
        $banner_data->save();

        return back();
    }

    public function banner_del($id){
        $banner = Banner::find($id);
        $banner->delete();
        return back();
    }
    //bank
    public function bank(){
        $bank = Bbank::where('user_id', auth()->user()->id)->get();
        return view('user.bank')->with('bank', $bank);
    }

    public function bank_update(Request $request){
        $bank = new Bbank();
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
        $bank = Bbank::find($id);
        $bank->delete();
        return back();
    }
    
    public function change_pass(Request $request) {
        return view('user.change_password');
    }

    public function save_pass(Request $request) {
        $user = User::where('id',auth()->user()->id)->first();
        $data = $request->all();
        
        if (Hash::check($request["currentPass"], $user->password)) { 
            $user->fill([
             'password' => Hash::make($request["newPass"])
             ])->save();

            $sen['res'] = true;
            $this->send_email("<h4>Dear Vendor,<br/><br/>
            You have successfully changed your password on your Gymscanner vendor dashboard on ".date("Y-m-d").".<br/><br/>
            No further action is required on your behalf.<br/><br/>
            If you believe you have not authorized this change, please contact us at admin@gymscanner.com<br/><br/>
            With best regards,<br/><br/>
            Gymscanner.com</h4>", "Password changed!");
         } else {
            $sen['res'] = false;
         }
         return json_encode( $sen );
    }

    public function submit_admin() {
        if (auth()->user()->role == 2) {
            $membership = Membership::where('user_id',auth()->user()->id)->get();
            $touristpass = Touristpass::where('user_id',auth()->user()->id)->get();
            $document = Document::where('user_id',auth()->user()->id)->get();
            $bank = Bbank::where('user_id',auth()->user()->id)->get();
            $company = Company::where('user_id',auth()->user()->id)->get();
            
            return view('user.submit_admin', ['membership' => count($membership), 
                                              'touristpass'=>count($touristpass), 
                                              'document'=>count($document),
                                              'bank'=>count($bank),
                                              'profile'=>count($company)
                                              ]);
        }
        elseif (auth()->user()->role = 3) {
            $membership = Personal_membership::where('user_id',auth()->user()->id)->get();
            $bank = Bank::where('user_id',auth()->user()->id)->get();
            $document = Document::where('user_id',auth()->user()->id)->get();
            $trainer = Trainer::where('user_id',auth()->user()->id)->get();
            
            return view('user.submit_admin',   ['membership' => count($membership),
                                                'document'=>count($document),
                                                'bank'=>count($bank),
                                                'profile'=>count($trainer)
                                                ]);
        }
    }

    public function send_notification_admin() {
        Mail::send([], [], function($message) {
            $message->from('vendors@gymscanner.com', 'Gymscanner.com');
            $message->to('admin@gymscanner.com','admin')->subject("Notification")
			->setBody("<head><meta http-equiv='Content-Language' content='en-us'>
                   <meta http-equiv='Content-Type' content='text/html; charset=windows-1252'>
                   </head><h4>Dear Team Gymscanner,<br/><br/>
            Anew profile has been submitted for review.<br/><br/>
            Please review the following profile.<br/>Gym Name:'".auth()->user()->name."' <br/>Country:'".auth()->user()->country."'<br/>Email:'".auth()->user()->email."'<br/><br/><br/>
With best regards,<br/>Gymscanner.com</h4>", 'text/html');
        });  
        return back();
    }
	
	public function thankyou()
	{
	
	    return view('thanks');
	}
	
	public function verify_email()
	{
	
	    return view('auth.verify');
	}
	
	
	public function login_view()
	{
	
	    return view('auth.login');
	}
	
	public function view_dashboard()
	{
	
	   return view('home');
	
	}
	public function logout()
	{
	
	  auth()->logout();
	  return redirect('/');
	
	}

}
