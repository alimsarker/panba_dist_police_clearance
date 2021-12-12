@extends('admin.admin_master')

@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="content">

<!-- Basic Forms -->

 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Clearance Applicant data</h4>
         
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="post" action="{{ route('clearance.data.store') }}">@csrf
             <div class="row">
                    <div class="col-12">
                        
                    <div class="row">
                        <div class="col-md-3">
  
                            <div class="form-group">
                                <h5>PS Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <select name="ps_name_id" id="ps_name_id" required="" class="form-control">
                                    <option value="" selected="" disabled="">Select Class</option>
                                    @foreach($psStation as $ps)
                                    <option value="{{ $ps->id }}">{{ $ps->ps_name }}</option>
                                    @endforeach	 
                                </select>
                                
                            </div>
                            </div>
                        </div>
                          <div class="col-md-3">

                          <div class="form-group">
                          <h5>Officer Name <span class="text-danger"> *</span></h5>
                          <div class="controls">
                          <select name="assign_officer_id" id="assign_officer_id"  required="" class="form-control">
                            <option  selected="" >Select Officer Name</option>
                                                        
                            
                          </select>
                          </div>		 
                          </div>

                            </div> <!-- End Col md 3 --> 
                       
                         <div class="col-md-3">

                        <div class="form-group">
                        <h5>Officer Mobile No <span class="text-danger"> *</span></h5>
                        <div class="controls">
                        <select name="assign_officer_cell" id="assign_officer_cell"  required="" class="form-control">
                          <option  selected="" >Select Officer Mobile No</option>
                                                      
                          
                        </select>
                        </div>		 
                        </div>

                          </div> <!-- End Col md 3 -->

                      
                        <div class="col-md-3">
                            
                                <div class="form-group">
                                    <h5>Applicant Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="applicant_name" class="form-control" required="" > </div>
                                </div>

                        </div>
                     
                        
                    </div>
                    <div class="row">
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

                        
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Mobile Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="mobile_no" class="form-control  @error('mobile_no') is-invalid @enderror""> </div>
                                </div>
                                @error('mobile_no')
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5> Village/ Road No<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="village_road_no" class="form-control" required="" > </div>
                                </div>
                        </div>
                    </div>
                    <div class="row"> 
                    
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
                                <input type="text" name="ref_no" class="form-control  @error('ref_no') is-invalid @enderror" > </div>
                            </div>
                            @error('ref_no')
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        </div>
                        </div>
                  
                    <div class="row">
                        
                       
                        

                                
                        <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Apply Date<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="date" name="apply_date" class="form-control" required="" > </div>
                                </div>
                        </div>
                       
                      
                      

                   
                        <!-- <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Entry By <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="entry_by_ps_person" class="form-control" required="" > </div>
                                </div>
                        </div> -->
                        <div class="col-md-3">
  
                            <div class="form-group">
                                <h5>Cell No (Entry By) <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="text" name="entry_person_mobile" class="form-control" required="" > </div>
                            </div>

                        </div>
                       </div>
                    
                   
                 
                   
                     
                
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


<script type="text/javascript">
  $(function(){
    $(document).on('change','#ps_name_id',function(){
      var ps_name_id = $('#ps_name_id').val();
      $.ajax({
        url:"{{ route('getofficer.name') }}",
        type:"GET",
        data:{ps_name_id:ps_name_id},
        success:function(data){
          var html = '<option value="">Select IO NAME</option>';
          $.each( data, function(key, v) {
            html += '<option value="'+v.id+'">'+v.assign_officer_name+'</option>';
          });
          $('#assign_officer_id').html(html);
        }
      });
    });
  });

  


</script>

<script type="text/javascript">
  $(function(){
    $(document).on('change','#assign_officer_id',function(){
      var assign_officer_id = $('#assign_officer_id').val();
      $.ajax({
        url:"{{ route('getofficer.mobile') }}",
        type:"GET",
        data:{assign_officer_id:assign_officer_id},
        success:function(data){
          var html = '<option value="">Select IO Mobile No</option>';
          $.each( data, function(key, v) {
            html += '<option value="'+v.id+'">'+v.assign_officer_cell+'</option>';
          });
          $('#assign_officer_cell').html(html);
        }
      });
    });
  });

  


</script>

@endsection