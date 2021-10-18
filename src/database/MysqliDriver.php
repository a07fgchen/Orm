<?php

namespace Yen\Orm\Database;

use \mysqli;

class MysqliDriver extends Database
{
    private $conn = null;

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'test');
    }

    public function quteIdentifier($col)
    {
        return '`' . $col . '`';
    }

    public function query($sql, $values)
    {
        $binds = [];
        $types = str_pad('', count($values), 's');
        $binds[] = &$types;
        foreach ($values as $key => $values) {
            $binds[] = &$values[$key];
        }
    }
}
