<?php

    session_start();
    
    include "Model/database.php";

    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $username= $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];

   



 
    if($password == $confirm_password)
    {
        if(strlen($username) >= 3)
        {
            $users_count = $db->query("SELECT * FROM users WHERE username = '$username' ") ->num_rows;
            if($users_count == 0) 
            {
                if($_FILES["image"]["size"] > 10000000)
                {
                    $_SESSION["message"] ="Your file is too large !!!";
                    $_SESSION["message_type"] = "error";
                    header("Location: register");
                }
                else
                {
                    $secure_password = md5($password);

                    $image = "Images/" . $_FILES["image"]["name"];

                    $db->query("INSERT INTO users(first_name,last_name,username,image,email,password,confirm_password,birthday,gender) VALUES('$first_name','$last_name','$username','$image','$email','$secure_password','$confirm_password','$birthday','$gender')");

                    move_uploaded_file($_FILES["image"]["tmp_name"], $image);
                    header ("Location: index.php");
                    $_SESSION["message"] = "our registration was successful.✅";
                    $_SESSION["message_type"] = "success";  
                }
        
            }
            else
            {
                $_SESSION["message"] = "Your username is duplicated. 😇";
                header ("Location: register");
            }
        }
        else
        {
            $_SESSION["message"] = "Username must be at least 3 characters long. 😎";
            $_SESSION["message_type"] = "error";
            header ("Location: register");
        }
    }
    else
    {
        $_SESSION["message"] = "Passwords dosent match.😕";
        $_SESSION["message_type"] = "error";
        header ("Location: register");

    }

    if($first_name =='' || $last_name =='' || $email =='' || $password =='' || $confirm_password =='' || $birthday =='' || $gender =='')
    {
        $_SESSION["message"] = "Please complete the registration form.(❌It is mandatory to fill in all the information on the registration form❌)";
        $_SESSION["message_type"] = "error";
        header ("Location: register");
    
    }
    
    



   
?>

