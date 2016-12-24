<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyDescriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unique();
            $table->string('company_phone');
            $table->string('company_zipCode');
            $table->string('company_country');
            $table->string('company_state');
            $table->string('company_email');
            $table->string('company_address');
            $table->string('company_address_extra');
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
        //
        Schema::drop('company_descriptions');
    }
}
