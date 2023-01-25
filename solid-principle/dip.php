<?php

// DEPENDENCY INVERSION PRINCIPLE

abstract class PaymentNow
{
    abstract public function proccess();
}
class Payment
{
    private $paymentOption;
    public function paymentOption(PaymentNow $payment)
    {
        $this->paymentOption = $payment;
    }
    public function PaymentStatus()
    {
        echo $this->paymentOption->proccess() . "\n";
    }
}

class Paypel extends PaymentNow
{
    public function proccess()
    {
        return "Paypel Payment Complited....";
    }
}
class CreditCard extends PaymentNow
{
    public function proccess()
    {
        return "Credit Card Payment Complited....";
    }
}
class MasterCard extends PaymentNow
{
    public function proccess()
    {
        return "Master card payment complited....";
    }
}

$payment = new Payment();

$paypel = new Paypel();
$payment->paymentOption($paypel);
$payment->PaymentStatus();

$creditCard = new CreditCard();
$payment->paymentOption($creditCard);
$payment->PaymentStatus();

$masterCard = new MasterCard();
$payment->paymentOption($masterCard);
$payment->PaymentStatus();
