<?php
class Exercise_Base {
    
    protected $_basepath;
    
    public function getUserInput($message) {
        $this->outputInfo($message);
        $handle = fopen ("php://stdin","r");
        $line = fgets($handle);
        fclose($handle);
        return trim($line);
    }
    
    public function outputInfo($msg) {
        echo $msg."\n";
    }
    
    /**
     * Ask the user to enter a complex number
     * @param type $name
     * @return \Complex_Number
     */
    public function getComplexNumberFromUser($name) {
        $real = $this->getUserInput("Please enter real part for $name");
        $imaginary = $this->getUserInput("Please enter imaginary part for $name");
        return new Complex_Number($real, $imaginary);
    }

    /**
     * Ask the user to enter a complex number in polar representation
     * @param type $name
     * @return \Complex_Number
     */
    public function getComplexNumberPolarFromUser($name) {
        $magnitude = $this->getUserInput("Please enter magnitude / length of $name");
        $phase = $this->getUserInput("Please enter phase / angle of $name");
        return new Complex_Number_Polar($magnitude, $phase);
    }
}