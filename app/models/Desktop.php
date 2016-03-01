<?php
class Desktop extends Eloquent{
	public $table='desktop';

	//relationship 1-1 with product
	public function product(){
		return $this->belongsTo('Product','product_id');
	}
}