<?php
//define variables.
$servername="localhost";
$username="root";
$password="";
$dbname="Ayushi";
//creating a connection.

$conn=new mysqli($servername,$username,$password,$dbname);

//checking a connection.

if($conn->connect_error) {
  die("Connection failed".$conn->connect_error);
}

//creating a table
/*
$sql="CREATE TABLE userinfo(
Name VARCHAR(30),
RegNo int (10) NOT NULL,
Email VARCHAR(30),
Mobile int (10),
CGPA int(10), 
Gender VARCHAR(10)
)";

//check the table.
if($conn->query($sql)===TRUE) {
  echo"Table Created Successfully.";
} else {
  echo"Connection error".$conn->error;
}
*/
//Read data given in the html form:

$Name =$_POST["Name"];
$RegNo =$_POST["RegNo"];
$Email =$_POST["Email"];
$Mobile =$_POST["Mobile"];
$CGPA =$_POST["CGPA"];
$Gender =$_POST["Gender"];

//check the insertion.

$sql="INSERT INTO userinfo VALUES('$Name','$RegNo','$Email','$Mobile','$CGPA','$Gender')";
echo"Inserted Successfully";
if($conn->query($sql) === True) {
 echo"Inserted Sucessfully.";
} else {
 echo"Error.".$conn->error;
}

$conn->close();
?>

