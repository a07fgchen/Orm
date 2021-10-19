<?php

namespace Yen\Orm;

use Countable;
use ArrayAccess;
use ArrayIterator;
use IteratorAggregate;
use JsonSerializable;

class Magic implements ArrayAccess,Countable,IteratorAggregate,JsonSerializable
{
    protected $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value; 
    }
    //檢查沒有的屬性或非public
    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
    //釋放沒有的屬性或非public
    public function __unset($key)
    {
        unset($this->data[$key]);
    }
    //呼叫沒有的方法
    public function __call($method, $args)
    {
        return (new Amazing)->$method(...$args);
    }
    //呼叫沒有的static方法
    public static function __callStatic($method, $args)
    {
        return (new static)->$method(...$args);
    }
    //物件轉字串
    public function __toString()
    {
        return json_encode($this->data);
    }
    //物件當作function
    public function __invoke()
    {
        return $this->data;
    }
    //
    public function offsetExists($key)
    {
        return isset($this->data[$key]);
    }

    public function offsetGet($key)
    {
        return $this->data[$key];
    }

    public function offsetSet($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function offsetUnset($key)
    {
        unset($this->data[$key]);
    }
    
    public function count()
    {
        return count($this->data);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->data);
    }

    public function jsonSerialize()
    {
        return $this->data;
    }
}

$magic = new Magic(['foo'=>'bar']);

var_dump($magic);