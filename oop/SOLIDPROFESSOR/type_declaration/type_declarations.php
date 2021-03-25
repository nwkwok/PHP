<?php

declare(strict_types=1);

class Person
{
    public $name;
    public $eyeColor;
    public $age;

    // If someone puts in an argument that is not a string, PHP will throw an error
    // 
    public function setName(string $newName)
    {
        $this->$newName;
    }

    public function getName()
    {
        return $this->name;
    }
}

$person1 = new Person();

try {
    $person1->setName(2);
    echo $person1->getName();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}
