<?php

namespace App;

class Application
{
    public array $data = [];

    public function __construct()
    {
        $this->config = require_once('./config.php');
        $this->foo();
    }

    public function makeRequest()
    {
        $this->request = $GLOBALS;
        return $this->request;
    }

    public function makeResponse()
    {
        $this->response = 'controller returned data';
        return $this->response;
    }

    private function terminate()
    {
        $this->response = null;
        $this->request = null;

        return false;
    }

    public function __destruct()
    {
        $this->terminate();
    }

    private function foo()
    {
        // TODO: parser from curl titles for 1-1000000 domains

        //get list-data from file
        $data = file_get_contents($this->config['database']['nosql']['from']);
        //
        //set data to file db
    }
}