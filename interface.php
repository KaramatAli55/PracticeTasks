<?php

/**
*
*interface class defination
*/
interface Bank{
  /**
  *
  *abstarct function
  */
  public function rateOfInterest();
}
/**
*
*HblBank class will implement the interface BankS
*/
class HblBank implements Bank{
  /**
  *
  *overrided function
  *@return interset rate of HblBank
  */
  public function rateOfInterest(){
    return 9.5;
  }
}

/**
*
*SummitBank class will implement the interface
*/
class SummitBank implements Bank{
  /**
  *
  *overrided function
  *@return interset rate of SummitBank
  */
  public function rateOfInterest(){
    return 9.3;
  }
}

/**
*
*SummitBank class will implement the interface
*/
class AlflhaBank implements Bank{
  /**
  *
  *overrided function
  *@return interset rate of AlflhaBank
  */
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
