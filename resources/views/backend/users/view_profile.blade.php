@extends('admin.admin_master')

@section('admin')

<section class="content">
		  <div class="row">
			<div class="col-12">

                <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background-image: url('{{ asset('backend/images/gallery/creative/img-11.jpg')}}'); center center;">
					<a style="float: right;" href="{{ route('profile.edit') }}" class="btn btn-rounded btn-success mb-5">Edit Profile</a>
					  
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }} " alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">User Name :</h5>
							<span class="description-text">{{ $user->name}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">User Type  :</h5>
							<span class="description-text"> {{ $user->usertype}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">User Email  :</h5>
							<span class="description-text">{{ $user->email}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>



         </div>
    </div>

</section>


@endsection