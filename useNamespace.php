<?php

/**
*first include the file matchNaespace which have differenet function of math
*if namespace is not there then due to keyword require it will generate the error
*/
require "mathNamespace.php";
/**
*here is the function call which are in the included namespace
*/
echo "16+10=".math\sum(16,10)."<br>";
echo "26-10=".math\sub(26,10)."<br>";
echo "10*10=".math\mul(10,10)."<br>";
echo "20/10=".math\div(20,10)."<br>";

 ?>
