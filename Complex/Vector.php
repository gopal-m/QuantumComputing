<?php

class Complex_Vector {
    
    protected $_dimension = 0;
    protected $_vector = array();
    
    public function __construct(array $vector) {
        $this->_dimension = count($vector);
        $this->_vector = $vector;
    }
    
    /**
     * Append a complex number to the end of the vector, increases the dimension by one
     * @param Complex_Number $c
     */
    public function expandDimension(Complex_Number $c) {
        $this->_vector[] = $c;
        $this->_dimension++;
    }
    
    public function add(Complex_Vector $vector2) {
        
    }
}

