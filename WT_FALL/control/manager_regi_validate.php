<?php

    include("../model/db.php");
    $name = $mail = $password = $confirm_password = $phone_number = $address = $gender = $nid_number = $date = $city = "";
    $haserror=0;  
    
    
    if ($_SERVER["REQUEST_METHOD"]=="POST")
      {

        if(empty($_POST["name"]))
        {
          $name="Please Enter Your Name :";
        }
        else if(!preg_match("/^[a-zA-Z]*$/",$_POST["name"]))
        {
          $name = "Only Contain Alphabet";
        }

        else if(empty($_POST["email"]))
        {
          $mail="Please Enter Your Email :";
        }
        else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\+_\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
        {
          $mail = "invalid email or email field is empty";
                
        }

        else if(empty($_POST["password"]))
        {
          $password ="Please Enter a 8 bit Password";
        }
        else if(!preg_match("@[0-9]@",$_POST["password"]))
        {
          $password="enter number only";
        }
        else if(strlen($_POST["password"])<8)
        {
          $password="Must be 8 bit long";
        }
        
        else if(($_POST["password"])!=($_POST["confirm_password"]))
        {
          $confirm_password ="Password Must be Same";
        }
            

        else if(empty($_POST["phone_number"]))
        {
          $phone_number="Please Enter Your Phone Number :";
        }
        else if(!preg_match("/^[0-9]*$/",$_POST["phone_number"]))
        {
                
          $phone_number="Invalid phone number";
        }
        else if(strlen($_POST["phone_number"])<11)
        {
          $phone_number="Phone number must be 11 character long";
        }
        else if(empty($_POST["address"]))
        {
          $address="Please Enter Your Address :";
        }
                
        else if(empty($_POST["gender"]))
        {
          $gender="Please Select One :";
        }
                
            
        else if(empty($_POST["nid_number"]))
        {
          $nid_number="Please Enter Your NID Number :";
        }
        else if(!preg_match("/^[0-9]*$/",$_POST["nid_number"]))
        {
          $nid_number="Invalid NID Information";
                    
        }
        else if(strlen($_POST["nid_number"])<11) 
        {
          $nid_number="NID number must be 11 character long";
        }
        else if(empty($_POST["date_of_birth"]))
        {
          $date="Please Enter DOB:";
        }
                
        else if(empty($_POST["city"]))
        {
          $city="Please Enter Your City :";
        }
        else
        {
          $name=$_POST["name"];
          $email=$_POST["email"];
          $password=$_POST["password"];
          $confirm_password=$_POST["confirm_password"];
          $phone_number=$_POST["phone_number"];
          $address=$_POST["address"];
          $gender=$_POST["gender"];
          $nid_number=$_POST["nid_number"];
          $date=$_POST["date_of_birth"];
          $city=$_POST["city"];
                
                
          if(isset($_POST["submit"]))
          {
            $mydb =new db();
            $conobj=$mydb->openCon();
                    
            $result = $mydb->insertUser($conobj,"user",$name,$email,$password,$confirm_password,$phone_number,$address,$gender,$nid_number,$date,$city);
              
          }
                
                
                
        } 


                
      }

      
      
  
      
        
    //             if($_POST["name"]!='' && $_POST["email"]!='' && $_POST["password"]!='' && $_POST["confirm_password"]!='' && $_POST["phone_number"]!='' && $_POST["address"]!='' && $_POST["gender"]!='' && $_POST["nid_number"]!='' && $_POST["date_of_birth"]!='')
    //             {
    //             if(file_exists("../data/userdata.json"))
    //               {
    //                     $current_data = file_get_contents("../data/userdata.json");
    //                     $array_data = json_decode($current_data, true);
    //                     $new_data = array(
    //                         "Name" => $_POST["name"],
    //                         "Email" => $_POST["email"],
    //                         "Password" => $_POST["password"],
    //                         "Confirm Password" => $_POST["confirm_password"],
    //                         "Phone Number" => $_POST["phone_number"],
    //                         "Address" => $_POST["address"],
    //                         "Gender" => $_POST["gender"],
    //                         "National ID Card" => $_POST["nid_number"],
    //                         "Date Of Birth" => $_POST["date_of_birth"]
    //                     );
    //                 $array_data[] = $new_data;
    //                 $json_data = json_encode($array_data,JSON_PRETTY_PRINT);
    //                 if(file_put_contents("../data/userdata.json", $json_data))
    //                 {
    //                   header("location:login.php");
    //                 }
    //                 else
    //                 {
    //                 echo " Registretion is unsuccesfully";
    //                 }
    //                 }
    //                 else
    //                 {
    //                   echo "Json file not Exist";
    //                 }
                
    //             }
    //             else
    //             {
    //             echo "Please Fill up all field";
    //             }
              
    //     }
        
           
    // }
    
    // function test_input($data)
    // {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    
    // }
   
    
    
?>
