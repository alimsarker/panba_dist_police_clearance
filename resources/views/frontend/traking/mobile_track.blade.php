@extends('admin.admin_master')

@section('admin')

<style type="text/css">
    body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif
}

.container {
    margin-top: 15px;
    margin-bottom: 5px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 0px;
    margin-top: 50px
}


.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #1f2ad1
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #1f2ad1;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 17px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #ee5435;
    border-color: #ee5435;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
}
.icon i {
  width: 40px;
  height: 60px;
  text-align: center;
  line-height: 40px;
  margin-right: 30px;
  display: inline-block; }
</style>

<section class="content">
    <article class="card">
        <header class="card-header"> Applicant / Clearance Tracking </header>
        <div class="card-body">
        <div class="card-body row">
        <h6  class="col">Applicant  Name : <strong>{{ $track->applicant_name }}</strong> </h6>
            <h6  class="col">Mobile  Number : {{ $track->mobile_no }}</h6>
            <h6  class="col">Ref - Number: {{ $track->ref_no }}</h6>
            <h6  class="col">Apply  Date : {{ date('d-m-Y',strtotime($track->apply_date)) }}</h6>
            </div>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>PS Entry Date:</strong> <br>{{ date('d-m-Y',strtotime($track->created_date)) }} </div>
                    <div class="col"> <strong>Received IO Date:</strong> <br>{{ date('d-m-Y',strtotime($track->io_rece_date)) }} </div>
                    <div class="col"> <strong>Received PS Date:</strong> <br>{{ date('d-m-Y',strtotime($track->io_sub_date)) }} </div>
                    <div class="col"> <strong>Send DSB Date:</strong> <br>{{ date('d-m-Y',strtotime($track->dsb_send_date)) }} </div>
                    <div class="col"> <strong>Received DSB Date:</strong> <br>{{ date('d-m-Y',strtotime($track->dsb_rece_date)) }} </div>
                    <div class="col"> <strong></strong> <br> </div>
                    <div class="col"> <strong>SP Signed Date:</strong> <br>{{ date('d-m-Y',strtotime($track->sp_sign_date)) }} </div>
                    <div class="col"> <strong>Send MOFA Date:</strong> <br>{{ date('d-m-Y',strtotime($track->mofa_send_date)) }} </div>
                    <div class="col"> <strong>Received Contrl Date:</strong> <br>{{ date('d-m-Y',strtotime($track->deliv_sec_rece_date)) }} </div>
                    <div class="col"> <strong></strong> <br></div>
                    <div class="col"> <strong>Delivered Date:</strong> <br>{{ date('d-m-Y',strtotime($track->delivered_date)) }} </div>
                 
                </div>
            </article>
            <div class="track">

            @if($track->status == 'Pending')
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
               
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
              
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
         
            @elseif($track->status == 'ReceivedIO')
             <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
             
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
            
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
       
            @elseif($track->status == 'ReceivedPS')   
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
           
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
             
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
            
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
          <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
       
            @elseif($track->status == 'SendDSB') 
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
             
             <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
               
             <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
             <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
             <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
             <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
             <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
            
            @elseif($track->status == 'ReceivedDSB' || $track->status == 'WaitSPsign') 
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
               
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
              
            @elseif($track->status == 'SPsigned') 
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
               
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
              
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
              
            @elseif($track->status == 'SendMOFA') 
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
               
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
              
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
               <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
               
            @elseif($track->status == 'ReceivedDeliverySec' || $track->status == 'WaitDelivery') 
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
               
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>Foe<br> SP Sir<br> sign</span> </div>
              
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
            <div class="step "> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
                
            @elseif($track->status == 'Delivered') 
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pending <br>PS</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> IO</span> </div>
           
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Received <br> PS</span> </div>
          
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">PS Send<br> To DSB </span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br> DSB</span> </div>
               
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Waitting <br>For<br> SP Sir<br> sign</span> </div>
              
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> SP Sir<br> signed</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Send <br>To MOFA</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Received <br>Delivery <br>Section</span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Waitting <br>For<br> Delivery </span> </div>
            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Delivered</span> </div> 
          
                @endif
               
            
            </div>  <!-- //End Track -->
            <br>
            <hr>
           <br><br><br><br>
           <br><br><br><br>
        </div>
    </article>
</div>

@endsection