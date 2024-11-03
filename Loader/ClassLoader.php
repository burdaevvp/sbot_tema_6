<?php 
	namespace Loader;

class ClassLoader {

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {//echo "8";exit;
        if(self::$instance === null) {
            self::$instance = new ClassLoader();
        }
        //spl_autoload_register([self::$instance, "load"]);
        return self::$instance;
    }

    public function init() {
        spl_autoload_register([self::$instance, "load"]);
    }

    public function load($name) {
        file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/logs/loaders.log", $_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php\n", FILE_APPEND);
        //echo $name;exit;
        $g_site_root = $_SERVER["DOCUMENT_ROOT"] . "/" . str_replace("\\", "/", $name) . ".php";
      //  echo $g_site_root.' ***  ClassLoader <br>';//exit;
        include_once($g_site_root);//exit;
      //  echo 'ClassLoader  <br>';
    }
}
?>
