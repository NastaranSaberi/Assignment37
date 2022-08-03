<?php 

    include "View/header.php";

    $users = $db->query("SELECT * FROM users;");

?>

<body style="background:#18191A;color:white">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#282828;">
        <div class="container-fluid">
           
            <div class="img_user">
                    <img src="<?php 

                                if($user["image"] != "")
                                {
                                    echo $user["image"];
                                }
                                else
                                {
                                    if($user["gender"] == F)
                                    {
                                        echo "Images/users/__woman_person_user-256.webp";
                                    }
                                    elseif($user["gender"] == M)
                                    {
                                        echo "Images/users/__man_user_person-256.webp";
                                    }
                                    else
                                    {
                                        echo "Images/users/_lgbt_rainbow_emoji_face-512.webp";
                                    }

                                }

                            ?>" alt="" width="40px" height="40px" style="border-radius:50%;margin-left: 11px;">  
                        <?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):?>
                            <h6 style="display: inline-block;margin-left:2px;">
                                <?php echo $_SESSION["username"];?>
                            </h6>
                        <?php endif;?>
                    </div>
                </div>

                <?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):?>
                            <a class="nav-link active logout" aria-current="page" href="logout_process.php">
                                <svg style="width: 23px;height: 22px;margin-top: -15px;color: #B0B3B8;" class="svg-inline--fa fa-arrow-right-from-bracket" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-from-bracket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64c17.67 0 32-14.33 32-32S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256c0 53.02 42.98 96 96 96h64c17.67 0 32-14.33 32-32S177.7 416 160 416zM502.6 233.4l-128-128c-12.51-12.51-32.76-12.49-45.25 0c-12.5 12.5-12.5 32.75 0 45.25L402.8 224H192C174.3 224 160 238.3 160 256s14.31 32 32 32h210.8l-73.38 73.38c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0l128-128C515.1 266.1 515.1 245.9 502.6 233.4z"></path>
                                </svg>
                            </a>
                <?php endif;?>
        </div>
    </nav>

