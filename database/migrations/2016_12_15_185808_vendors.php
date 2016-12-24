<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('product_vendors', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id');
            $table->enum('vendorType',['vendor','dropshipper']);
            $table->string('vendorName');
            $table->string('vendorContactName');
            $table->string('vendorNote');
            $table->string('vendorEmail');
            $table->string('vendorAddress');
            $table->string('vendorCity');
            $table->string('vendorState');
            $table->string('vendorCountry');
            $table->string('vendorPostalCode');
            $table->string('vendorPhone');
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
        Schema::drop('product_vendors');
    }
}
