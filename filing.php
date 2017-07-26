<?php

//create and open file in write mode

$file1_write=fopen("file1.txt","w");
$text="My name is karamat Ali";
fwrite($file1_write,$text);
fclose($file1_write);

//copy one file data to other file

//open first file with read mode
$file1_read=fopen("file1.txt","r") ;
//open second file with write mode
$file2_write=fopen("file2.txt","w");

//fread($myFile2,filesize("file1.txt"));
fwrite($file2_write,fread($file1_read,filesize("file1.txt")));
//close both files
fclose($file1_read);
fclose($file2_write);

//open seocnd file with read mode
$file2_read=fopen("file2.txt","r");
//read file text and display
echo fread($file2_read,filesize("file2.txt"));
fclose($file2_read);




 ?>
