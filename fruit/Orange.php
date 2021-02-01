<?php

include_once(dirname(__FILE__) . '/../abstractClass/Fruit.php');

class Orange extends Fruit
{
    public function howToEat()
    {
        return 'orange could be juiced';
    }
}