<?php
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        return 'Bark!';
    }
}

class Cat implements Animal
{
    public function makeSound()
    {
        return 'Meow!';
    }
}

$animalChoice = 'Dog';
$animal;

if ($animalChoice == 'Dog') {
    $animal = new Dog();
}

if ($animalChoice == 'Cat') {
    $animal = new Cat();
}

echo $animal->makeSound();

function petAnimal($animal)
{
    $animal->makeSound();
}
