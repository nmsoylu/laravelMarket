<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductAttrTable extends Migration {

	public function up()
	{
		Schema::create('product_attr', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('product_id');
			$table->string('attr_name', 255);
			$table->string('attr_value', 255);
			$table->decimal('price', 8,2)->nullable();
			$table->string('UPC', 255)->nullable();
			$table->string('ASIN', 255)->nullable();
			$table->string('EAN', 255)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('product_attr');
	}
}