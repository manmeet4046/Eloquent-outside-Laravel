<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {
	protected $fillable =['title'];

	public $timestamps=false;


	public function passport(){

		return $this->hasOne(Passport::class);

	}
	


}