<?php

namespace Yen\Orm\Models;

use Yen\Orm\Database\Database;

class Model
{
    /**
     * @var Database
     */
    protected static $db;
    protected $table = 'table';
    protected $data = [];
    
    public static function setDb(Database $database)
    {
        self::$db = $database;
    }

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function save()
    {
        self::$db->insert($this->table,$this->data);
    }
}