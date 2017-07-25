<?php

 //database insert code

 $server='localhost';
 $db_user='root';
 $db_password='123';
 $db_name='practice';

 //create connection to the database
 $conn=new mysqli($server,$db_user,$db_password,$db_name);
 //test connection

 if(!$conn)
 {
 	die("unable to connect to the database");
 }
 //craete query
 
 $query="insert into student(id,name) value(3,'karamat')";
 //execute query
 
 if($conn->query($query)) 
 {
    echo "New record created successfully"."<br>";
 }
 else
 {
    echo "Record is not inserted";
 }
 //$conn.close();

//database select code

// query for select data from database

$selectStatement="select * from student";

//execute query 

$result=$conn->query($selectStatement);
if($result->num_rows >0)
{
	//iterate on the result to show all rows
    
    while($row=$result->fetch_assoc())
    {
    	echo "id:".$row["id"]."name:".$row["name"]."<br>";
    }
    echo "<br>";
}

//database update code

//query for update data in the database

$updateStatement="update student set  name='shoaib' where id=1";
 
 //execute query and check its status
 
 if($conn->query($updateStatement)) 
 {
    echo "Record update successfully"."<br>";
 }
 else
 {
 	echo"error"."<br>";
 }

//delete row code

 $deleteStatement="delete student where id=2";

 //execute query and check its status

 if($conn->query($updateStatement)) 
 {
    echo "Record deleted successfully"."<br>";
 }
 else
 {
 	echo"error"."<br>";
 }


?>
