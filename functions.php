<?php

//function without argument

function printMessage()
{
	echo "Hello worlds";
}
printMessage();
echo"<br>";
//function with argument

function anyMessage($msg)
{
	echo "your message is:".$msg;
}
anyMessage("AOA");
echo "<br>";

//function with return value and default argument value

function sum($a=7,$b=8)
{
	return $a+$b;
}
echo "5+6=".sum(5,6)."<br>";
echo "7+8=".sum()."<br>";

?>
