<?php

use Magento\Framework\AppInterface;
use Magento\Framework\App\Http;

class TestApp extends Http implements AppInterface
{
    public function launch()
    {
        $this->_state->setAreaCode('frontend');

        $variable = $this->_objectManager->create('\Vendor\Name\Directory\Class');

        var_dump($variable->method(););

        return $this->_response;
    }

    public function catchException(\Magento\Framework\App\Bootstrap $bootstrap, \Exception $exception)
    {
        return false;
    }
}
