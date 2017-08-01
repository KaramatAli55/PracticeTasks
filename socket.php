<?php

/**
*it will create socket if any error occur during creation it will display error
*
*@param  "AF_INET" for ipv version 4
*@param  "SOCK_STREAM" for tcp protocle
*@param   0 for IP protocol
*@return socket object
*/

if(!($sock=socket_create(AF_INET, SOCK_STREAM, 0))){
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
echo "\nsocket created \n";

/**
*it will connect the  socket with the server if any error occur during connection it will display error
*
*@param  $sock object of socket
*@param  gethostbyname()return the ip address of the address
*@param  80 port number
*@return if socket connected to the server it will retrun true
*/

if(!(socket_connect($sock, gethostbyname("www.google.com"), 80))){
  //if any error occue in any function of the socket then this will display
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
echo"socket connection established \n";

/**
*it will send the data to the server if any error occur during process it will display error
*
*@param  $sock object of socket
*@param  $message ...message you want to send to the server
*@param  80 port number
*@return if data is sent to the server it will return true
*/

$message = "GET / HTTP/1.1\r\n\r\n";
if(!socket_send($sock, $message, strlen($message), 0)){
  //if any error occue in any function of the socket then this will display
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}
echo "Message send successfully \n";

/**
*it will recieve  data from the server if any error occur during process it will display error
*
*@param  $sock object of socket
*@param  $buf for data reciver object
*@param  2048  buffer lenght
*@param MSG_WAITALL it is the flag
*@return if data is recieve from the server it will return true
*/

if(socket_recv ( $sock , $buf , 2048 , MSG_WAITALL) === FALSE){
  $error_code=socket_last_error();
  $error_msg=socket_strerror();
  die("Couldn't create socket: $errorcode $errormsg \n");
}

echo "print respone \n";
echo $buf;


 ?>
