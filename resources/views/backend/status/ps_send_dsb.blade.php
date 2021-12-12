@extends('admin.admin_master')

@section('admin')



<section class="content">
	
		  <div class="row">
			<div class="col-12">

			 <div class="box">
			
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title"> List => PS Send Documents To DSB </h3>
                  	</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
						<thead>
							<tr>
								<th  width="3%">SL</th>
                                <th>Inq PS</th>
                                <th>Ref. No</th>
								<th>Apply Date</th>
                                <th> Name</th>
                                <th> Mobile</th>
                                <th>Father Name</th>
								<th>Village</th>
								<th> PS</th>
								<th>Dist</th>
                                
								<th>Status</th>
							
							
								<th width="10%"> Action</th>
								
							</tr>
						</thead>
						<tbody>
                          
                        @foreach($psSendDsb as $key => $pending)
							<tr>
								<td>{{ $key+1 }}</td>
                                <td>{{$pending['psstation']['ps_name']}}</td>
                                <td>{{$pending->ref_no}}</td>
                                <td>{{ date('d-m-Y',strtotime( $pending->apply_date ))  }}</td>	
								<td>
								{{$pending->applicant_name}}
								</td>	
                               
                                <td>{{$pending->mobile_no}}</td>
                                <td>{{$pending->father_name}}</td>
                                <td>{{$pending->village_road_no}}</td>
                                <td>{{$pending->upazilla}}</td>
                                <td>{{$pending->dist}}</td>
							
                              
                                <td>
								<span class="badge badge-pill badge-primary mb-5" style="background-color: blue;">{{  $pending->status  }}</span>	
								</td>
                           
                           
                            <td>  
							<a href="{{ route('clearance.data.details', $pending->id) }}" class="btn btn-rounded btn-info mb-5">Details</a>
                            <!-- <a href="{{ route('ps.name.delete', $pending->id) }}" class="btn btn-rounded btn-danger mb-5" id="delete">Delete</a> -->
                              
                               </td>
                            
                        </tr>
                    	@endforeach
							
						</tbody>				  
						<tfoot>
							<tr>
                            <th  width="3%">SL</th>
                                <th>Inq PS</th>
                                <th>Ref. No</th>
								<th>Apply Date</th>
                                <th> Name</th>
                                <th> Mobile</th>
                                <th>Father Name</th>
								<th>Village</th>
								<th> PS</th>
								<th>Dist</th>
                                
								<th>Status</th>
							
								<th width="10%"> Action</th>
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