<?php

abstract class Animal {
    private $fur;
    abstract public function setFur($bool);
    abstract public function getFur();
}

abstract class Pet extends Animal
{
    private $name;
    private $type;
    abstract public function speak();
    abstract public function sleep();
    abstract public function setName($name);
    abstract public function getName();
    abstract public function setType($type);
    abstract public function getType();
}

class Dog extends Pet
{
    public function setFur($bool){
        $this->fur = $bool;
    }
    public function getFur(){
        return $this->fur;
    }
    public function speak()
    {
        return 'Bark!';
    }

    public function sleep()
    {
        return 'Goes to dog bed';
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
}

class Cat extends Pet
{
    public function setFur($bool){
        $this->fur = $bool;
    }
    public function getFur(){
        return $this->fur;
    }
    public function speak()
    {
        return 'Meow!';
    }

    public function sleep()
    {
        return 'Goes to cat bed';
    }
    public function hasFur(){

    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
}


