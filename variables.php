<?php

//string declartion

$x="karamat";
echo "string value is : ";
echo $x;
echo "<br>";

//integer declartion

$y=95;
echo "Integer value is :";
echo $y;
echo "<br>";

//Array declartion

$studentName=array("shoaib","javed","bilal");
$arrCount=count($studentName);
echo"my friends are :"."<br>";
for($i=0; $i<$arrCount; $i++)
{
    echo $studentName[$i]."<br>";
}

//type casting
echo "<br>"."Type Casting"."<br>";
$intA=10;
$strA=(string)$intA;
echo $strA ;


?>