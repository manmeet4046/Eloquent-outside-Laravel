<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver'=>'mysql',
	'host'=>'127.0.0.1',
	'database'=>'gitdb',
	'username'=>'root',
	'password'=>'',
	'prefix'=>'',




	]);

$capsule->setAsGlobal();
$capsule->bootEloquent();