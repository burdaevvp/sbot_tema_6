<?php

namespace Controller;

//use Database\MysqlConnect;
use Database\Connect;

class Controller {

    private $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function loadModel($title, $alias = "") {echo "Controller 0 <br>";
        if ($alias == "") {
            $alias = $title;
        }
        $className = "\\Model\\" . $title;

       // echo "cont_000";echo $className; exit;

        $this->{$alias} = new $className();

       // new MysqlConnect();
   //var_dump(Connect::getInstance());exit;
        $this->{$alias}->setConnect(Connect::getInstance());

    }

    protected function data($variable, $data) {
        $this->data[$variable] = $data;
    }

    protected function display($title) {
        foreach($this->data as $variable => $data) {
            $$variable = $data;
        }
        
        include_once($_SERVER["DOCUMENT_ROOT"] . "/View/" . $title . ".php");
    }
}