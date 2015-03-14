<?php

class Exercise_Browser {
    public function outputHead() {
        echo "<html><head>";
        echo '<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jsxgraph/0.99.3/jsxgraphcore.js"></script>';
        echo '<link rel="stylesheet" href="http://jsxgraph.uni-bayreuth.de/distrib/jsxgraph.css" type="text/css">';
        echo "</head>";
    }
    
    public function outputBody($body) {
        echo "<body>" . $body;
    }
    
    public function outputFooter() {
        echo "</body>";
        echo "</html>";
    }
}
