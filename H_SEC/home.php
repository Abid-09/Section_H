<html>
    <head><title>Registration Form for Sing Up</title></head>
    <body>

<?php

   $valname=$valemail=$valpassword=$valpassword1=$valphone=$valaddress=$valgender=$valcard=$valdate=$valcity="";
    $name = $mail = $password = $password1 = $phone = $address = $gender = $nationalID = $date = $city = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {

        if(empty($_POST["ename"]))
        {
            $valname="Please Enter Your Name :";
        }
        else
        {
            $name= test_input($_POST["ename"]);
            if (!preg_match("/^[a-zA-Z]*$/",$name)) 
            {
                $valname = "Only small and capital letter allowed";
            }
        }

        if(empty($_POST["email"]))
        {
            $valemail="Please Enter Your Email :";
        }
        else
        {
            $mail = test_input($_POST["email"]);
            
            
        }

        if(empty($_POST["password"]) || (strlen($_POST["password"]))<8)
        {
            $valpassword ="Please Enter a 8 bit Password";
        }
        else
        {
            $password = test_input($_POST["password"]);
        }
        if(($_POST["password"])!=($_POST["password1"]))
        {
            $valpassword1 ="Password Must be Same";
        }
        else
        {
            $password1 = test_input($_POST["password1"]);
        }

        if(empty($_POST["phone"]))
        {
            $valphone="Please Enter Your Phone Number :";
        }
        else
        {
            $phone = test_input ($_POST["phone"]);
        }
        if(empty($_POST["address"]))
        {
            $valaddress="Please Enter Your Address :";
        }
        else
        {
            $address = test_input ($_POST["address"]);   
        }
        if(empty($_POST["gender"]))
        {
            $valgender="Please Select One :";
        }
        else
        {
            $gender = test_input ($_POST["gender"]);   
        }
        
        if(empty($_POST["NIDcard"]))
        {
            $valcard="Please Enter Your NID Number :";
        }
        else
        {
            $nationalID = test_input ($_POST["NIDcard"]);   
        }
        if(empty($_POST["dateofbirth"]))
        {
            $valdate="Please Enter DOB:";
        }
        else
        {
            $date = test_input ($_POST["dateofbirth"]);   
        }
        if(empty($_POST["city1"]))
        {
            $valcity="Please Enter Your City :";
        }
        else
        {
            $city = test_input ($_POST["city1"]);   
        }
    
        if($_POST["ename"]!=''&&$_POST["email"]!=''&&$_POST["password"]!=''&&$_POST["password1"]!=''&& $_POST["phone"]!=''&& $_POST["address"]!=''&& $_POST["gender"]!=''&& $_POST["NIDcard"]!=''&& $_POST["dateofbirth"]!=''&& $_POST["city1"]!='')
        {
            if(file_exists('userdata.json'))
            {
            $current_data = file_get_contents('userdata.json');
            $array_data = json_decode($current_data, true);
            $new_data = array(
                ' Name' => $_POST["ename"],
                'Email' => $_POST["email"],
                'Password' => $_POST["password"],
                'Confirm Password' => $_POST["password1"],
                'Phone Number' => $_POST["phone"],
                'Address' => $_POST["address"],
                'Gender' => $_POST["gender"],
                'National ID Card' => $_POST["NIDcard"],
                'Date Of Birth' => $_POST["dateofbirth"],
                'City' => $_POST["city1"],
            );
            $array_data[] = $new_data;
            $json_data = json_encode($array_data,JSON_PRETTY_PRINT);
            if(file_put_contents('userdata.json', $json_data))
            {
                echo "<h2> Registretion is succesfully</h2>";
            }
            else{
                echo " Registretion is unsuccesfully";
            }
            }
            else
            {
                echo "Json file not Exist";
            }
            
        }
        else
        {
        echo "Please Fill up all field";
        }

    
           
    }
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
    }
    



?>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="POST">


<table align="center">

<tr>
    <td>Name *</td>
    <td><input type="text" placeholder="Name please" name="ename" required ><span><?php echo $valname?></span> </td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="email" placeholder="Email" name="email"><span><?php echo $valemail?></span> </td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" placeholder="password" name="password"><span><?php echo $valpassword?></span></td>

</tr>
<tr>
    <td>Confirm Password</td>
    <td><input type="password" placeholder="password" name="password1"><span><?php echo $valpassword1?></span></td>

</tr>

<tr>
    <td>Phone Number</td>
    <td><input type="tel" id="phone" name="phone"><span><?php echo $valphone?></span></td>
</tr>
<tr>
    <td>Address</td>
    <td><textarea name= "address" cols="20" rows="5" name="address"></textarea><span><?php echo $valaddress?></span></td>

    
</tr>

<tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other<span><?php echo $valgender?></span></td>
</tr>
<tr>    
    <td>NID Number</td>
    <td><input type ="number" name="NIDcard" maxlength="10" ><span><?php echo $valcard?></span></td>
</tr>
<tr>
    <td>Date Of Birth</td>
    <td><input type ="date" name="dateofbirth"><span><?php echo $valdate?></span></td>
</tr>

<tr>
    <td>City</td>
    <td><select name="city1" id="">
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Barisal">Barisal</option>
        <span><?php echo $valcity?></span>
    </td>
</tr>

<tr>
    <td></td>
    <td><input type = "submit" name="submit" value="Submit">
    <input type="reset"></td>
</tr>
<tr>
    <td> Already Have an Account? <a herf ="login.php">Login</a></td>
</tr>
</table>
</form>

</body>

</html>
