<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $doors;

    public function setDoors($doors)
    {
        $this->doors = $doors;
    }
    public function getDoors()
    {
        return $this->doors;
    }
}
