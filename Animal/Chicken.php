<?php

include_once(dirname(__FILE__) . '/../abstractClass/Animal.php');
include_once (dirname(__FILE__).'/../interfaceClass/Edible.php');
class Chicken extends Animal
{
    public function makeSound()
    {
        return 'chicken: cluck-cluck';
    }
    public function howToEat(){
        return 'could be fried';
    }
}