<?php

//singleton pattern
class SingletonClass{
   private static $instance=null;
   //private constructor
   private function SingletonClass(){
   }
   //static method
   public static function getInstance(){
     //check if instance is alrady ini
     if(self::$instance==null){
        return self::$instance=new SingletonClass();
     }
     else{
       return self::$instance;
     }
   }
   public function display(){
     echo "I am SingletonClass ";
   }
}
//get the instance of the singleton class
$obj=SingletonClass::getInstance();
$obj->display();

 ?>
