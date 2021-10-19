<?php
namespace Yen\Orm;

interface Car
{
    public function boot();
}

class Maserati implements Car
{
    public function boot()
    {
        echo "Maserati";
    }
}

class Benz implements Car
{
    public function boot()
    {
        echo "Benz";
    }
}

class User
{
    public $car;
    
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function drive()
    {
        $this->car->boot();
    }
}

$user1 = new User(new Benz());
$user1->drive();

$user2 = new User(new Maserati());
$user2->drive();





class Bird 
{
    public function fly()
    {
        echo "我可飛";
    }
}

class Penguin extends Bird
{
    
}

//不會飛的企鵝卻有飛行功能
$penguin = new Penguin();
$penguin->fly();








interface action 
{
    public function crawl();
    public function swimming();
}

class Crocodile implements action
{
    public function crawl()
    {
        echo "我會爬";
    }

    public function swimming()
    {
        echo  "我會游泳";
    }
}

class fish implements action
{
    public function crawl()
    {
        echo "我會爬";
    }
    //被強迫實作用不到的行為
    public function swimming()
    {
    }
}

