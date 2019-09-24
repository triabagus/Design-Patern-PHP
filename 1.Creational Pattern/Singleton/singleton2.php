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
     * tidak diizinkan untuk menelepon dari luar untuk mencegah dari membuat banyak instance,
     * untuk menggunakan singleton, Anda harus mendapatkan instance dari Singleton :: getInstance () sebagai gantinya
     */
    private function __construct()
    {
    }

    /**
     * mencegah instance dikloning (yang akan membuat instance kedua darinya)
     */
    private function __clone()
    {
    }

    /**
     * mencegah dari tidak di-serialisasi (yang akan membuat instance kedua dari itu)
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