<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PsStationName;
use App\Models\AssignOfficerName;
use App\Models\ClearanceDocument;

class GetOfficerController extends Controller
{


    public function __construct()
    {
       $this->middleware('auth'); 
    }
    
    public function GetOfficer(Request $request){
               
        $ps_name_id = $request->ps_name_id;
        $allData = AssignOfficerName::where('ps_name_id',$ps_name_id)->get();
        
        return response()->json($allData);

    } 

    

    public function GetOffMobile(Request $request){
               
        $ps_name_id = $request->assign_officer_id;
        $allData = AssignOfficerName::where('id',$ps_name_id)->get();
        
        return response()->json($allData);

    } 

}
