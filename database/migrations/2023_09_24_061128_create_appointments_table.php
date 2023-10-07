<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
                    $table->id();
                    $table->string('client_name');
                    $table->string('phone')->nullable();
                    $table->string('question');
                    $table->unsignedBigInteger('service_id');
                    $table->datetime('appointment_datetime');
                    $table->string('status');
                    $table->timestamps();
            
            // $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
