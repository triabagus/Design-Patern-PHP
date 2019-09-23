<?php
// Make object Game
// Begini sih gak masalah namun kalau kita lihat kalau interface game ini ketergantungan, yaitu Kalau gamenya easy yah level sama arenanya easy. Gak mungkinkan kalau game Easy Levelnya Medium atau lainnya. 

// Dan interfacenya terbatas.

$gameEasy = new Game(new LevelEasy(), new ArenaEasy());
$gameEasy->start();

$gameMedium = new Game(new LevelMedium(), new ArenaMedium());
$gameMedium->start();

$gameHard = new Game(new LevelHard(), new ArenaHard());
$gameHard->start();

// Make Object with GameFactory
// Dengan begini kita tidak perlu khawatir kalau kita akan salah tukar class Level atau Arena
// Keuntungannya apa sih ?  andai saja kita menambah class Enemy. Kalau kita tidak pakai abstract factory maka kita harus menambahkan interface in __constructor class Game. Dengan menggunakan abstract factory kita hanya menambahkan di GameFactory.

$gameEasy = new Game(new GameFactoryEasy());
$gameEasy->start();

$gameMedium = new Game(new GameFactoryMedium());
$gameMedium->start();

$gameHard = new Game(new GameFactoryHard());
$gameHard->start();