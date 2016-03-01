<?php
class Manufacturer extends Eloquent{
	public $table='manufacturer';

	//relationship 1-n with product
	public function product(){
		return $this->hasMany('Product','manufacturer_id');
	}
}