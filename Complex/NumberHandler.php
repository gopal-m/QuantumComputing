<?php

/**
 * Class which can be used to perform operations on complex numbers without changing the involved objects
 */
class Complex_NumberHandler {
    
    /**
     * Add two complex numbers without changing them
     * 
     * @param Complex_Number $complex1
     * @param Complex_Number $complex2
     * @return \Complex_Number
     */
    public function add(Complex_Number $complex1, Complex_Number $complex2) {
        return $this->_perform(__FUNCTION__, $complex1, $complex2);
    }
    
    /**
     * Subtract two complex numbers without changing them
     * 
     * @param Complex_Number $complex1
     * @param Complex_Number $complex2
     * @return \Complex_Number
     */
    public function subtract(Complex_Number $complex1, Complex_Number $complex2) {
        return $this->_perform(__FUNCTION__, $complex1, $complex2);
    }
    
    /**
     * Multiply two complex numbers without changing them
     * 
     * @param Complex_Number $complex1
     * @param Complex_Number $complex2
     * @return \Complex_Number
     */
    public function multiply(Complex_Number $complex1, Complex_Number $complex2) {
        return $this->_perform(__FUNCTION__, $complex1, $complex2);
    }
    
    /**
     * Divide two complex numbers without changing them
     * 
     * @param Complex_Number $complex1
     * @param Complex_Number $complex2
     * @return \Complex_Number
     */
    public function divide(Complex_Number $complex1, Complex_Number $complex2) {
        return $this->_perform(__FUNCTION__, $complex1, $complex2);
    }
    
    /**
     * Perform methodName on cloned $c1 with $c2
     * 
     * @param type $methodName
     * @param Complex_Number $c1
     * @param Complex_Number $c2
     * @return \Complex_Number
     */
    protected function _perform($methodName, Complex_Number $c1, Complex_Number $c2) {
        $result = clone $c1;
        $result->{$methodName}($c2);
        return $result;
    }
}
