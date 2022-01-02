<?php
ini_set('display_errors',1);
error_reporting(-1);

require_once "./vendor/autoload.php";

use Yen\Orm\Models\User;
use Yen\Orm\Database\MysqliDriver;


User::setDb(new MysqliDriver());
$user = new User([
    'name' => 'john',
    'email' => 'Doe@gmail.com',
    'password' => md5('sda')
]);

$user->save();
