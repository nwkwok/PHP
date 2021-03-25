<?php
/*
Interfaces
    - Blueprint to group specific classes to tell them in order to behave
    - What type of method should be in the classes?
    - A set a rules to provide guard rails for how a method would work when implemented
    - It's important to keep in mind that with Interfaces, there are two sides:
        - Who is using the interface?
        - Who is making / sharing the interface?
            Interfaces gives control to the person making the interface in how it is intended to be used.
*/

class Paypal
{
    public function PayNow(){}
}
class Visa
{
    public function PayNow(){}
}
class Cash
{
    public function PayNow(){}
}

class BuyProduct
{
    public function pay(Cash $paymentType)
    {
        $paymentType->payNow();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);

/* (Nick's interpretation of what is happening) 
    Setup:
        - We made Paypal, Visa and Cash classes which are different ways someone could pay ($paymentType)
        - We have a BuyProduct class which takes in the payment type and type checks it with one payment type (Cash)
        - Because we are passing the Cash $paymentType object as an argument, we now have acecss to the methods within the Cash class. 
    
    Problem:
        - We don't necessarily know what type of payment a customer may want to pay with. What if they want to use PayPal or Visa instead?
        - Because we threw in Cash $paymentType as an argument, $paymentType has to be of the Cash class, otherwise PHP wil throw an error.

    Interface Solution:
        - Rather than creating a pay method per type, you can now create an interface, implement the inteface on each class and then pass the interface as an type-check along with the argument.
*/