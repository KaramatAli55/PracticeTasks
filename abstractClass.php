<?php

abstract class Person{
  private $id;
  private $name;
  //dafault constructor
  public function ClassA(){
    $this->id=0;
    $this->name=null;
  }
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
  abstract public function calculateSalary();

}

//Employee Class which inherit an abstract class
class Employee extends Person{
  private $workingHours;
  private $wageRate;
  //parameterized and default constructor
  public function Employee($working_hours=0, $wage_rate=0, $n=null, $i=0){
    $this->workingHours=$working_hours;
    $this->wageRate=$wage_rate;
    //parent::setName($n);
    //parent::setId($i);
    $this->setName($n);
    $this->setId($i);
  }
  //implemenation of abstract function
  public function calculateSalary(){
     return $this->workingHours*$this->wageRate;
  }
  //show all deatil of the employee
  public function displayDeatil(){
    echo parent::getName()." has ".$this->calculateSalary()." salary";
  }

}

//object creation
$obj=new Employee(11, 100, "karamat", 1);
$obj->displayDeatil();

 ?>
