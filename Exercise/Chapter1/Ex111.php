<?php
class Exercise_Chapter1_Ex111 extends Exercise_Base {
    public function run() {
        $this->outputInfo("You need to input information of two complex numbers. We will give you their sum and product.");
        $complex1 = $this->getComplexNumberFromUser("number1");
        $complex2 = $this->getComplexNumberFromUser("number1");
        $sum = clone $complex1;
        $sum->add($complex2);
        $this->outputInfo($complex1->toString(true) . " + " . $complex2->toString(true) . " = " . $sum->toString());
        $product = clone $complex1;
        $product->multiply($complex2);
        $this->outputInfo($complex1->toString(true) . " * " . $complex2->toString(true) . " = " . $product->toString());
    }
}