<?php
class Complex_Number {
    protected $_real;
    protected $_imaginary;
    
    const ROUNDING_PRECISION = 2;
    
    /**
     * Construct a complex number using the $real and $imaginary part
     */
    public function __construct($real, $imaginary) {
        $this->_real = (float)$real;
        $this->_imaginary = (float)$imaginary;
    }
    
    /**
     * Add another complex number to this complex number
     */
    public function add(Complex_Number $c) {
        $this->_real += $c->getReal();
        $this->_imaginary += $c->getImaginary();
        return $this;
    }
    
    /**
     * Multiply another complex number $c with this complex number
     */
    public function multiply(Complex_Number $c) {
        $tempReal = $this->_real;
        $this->_real = ($tempReal * $c->getReal()) - ($this->_imaginary * $c->getImaginary());
        $this->_imaginary = ($tempReal * $c->getImaginary()) + ($this->_imaginary * $c->getReal());
        return $this;
    }
    
    /**
     * Subtract the given number $c.
     * @param Complex_Number $c
     * @return \Complex_Number
     */
    public function subtract(Complex_Number $c) {
        $negated = new Complex_Number(-1 * $c->getReal(), -1 * $c->getImaginary());
        $this->add($negated);
        return $this;
    }
    
    /**
     * Divide the current number by the given number $c.
     * $c must not be zero, else an exception is thrown.
     * @param Complex_Number $c
     * @return \Complex_Number
     * @throws Exception
     */
    public function divide(Complex_Number $c) {
        if ($c->isZero()) {
            throw new Exception("Dividing by 0 is not defined...");
        }
        $real = $this->_real;
        $imaginary = $this->_imaginary;
        $divisor = $c->getReal() * $c->getReal() + $c->getImaginary() * $c->getImaginary();
        $this->_real = (($real * $c->getReal()) + ($imaginary * $c->getImaginary())) / $divisor;
        $this->_imaginary = (($c->getReal() * $imaginary) - ($real * $c->getImaginary())) / $divisor;
        return $this;
    }
    
    /**
     * Get the modulus of this number
     * @return float
     */
    public function getModulus() {
        return sqrt($this->getModulusSquared());
    }
    
    /**
     * Get the modulus squared of this number
     * @return float
     */
    public function getModulusSquared() {
        return $this->_real * $this->_real + $this->_imaginary * $this->_imaginary;
    }
    
    /**
     * Get the complex conjugate of the current number
     * @return \Complex_Number
     */
    public function getComplexConjugate() {
        return new Complex_Number($this->_real, -1 * $this->_imaginary);
    }
    
    /**
     * Return whether the current complex number is representing 0
     * @return boolean
     */
    public function isZero() {
        return $this->getReal() == 0 && $this->getImaginary() == 0;
    }
    
    /**
     * Get the real part
     */
    public function getReal() {
        return $this->_real;
    }
    
    /**
     * Get the imaginary part
     */
    public function getImaginary() {
        return $this->_imaginary;
    }
    
    /**
     * Returns a string representation of a complex number
     */
    public function toString($surroundWithBrackets = false) {
        $output = '';
        if ($this->_real != 0) {
            $output = $this->_round($this->_real);
        }
        if ($this->_imaginary < 0) {
            $output .= ' - ' . $this->_round(-1 * $this->_imaginary) . 'i';
        } else if ($this->_imaginary > 0) {
            $output .= ' + '.$this->_round($this->_imaginary) . 'i';
        } 
        if ($surroundWithBrackets) {
            $output = '(' . $output . ')';
        }
        return $output;
    }
    
    /**
     * Get the rounding precision
     * @return type
     */
    protected function _round($number) {
        return round($number, self::ROUNDING_PRECISION);
    }
    
    /**
     * Get the polar representation of this number
     * @return string
     */
    public function getPolarRepresentation() {
        $magnitude = $this->_round($this->getModulus());
        $phase = $this->_round(atan($this->_imaginary / $this->_real));
        return "Vector of length $magnitude with an angle from the origin of $phase";
    }
}