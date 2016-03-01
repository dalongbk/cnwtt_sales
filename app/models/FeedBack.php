<?php
class FeedBack extends Eloquent{
	public $table='feedBack';

	//relationship 1-n with account
	public function account(){
		return $this->belongsTo('Account','account_id');
	}
}