<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient');
            $table->string('group');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('hospital');
            $table->string('doctor');
            $table->string('contact_person');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->timestamp('when')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
}
