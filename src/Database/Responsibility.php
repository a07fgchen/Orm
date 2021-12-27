<?php

abstract class Handler
{
    protected $handler;

    public function setHandler(Handler $handler)
    {
        $this->handler = $handler;
        return $this->next();
    }

    final public function next()
    {
        $this->handler->next;
    }

    abstract public function validate(array $data);
}


class MailHandler extends Handler
{
    public function validate(array $data)
    {
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->next();
        }
        
        new Exception('email error');
    }
}

class PasswordHandler extends Handler
{
    public function validate(array $data)
    {
        if( preg_grep('/^[a-zA-Z]{1}[0-9]{4,5}g/',$data['password']) ){
            return $data;
        }
        new Exception('paswword error');
    }
}


$handler = (new MailHandler())->setHandler(new PasswordHandler());
