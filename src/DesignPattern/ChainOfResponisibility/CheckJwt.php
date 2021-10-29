<?php

namespace Middleware;

use Yen\Orm\Design\ChainOfResponisibility\MiddlewareHandler;

class CheckJwt extends MiddlewareHandler
{
    protected function handler()
    {
        echo "check Jwt...".PHP_EOL;
    }
}