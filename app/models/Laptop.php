<?php
class Laptop extends Eloquent{
	public $table='laptop';

	//relationship 1-1 with product
	public function product(){
		return $this->belongsTo('Product','product_id');
	}
}