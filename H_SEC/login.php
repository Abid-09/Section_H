
<html>
  <head>
    <title>Log in </title>
  </head>
  <body>

<?php

   $valname1= $valemail1 = $valpass = "";
   $name1=$mail1 = $pass ="";

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["name1"]))
    {
      $valname1 = "Name required";
    }
    else
    {
      $valname1 = test_input($_POST["name1"]);
    }

    if(empty($_POST["mail1"]))
    {
      $valemail1 = "Email requird";
    }
    else
    {
      $mail1= test_input($_POST["mail1"]);
    }
    if(empty($_POST["pass"]))
    {
      $valpass = "Password requird";
    }
    else
    {
      $pass= test_input($_POST["pass"]);
    }

  }
  else
  {
    echo " ";
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<?php

$message =" ";
$error =" ";
 if(isset($_POST["submit"]))
 {
  $userdata= file_get_contents("userdata.json");
  $data = json_decode($userdata, true);
  foreach($data as $row)
  {
    $row["Name"];
    $row["Email"];
    $row["Password"];

  }
  if($_POST["name1"]==$row["Name"]&& $_POST["mail1"]==$row["mail1"] && $_POST["pass"]==$row["Password"])
  {
    $message ="<h1>Log in Success</h1>";
  }
  else
  {
    $error = "<h1>Incorrect Name Email and Password</h1>";
  }

  if(isset($error))
  {
    echo $error;
  }
  if(isset($message))
  {
    echo $message;
  }
 }

?>


    <h2 align="center"> Log in </h2>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table align="center">
    <tr>
        <td>Name </td>
        <td><input type="text" name="name1"><?php echo $valname1; ?></td>

      </tr>
      
      <tr>
        <td>E-mail </td>
        <td><input type="email" name="mail1"><?php echo $valemail1; ?></td>

      </tr>
      <tr>
        <td>Password </td>
        <td><input type="password" name="pass"><?php echo $valpass ?></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Log in"></td>
      </tr>
      <tr>
        <td>Don't have an account <a href="home.php"> Sin Up</a></td>
    </tr>
    </table>
  </form>

  </body>
</html>