<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\PsStationName;
use App\Models\AssignOfficerName;
use App\Models\ClearanceDocument;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class StatusController extends Controller
{
     public function __construct()
    {
       $this->middleware('auth'); 
    }
    

   // PENDING CLEARANCE
   public function ViewStatusPending(){

          $pendingData = ClearanceDocument::with('psstation')->where('status','Pending')->orderBy('id','DESC')->get();
 
          return view('backend.status.pending',compact('pendingData'));

   } // End Method


   // DETAILS PENDING APPLICANT

   public function DetailsDataClearance($id){     
    
  
      $pendingDataclearance = ClearanceDocument::with(['psstation','assign_officer'])->where('id',$id)->first();
  
      return view('backend.status.details_pending',compact('pendingDataclearance'));

     } // End Method

   // RECEIVED I/O DOCUMENT

     public function DoceIoReceived(){

          $recDocIo = ClearanceDocument::with('psstation')->where('status','ReceivedIO')->orderBy('id','DESC')->get();
          
 
          return view('backend.status.received_docs_io',compact('recDocIo'));

 
     }// End Method

 
       //  I/O DOCUMENTs Submitted To PS

     public function DocsSubmitPsIo(){

          $docSubIo = ClearanceDocument::with('psstation')->where('status','ReceivedPS')->orderBy('id','DESC')->get();
 
          return view('backend.status.docs_sub_io',compact('docSubIo'));

     }// End Method


     //  PS SEND DSB

     public function PsSendDsb(){

          $psSendDsb = ClearanceDocument::with('psstation')->where('status','SendDSB')->orderBy('id','DESC')->get();
 
          return view('backend.status.ps_send_dsb',compact('psSendDsb'));

     }// End Method      

       //  PS SEND DSB        

       public function DsbReceDocs(){

          $dsbrecDocs = ClearanceDocument::with('psstation')->where('status','ReceivedDSB')->orderBy('id','DESC')->get();
 
          return view('backend.status.dsb_rece_docs',compact('dsbrecDocs'));

     }// End Method 

                                    //  Waitting For SP Sir Sign         

                                        // public function WaitSPSign(){

                                        //      $waitspsign = ClearanceDocument::with('psstation')->where('status','WaitSPsign')->orderBy('id','DESC')->get();
                                   
                                        //      return view('backend.status.wait_sp_sign',compact('waitspsign'));

                                        // }// End Method 

      //    SP Sir Sign OK        

      public function OkSPSign(){

          $spsignok = ClearanceDocument::with('psstation')->where('status','SPsigned')->orderBy('id','DESC')->get();
 
          return view('backend.status.sp_sign_ok',compact('spsignok'));

     }// End Method 

      //    SEND TO MOFA                  

      public function SendMofa(){

          $sendMofa = ClearanceDocument::with('psstation')->where('status','SendMOFA')->orderBy('id','DESC')->get();
 
          return view('backend.status.send_mofa',compact('sendMofa'));

     }// End Method 

      //    Received From MOFA                  

      public function ReceivedFromMofa(){

          $receivedFromMofa = ClearanceDocument::with('psstation')->where('status','ReceivedDeliverySec')->orderBy('id','DESC')->get();
 
          return view('backend.status.received_from_mofa',compact('receivedFromMofa'));

     }// End Method 

                                                                 //   Waitting For Delivered                 

                                                                 //  public function WaittingDelivered(){

                                                                 //      $waittngDeliver = ClearanceDocument::with('psstation')->where('status','WaitDelivery')->orderBy('id','DESC')->get();
                                                            
                                                                 //      return view('backend.status.watting_for_deliver',compact('waittngDeliver'));

                                                                 // }// End Method 


       //    DOCUMENT Delivered                 

       public function DocsDelivered(){

          $docsDeliver = ClearanceDocument::with('psstation')->where('status','Delivered')->orderBy('id','DESC')->get();
 
          return view('backend.status.document_deliver',compact('docsDeliver'));

     }// End Method



                                                                 // UPDATE STATUS

     //Received I/O

     public function ReceivedIo($id){
          $dateri = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'ReceivedIO',           
               'io_rece_date' => $dateri,
          ]);


          $notification = array(
               'message' => 'Assign Officer Received Document Successfully',
               'alert-type' => 'success'
           );
       
           return redirect()->route('clearance.pending.view')->with($notification);  

     } //end Method
     

     //Received PS

     public function ReceivedPs($id){
          $daterp = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'ReceivedPS',
               'io_sub_date' => $daterp,
           ]);


          $notification = array(
               'message' => ' Successfully PS Received Document From I/O',
               'alert-type' => 'success'
           );
       
           return redirect()->route('clearance.docs.received.io')->with($notification);  

     } //end Method RSendDsb

     //Send DSB 

     public function PSendDsb($id){
          $pddate = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'SendDSB',
               'dsb_send_date' => $pddate,
           ]);


          $notification = array(
               'message' => ' Successfully PS SEND Document To DSB',
               'alert-type' => 'success'
           );
       
           return redirect()->route('io.docs.submit.ps')->with($notification);  

     } //end Method 

     
     // DSB Received

     public function RecievedDsb($id){
          $rpdata = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'ReceivedDSB',
               'dsb_rece_date' => $rpdata,
           ]);


          $notification = array(
               'message' => ' Successfully Document Received DSB',
               'alert-type' => 'success'
           );
       
           return redirect()->route('ps.send.dsb')->with($notification);  

     } //end Method 

                                             // WAITTING FOR SP SIGN  

                                             // public function WitSP($id){
                                             //      $wsdate = Carbon::now()->format('M d Y');
                                             //      ClearanceDocument::findOrFail($id)->update([
                                             //           'status' => 'WaitSPsign',
                                             //           'wait_sign_date' => $wsdate,
                                             //       ]);


                                             //      $notification = array(
                                             //           'message' => ' Successfully Document Waitting For SP Sir Sign',
                                             //           'alert-type' => 'success'
                                             //       );
                                             
                                             //       return redirect()->route('dsb.rece.docs')->with($notification);  

                                             // } //end Method 

      // WAITTING FOR SP SIGN OK 

      public function SPSignOk($id){
          $sdate = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'SPsigned',
               'sp_sign_date' => $sdate,
           ]);


          $notification = array(
               'message' => ' Successfully Document  SP Sir Sign OK.',
               'alert-type' => 'success'
           );
       
           return redirect()->route('dsb.rece.docs')->with($notification);  

     } //end Method 

       // DOCS SEND TO MOFA  

       public function SendDocsMofa($id){
          $sddate = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'SendMOFA',
               'mofa_send_date' => $sddate,
           ]);


          $notification = array(
               'message' => ' Successfully  DOCS SEND TO MOFA.',
               'alert-type' => 'success'
           );
       
           return redirect()->route('sp.sign.ok')->with($notification);  

     } //end Method 

       // DOCS RECEIVED FROM MOFA  

       public function DocsReceivedFromMofa($id){
          $rfmdate = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'ReceivedDeliverySec',
               'deliv_sec_rece_date' => $rfmdate,
           ]);


          $notification = array(
               'message' => ' Successfully DOCS RECEIVED FROM MOFA  .',
               'alert-type' => 'success'
           );
       
           return redirect()->route('send.mofa')->with($notification);  

     } //end Method 

                                   // WAITTING FOR DELIVERY  

                                   // public function WaittingForDelivery($id){
                                   //      $wdate = Carbon::now()->format('M d Y');
                                   //      ClearanceDocument::findOrFail($id)->update([
                                   //           'status' => 'WaitDelivery',
                                   //           'wait_deliv_date' => $wdate,
                                   //       ]);


                                   //      $notification = array(
                                   //           'message' => ' Successfully DOCS WAITTING FOR DELIVERY .',
                                   //           'alert-type' => 'success'
                                   //       );
                                   
                                   //       return redirect()->route('received.from.mofa')->with($notification);  

                                   // } //end Method 

      // DOCUMENT DELIVERY  

      public function DocumentDelivered($id){
          $ddate = Carbon::now()->format('M d Y');
          ClearanceDocument::findOrFail($id)->update([
               'status' => 'Delivered',
               'delivered_date' => $ddate,
           ]);


          $notification = array(
               'message' => ' Successfully DOCUMENT DELIVERY  .',
               'alert-type' => 'success'
           );
       
           return redirect()->route('received.from.mofa')->with($notification);  

     } //end Method 

        




}
