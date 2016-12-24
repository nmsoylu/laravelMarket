<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackagePermissionRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('package_permission_relations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('package_id');
            $table->integer('permission_id');

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
        Schema::drop('package_permission_relations');
    }
}
