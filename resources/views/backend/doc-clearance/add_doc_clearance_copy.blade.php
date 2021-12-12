@extends('admin.admin_master')

@section('admin')



<section class="content">

<!-- Basic Forms -->

 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Police Station Name</h4>
     
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="post" action="{{ route('ps.name.store') }}">@csrf
             <div class="row">
                    <div class="col-12">
                        
                    <div class="row">
                        <div class="col-md-3">
  
                            <div class="form-group">
                                <h5>PS Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="ps_name_id" class="form-control" required="" > </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            
                                <div class="form-group">
                                    <h5>Applicant Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="applicant_name" class="form-control" required="" > </div>
                                </div>

                        </div>
                        <div class="col-md-3">

                                <div class="form-group">
                                    <h5>Father Name (Applicant)<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="father_name" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Spouse Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="spouse" class="form-control" required="" > </div>
                                </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Mobile Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="mobile_no" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5> Village/ Road No<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="village_road_no" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
  
                            <div class="form-group">
                                <h5>Post and Post Code <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="post_post_code" class="form-control" required="" > </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            
                            <div class="form-group">
                                <h5>Upazilla/ Police Station <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="upazilla" class="form-control" required="" > </div>
                            </div>

                    </div>
                    </div>
                    <div class="row">
                        
                       
                        <div class="col-md-3">

                                <div class="form-group">
                                    <h5>District <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="dist" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>App Ref. Number <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="ref_no" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Apply Date<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="apply_date" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>IO Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="assign_officer_id" class="form-control" required="" > </div>
                                </div>
                        </div>
                    </div>
                   
                    <!-- <div class="row">                   
                       
                        <div class="col-md-3">
                            
                                <div class="form-group">
                                    <h5>Received Date (IO) <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="assign_officer_rece_date" class="form-control" required="" > </div>
                                </div>

                        </div>
                            <div class="col-md-3">

                                <div class="form-group">
                                    <h5>Submitted Date To PS (IO)<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="assign_officer_sub_date" class="form-control" required="" > </div>
                                </div>
                            </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Sent to DSB Date (By PS) <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="ps_sent_to_dsb_date" class="form-control" required="" > </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>PS Send By (Name) <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="ps_sent_dsb_by" class="form-control" required="" > </div>
                                </div>
                        </div>
                      
                    </div>
                    <div class="row">
                       
                       
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>PS Send By (Mobile No) <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="ps_sent_dsb_person_cell" class="form-control" required="" > </div>
                                </div>
                           </div>
                        
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Entry By <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="entry_by_ps_person" class="form-control" required="" > </div>
                                </div>
                        </div>
                        <div class="col-md-3">
  
                            <div class="form-group">
                                <h5>Cell No (Entry By) <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="entry_person_cell" class="form-control" required="" > </div>
                            </div>

                        </div>

                    </div> -->
                   
                     
                
                        <div style="float: right;" class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                        </div>
                    </div>
               </div>
           </form>

       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->
 
</section>







@endsection