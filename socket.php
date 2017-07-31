<?php

//create socket "AF_INET" for ipv version 4, "SOCK_STREAM" for tcp protocle, 0 for IP protcole
if(!($sock=socket_create(AF_INET, SOCK_STREAM, 0))){
  //if any error occue in any function of the socket then this will display
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
echo "\nsocket created \n";

//connect socket to server
//gethostbyname()return the ip address
if(!(socket_connect($sock, gethostbyname("www.google.com"), 80))){
  //if any error occue in any function of the socket then this will display
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
echo"socket connection established \n";

//send data to the server
$message = "GET / HTTP/1.1\r\n\r\n";
if(!socket_send($sock, $message, strlen($message), 0)){
  //if any error occue in any function of the socket then this will display
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
echo "Message send successfully \n";

//revieve reply from the server
if(socket_recv ( $sock , $buf , 2048 , MSG_WAITALL) === FALSE){
  //if any error occue in any function of the socket then this will display
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
//print the response
echo "print respone \n";
echo $buf;


 ?>
