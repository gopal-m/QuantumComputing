<?php

class Exercise_Chapter1_Ex131 extends Exercise_Base {

    public function run() {
        $this->outputInfo("You need to input a complex number. I will give you its polar representation Then input the polar representation and I will give you the Cartesian representation.");
        $cartesian = $this->getComplexNumberFromUser("cartesian");
        $this->outputInfo("Polar representation of " . $cartesian->toString(true) . " = " . $cartesian->getPolarRepresentation());
        $polar = $this->getComplexNumberPolarFromUser("polar");
        $this->outputInfo("Cartesian representation of " . $polar->getPolarRepresentation() . " = " . $polar->toString(true));
    }

}
