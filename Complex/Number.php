<?php
class Complex_Number {
    protected $_real;
    protected $_imaginary;
    
    /**
     * Construct a complex number using the $real and $imaginary part
     */
    public function __construct(float $real,float $imaginary) {
        $this->_real = $real;
        $this->_imaginary = $imaginary;
    }
    
    /**
     * Add another complex number to this complex number
     */
    public function add(Complex_Number $c) {
        $this->_real += $c->getRealPart();
        $this->_imaginary += $c->getImaginaryPart();
        return $this;
    }
    
    /**
     * Multiply another complex number $c with this complex number
     */
    public function multiply(Complex_Number $c) {
        $tempReal = $this->_real;
        $this->_real = ($tempReal * $c->getRealPart()) - ($this->_imaginary * $c->getImaginaryPart());
        $this->_imaginary = ($tempReal * $c->getImaginaryPart()) + ($this->_imaginary * $c->getRealPart());
        return $this;
    }
    
    /**
     * Get the real part
     */
    public function getRealPart() {
        return $this->_real;
    }
    
    /**
     * Get the imaginary part
     */
    public function getImaginaryPart() {
        return $this->_imaginary;
    }
}