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
				  <h2 class="box-title"> {{ $detailsData['0']['psstation']['ps_name'] }} Police Station Assign Officers List ::: </h2>
                    <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					  <thead>
                           <tr>
                           <th style="width:5%">SL</th>
                         
                         <th>Police Officer Name</th>
                         <th>Rank</th>
                         <th>Mobile No</th>
                         
                         
                       
                         
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($detailsData as $key=> $assign) 
                           <tr>
                           <td>{{ $key+1 }}</td>
                         
						  
                           <td>{{ $assign->assign_officer_name  }} </td>
                           <td>{{ $assign->assign_officer_rank  }} </td>
                           <td>{{ $assign->assign_officer_cell   }} </td>
                       
                          
                           </tr>
                           @endforeach
						   </tbody>				  
						<tfoot>
							<tr>
                         
						
                            <th style="width:5%">SL</th>
                         
                         <th>Police Officer Name</th>
                         <th>Rank</th>
                         <th>Mobile No</th>
                         
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