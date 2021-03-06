@extends('admin.admin_master')

@section('admin')



<section class="content">

<!-- Basic Forms -->
<div class="col-md-6 col-12">
 <div class="box">
   <div class="box-header with-border">
   <h4 class="box-title">Change <strong>Password</strong></h4>
     
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
       <form method="post" action="{{ route('password.update') }}">@csrf
             <div class="row">
               <div class="col-12">

                    <div class="form-group">
                    <h5>Current Password  <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input id="current_password" type="password" name="oldpassword" class="form-control">
                             @error('oldpassword')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                        </div>
                    </div>

                     
                    <div class="form-group">
                    <h5>New Password  <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input id="password" type="password"  name="password" class="form-control">
                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
             
                        </div>
                    </div>
                      
                    <div class="form-group">
                    <h5>Confirmed Password  <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
             
                                 @error('password_confirmation')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                        </div>
                    </div>
                     
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
 </div>
</section>








@endsection