<?php

//interface defination
interface Bank{
  public function rateOfInterest();
}
//implementation of the interface
class HblBank implements Bank{
public function rateOfInterest(){
  return 9.5;
}
}
//
class SummitBank implements Bank{
public function rateOfInterest(){
  return 9.3;
}
}class AlflhaBank implements Bank{
public function rateOfInterest(){
  return 8.5;
}
}
//objects creatation and overrided functions calls

$hblObj=new HblBank();
echo "HBL Bank interest rate is    :".$hblObj->rateOfInterest()."<br>";

$summitObject=new SummitBank();
echo "Summit Bank intrest rate is  :".$summitObject->rateOfInterest()."<br>";

$alphlaObject=new AlflhaBank();
echo "Alphla Bank intrest rate is   :".$alphlaObject->rateOfInterest()."<br>";



 ?>
