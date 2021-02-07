<?php
class Car
{
    private $name;
    private $model;
    private $color;

    public static $drivingAge = 16;

    public function __construct($name, $model, $color)
    {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }

    public function getInfo($name, $model, $color)
    {
        return array($this->name, $this->model, $this->color);
    }

    public static function setDrivingAge($newDA)
    {
        self::$drivingAge = $newDA;
    }
}

$car2 = new Car('BMW', 'XL-20', 'Black');
print_r($car2);


# static properties and methods

# STATIC
# These are properties or methods that can be called without needing to instantiate a new instance of this class.
# Regardless of the object that you are instantiating, a static property will be something that is true for all objects instantiated from this class. i.e. drivingAge
# To access static properties:
# ClassName::staticMethod()
# ClassName::$staticProperty;
echo Car::$drivingAge;
Car::setDrivingAge(21);
echo Car::$drivingAge;


# When you are setting a value for a STATIC property or method, you always use 'self' instead of 'this'.

# For example -- if you want to get the driving age from a non-static public function you would do:

    /*
        public function getDA(){
            return self::$drivingAge;
        }
    */


# Static properties and methods are used when you want to make properties and methods that don't have to be a part of the object.