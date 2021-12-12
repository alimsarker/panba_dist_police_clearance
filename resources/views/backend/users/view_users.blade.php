@extends('admin.admin_master')

@section('admin')



		<!-- Main content -->
		<section class="content">
		<div class="col-md-9 col-12">
		  <div class="row">
			<div class="col-12">

			 <div class="box">
			
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">User List</h3>
                  <a style="float: right;" href="{{ route('user.add') }}" class="btn btn-rounded btn-success mb-5">Add User</a>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th  width="5%">SL</th>
								<th width="15%">Image</th>
								<th>Usertype</th>
								<th>Name</th>
								<th>Email</th>
                                <th>Role</th>
								<th width="25%"> Action</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $user)
							<tr>
								<td>{{ $key+1 }}</td>
								
								<td>
	 <img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" style="width: 60px; width: 60px;"> 
				</td>	
							
                                <td>{{$user->usertype}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
								<td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-rounded btn-info mb-5">Edit</a>
                                   <a href="{{ route('user.delete', $user->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a>
                                </td>
								
							</tr>
							@endforeach
							
						</tbody>				  
						<tfoot>
							<tr>
                            <th  width="5%">SL</th>
							<th width="15%">Image</th>
								<th>Usertype</th>
								<th>Name</th>
								<th>Email</th>
                                <th>Role</th>
								<th width="25%"> Action</th>
							</tr>
						</tfoot>
					</table>
					</div>              
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  </div>
		</section>
		<!-- /.content -->
	  
	







@endsection