<?php

  
include("../control/login_validate.php")
?>

<html>
  <head>
    <title>Manager Log in </title>
  </head>
  <body>


    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <fieldset>
    <h2 align="center"> Log in </h2>
    </fieldset>

    <fieldset>
      <legand align = "center"><h3><i>Login Details</i></h3></legand>

      <table align="center">
      <tr>
        <td>Name </td>
        <td><input type="text" name="name1"><?php echo $name; ?></td>

      </tr>
      
      <tr>
        <td>E-mail </td>
        <td><input type="email" name="mail1"><?php echo $email; ?></td>

      </tr>
      <tr>
        <td>Password </td>
        <td><input type="password" name="pass"><?php echo $password ?></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Log in"></td>
      </tr>
      <tr>
        <td>Don't have an account <a href="managerregi.php"> Register</a></td>
    </tr>
    </table>
</fieldset>
  </form>

  </body>
</html>