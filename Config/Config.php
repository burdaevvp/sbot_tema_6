<?php

namespace Config;

class Config {

    private function __construct()
    {
    }

    public static function getDatabase() {
        return [
            "class" => "\\Database\\MysqlConnect",
            "host" => "51.75.55.58", 
            "database" =>"it_karkas_db",
            "username" => "it_karkas_db", 
            "password" =>  "123456",
            "charset" => "utf8mb4",	
        ];
    }

    public static function getRoutes() {
        return [
            "GET" => [
              [
                  "uri" => "",
                  "controller" => "\\Controller\\HomeController",
                  "action" => "index",
                  "params" => "",
              ], [
                    "uri" => "auth/telegram",
                    "controller" => "\\Controller\\CustomerController",
                    "action" => "auth",
                    "params" => "",
                ], [
                    "uri" => "logout",
                    "controller" => "\\Controller\\CustomerController",
                    "action" => "logout",
                    "params" => "",
                ], [
                    "uri" => "cabinet",
                    "controller" => "\\Controller\\CabinetController",
                    "action" => "index",
                    "params" => "",
                ],
            ],
            "CONSOLE" => [
                [
                    "uri" => "remove/auth/innactive",
                    "controller" => "\\Controller\\ConsoleController",
                    "action" => "removeAuth",
                    "params" => "",
                ],
            ],
        ];
    }
}
?>

