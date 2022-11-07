<?php

class Peoples {
    public $name;
    public $age;
    public $sex;
    public $order;
    public $price;
}

class Animals {
    public $kind;
    public $nickname;
    public $age;
    public $disease;
    public $value;
}

class Planets {
    public $title;
    public $weight;
    public $diameter;
    public $density;
    public $attraction;
}

$oleg = new Peoples;
$oleg->name = "Oleg";
$oleg->age = 32;
$oleg->sex = "men";
$oleg->order = "gloves";
$oleg->price = "2000 у.е.";

echo $oleg->name . '<br>';
echo $oleg->age . '<br>';
echo $oleg->sex . '<br>';
echo $oleg->order . '<br>';
echo $oleg->price . '<hr>';

$yulia = new Peoples;
$yulia->name = "Yulia";
$yulia->age = 28;
$yulia->sex = "women";
$yulia->order = "skirt";
$yulia->price = "480 у.е.";

echo $yulia->name . '<br>';
echo $yulia->age . '<br>';
echo $yulia->sex . '<br>';
echo $yulia->order . '<br>';
echo $yulia->price . '<hr>';

$sharik = new Animals;
$sharik->kind = "beagle";
$sharik->nickname = "Sharik";
$sharik->age = 1.8;
$sharik->disease = "vaccination";
$sharik->value = "10 у.е.";

echo $sharik->kind . '<br>';
echo $sharik->nickname . '<br>';
echo $sharik->age . '<br>';
echo $sharik->disease . '<br>';
echo $sharik->value . '<hr>';

$luna = new Animals;
$luna->kind = "mops";
$luna->nickname = "Luna";
$luna->age = 1.1;
$luna->disease = "inflammation";
$luna->value = "45 у.е.";

echo $luna->kind . '<br>';
echo $luna->nickname . '<br>';
echo $luna->age . '<br>';
echo $luna->disease . '<br>';
echo $luna->value . '<hr>';

$saturn = new Planets;
$saturn->title = "Saturn";
$saturn->weight = "568 х 10^24 kg";
$saturn->diameter = "120536 km";
$saturn->density = "687 kg/m^3";
$saturn->attraction = "9,0 m/s^2*kg";

echo "Планета " . $saturn->title . '<br>';
echo "Масса: " . $saturn->weight . '<br>';
echo "Диаметр: " . $saturn->diameter  . '<br>';
echo "Плотность: " . $saturn->density . '<br>';
echo "Притяжение: " . $saturn->attraction . '<hr>';

$mars = new Planets;
$mars->title = "Mars";
$mars->weight = "0,642 х 10^24 kg";
$mars->diameter = "6794 km";
$mars->density = "3933 kg/m^3";
$mars->attraction = "3,7 m/s^2*kg";

echo "Планета " . $mars->title . '<br>';
echo "Масса: " . $mars->weight . '<br>';
echo "Диаметр: " . $mars->diameter  . '<br>';
echo "Плотность: " . $mars->density . '<br>';
echo "Притяжение: " . $mars->attraction . '<hr>';