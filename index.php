<?php
require_once "./vendor/autoload.php";
ini_set('display_errors','1');
error_reporting(E_ALL);

use Yen\Orm\Models\User;
use Yen\Orm\Database\MysqliDriver;
use Yen\Orm\Magic;

User::setDb(new MysqliDriver());
$user = new User([
    'firstname'=>'john',
    'lastname' => 'Doe'
]);
echo "<pre>";

var_dump($user);
