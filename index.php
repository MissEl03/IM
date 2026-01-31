<?php 

class Point{
    private $x,$y;

    public function __construct($x, $y){
        $this->$x = $x;
        $this->$y = $y;
    }
    function getX(){
        return $x;
    }
    function getY(){
        return $y;
    }
    function setX($x){
        echo $this->$x;
    }
    function setY($y){
        echo $this->$y;
    }
    function point($x, $y){
        echo $x . "+" . $y;
    }
}
$p = new Point(4,5);
echo $p;
