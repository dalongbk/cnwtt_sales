<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePhone extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phone',function($table){
			$table->increments('id');
			$table->string('typePhone');
			$table->string('screen');
			$table->string('camera');
			$table->string('memory');
			$table->string('os');
			$table->string('chipset');
			$table->string('productType');
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
		Schema::drop('phones');	
	}

}
