<?php
class AccountInfor extends Eloquent{
	public $table='accountInfor';

	//relation 1-n with account
	public function account(){
		return $this->belongsTo('Account','account_id');
	}
}