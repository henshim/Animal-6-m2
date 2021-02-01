<?php

include_once(dirname(__FILE__) . '/../abstractClass/Fruit.php');

class Apple extends Fruit
{
    public function howToEat()
    {
        return 'Apple could be slide';
    }
}