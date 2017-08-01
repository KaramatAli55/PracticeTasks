<?php

//declare variable
$global_variable=10;

/**
*this function will access the variable which is out of its scope
*/
function accessVariable()
{
	/**
	*make a variable global for this function
  */
	global $global_variable;
	echo $global_variable;
}

accessVariable();
?>
