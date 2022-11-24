<?php

class db
{
    function openCon()
    {
        $conn=new mysqli("localhost","root","","onlinefoodordersystem");
        return $conn;
    }

    function insertUser($conn,$tablename,$name,$email,$password,$confirm_password,$phone_number,$address,$gender,$nid_number,$date,$city)
    {
        $sql="INSERT INTO $tablename (name,email,password,confirm_password,phone_number,address,gender,nid_number,date_of_birth,city) VALUES ('$name','$email','$password','$confirm_password','$phone_number','$address','$gender','$nid_number','$date','$city')";

        if($conn->query($sql)==true)
        {
            echo "data inserted";
            header("location:login.php");
        }
        else
        {
            echo"error occured".$conn->error;
        }

    }

    function closeCon($conn)
    {
        $conn->close();
    }

    function checkUser($conn,$tablename,$name,$email,$password)
    {
        $sql="SELECT * FROM $tablename WHERE name='$name' AND email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if($result->num_row>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function showAll($conn,$tablename)
    {
        $sql="SELECT * FROM $tablename";
        $result=$conn->query($sql);
        return $result;
    }
    


}

?>