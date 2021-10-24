<?php

namespace Yen\Orm\Database;

use \mysqli;

class MysqliDriver extends Database
{
    private $conn = null;

    public function connect()
    {
        $this->conn = new mysqli(
            'localhost', 'root', '', 'laravel'
        );
    }

    public function quteIdentifier($col)
    {
        return '`' . $col . '`';
    }

    public function query($sql, $values)
    {
        $binds = [];
        $types = str_pad('', count($values), 's');
        // var_dump($values);
        // die;
        $binds[] = &$types;
        foreach ($values as $key => $value) {
            $binds[] = &$values[$key];
        }
        var_dump($binds);
        die;
    }
}
