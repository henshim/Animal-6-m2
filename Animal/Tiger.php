<?php


include_once(dirname(__FILE__) . '/../abstractClass/Animal.php');

class Tiger extends Animal
{
public function makeSound()
{
    return "tiger: roar";
}
}