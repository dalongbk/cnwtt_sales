<?php
class BillDetail extends Eloquent{
	public $table='billDetail';

	//relation 1-n with bill
	public function bill(){
		return $this->belongsTo('Bills','bill_id');
	}

	//relationship 1-n with product
	public function product(){
		return $this->belongsTo('Product','product_id');
	}
}