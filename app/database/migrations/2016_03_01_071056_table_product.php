<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableProduct extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product',function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('cost');
			$table->string('picture');
			$table->string('number');
			$table->string('describle');
			$table->string('productType');
			$table->string('manufacturer_id');
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
		Schema::drop('product');	
	}

}
