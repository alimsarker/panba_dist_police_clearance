<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClearanceDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearance_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('ps_name_id');
        
            $table->string('applicant_name');
            $table->string('father_name')->nullable();
            $table->string('spouse')->nullable();           
            $table->string('mobile_no')->nullable();
           //Address
            $table->string('village_road_no')->nullable();                       
            $table->string('post_post_code')->nullable();           
            $table->string('upazilla')->nullable();
            $table->string('dist')->nullable();
            //Application information     
            $table->string('ref_no')->nullable();
            $table->date('apply_date')->nullable();
            //IO Information  assign_officer_cell
            $table->integer('assign_officer_id')->nullable(); 
            $table->string('assign_officer_cell')->nullable();
           //Entry Person information
            $table->string('entry_by_ps_person')->nullable(); 
            $table->string('entry_person_mobile')->nullable();
                   
            $table->string('status')->nullable();
            $table->string('io_rece_date')->nullable();
            $table->string('io_sub_date')->nullable();
            $table->string('dsb_send_date')->nullable();
            $table->string('dsb_rece_date')->nullable();
            $table->string('wait_sign_date')->nullable();
            $table->string('sp_sign_date')->nullable();
            $table->string('mofa_send_date')->nullable();
            $table->string('deliv_sec_rece_date')->nullable();
            $table->string('wait_deliv_date')->nullable();
            $table->string('delivered_date')->nullable();
            $table->timestamp('created_date')->nullable();
            $table->timestamp('updated_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clearance_documents');
    }
}

    
    
            // $table->date('assign_officer_sub_date')->nullable();
            // // $table->date('ps_net_sub_date')->nullable();
            // $table->tinyInteger('report_status')->default(0)->comment('0=no,1=yes');
            // $table->date('ps_sent_to_dsb_date')->nullable();
            // $table->string('ps_sent_dsb_by')->nullable();
            // $table->string('ps_sent_dsb_person_cell')->nullable();

// 2nd User 
           
            // $table->date('dsb_rece_date')->nullable();
            // $table->date('sp_sign_date')->nullable();
            // $table->date('mofa_sent_date')->nullable();
            // $table->string('mofa_sent_by')->nullable();

  // 3rd User
           
            // $table->date('mofa_rece_date')->nullable();
            // $table->date('deliv_sec_rece_date')->nullable();
            // $table->date('deliv_date')->nullable();
            // $table->string('deliv_by')->nullable();
            // $table->tinyInteger('doc_status')->default(0)->comment('0=ReceivedToPs,1=ReceivedToIo,2=IoSendPs,3=ReceivedToDsb,4=DsbSendToMofa,5=ReceivedToDelideryDesk,6=WaittingForDelivery');
           