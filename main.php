<?php
class Point {
    private $x1, $y1;
    public function __construct ($x1, $y1){
        $this->$x1 = $x1; 
        $this->$y1 = $y1;
    }
    public function setX($x1){
        return $this->$x1 = $x1;
    }
    public function setY($y1){
        return $this->$y1;
    }
    public function getX(){
        echo $this->$x1;
    }
    public function getY(){
        echo $this->$y1;
    }

    function enterXY($x1,$y1){
        echo "Enter x1: ";
        $x1 = readline(); 
        echo "Enter y1: ";
        $y1 = readline();

        echo "Point (" . $x1 . "," . $y1 . ")";

    }
}

$p = new Point;
echo $p -> enterXY($x1,$y1);