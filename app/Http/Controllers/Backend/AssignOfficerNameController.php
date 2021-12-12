<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\PsStationName;
use App\Models\AssignOfficerName;
use App\Http\Controllers\Controller;

class AssignOfficerNameController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth'); 
    }

    public function ViewPoliceOfficerName(){

        $data['allData'] = AssignOfficerName::select('ps_name_id')->groupBy('ps_name_id')->get();
        return view('backend.assign-officer.view_assign_officer_name',$data);   
    
       }
    
    
       public function AddPoliceOfficerName(){

        $data['psStation'] = PsStationName::all();
        return view('backend.assign-officer.add_assign_officer_name',$data);
        
       }
    
    
       public function StorePoliceOfficerName(Request $request){
                                                              

        $countPs = count($request->assign_officer_name);
        if ($countPs !=NULL) {
                for ($i=0; $i <$countPs ; $i++) { 
                    
                $assign_ps = new AssignOfficerName();
                $assign_ps->ps_name_id = $request->ps_name_id;
                $assign_ps->assign_officer_name  = $request->assign_officer_name[$i];
                $assign_ps->assign_officer_name = $request->assign_officer_name[$i];
                $assign_ps->assign_officer_rank = $request->assign_officer_rank[$i];
                $assign_ps->assign_officer_cell = $request->assign_officer_cell[$i];
                $assign_ps->save();
    
                } // End of for condition 
            
        }//End of if condition
    
         $notification = array(
            'message' => 'Assign Officer Name  Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('officer.name.view')->with($notification);    
    
       }
    
            public function PoliceOfficerNameEdit($ps_name_id){

                        $data['editData'] = AssignOfficerName::where('ps_name_id', $ps_name_id)->orderBy('ps_name_id', 'asc')->get();
                            //  dd($data['editData']->toArray());
                         $data['pslist'] = PsStationName::all();              
             
                     return view('backend.assign-officer.edit_assign_officer_name',$data);
 
                   
    
            }
    
    public function PoliceOfficerNameUpdate(Request $request, $ps_name_id){



        if ($request->assign_officer_name == NULL) {
            $notification = array(
                'message' => 'Assign Officer Name!!! Required!!!',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification); 
        
        }else{

            $countPs = count($request->assign_officer_name);
            AssignOfficerName::where('ps_name_id',$ps_name_id)->delete();
                  for ($i=0; $i <$countPs ; $i++) {  
                    
                $assign_ps = new AssignOfficerName();
                $assign_ps->ps_name_id = $request->ps_name_id;
                $assign_ps->assign_officer_name  = $request->assign_officer_name[$i];
                $assign_ps->assign_officer_name = $request->assign_officer_name[$i];
                $assign_ps->assign_officer_rank = $request->assign_officer_rank[$i];
                $assign_ps->assign_officer_cell = $request->assign_officer_cell[$i];
                $assign_ps->save();
      
                  } // End of for condition  
       
    }  //End else
        $notification = array(
            'message' => 'Assign Officer Name   Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('officer.name.view')->with($notification); 
                                                                           
    
       } //End Method      
    
                                                                              
                                                                            
                                                                               
    
    
    
    public function PoliceOfficerNameDeleted($id){
    
        $officers = AssignOfficerName::find($id);
        $officers->delete();
    
        $notification = array(
            'message' => 'Assign Officer Name  Deleted Successfully',
            'alert-type' => 'warning'
        );
    
        return redirect()->route('officer.name.view')->with($notification); 
    }


    public function PoliceOfficerNameDetails($ps_name_id){
           
        $data['detailsData'] = AssignOfficerName::where('ps_name_id', $ps_name_id)->orderBy('ps_name_id', 'asc')->get();
    
        return view('backend.assign-officer.details_assign_officer_name',$data);
       }


       public function PoliceOfficerNameDelete(){
        
        $data['allData'] = AssignOfficerName::all();
        $data['psstation'] = PsStationName::all();
      
    
        return view('backend.assign-officer.delete_assign_officer_name',$data);
    
    }

    public function OfficerNameDeleted($ps_name_id){

        $post =AssignOfficerName::where('ps_name_id',$ps_name_id)->first();

        if ($post != null) {
            $post->delete();
            return redirect()->route('officer.name.view')->with(['message'=> 'Successfully deleted!!']);
        }
    
        return redirect()->route('officer.name.view')->with(['message'=> 'Wrong ID!!']);



    
     }


}
