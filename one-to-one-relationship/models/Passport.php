<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Passport extends Eloquent{

	protected $fillable=['passport_no','valid','user_id'];

	public $timestamps=[];

	public function user(){

		return $this->belongsTo(User::class);
		
	}
}
