<?php

require_once 'Vehicle.php';

class Motorcycle extends Vehicle
{
    /*
     * While I may not be extending any new properties or methods to motorcycle now I'm making this a class for a couple of reasons:
     * 1. In order for me to instantiate Motorcycle objects, I have to make it a class since it is extending from the abstract class Vehicle
     * 2. If in the future, there are new properties/methods we want to have created for motorcycles, I want for there to be the abiilty to easily instantiate motorcycles. 
    */
}
