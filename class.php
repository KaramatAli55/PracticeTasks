<?php
/**
*
*example of how to create class and how to operate on the class object etc...
*/
class ClassA{
/**
*
*attribute of the class
*/
  private $id;
  private $name;
/**
*
*default constructor of the class which assign the deafult values to the class attribute
*/
  public function ClassA(){
    $this->id=0;
    $this->name=null;
  }
/**
*
*setters of attribute $id
*@param $i value to be set in the id field of the class
*/
  public function setId($i){
    $this->id=$i;
  }
/**
*
*stter of the attribute $name
*@param $n value to be set in the name filed of the class
*/
  public function setName($n){
    $this->name=$n;
  }

/**
*
*getter of the attibute Id
*@return id of the object
*/
  public function getId(){
    return $this->id;
  }

/**
*
*getter of the attibute name
*@return name of the object
*/
  public function getName(){
    return $this->name;
  }
/**
*
*it will display the value of the id and name field of the object
*/
  function display(){
    echo $this->id."<br>";
    echo $this->name;
  }

}
//object creation and function calls
$obj=new ClassA();
$obj->setName("karamat");
$obj->setId(1);
$obj->display();
 ?>
