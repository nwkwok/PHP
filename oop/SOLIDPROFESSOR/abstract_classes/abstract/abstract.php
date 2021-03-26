<?php

// We know that we never want to instantiate an object from Visa. We will only use Visa to be an extension to other classes. Therefore we should make it an abstract class

/*
class Visa {
    public function visaPayment(){
        return "Perform a payment";
    }
}
*/

abstract class Visa {
    public function visaPayment(){
        return "Perform a payment";
    }

    // With interfaces, we make rules around what methods must be included in a class. This similar principle can be applied to abstract classes.

    abstract public function getPayment();
    // By declaring an abstract public function, we are now saying that any class that extends from this class must include this method in that class.

}

// Once we declare a class as an abstract class we cannot create an object based off of this class -- it can only be referenced through other classes.

