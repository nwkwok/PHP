<?php

// Let's add a fourth class called BankTransfer
// What happens if PayPal and BankTransfer require someone to be logged in first before they can pay? 

interface PaymentInterface
{
    public function payNow();
}

// We can make an interface called LoginInterface and we'll say that any class implementing this interface must include the method loginFirst();

interface LoginInterface
{
    public function loginFirst();
}

// Let's add implement the LoginInterface to PayPal and BankTransfer
// Let's also create a paymentProcess method to each class that runs the loginFirst method before paying if a login is required.
class Paypal implements PaymentInterface, LoginInterface
{
    public function loginFirst(){}
    public function PayNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

// Notice that with Visa and Cash there is no login required so paymentProcess() only needs to perform payNow().
class Visa implements PaymentInterface
{
    public function PayNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}
class Cash implements PaymentInterface
{
    public function PayNow(){}
    public function paymentProcess(){
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface
{
    public function loginFirst(){}
    public function PayNow(){}
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        # Now we run paymentProcess instead of payNow();
        // $paymentType->payNow();
        $paymentType->paymentProcess();
    }

    // If we were to add an onlinePay method, we could do a type declaration for the LoginInterface since we know a user will have to login to pay.
    public function onlinePay(LoginInterface $paymentType)
    {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
