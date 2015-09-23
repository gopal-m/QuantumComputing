<?php
class Exercise_Chapter2_Ex211 extends Exercise_Base {
    public function run() {
        $this->outputInfo("We will calculate operations on the vector space C^n.");
        $n = $this->getUserInput("Please define n = ");
        $this->outputInfo("Getting information of first vector...");
        $vector1 = array();
        for ($i = 1; $i <= $n; $i++) {
            $vector1[$i] = $this->getComplexNumberFromUser("$i. component");
        }
        $this->outputInfo("Getting information of second vector...");
        $vector2 = array();
        for ($i = 1; $i <= $n; $i++) {
            $vector2[$i] = $this->getComplexNumberFromUser("$i. component");
        }
        $scalar = $this->getComplexNumberFromUser("scalar (for multiplication)");
        $numberHandler = new Complex_NumberHandler();
        $sum = $numberHandler->add($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " + " . $complex2->toString(true) . " = " . $sum->toString());
        $product = $numberHandler->multiply($complex1, $complex2);
        $this->outputInfo($complex1->toString(true) . " * " . $complex2->toString(true) . " = " . $product->toString());
    }
}