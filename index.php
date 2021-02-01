<?php
include('Animal/Chicken.php');
include('Animal/Tiger.php');
include('fruit/Apple.php');
include('fruit/Orange.php');

echo ('____Animal<br>');
$animals[0]=new Tiger();
$animals[1]=new Chicken();

foreach ($animals as $animal){
    echo $animal->makeSound().'<br>';
    if ($animal instanceof Chicken){
        echo $animal->howToEat().'<br>';
    }
}
echo '---Fruit<br>';
$fruits[0]=new Apple();
$fruits[1]=new Orange();

foreach ($fruits as $fruit){
    echo $fruit->howToEat().'<br>';
}