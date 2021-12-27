<?php


interface Payable
{
    public function send();
}

class Xpay implements Payable
{
    public function send()
    {
        echo "Xpay send";
    }
}

class Ypay implements Payable
{
    public function send()
    {
        echo "Ypay send";
    }
}


class Order
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function checkout(Payable $pay)
    {
        $pay->send($this->data);
    }
}

$order = new Order(
    [
        'id' => 1,
        'item' => '三方'
    ]
);

$order->checkout(new Xpay());