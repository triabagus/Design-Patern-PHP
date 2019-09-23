<?php

class Game{
    // private $level;
    // private $arena;

    // public function __construct(Level $level, Arena $arena){
    //     $this->level = $level;
    //     $this->arena = $arena;
    // }

    public function __construct(GameFactory $gamefactory){
        $this->level = $gamefactory->createLevel();
        $this->arena = $gamefactory->createArena();
        $this->enemy = $gamefactory->createEnemy();
    }

    function start(){
        $this->level->start();
        $this->arena->start();
        $this->enemy->start();
    }
}