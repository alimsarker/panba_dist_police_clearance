<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PsStationName;
use App\Models\AssignOfficerName;
use App\Models\ClearanceDocument;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ClearanceDocumentController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth'); 
    }

            public function ViewClearanceDocument(){
                
                
                $data['allData'] = ClearanceDocument::all();
                $data['assignofficer'] = AssignOfficerName::all();
                $data['psStation'] = PsStationName::all();
                return view('backend.doc-clearance.view_doc_clearance',$data);

            }

            public function AddDataClearance(){

                $data['psStation'] = PsStationName::all();
                $data['assignofficer'] = AssignOfficerName::all();
               
                return view('backend.doc-clearance.add_doc_clearance',$data);

            }


 public function StoreDataClearance(Request $request){

    $this->validate($request,[
        'mobile_no' => 'required|max:11|min:11|unique:clearance_documents',
      
        'ref_no' => 'required|unique:clearance_documents',
    ]);

    

  
    

    $user = Auth::user()->name; 

    $data = new ClearanceDocument();
    $data->ps_name_id = $request->ps_name_id;  
    $data->assign_officer_id = $request->assign_officer_id;
    $data->assign_officer_cell = $request->assign_officer_cell;
    $data->applicant_name = $request->applicant_name;
    $data->father_name = $request->father_name;
    $data->spouse = $request->spouse;
    $data->mobile_no = $request->mobile_no;
    $data->village_road_no = $request->village_road_no;
    $data->post_post_code = $request->post_post_code;
    $data->upazilla = $request->upazilla;
    $data->dist = $request->dist;
    $data->ref_no = $request->ref_no;
    $data->apply_date = $request->apply_date;
    $data->entry_by_ps_person = $user;
    $data->status = "Pending";
    $data->entry_person_mobile = $request->entry_person_mobile;

     $data->save();

    


     $notification = array(
        'message' => 'Applicant Data  Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('clearance.data.view')->with($notification); 

    } //end method

        public function EditDataClearance($id){

            $data['editData']  = ClearanceDocument::find($id);
            $data['psStation'] = PsStationName::all();
            $data['assignofficer'] = AssignOfficerName::all();
            return view('backend.doc-clearance.edit_doc_clearance',$data);

        }//end method  

       public function UpdateDataClearance(Request $request, $id){

        $this->validate($request,[
            'mobile_no' => 'required|max:11|min:11|unique:clearance_documents',
          
            'ref_no' => 'required|unique:clearance_documents',
        ]);

            if ($request->assign_officer_id == NULL) {
                $notification = array(
                    'message' => 'Assign Officer Name Data Field!!! Required!!!',
                    'alert-type' => 'error'
                );
                return Redirect()->back()->with($notification); 
            
            }else{
                $user = Auth::user()->name; 
                $data = ClearanceDocument::find($id);
              
                $data->ps_name_id = $request->ps_name_id;  
                $data->assign_officer_id = $request->assign_officer_id;
                $data->assign_officer_cell = $request->assign_officer_cell;
                $data->applicant_name = $request->applicant_name;
                $data->father_name = $request->father_name;
                $data->spouse = $request->spouse;
                $data->mobile_no = $request->mobile_no;
                $data->village_road_no = $request->village_road_no;
                $data->post_post_code = $request->post_post_code;
                $data->upazilla = $request->upazilla;
                $data->dist = $request->dist;
                $data->ref_no = $request->ref_no;
                $data->apply_date = $request->apply_date;
                $data->entry_by_ps_person = $user;
                $data->entry_person_mobile = $request->entry_person_mobile;
             
                 $data->save();
          
                     
            }  //End else   
                
          
            $notification = array(
                'message' => 'Applicant Data Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('clearance.data.view')->with($notification);

         } //end method  

         public function DataClearanceDeleted($id){

            ClearanceDocument::find($id)->delete();
              
            $notification = array(
                'message' => 'Applicant Data Deleted Successfully',
                'alert-type' => 'warning'
            );
            return Redirect()->route('clearance.data.view')->with($notification); 
        
         }//end method 
            
}
