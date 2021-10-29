<?php

namespace Yen\Orm\Design\ChainOfResponisibility;

use Yen\Orm\Design\ChainOfResponisibility\MiddlewareHandler;

class CheckSign extends MiddlewareHandler
{
    protected function handler()
    {
        echo "check sign".PHP_EOL;
    }
}