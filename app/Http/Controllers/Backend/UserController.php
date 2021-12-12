<?php

namespace App\Http\Controllers\Backend;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ClearanceDocument;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function ViewUser(){
        $data['allData'] = User::all();
        return view('backend.users.view_users',$data);
    }

    public function AddUser(){

        return view('backend.users.add_users');

    }

    public function UserStore(Request $request){

        $validateData = $request->validate([
            'email' =>  'required|unique:users',
            'name' => 'required',
           

        ]);

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = bcrypt($request->password);

        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/user_images/'.$data->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_images'),$filename);
    		$data['image'] = $filename;
    	}
     
 	    $data->save();

         $notification = array(
    		'message' => 'USER Registration Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('user.view')->with($notification);       

    }


    public function UserEdit($id){

        $editData = User::find($id);

        return view('backend.users.edit_user',compact('editData'));

    }

    public function UserUpdate(Request $request,$id){


        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        
        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/user_images/'.$data->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_images'),$filename);
    		$data['image'] = $filename;
    	}
        $data->save();
     
     
 	   

         $notification = array(
    		'message' => 'USER Registrat  Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('user.view')->with($notification); 
    }



    public function UserDeleted($id){

        $user = User::find($id);
        $user->delete();

        $notification = array(
    		'message' => 'USER Registration Deleted Successfully',
    		'alert-type' => 'warning'
    	);

    	return redirect()->route('user.view')->with($notification); 
    }


//************************ */ PROFILE SECTION START ************************************************** FROM

        public function ViewProfile(){
            
            $id = Auth::user()->id;
            $user = User::find($id);

            return view('backend.users.view_profile',compact('user'));

        }

        public function EditProfile(){
            
            $id = Auth::user()->id;
            $editData = User::find($id);

            return view('backend.users.edit_profile',compact('editData'));

        }


        public function UpdateProfile(Request $request){

            $data = User::find(Auth::user()->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->usertype = $data->usertype;
            $data->role = $data->role;

            if ($request->file('image')) {
                $file = $request->file('image');
                @unlink(public_path('upload/user_images/'.$data->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/user_images'),$filename);
                $data['image'] = $filename;
            }
            $data->save();

            $notification = array(
               'message' => 'Profile Data Updated Successfully',
               'alert-type' => 'success'
           );
   
           return redirect()->route('profile.view')->with($notification);  

        }

        // ************************** CHANGE PASSWORD ****************************

        public function ChangePassword(){

            return view('backend.users.edit_password');
        }

        public function UpdatePassword(Request $request){

            $validateData = $request->validate([
                'oldpassword' =>  'required',
                'password' => 'required|confirmed',    
            ]);

            $hashedPassword = Auth::user()->password;

            if (Hash::check($request->oldpassword,$hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login');
            }else{
                return redirect()->back();
            }

        } //end method


        //////////////// Tracking Controller /////////////////////////////////////////  


        public function AplicantClearanceTrack(Request $request){
                $applicantTrac = $request->mobile;
                $track = ClearanceDocument::where('mobile_no',$applicantTrac)->first();

                if($track){
                    // echo "<pre>";
                    // print_r($track);
                    return view('frontend.traking.mobile_track',compact('track'));
                }else{
                    
                    $notification = array(
                        'message' => 'This Mobile Number Is Invalid',
                        'alert-type' => 'error'
                    );
            
                    return redirect()->back()->with($notification); 

                }

        } //end method

}


