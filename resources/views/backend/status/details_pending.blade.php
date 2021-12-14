
  @extends('admin.admin_master')

@section('admin')




		<!-- Main content -->
		<section class="content">
		  <div class="row">


<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Police Station Details</strong> </h4>
				  </div>


<table class="table">
            <tr>
              <th> Police Station Name : </th>
               <th><span class="badge badge-pill badge-warning" style="background: #418DB9;"> {{$pendingDataclearance['psstation']['ps_name']}} </span></th>
            </tr>

             <tr>
              <th> I/O Name : </th>
               <th><span class="badge badge-pill badge-warning" style="background: #418DB9;">{{$pendingDataclearance['assign_officer']['assign_officer_name']}} </span> </th>
            </tr>

             <tr>
              <th> I/O Mobile No: </th>
               <th> {{$pendingDataclearance['assign_officer']['assign_officer_cell']}} </th>
            </tr>

             <tr>
              <th> Entry Person Name : </th>
               <th> {{ $pendingDataclearance->entry_by_ps_person }} </th>
            </tr>

             <tr>
              <th> Entry Person Mobile No : </th>
               <th> {{ $pendingDataclearance->entry_person_mobile }} </th>
            </tr>

            



           </table>



				</div>
			  </div> <!--  // cod md -6 -->


<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Applicant Details</strong></h4><h4 style="float: right;"><span class="text-danger" > Mobile No : {{ $pendingDataclearance->mobile_no }} </span></h4>
				  </div>


<table class="table">
            <tr>
              <th>  Name : </th>
               <th> {{ $pendingDataclearance->applicant_name }} </th>
            </tr>

             <tr>
              <th>  Father Name : </th>
               <th> {{ $pendingDataclearance->father_name }}</th>
            </tr>

             <tr>
              <th> Spouse Name : </th>
               <th> {{ $pendingDataclearance->spouse }} </th>
            </tr>

             <tr>
              <th> Village : </th>
               <th> {{ $pendingDataclearance->village_road_no }} </th>
            </tr>

             <tr>
              <th> Police Station  : </th>
               <th> {{ $pendingDataclearance->upazilla }} </th>
            </tr>

             <tr>
              <th> District : </th>
               <th>{{ $pendingDataclearance->dist }} </th>
            </tr>

            <tr>
              <th> Ref. No : </th>
               <th>   
                <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $pendingDataclearance->ref_no }} </span> </th>
            </tr>

            <tr>
              <th> Apply Date : </th>
               <th>{{ date('d-m-Y',strtotime( $pendingDataclearance->apply_date ))  }} </th>
            </tr>

            <tr>
              <th> Status : </th>
               <th>   
               <span class="badge badge-pill badge-primary mb-5" style="background-color: blue;">{{  $pendingDataclearance->status }}</span>	
							 </th>
            </tr>
    <!--------------------------------------------- if elseif condition -------------------------------->
            <tr>
              <th> </th>
               <th>  
                 @if($pendingDataclearance->status == 'Pending')

                  <a href="{{ route('pending.received.io',$pendingDataclearance->id) }}" class="btn btn-block btn-success sms" id="receivedio">Received I/O</a>
                  
                @include('admin.layouts.sms_applicant_first')

                 @elseif($pendingDataclearance->status == 'ReceivedIO')
  <a href="{{ route('io.received.ps',$pendingDataclearance->id) }}" class="btn btn-block btn-success" id="receivedFromio">PS Received From I/O</a>
  @elseif($pendingDataclearance->status == 'ReceivedPS')
  <a href="{{ route('ps.received.io',$pendingDataclearance->id) }}" class="btn btn-block btn-success" id="senddsb">PS Send DSB</a>
  @elseif($pendingDataclearance->status == 'SendDSB')
  <a href="{{ route('ps.send.deb',$pendingDataclearance->id) }}" class="btn btn-block btn-success" id="receiveddsb">DSB Received PS</a>
  @elseif($pendingDataclearance->status == 'ReceivedDSB')
  
  <a href="{{ route('sp.sign.done',$pendingDataclearance->id) }}" class="btn btn-block btn-success" id="spsignok">SPsignDone</a>
  @elseif($pendingDataclearance->status == 'SPsigned')
  <a href="{{ route('send.docs.mofa',$pendingDataclearance->id) }}" class="btn btn-block btn-success" id="sendtomofa">SendToMOFA</a>
  @elseif($pendingDataclearance->status == 'SendMOFA')
  <a href="{{ route('docs.received.from.mofa',$pendingDataclearance->id) }}" class="btn btn-block btn-success waitdelivery" id="receiveFrommofa">ReceiFromMOFA</a>
  
  @include('admin.layouts.sms_applicant_last')
  
  @elseif($pendingDataclearance->status == 'ReceivedDeliverySec')
  

  
  <a href="{{ route('document.delivered',$pendingDataclearance->id) }}" class="btn btn-block btn-success " id="docsdelivered">DocsDelivered</a>
 
  
                
                 @endif
               </th>
            </tr>

           </table>



				</div>
			  </div> <!--  // cod md -6 -->



		  </div>
		  <!-- /. end row -->
		</section>
		<!-- /.content -->

   




@endsection 