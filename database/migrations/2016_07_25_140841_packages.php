<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Packages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_title');
            $table->string('package_sub_title');
            $table->text('package_description');
            $table->decimal('package_price');
            $table->enum('renewal_type',['month','year','6m']);
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('recommend')->default(0);

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
        Schema::drop('packages');
    }
}
