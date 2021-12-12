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
				  <h3 class="box-title">Assign Officers List</h3>
                  <a style="float: right;" href="#" class="btn btn-rounded btn-success mb-5">*******</a>
				  <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					  <thead>
                     
                           <tr>
                       <th style="width:5%">SL</th>
                     
                       <th>PS  Name</th>
                       <th>Officer Name  </th>
                       <th>Rank  </th>
                       <th>Mobile No  </th>
                       
                       <th style="width:15%">Action</th>
                     
                   
                     
                       </tr>
                    </thead>
                    <tbody>
                    @foreach($allData as $key=> $assign) 
                       <tr>
                       <td>{{ $key+1 }}</td>
                     
                       <td>{{ $assign['psstation']['ps_name']    }}</td>
                       <td><h3>{{$assign->assign_officer_name}}</h3></td>
                       <td><h3>{{$assign->assign_officer_rank}}</h3></td>
                       <td><h3>{{$assign->assign_officer_cell}}</h3></td>
                       
                       <td>
                       <a href="{{ route('officer.name.deleted', $assign->ps_name_id) }}" class="btn btn-danger" id="delete"  type="submit">Delete</a>
                           
                        </td>
                      
                       </tr>
                       @endforeach
						   </tbody>				  
						<tfoot>
							<tr>
                     <th style="width:5%">SL</th>
                     
                     <th>PS  Name</th>
                     <th>Officer Name  </th>
                     <th>Rank  </th>
                     <th>Mobile No  </th>
                     
                     <th style="width:15%">Action</th>
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