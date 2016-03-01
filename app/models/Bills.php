<?php
class Bills extends Eloquent{
	public $table='bill';

	//relationship 1-n with account
	public function account(){
		return $this->belongsTo('Account','account_id');
	}

	//relationship 1-n with billDetail
	public function billDetail(){
		return $this->hasMany('BillDetail','bill_id');
	}
}