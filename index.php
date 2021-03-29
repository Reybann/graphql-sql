<?php

require('vendor/autoload.php');

//namespace App\Models\UserData;

use App\Models\User;

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'graphqldatabase',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);



$capsule->setAsGlobal();

$capsule->bootEloquent();



//$user = App\Models\User::find(1);

$user = User::find(1);

var_dump($user);