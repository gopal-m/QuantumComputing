<?php
class Exercise_Chapter1_Ex111 extends Exercise_Base {
    public function run() {
        $this->outputInfo("You need to input information of two complex numbers. We will give you their sum and product.");
        $complex1 = $this->getComplexNumberFromUser("number1");
        $complex2 = $this->getComplexNumberFromUser("number2");
        $numberHandler = new Complex_NumberHandler();
        $sum = $numberHandler->add($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " + " . $complex2->toString(true) . " = " . $sum->toString());
        $product = $numberHandler->multiply($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " * " . $complex2->toString(true) . " = " . $product->toString());
    }
}