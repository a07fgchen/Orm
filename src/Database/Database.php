<?php

namespace Yen\Orm\Database;

abstract class Database
{
    public function __construct()
    {
        $this->connect();
    }

    abstract public function connect();

    /**
     * @param $sql
     * @param $values
     * @return mixed
     */
    abstract public function query($sql,$values);

    public function quteIdentifier($col)
    {
        return $col;
    }

    public function insert($table,array $bind)
    {
        $cols = [];
        $vals = [];

        $sql = "INSERT INTO"
            . $this->quteIdentifier($table)
            . ' ('. implode(', ', $cols) . ')';

        return $this->query($sql,$bind);
    }

}