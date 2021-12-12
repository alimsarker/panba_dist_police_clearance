@extends('admin.admin_master')

@section('admin')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add User</h4>
     
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form method="post" action="{{ route('users.store') }}"  enctype="multipart/form-data">@csrf
             <div class="row">
               <div class="col-12">	



               <div class="row">

                        <div class="col-md-6">
                        <div class="form-group">
                            <h5>User Type <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="usertype" id="usertype" required="" class="form-control">
                                    <option value="" selected="" disabled="">Select User Type</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                               
                                </select>
                            <div class="help-block"></div></div>
                        </div>

                      </div>  <!--  end col-md-6 -->
                        <div class="col-md-6">
                        <div class="form-group">
                            <h5>Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="name" class="form-control" required="" > </div>
                            </div>
                            
                        </div>  <!--  end col-md-6 -->


               </div> <!--  end row -->
                   
               
                            
                        <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                            <h5>User Email  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" required=""></div>
                            </div>
                        </div><!--  end col-md-6 -->

                        <div class="col-md-6">
                        <div class="form-group">
                        <h5>User Role <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="role"  required="" class="form-control">
                                <option value="" selected="" disabled="">Select Role</option>
                                <option value="1">Admin User</option>
                                <option value="2">Limited User</option>
                                <option value="3">User</option>
                                
                            </select>
                        </div>
                        </div>
                        </div><!--  end col-md-6 -->
                        </div>  <!--  end row -->

    


                        <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                            <h5>Password  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" class="form-control" required=""></div>
                            </div>
                        </div><!--  end col-md-6 -->

                        	
                        <div class="col-md-3" >		
                            <div class="form-group">
                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                            <input type="file" name="image" class="form-control" id="image" >  </div>
                            </div>
                            </div><!-- End Col Md-3 -->
                            <div class="col-md-3" >	
                                <div class="form-group">
                                <div class="controls">
                            <img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;"> 

                            </div>
                            </div>
                            </div><!-- End Col Md-3 -->

                        

                       
                        </div>  <!--  end row -->



      
                 
                  
                  
                
               <div style="float: right;" class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-info" value="Submit">
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
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>




@endsection