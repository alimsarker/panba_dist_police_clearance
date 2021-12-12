@extends('admin.admin_master')

@section('admin')


	

		<!-- Main content -->
		<section class="content">
	
		  <div class="row">
			<div class="col-12">

			 <div class="box">
			
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Pending Police Clearance Data List</h3>
                  <a style="float: right;" href="{{ route('clearance.data.add') }}" class="btn btn-rounded btn-success mb-5">Add Data For Clearance</a>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				
                             
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th  width="5%">SL</th>
								
								<th> Name</th>
								<th> Mobile</th>
								<th>Vill.</th>
                                <th>PS</th>
								<th>Dist.</th>
								<th>Ref. No</th>
								<th>Apply Date</th>
                                <th>Status</th>
								<th width="15%"> Action</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $Applicant)
							<tr>
							@if( $Applicant->status == 'Pending')	
								<td>{{ $key+1 }}</td>
								
								<td>
								{{$Applicant->applicant_name}}
								</td>	
							
                                <td>{{$Applicant->mobile_no}}</td>
                                <td>{{$Applicant->village_road_no}}</td>
                                <td>{{$Applicant->upazilla}}</td>
                                <td>{{$Applicant->dist}}</td>
								<td>{{$Applicant->ref_no}}</td>
                                <td>{{ date('d-m-Y',strtotime( $Applicant->apply_date ))  }}</td>
                               
									
									<td>
								
	<span class="badge badge-pill badge-primary mb-5" style="background-color: blue;">{{  $Applicant->status  }}</span>	
								
									
									</td>
								
									
                              
								<td>
                                    <a href="{{ route('clearance.data.edit', $Applicant->id) }}" class="btn btn-rounded btn-info mb-5">Edit</a>
                                   <a href="{{ route('clearance.data.delete', $Applicant->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a>
                                </td>
								@endif
							</tr>
							@endforeach
							
						</tbody>				  
						<tfoot>
							<tr>
                            <th  width="5%">SL</th>
							<th	
								<th> Name</th>
								<th> Mobile</th>
								<th>Vill.</th>
                                <th>PS</th>
								<th>Dist.</th>
								<th>Ref. No</th>
								<th>Apply Date</th>
                                <th>Status</th>
                            
								<th width="15%"> Action</th>
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
		
		</section>
		<!-- /.content -->
	  
	







@endsection