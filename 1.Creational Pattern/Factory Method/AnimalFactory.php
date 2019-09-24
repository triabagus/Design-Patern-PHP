<?php

class AnimalFactory
{
    public static function create($type): Animal
    {
        if($type == "tiger"){
            return new Tiger;
        }else if($type == "cat"){
            return new Cat;
        }else if($type == "dog"){
            return new Dog;
        }
    }
}