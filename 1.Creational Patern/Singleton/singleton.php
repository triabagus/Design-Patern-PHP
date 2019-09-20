<?php
class Database {

    // private function __construct(){
    // }

    // function getInstance(){
    //     echo "test";
    // }    
    
    function getInstance(){

        static $instance = null;

        if($instance==null)
        {
            $instance = new Database();
        }

        return $instance;
    }
}

// $db = new Database();
// $db1 = new Database();
// $db2 = new Database();
// $db3 = new Database();

$db = Database::getInstance();
$db1 = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

var_dump($db);
var_dump($db1);
var_dump($db2);
var_dump($db3);