<?php

//create interface
interface Shape{
  public function draw();
}
//square class implements interface
class Square implements Shape{
  //constructor
  public function Square(){
    echo "Shape class constructor"."<br>";
  }
  //override
  public function draw(){
    echo "draw function of the square class"."<br>";
  }
}
//Rectangle class implements interface
class Rectangle implements Shape{
  //constructor
  public function Rectangle(){
    echo "Rectangle class constructor"."<br>";
  }
  //override
  public function draw(){
    echo "draw function of the Rectangle class"."<br>";
  }
}
//Circle class implements interface
class Circle implements Shape{
  //constructor
  public function Circle(){
    echo "Cicle class constructor"."<br>";
  }
  //override
  public function draw(){
    echo "draw function of the Circle class"."<br>";
  }
}
//Create a Factory to generate object of classes based on given information
class FactoryClass{
  public function FactoryClass(){
  }
  //method to create the objects of different classes on provided information
  public function getInstance($type){
    if ($type=='Square') {
      return new Square();
    } elseif ($type=='Circle') {
      return new Circle();
    } elseif ($type=='Rectangle') {
      return new Rectangle();
    } else {
      return 0;
    }
  }
}
//Use the Factory class to get the object of classes by giving infoemation
$factoryObject=new FactoryClass();
//get the object of the rectangle from factory and call draw method
$rectangleObject=$factoryObject->getInstance('Rectangle');
$rectangleObject->draw();
//get the object of the Square from factory and call draw method
$squareObject=$factoryObject->getInstance('Square');
$squareObject->draw();
//get the object of the circle from factory and call draw method
$circleObject=$factoryObject->getInstance('Circle');
$circleObject->draw();

 ?>
