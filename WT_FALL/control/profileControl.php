<?php
include ("../model/db.php")

$mydb= new db();
$conobj=$myobj->openCon();
$result= $mydb->showAll($conobj,"user")
if($result->num_rows>0)
{
    echo"<table>";
    foreach($result as $row)
    {
       echo "<tr>Name<td>".$row["name"];
       echo "<tr>Email<td>".$row["email"];
       echo "<tr>Phone Number<td>".$row["phone_number"];
       echo "<tr>Address<td>".$row["address"];
       echo "<tr>Gender<td>".$row["gender"];
       echo "<tr>National ID card<td>".$row["nid_number"];    
       echo "<tr>Date Of Birth<td>".$row["date_of_birth"];
       echo "<tr>City<td>".$row["city"];
       echo "<tr>ID<td>".$row["id"];
    }
     echo"</table>";
}

?>