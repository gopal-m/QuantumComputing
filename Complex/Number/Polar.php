<?php

class Complex_Number_Polar extends Complex_Number {
    
    public function __construct($magnitude, $phase) {
        list($real, $imaginary) = $this->_computeCartesian($magnitude, $phase);
        $this->_real = $real;
        $this->_imaginary = $imaginary;
    }
    
    protected function _computeCartesian($magnitude, $phase) {
        $real = $magnitude * cos($phase);
        $imaginary = $magnitude * sin($phase);
        return array($real, $imaginary);
    }
}
