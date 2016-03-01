<?php
class Product extends Eloquent{
	public $table='product';

	//relationship 1-n with billDetail
	public function billDetail(){
		return $this->hasMany('BillDetail','product_id');
	}

	//relationship 1-1 with desktop
	public function desktop(){
		return $this->hasOne('Desktop','product_id');
	}

	//relationship 1-1 with laptop
	public function laptop(){
		return $this->hasOne('Laptop','product_id');
	}

	//relationship 1-1 with phone
	public function phone(){
		return $this->hasOne('Phone','product_id');
	}

	//relationship 1-1 with tablet
	public function tablet(){
		return $this->hasOne('Tablet','product_id');
	}

	//relationship 1-1 with Accessories
	public function accessories(){
		return $this->hasOne('Accessories','product_id');
	}

	//relationship 1-n manufacturer
	public function manufacturer(){
		return $this->belongsTo('Manufacturer','manufacturer_id');
	}
}