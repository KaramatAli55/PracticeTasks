<?php

//interface defination
interface Shape{
  public function calculateArea();
}
//implementation of the interface in square class
class Square implements Shape{
private $radius;
public function Square($r){
  $this->radius=$r;
}
//overriding
public function calculateArea(){
  return 3.14*$this->radius*$this->radius;
}
}
//implementation of the interface in square class
class Rectangle implements Shape{
public function Rectangle($l, $w){
  $this->lenght=$l;
  $this->width=$w;
}
//overriding
public function calculateArea(){
  return $this->lenght*$this->width;
}
}

//objects creatation and overrided functions calls

$squareObj=new Square(10);
echo "Area of the square is    :".$squareObj->calculateArea()."<br>";

$rectangleObj=new Rectangle(5, 5);
echo "Area of the Rectangle is    :".$rectangleObj->calculateArea()."<br>";

 ?>
