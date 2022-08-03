<?php

    include "Model/database.php"; 
    include "Controller/functions.php";


    $posts = $db->query("SELECT *, users.id AS id_karbar, posts.id AS id_post FROM
                        users INNER JOIN posts
                        ON users.id = posts.user_id
                        ORDER BY time DESC;");

    
    $posts_array = array();

    // $postha = $db->query("SELECT * FROM posts;");

    // $comments = $db->query("SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id;");

    foreach($posts as $post)
    {
        $post_id = $post["id_post"];

        $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE post_id = $post_id")->fetch_assoc();

        $post["comments"] = $db->query("SELECT * FROM
                                        comments INNER JOIN users 
                                        ON comments.user_id = users.id
                                        WHERE post_id = $post_id
                                        ORDER BY time DESC");

        $posts_array[] = $post;
        
    }
   

    require "View/home.php";

?>