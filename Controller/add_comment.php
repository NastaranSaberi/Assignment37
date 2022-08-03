<?php
  
    session_start();   

    include "Model/database.php";

    $text = $_POST["text"];
    $post_id = $_POST["post_id"];
    $user_id = $_SESSION["user_id"];
    

    $db->query("INSERT INTO comments(text, post_id, user_id) VALUES('$text', $post_id, $user_id)");


    header("Location: home");


?>