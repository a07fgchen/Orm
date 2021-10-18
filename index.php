<?php
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors','1');
error_reporting(E_ALL);

use Yen\Orm\Models\User;
use Yen\Orm\Database\MysqliDriver;

$a = new MysqliDriver();
var_dump($a);
User::setDb(new MysqliDriver());
$user = new User([
    'firstname'=>'john',
    'lastname' => 'Doe'
]);
