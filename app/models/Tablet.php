<?php
class Tablet extends Eloquent{
	public $table='tablet';

	//relationship 1-1 with product
	public function product(){
		return $this->belongsTo('Product','product_id');
	}
}