<?php

class Exercise_Chapter1_Ex132 extends Exercise_Browser {

    public function run() {
        $this->outputHead();
        $this->outputBody($this->_getGraph());
        $this->outputFooter();
    }
    
    protected function _getGraph() {
        $out = file_get_contents(dirname(__FILE__) . "/template/ex132.phtml");
        return $out;
    }
}
