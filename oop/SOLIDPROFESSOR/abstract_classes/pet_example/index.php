<?php
include_once 'classes/pet.php';

$dog_methods = get_class_methods('Dog');
$cat_methods = get_class_methods('Cat');

// See all methods from Dog class
foreach($dog_methods as $method){
    echo $method."<br>";
}

echo "<br>";
echo "<br>";

$dog1 = new Dog();
$dog1->setName('Fred');
$dog1->setFur(true);
$dog1->setType('Warm blooded');
echo $dog1->getName();
echo "<br>";
echo ($dog1->getFur() ? 'Furry' : 'Not Furry');
echo "<br>";
echo $dog1->getType();
echo "<br>";
echo $dog1->speak();
echo "<br>";
echo $dog1->sleep();
