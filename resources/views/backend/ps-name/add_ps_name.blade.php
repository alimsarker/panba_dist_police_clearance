@extends('admin.admin_master')

@section('admin')



<section class="content">

<!-- Basic Forms -->
<div class="col-md-6 col-12">
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
                       
                        <div class="form-group">
                            <h5>Police Station Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="ps_name" class="form-control" required="" > </div>
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