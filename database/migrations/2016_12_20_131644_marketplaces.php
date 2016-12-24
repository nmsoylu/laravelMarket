<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Marketplaces extends Migration
{
    public function up()
    {
        Schema::create('marketplaces', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id');
            $table->string('marketplaceName');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::drop('marketplaces');
    }
}
