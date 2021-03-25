<?php

/* Continued notes from 'payments_without_interface':

    Because these classes now implement PaymentInterface, we can now pass the PaymentInterface as a type check and any class that implements that interface can now be passed as a valid object. 
    
    We're not using the interface as a medium to group together classes and refer to all the classes we want to use as a type declaration.
*/

interface PaymentInterface
{
    public function payNow();
}

class Paypal implements PaymentInterface
{
    public function PayNow(){}
}
class Visa implements PaymentInterface
{
    public function PayNow(){}
}
class Cash implements PaymentInterface
{
    public function PayNow(){}
}

class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->payNow();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
