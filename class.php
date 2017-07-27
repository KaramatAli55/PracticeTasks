<?php

class ClassA{
  private $id;
  private $name;
  //dafault constructor
  public function ClassA(){
    $this->id=0;
    $this->name=null;
  }
  //parameterized construc
  /*function ClassA($i=0, $n=null){
    $this->id=$i;
    $this->name=$n;
  }*/
  //setters
  public function setId($i){
    $this->id=$i;
  }
  public function setName($n){
    $this->name=$n;
  }
  //getters
  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }
  //print function
  function display(){
    echo $this->id."<br>";
    echo $this->name;
  }

}
//object creation
$obj=new ClassA();
$obj->setName("karamat");
$obj->setId(1);
$obj->display();
 ?>
