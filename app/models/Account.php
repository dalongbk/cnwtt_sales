<?php
class Account extends Eloquent{
	public $table='account';
	
	//ralationship 1-1 with AccountInfor
	public function accountInfor(){
		return $this->hasOne('AccountInfor','account_id');
	}

	//relationship 1-n with feedback
	public function feedBack(){
		return $this->hasMany('FeedBack','account_id');
	}

	//relationship 1-n with bill
	public function bill(){
		return $this->hasMany('Bills','account_id');
	}
}