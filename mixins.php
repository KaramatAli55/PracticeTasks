<?php

/**
*
* A mixins complier created .which will supports multiple inheritence
*/
trait Complier{
  /**
  *default constructor of compiler mixins
  */
  function Complier(){
    echo "compiler completed his task\n";
  }
}

/**
*
* A mixins Linker created .which will supports multiple inheritence
*/
trait Linker{
  /**
  *default constructor of Linker mixins
  */
  function Linker(){
    echo "Linker completed his task\n";
  }
}

/**
*
* A mixins complier created .which will supports multiple inheritence
*/
trait Loader{
  /**
  *default constructor of Loader mixins
  */
  function Loader(){
    echo "Loader completed his task\n";
  }
}
/**
*
*class which have multiple parent class. means use multiple mixins
*/
class Ide{
  use Complier,Linker,Loader;
/**
*function wil call the constrcutor of the compiler,Loader and Linker MIXINS
*/
  function run(){
    $this->Complier();
    $this->Loader();
    $this->Linker();
  }
}
//object creation of the IDE class
$ide=new ide();
//function call
$ide->run();
echo "Execution completed\n";

 ?>
