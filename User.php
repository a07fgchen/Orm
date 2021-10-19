<?php
ini_set('display_errors','1');
error_reporting(E_ALL);


use Yen\Orm\Database\MysqliDriver;
use Yen\Orm\Models\Model;

class User extends Model
{
    protected $table = "users";
}



