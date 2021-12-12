@extends('admin.admin_master')

@section('admin')



<section class="content">

<!-- Basic Forms -->

 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Edit Assign Officer Name</h4>
     
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
       <form method="POST" action="{{ route('officer.name.update',$editData[0]->ps_name_id) }}"> @csrf
             <div class="row">
               <div class="col-12">	
                 
               <div class="add_item">
                 
                                      <div class="col-md-6">
                                              <div class="form-group">
                                                  <h5>Police Station Name <span class="text-danger">*</span></h5>
                                                  <div class="controls">
                                                    <select name="ps_name_id" required="" class="form-control">
                                                      <option value="" selected="" disabled="">Select Class</option>
                                                      @foreach($pslist as $ps)
                        <option value="{{ $ps->id }}" {{ ($editData['0']->ps_name_id == $ps->id)? "selected":""}} > {{ $ps->ps_name }}</option>
                                                  
                                                    
                                                      @endforeach	 
                                                  </select>
                                                </div>
                                                    </div> <!-- // end form group -->
                                        </div>  <!-- // end col-md-6 -->

                  @foreach($editData as $edit)
<div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
<div class="row"> 

                  <div class="col-md-5">
                          <div class="form-group">
                            <h5>Assign Officer Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="assign_officer_name[]" value="{{ $edit->assign_officer_name }}" class="form-control" required="" > </div>
                            </div>

                </div>
                <div class="col-md-2">
                            <div class="form-group">
                            <h5>Assign Officer Rank <span class="text-danger">*</span></h5>
                                <div class="controls">
                                  <select name="assign_officer_rank[]" required="" class="form-control">
                                    <option value="" selected="" disabled="">Select Class</option>
                                    <option value="Inspector" {{ ($edit->assign_officer_rank == 'Inspector')? "selected":""}}>Inspector</option>
                                   
                                    <option value="SI" {{ ($edit->assign_officer_rank == 'SI')? "selected":""}}>SI</option>
                                    <option value="ASI" {{ ($edit->assign_officer_rank == 'ASI')? "selected":""}}>ASI</option>
                                    
                                </select>
                              </div>
                              
                      </div>
                        </div>
<!-- 
                <div class="col-md-2">
                        <div class="form-group">
                            <h5>Assign Officer Rank <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="assign_officer_rank[]" value="{{ $edit->assign_officer_rank }}" class="form-control" required="" > </div>
                            </div>
                  </div>  -->

                  <div class="col-md-3">
                            <div class="form-group">
                            <h5>Assign Officer Mobile No <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="assign_officer_cell[]"  value="{{ $edit->assign_officer_cell }}" class="form-control" required="" > </div>
                            </div>
                </div>

                <div class="col-md-2">
                <div class="form-group" style="padding-top: 25px;">
                      
                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>  
                      <span class="btn btn-success removedeventmore"><i class="fa fa-minus-circle"></i> </span> 
                      </div>   		
                   </div>

                 </div>
                 </div>  
                 @endforeach
                 </div>	<!-- // End add_item -->
               <div style="float: right;" class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-info mr-15" value="Update">
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
 



 <div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
        <div class="row">


             <div class="col-md-3">
                          <div class="form-group">
                            <h5>Assign Officer Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="assign_officer_name[]" class="form-control" required="" > </div>
                            </div>

                </div>

                <div class="col-md-2">
                        <div class="form-group">
                            <h5>Assign Officer Rank <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="assign_officer_rank[]" class="form-control" required="" > </div>
                            </div>
                  </div>

                  <div class="col-md-2">
                            <div class="form-group">
                            <h5>Assign Officer Mobile No <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="assign_officer_cell[]" class="form-control" required="" > </div>
                            </div>
                </div>

                <div class="col-md-2">
                <div class="form-group" style="padding-top: 25px;">
                <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                <span class="btn btn-danger removedeventmore"><i class="fa fa-minus-circle"></i> </span> 
                      </div>   		
                              </div>



                 </div>

             
                 
             </div>  			
         </div>  		
     </div>  	
 </div>

</section>

	<!-- Vendor JS -->

 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $('.whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;

        });
        $(document).on("click",".removedeventmore",function(event){ 
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter -= 1
         });

    });
</script>



@endsection