<?php

class SingletonClass{
   private static $instance=null;
   private function SingletonClass(){
   }
   public static function getInstance(){
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
$obj=SingletonClass::getInstance();
$obj->display();

 ?>
