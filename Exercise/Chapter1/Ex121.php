<?php

class Exercise_Chapter1_Ex121 extends Exercise_Base {

    public function run() {
        $this->outputInfo("You need to input information of two complex numbers. We will give you their sum, subtraction, product and division.");
        $complex1 = $this->getComplexNumberFromUser("number1");
        $complex2 = $this->getComplexNumberFromUser("number2");
        $numberHandler = new Complex_NumberHandler();
        $sum = $numberHandler->add($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " + " . $complex2->toString(true) . " = " . $sum->toString());
        $product = $numberHandler->multiply($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " * " . $complex2->toString(true) . " = " . $product->toString());
        $subtraction = $numberHandler->subtract($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " - " . $complex2->toString(true) . " = " . $subtraction->toString());
        $division = $numberHandler->divide($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " / " . $complex2->toString(true) . " = " . $division->toString());
    }

}
