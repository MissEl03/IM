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
        return $this->$y1 =$y1;
    }
    public function getX(){
        return $this->$x1;
    }
    public function getY(){
        return $this->$y1;
    }

    function enterXY($x1,$y1){
        echo "Point (" . setY() . "," . setX() . ")";
    }
}

echo $p = new Point(1,2);
// echo $p -> setX(2);
// echo $p -> setY(3);
