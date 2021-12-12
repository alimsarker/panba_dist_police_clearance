@extends('admin.admin_master')

@section('admin')



<section class="content">
	
		  <div class="row">
			<div class="col-12">

			 <div class="box">
			
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title"> List => Documents Delivered</h3>
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
							
							
								
							</tr>
						</thead>
						<tbody>
                          
                        @foreach($docsDeliver as $key => $pending)
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
								<span class="badge badge-pill badge-primary mb-5" style="background-color: blue;">{{  $pending->status }}</span>	
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