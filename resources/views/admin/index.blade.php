@extends('admin.admin_master')

@section('admin')




@php 
				$allData = App\Models\ClearanceDocument::all();
                $assignofficer = App\Models\AssignOfficerName::all();
                $psStation = App\Models\PsStationName::all();


@endphp
 

		<!-- Main content -->
		<section class="content">
			<div class="row">
				
				<div class="col-12">
					<div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
						<div class="box-body text-center">							
							<img src="../images/trophy.png" class="mt-50" alt="" />
							<div class="max-w-600 mx-auto">
							
								<h1 class="text-white mb-20 font-weight-500">PABNA DISTRICT POLICE CLEARANCE</h1>
								
								<p class="text-white-50 mb-10 font-size-20">জেলা পুলিশ পাবনা - পুলিশ ছাড়পত্র </p>
							</div>
						</div>
					</div>
					<div class="row">						
						
						
					</div>
				</div>
				
				
				<div class="col-12">
					<div class="box">

					<div class="box-header with-border">
				  <h3 class="box-title">Applicants Data List And Status</h3>
                  	  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
						
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
								<th>I/O Name</th>
								<th>I/O Mobile</th>
                                <th>Status</th>
							
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allData as $key => $Applicant)
							<tr>
							
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
								<td>{{$Applicant->assign_officer->assign_officer_name}}</td>
								<td>{{$Applicant->assign_officer->assign_officer_cell}}</td>
									
									<td>
								
	<span class="badge badge-primary-light badge-lg mb-5">{{  $Applicant->status  }}</span>	
								
									
									</td>
								
									
                              
								
								
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
								<th>I/O Name</th>
								<th>I/O Mobile</th>
                                <th>Status</th>
                            
								
							</tr>
						</tfoot>
					</table>

							</div>
						</div>
					</div>  
				</div>
			</div>

			
	


		</section>
		<!-- /.content -->


		 
	

  @endsection