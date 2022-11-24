<?php
include("../control/manager_regi_validate.php")

?>

<html>
    <head><title>FOOD DELIVERY SYSTEM</title></head>
    <body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<fieldset>
      <h2 align="center">Manager Registration Form</h2>
</fieldset>


<fieldset>
    
<legend align = "center"><h3><i>Personal Information</i></h3></legend>

<table align="center">

<tr>
    <td>Name </td>
    <td><input type="text" placeholder="Name please" name="name" required ><span><?php echo $name;?></span> </td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="email" placeholder="Email" name="email" required ><span><?php echo $mail;?></span> </td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" placeholder="Password" name="password" required><span><?php echo $password;?></span></td>

</tr>
<tr>
    <td>Confirm Password</td>
    <td><input type="password" placeholder="Password" name="confirm_password" required><span><?php echo $confirm_password;?></span></td>

</tr>

<tr>
    <td>Phone Number</td>
    <td><input type="tel" id="phone" placeholder="Phone Number"  name="phone_number"><span><?php echo $phone_number;?></span></td>
</tr>
<tr>
    <td>Address</td>
    <td><textarea name= "address" cols="20" rows="5" placeholder="Address" name="address"></textarea><span><?php echo $address;?></span></td>

    
</tr>

<tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other <span><?php echo $gender;?></span></td>
</tr>
<tr>    
    <td>NID Number</td>
    <td><input type ="number" name="nid_number" placeholder="Number"maxlength="10" required><span><?php echo $nid_number;?></span></td>
</tr>
<tr>
    <td>Date Of Birth</td>
    <td><input type ="date" name="date_of_birth"><span><?php echo $date;?></span></td>
</tr>

<tr>
    <td>City</td>
    <td><select name="city" id="">
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Barisal">Barisal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Khulna">Khulna</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Rangpur">Rangpur</option>
        <span><?php echo $city;?></span>
    </td>
</tr>

<tr>
    <td></td>
    <td><input type = "submit" name="submit" value="Submit">
    <input type="reset"></td>
</tr>
<tr>
    <td>Already Have an Account?<a href ="login.php">  Login</a></td>
</tr>
</table>
</fieldset>
</form>

</body>

</html>
