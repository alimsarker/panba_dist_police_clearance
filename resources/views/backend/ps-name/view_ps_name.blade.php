@extends('admin.admin_master')

@section('admin')



<section class="content">
		<div class="col-md-9 col-12">
		  <div class="row">
			<div class="col-12">

			 <div class="box">
			
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Police Station Name List</h3>
                  <a style="float: right;" href="{{ route('add.ps.name') }}" class="btn btn-rounded btn-success mb-5">Add Police Station Name</a>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th  width="10%">SL</th>
							
								<th>Name</th>
							
								<th width="25%"> Action</th>
								
							</tr>
						</thead>
						<tbody>
                          
                        @foreach($allData as $key => $ps)
							<tr>
								<td>{{ $key+1 }}</td>
								
								
                            <td><h3>{{$ps->ps_name}}</h3></td>
                           
                            <td>  
                            <a href="{{ route('ps.name.edit', $ps->id) }}" class="btn btn-rounded btn-info mb-5">Edit</a>
                                   <a href="{{ route('ps.name.delete', $ps->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a>
                                </td>
                            
                        </tr>
                        @endforeach
							
						</tbody>				  
						<tfoot>
							<tr>
                            <th  width="10%">SL</th>
						
								<th>Name</th>
								
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