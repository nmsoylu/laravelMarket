<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('product_categories', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('category_name', 255);
		});
	}

	public function down()
	{
		Schema::drop('product_categories');
	}
}