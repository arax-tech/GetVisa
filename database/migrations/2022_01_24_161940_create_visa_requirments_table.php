<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaRequirmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_requirments', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('capital')->nullable();
            $table->string('currency')->nullable();
            $table->string('embassy_address')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('website_link')->nullable();
            $table->text('tourist_visa')->nullable();
            $table->text('business_visa')->nullable();
            $table->text('process_timeline')->nullable();
            $table->string('status')->nullable();
            $table->string('visa_form')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('visa_requirments');
    }
}
