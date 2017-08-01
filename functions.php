<?php

/**
*function defination without any argument
*/
function printMessage()
{
	echo "Hello worlds";
}
//function call
printMessage();
echo"<br>";

/**
*function defination with argument
*@param $msg any messgae you want to print
*/
function anyMessage($msg)
{
	echo "your message is:".$msg;
}
//function call with argument
anyMessage("AOA");
echo "<br>";

/**
*function defination with return value and default argument value
*@param $a int first number you want to add if you pass nothing it will take default value
*@param $a int second number you want to add if you pass nothing it will take default value
*@return it will return sum of two number
*/
function sum($a=7,$b=8)
{
	return $a+$b;
}
echo "5+6=".sum(5,6)."<br>";
echo "7+8=".sum()."<br>";

?>
