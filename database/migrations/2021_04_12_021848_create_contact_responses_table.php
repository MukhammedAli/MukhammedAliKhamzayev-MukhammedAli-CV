<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_responses', function (Blueprint $table) {
            $table->increments('id_new')->unsigned();
            $table->foreign('id_new')->references('id')->on('contact_infos');
            $table->string('contactEmail');
            $table->string('contactSubject');    
            $table->text('contactMessage');
            $table->binary('contactImage');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_responses');
    }
}
