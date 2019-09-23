<?php
/**
 * Kenapa menggunakan interface sebab nanti di kenyataannya kita bisa memilih Level dan Arena di game tersebut.
 */

interface Arena{
    function start();
}

class ArenaEasy implements Arena
{
    function start(){
        echo "Arena Easy";
    }
}

class ArenaMedium implements Arena
{
    function start(){
        echo "Arena Medium";
    }
}

class ArenaHard implements Arena
{
    function start(){
        echo "Arena Hard";
    }
}