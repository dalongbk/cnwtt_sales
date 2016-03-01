<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTablet extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tablet',function($table){
			$table->increments('id');
			$table->string('screen');
			$table->string('gpu');
			$table->string('ram');
			$table->string('memory');
			$table->string('camera');
			$table->string('connect');
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
		Schema::drop('tablet');	
	}

}
