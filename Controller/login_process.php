<?php

    session_start();
    
    include "Model/database.php";

    $username= $_POST["username"];
    $password= $_POST["password"];

    $secure_password = md5($password);

    
    $result = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$secure_password' ");
    $user_count = $result -> num_rows;

    $result_username = $db->query("SELECT * FROM users WHERE username = '$username'");
    $username_count = $result_username -> num_rows;

    $result_password = $db->query("SELECT * FROM users WHERE password = ''$secure_password'");
    $password_count = $result_password -> num_rows;
  
    if($user_count == 1) 
    {
        
        $user = $result->fetch_assoc();
        $_SESSION["login_status"]= true;
        $_SESSION["username"]= $username;
        $_SESSION["user_id"]= $user["id"];

        header ("Location: home");
        
    }
    else 
    {
        if($username_count == 0)
        {
            $_SESSION["message"] = "Username is incorrect. 🥴";
            $_SESSION["message_type"] = "error";
            header ("Location: index");
        }
        elseif($password_count == 0)
        {
            $_SESSION["message"] = "assword is incorrect. 🥴";
            $_SESSION["message_type"] = "error";
            header ("Location: index");
        }
        if($username_count == 0 && $password_count == 0)
        {
            $_SESSION["message"] = "The username or password is incorrect. 🥴";
            $_SESSION["message_type"] = "error";
            header ("Location: index");
        }
        
    }


?>