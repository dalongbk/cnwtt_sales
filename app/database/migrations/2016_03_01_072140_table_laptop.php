<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLaptop extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laptop',function($table){
			$table->increments('id');
			$table->string('processor');
			$table->string('ram');
			$table->string('gpu');
			$table->string('hardDisk');
			$table->string('screen');
			$table->string('os');
			$table->string('connect');
			$table->string('pin');
			$table->string('product_id');
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
		Schema::drop('laptop');	
	}

}
