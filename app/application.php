<?php

namespace App;

class Application
{
    public function __construct()
    {
        echo 'test construct';
    }

    public function makeRequest()
    {
        $this->request = $GLOBALS;
        return $this->request;
    }

    public function makeResponse()
    {
        $this->response = var_dump($this->request);
        return $this->response;
    }

    public function terminate()
    {
        $this->response = false;
        $this->request = false;

        return false;
    }

    public function __destruct()
    {
        $this->terminate();
    }
}