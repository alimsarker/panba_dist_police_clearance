<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignOfficerNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_officer_names', function (Blueprint $table) {
            $table->id();
            $table->integer('ps_name_id');
            $table->string('assign_officer_name');
            $table->string('assign_officer_rank');
            $table->string('assign_officer_cell');
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
        Schema::dropIfExists('assign_officer_names');
    }
}
