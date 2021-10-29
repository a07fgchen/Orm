<?php

namespace Yen\Orm\Design\ChainOfResponisibility;
/**
  * Class MiddlewareHandler
*/

abstract class MiddlewareHandler
{
    private $nextHandler;
    
    /**
     * @desc 處理方法
     * @return mixed
     */
    abstract protected function handler();

    /**
     * @desc 設置下一個處理者
     * @param MiddlewareHandler $handler
     * @return $this
     */
    public function setNextHandler(MiddlewareHandler $handler)
    {
        $this->nextHandler = $handler;
        return $this;
    }

    /**
     * @desc 責任鍊實現方法
     */
    final public function handleMessage()
    {
        $this->handler();
        
        if(!empty($this->nextHandler)){
            $this->nextHandler->handleMessage();
        }
    }
}

