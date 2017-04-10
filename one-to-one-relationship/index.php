<?php

require 'init/init.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Models\Passport;

/*Capsule::schema()->create('users',function(Blueprint $table){
			$table->increments('id');
			$table->string('title');



});


Capsule::schema()->create('passports',function(Blueprint $table){
			$table->increments('id');
			$table->string('passport_no');
			$table->boolean('valid')->default('0');
			$table->integer('user_id')->unsigned();


			$table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');

			

});

Passport::create([
	'passport_no'=>'123456',
	'valid'=>'1',
	'user_id'=>'1',

	]);*/
	//here we can find the passport number from passports tables from Users Model
	// as User Model hasOne  relationship 
$order=User::find(1)->passport->passport_no;
echo $order ;

