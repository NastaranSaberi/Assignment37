<?php
  
    session_start();   

    include "Model/database.php";

    $caption = $_POST["caption"];
    $user_id = $_SESSION["user_id"];
    $media = $_SESSION["media"];

      
    $file_extension = basename($_FILES["media"]["type"]);

    
    //$_SESSION["message"] = $file_extension;
    if($file_extension == "jpg" || $file_extension == "gif" || $file_extension == "png" || $file_extension == "webp"|| $file_extension == "jpeg")
    {
        $media = "Images/posts/" . $_FILES["media"]["name"];
        $db->query("INSERT INTO posts(caption,media,user_id) VALUES('$caption','$media','$user_id')");
        move_uploaded_file($_FILES["media"]["tmp_name"] ,$media);

        $_SESSION["message_type"] = "image";
    }
    elseif($file_extension == "mpeg" ||$file_extension == "mp3" )
    {
        $_SESSION["message"] = "audio"; 
           
    }
    elseif($file_extension == "mp4" ||$file_extension == "mpeg"||$file_extension == "wmv" ||$file_extension == "mkv")
    {
        $_SESSION["message"] = "video"; 
    }


    header("Location: home");


?>