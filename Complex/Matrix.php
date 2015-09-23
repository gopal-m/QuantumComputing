<?php

class Complex_Matrix {
    
    protected $_array;
    
    protected $_numRows;
    protected $_numCols;
    
    public function addRow();
    
    /**
     * Transpose this matrix
     */
    public function transpose() {
        array_unshift($this->_array, null); // prepend null
        // When null is passed to array_map as the first argument, it constructs a new array
        // array_map passes all the elements of $this->_array to array_map where null is the first
        $this->_array = call_user_func_array('array_map', $this->_array);
    }
}
