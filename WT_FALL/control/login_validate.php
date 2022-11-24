<?php
session_start();
include("../model/db.php");


  if(!empty($_SESSION["Name"]))
  {
    header("location:session.php");
  }
  
  $message=$error=" "; 
  $name=$email=$password=" ";
  if(isset($_POST["submit"]))
  {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
  }
  
  if(isset($_POST["submit"]))
  {
    $mydb= new db();
    $conobj=$mydb->openCon();
    $result=$mydb->checkUser($conobj,"user",$_POST["name"],$_POST["email"],$_POST["password"]);
    if($result=true)
    {
      $_SESSION["Name"]=$name;
      $message ="<h1>Log in Success</h1>";
      header("location:session.php");
    }
    else
    {
      $error="<h4 align='center'>Invalid name,password and email</h4>";
    }

  }
  
  
  

?>

<?php

// if(!empty($_SESSION["Password"]) && !empty($_SESSION["Email"]))
// {
//     header("location:session.php");
// }
// $message =" ";
// $error =" ";
//  if(isset($_POST["submit"]))
//  {
//   $userdata= file_get_contents("../data/userdata.json");
//   $data = json_decode($userdata,true);
//  //echo $data[0]->Name;
//   foreach($data as $row)
//   {
//     $row["Name"];
//     $row["Email"];
//     $row["Password"];

//    if($_POST["name1"]==$row["Name"] && $_POST["mail1"]==$row["Email"] && $_POST["pass"]==$row["Password"])
//    {
//     $_SESSION["Name"]=$_POST["name1"];
//     $_SESSION["Email"]=$_POST["mail1"];
//     $_SESSION["Password"]=$_POST["pass"];
//      $message ="<h1>Log in Success</h1>";
//     header("location:session.php");
//    }
//    else
//    {
//      $error = "<h1>Incorrect Name Email and Password</h1>";
//    }
//   }

//    if(isset($error))
//    {
//     echo $error;
//    }
//    if(isset($message))
//    {
//      echo $message;
//    }
//  }

?> 






