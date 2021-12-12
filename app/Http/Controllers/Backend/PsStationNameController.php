<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\PsStationName;
use App\Http\Controllers\Controller;

class PsStationNameController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth'); 
    }

    
   public function ViewPoliceStationName(){

    $data['allData'] = PsStationName::all();
    return view('backend.ps-name.view_ps_name',$data);

   }


   public function AddPoliceStationName(){

    return view('backend.ps-name.add_ps_name');

   }


   public function StorePsName(Request $request){

    $validateData = $request->validate([
        'ps_name' =>  'required|unique:ps_station_names'
    ]);

    $data = new PsStationName();
    $data->ps_name = $request->ps_name;  
 
     $data->save();

     $notification = array(
        'message' => 'POLICE STATION NAME  Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('station.name.view')->with($notification);    

   }

        public function PsNameEdit($id){

            $editData = PsStationName::find($id);

            return view('backend.ps-name.edit_ps_name',compact('editData'));

        }

public function PsNameUpdate(Request $request,$id){


    $data = PsStationName::find($id);
 
    $data->ps_name = $request->ps_name;
   
    $data->save();

     $notification = array(
        'message' => 'POLICE STATION NAME  Updated Successfully',
        'alert-type' => 'info'
    );

    return redirect()->route('station.name.view')->with($notification); 
}



public function PsNameDeleted($id){

    $ps = PsStationName::find($id);
    $ps->delete();

    $notification = array(
        'message' => 'POLICE STATION NAME Deleted Successfully',
        'alert-type' => 'warning'
    );

    return redirect()->route('station.name.view')->with($notification); 
}



}
