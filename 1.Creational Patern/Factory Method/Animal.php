<?php

interface Animal{
    function speak();
}
/**
 * @deprecated
 */
class Tiger implements Animal
{
    function speak(){
        echo "Roarrr";
    }
}

class Tiger2 implements Animal
{
    function speak(){
        echo "Roarrr 2";
    }
}

class Cat implements Animal
{
    function speak(){
        echo "Meowww";
    }
}

class Dog implements Animal
{
    function speak(){
        echo "Gog gog";
    }
}