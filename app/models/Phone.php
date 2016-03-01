<?php
class Phone extends Eloquent{
	public $table='phone';

	//relationship 1-1 with product
	public function product(){
		return $this->belongsTo('Product','product_id');
	}
}