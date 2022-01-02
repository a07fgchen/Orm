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

    public function insert($table,array $binds)
    {
        $cols = [];
        $vals = [];

        foreach($binds as $col => $val )
        {
            $cols[] = $this->quteIdentifier($col);
            $vals[] = "?";
        }
        $sql = "INSERT INTO "
            . $this->quteIdentifier($table)
            . ' ('. implode(', ', $cols) . ') '
            .'VALUES ('. implode(', ', $vals) . ') ';
      
        return $this->query($sql,$binds);
    }

}