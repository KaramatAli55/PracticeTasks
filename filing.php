<?php

/**
*create and open file in write mode
*@param file name
*@param mode of the file in which you want to open
*@return file pointer
*/
$file1_write=fopen("file1.txt","w");
$text="My name is karamat Ali";

/**
*writing into the file
*@param file pointer
*@param text you want to write into the file
*/
fwrite($file1_write,$text);

/**
*close the file
*@param file pointer
*/
fclose($file1_write);

/**
*copy data from one file to other file
*/

/**
*create and open file in read mode
*@param file name
*@param mode of the file in which you want to open
*@return file pointer
*/
$file1_read=fopen("file1.txt","r") ;
//open second file with write mode
$file2_write=fopen("file2.txt","w");
/**
*writing into the file
*@param file pointer
*@param text you want to write .it will first read text from first file.
*/
fwrite($file2_write,fread($file1_read,filesize("file1.txt")));
//close both files
fclose($file1_read);
fclose($file2_write);

//open seocnd file with read mode
$file2_read=fopen("file2.txt","r");
/**
*writing into the file
*@param file pointer
*@param file Size
*@return it will return the file text
*/
echo fread($file2_read,filesize("file2.txt"));
fclose($file2_read);

 ?>
