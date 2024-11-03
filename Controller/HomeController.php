<?php

namespace Controller;

class HomeController extends Controller {
//class ClassLoader{
    private static $instance;

    public function __construct()
   {
       parent::__construct();
   }

    public function index() {echo "HomeController 1 <br>";

       //$this->loadModel("Product");

      // $products = $this->product->getAll();

       echo "HomeController 2 <br>";//exit;  
       $this->loadModel("Customer","customer");
        
        //echo "7_3";exit;   

        $customers = $this->customer->getAll();
        echo "<pre>"; print_r($customers);//exit; // echo "</pre>";
        echo "HomeController 3 <br>";

       $this->data("a", 10);

       $this->display("home");
    }

    public static function init () {
        if (self::$instance === null)
        {
        }
        $obj =  new ClassLoader();
        spl_autoload_register([$obj, "load"]);
        function load($name){
        include_once($_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php");
    }
    }
}