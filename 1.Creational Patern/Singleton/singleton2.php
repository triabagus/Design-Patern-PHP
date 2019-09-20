<?php
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;
    /**
     * mendapatkan instance melalui inisialisasi malas (dibuat pada penggunaan pertama)
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}

$db  = Singleton::getInstance();
$db1 = Singleton::getInstance();
$db2 = Singleton::getInstance();
$db3 = Singleton::getInstance();

var_dump($db);
var_dump($db1);
var_dump($db2);
var_dump($db3);