<?php
class Accessories extends Eloquent{
	public $table='accessories';

	//relationship 1-1 with product
	public function product(){
		return $this->belongsTo('Product','product_id');
	}
}