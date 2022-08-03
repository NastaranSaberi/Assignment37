<?php

    session_start();
    
    include "Model/database.php";
    include "View/header.php";
    include "View/navbar.php";
    

 
    // $user_id = $_SESSION["user_id"];

?>


<?php if(isset($_SESSION["message"])): ?>
            <div class="row justify-content-center mt-3">
                <div class="col-lg-8">
                        <div class="alert alert-warning " role="alert">
                            <?php echo $_SESSION["message"]; ?>
                        </div>
                </div>
            </div>
     <?php unset($_SESSION["message"]); ?>
<?php endif; ?>


<div class="container-fluid mt-3">
    <div class="row row_home">
        <div class="col-lg-3 menu_left" >

            <!-- Left section -->
            <ul class="list-group" >
                <li class="list-group-item ">
                    <span class="menu_items">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" class="mt-1" alt="" height="28px" width="28px" style="border-radius:50%;"> 
                        Find Friends
                    </span>
                </li>
                <li class="list-group-item " >
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/FhOLTyUFKwf.png" class="mt-1" alt="" height="28px" width="28px" style="border-radius:50%;"> 
                    <span class="menu_items">
                        Watch
                    </span>
                </li>
                <li class="list-group-item " >
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/tYxGXJRPH5q.png" class="mt-1" alt="" height="28px" width="28px" style="border-radius:50%;"> 
                    <span class="menu_items">
                        Memories
                    </span>
                </li>
                <li class="list-group-item " >
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/KlDlsO3UxDM.png" class="mt-1" alt="" height="28px" width="28px" style="border-radius:50%;"> 
                    <span class="menu_items">
                        Saved
                    </span>
                </li>
            </ul>
        </div>

        <!-- Add post -->
        <div class="col-lg-5 shadow-sm col_add_post">
            <form method="post" action="post_process" id="form_new_post" enctype="multipart/form-data">
                <div class="row row_add_post"   >
                    <div class="text-light text-center fs-2 fw-semibold mt-2 header__center">
                        Create post 
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-lg-12">
                            <div class="input-group mt-3">
                            <label class="form-check-label mt-3 mb-3 fs-5" >caption</label>
                                <input class=" mt-1 text-dark input_caption " name="caption" type="text" placeholder="what's on your mind ?" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-check-label mt-4 mb-3 fs-5" >Photo / Video / Music</label>
                            <input type="file" class="form-control input_file_add_post" name="media"  aria-label="Username" aria-describedby="basic-addon1" >
                        </div>
                         <!-- <p>
                            <label class="form-check-label mt-4 mb-3 fs-5" >Media</label>
                            <div style=" margin-top: -22px;">
                                <a class="btn btn-light  m-1" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class='fa fa-image' style="color:#45BD62;"></i>
                                    Image
                                </a>
                                <a class="btn btn-light  m-1" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class='fas fa-video' style="color:#FA383E;"></i>
                                    Video
                                </a>
                                <a class="btn btn-light m-1" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class='fa fa-music' style="color:#F7B928;" ></i>
                                    Audio
                                </a>
                            </div>
                           
                        </p>


                        <div class="collapse" id="collapseExample1">
                            <input type="file" name="image" class="form-control input_file_add_post" name="media"  aria-label="Username" aria-describedby="basic-addon1" >
                        </div>
                        <div class="collapse" id="collapseExample2">
                            <input type="file" name="video" class="form-control input_file_add_post" name="media"  aria-label="Username" aria-describedby="basic-addon1" >
                        </div>
                        <div class="collapse" id="collapseExample3">
                            <input type="file" name="audio" class="form-control input_file_add_post" name="media"  aria-label="Username" aria-describedby="basic-addon1" >
                        </div> -->


                        <div class="btn_center text-center">
                            <button form="form_new_post" class="mt-4 mb-3 btn_submit_add_post text-light" type="submit" class="btn btn-primary" >submit</button>
                        </div>
                </div>
            </form>
            
            <!-- <hr>

            <div class="row" style="padding: 10px;margin-left: 0px;">
                <div class="col-lg-4 ">
                    <svg fill="currentColor" viewBox="0 0 24 24" width="1.5em" height="1.5em" style="color:#F3425F;">
                        <g fill-rule="evenodd" transform="translate(-444 -156)"><g>
                            <path d="M113.029 2.514c-.363-.088-.746.014-1.048.234l-2.57 1.88a.999.999 0 0 0-.411.807v8.13a1 1 0 0 0 .41.808l2.602 1.901c.219.16.477.242.737.242.253 0 .508-.077.732-.235.34-.239.519-.65.519-1.065V3.735a1.25 1.25 0 0 0-.971-1.22m-20.15 6.563c.1-.146 2.475-3.578 5.87-3.578 3.396 0 5.771 3.432 5.87 3.578a.749.749 0 0 1 0 .844c-.099.146-2.474 3.578-5.87 3.578-3.395 0-5.77-3.432-5.87-3.578a.749.749 0 0 1 0-.844zM103.75 19a3.754 3.754 0 0 0 3.75-3.75V3.75A3.754 3.754 0 0 0 103.75 0h-10A3.754 3.754 0 0 0 90 3.75v11.5A3.754 3.754 0 0 0 93.75 19h10z" transform="translate(354 158.5)"></path>
                            <path d="M98.75 12c1.379 0 2.5-1.121 2.5-2.5S100.129 7 98.75 7a2.503 2.503 0 0 0-2.5 2.5c0 1.379 1.121 2.5 2.5 2.5" transform="translate(354 158.5)"></path>
                        </g>
                    </svg>
                    <span>Live video</span>
                </div>
                <div class="col-lg-4 ">
                    <svg fill="currentColor" viewBox="0 0 24 24" width="1.5em" height="1.5em" style="color:#45BD62;">
                        <g fill-rule="evenodd" transform="translate(-444 -156)"><g>
                            <path d="m96.968 22.425-.648.057a2.692 2.692 0 0 1-1.978-.625 2.69 2.69 0 0 1-.96-1.84L92.01 4.32a2.702 2.702 0 0 1 .79-2.156c.47-.472 1.111-.731 1.774-.79l2.58-.225a.498.498 0 0 1 .507.675 4.189 4.189 0 0 0-.251 1.11L96.017 18.85a4.206 4.206 0 0 0 .977 3.091s.459.364-.026.485m8.524-16.327a1.75 1.75 0 1 1-3.485.305 1.75 1.75 0 0 1 3.485-.305m5.85 3.011a.797.797 0 0 0-1.129-.093l-3.733 3.195a.545.545 0 0 0-.062.765l.837.993a.75.75 0 1 1-1.147.966l-2.502-2.981a.797.797 0 0 0-1.096-.12L99 14.5l-.5 4.25c-.06.674.326 2.19 1 2.25l11.916 1.166c.325.026 1-.039 1.25-.25.252-.21.89-.842.917-1.166l.833-8.084-3.073-3.557z" transform="translate(352 156.5)"></path>
                            <path fill-rule="nonzero" d="m111.61 22.963-11.604-1.015a2.77 2.77 0 0 1-2.512-2.995L98.88 3.09A2.77 2.77 0 0 1 101.876.58l11.603 1.015a2.77 2.77 0 0 1 2.513 2.994l-1.388 15.862a2.77 2.77 0 0 1-2.994 2.513zm.13-1.494.082.004a1.27 1.27 0 0 0 1.287-1.154l1.388-15.862a1.27 1.27 0 0 0-1.148-1.37l-11.604-1.014a1.27 1.27 0 0 0-1.37 1.15l-1.387 15.86a1.27 1.27 0 0 0 1.149 1.37l11.603 1.016z" transform="translate(352 156.5)"></path>
                        </g>
                    </svg>
                    <span>Photo/video</span>
                </div>
                <div class="col-lg-4 ">
                    <svg fill="currentColor" viewBox="0 0 24 24" width="1.5em" height="1.5em"style="color:#F7B928;" >
                        <g fill-rule="evenodd" transform="translate(-444 -156)"><g>
                            <path d="M107.285 13c.49 0 .841.476.712.957-.623 2.324-2.837 4.043-5.473 4.043-2.636 0-4.85-1.719-5.473-4.043-.13-.48.222-.957.712-.957h9.522z" transform="translate(353.5 156.5)"></path>
                            <path fill-rule="nonzero" d="M114.024 11.5c0 6.351-5.149 11.5-11.5 11.5s-11.5-5.149-11.5-11.5S96.173 0 102.524 0s11.5 5.149 11.5 11.5zm-2 0a9.5 9.5 0 1 0-19 0 9.5 9.5 0 0 0 19 0z" transform="translate(353.5 156.5)"></path>
                            <path d="M99.524 8.5c0 .829-.56 1.5-1.25 1.5s-1.25-.671-1.25-1.5.56-1.5 1.25-1.5 1.25.671 1.25 1.5m8.5 0c0 .829-.56 1.5-1.25 1.5s-1.25-.671-1.25-1.5.56-1.5 1.25-1.5 1.25.671 1.25 1.5m-.739 4.5h-9.522c-.49 0-.841.476-.712.957.623 2.324 2.837 4.043 5.473 4.043 2.636 0 4.85-1.719 5.473-4.043.13-.48-.222-.957-.712-.957m-2.165 2c-.667.624-1.592 1-2.596 1a3.799 3.799 0 0 1-2.596-1h5.192" transform="translate(353.5 156.5)"></path>
                        </g>
                    </svg>
                    <span>Feeling/activity</span>
                </div>
            </div> -->
        </div>
      
        
        <!-- Post others -->
        <?php foreach ($posts_array as $post) : ?>
        <div class="row justify-content-center mt-5" style="padding: 0px;">
        
            <div class="col-lg-5  shadow-sm col_others_post">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="<?php 

                                if($post["image"] != "")
                                {
                                    echo $post["image"];
                                }
                                else
                                {
                                    if($post["gender"] == F)
                                    {
                                        echo "Images/users/__woman_person_user-256.webp";
                                    }
                                    elseif($post["gender"] == M)
                                    {
                                        echo "Images/users/__man_user_person-256.webp";
                                    }
                                    else
                                    {
                                        echo "Images/users/_lgbt_rainbow_emoji_face-512.webp";
                                    }

                                }

                            ?>" class="mt-1 username_post" alt="" height="40px" width="40px" style="border-radius:50%;" loading="lazy">
                        </div>
                        <div class="col-lg-10 col_username_post">
                            <p class="text-white p_username">
                                <?php echo $post["username"];?>
                                <button class="btn-follow mb-2" style="margin-left: 6px;border-radius: 15px;width: 100px;border: none;">
                                    follow
                                </button>
                                <input type="hidden" name="post_id" value="<?php echo $post["id"]; ?>">
                                <input type="hidden" name="user_id" value="<?php echo $post_id["id"]; ?>">
                            </p>
                            <p>
                            <?php echo time2str($post["time"]); ?>
                                <svg fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh cyypbtt7 fwizqjfa" title="Shared with Public">
                                    <title>Shared with Public</title>
                                    <g fill-rule="evenodd" transform="translate(-448 -544)"><g>
                                        <path d="M109.5 408.5c0 3.23-2.04 5.983-4.903 7.036l.07-.036c1.167-1 1.814-2.967 2-3.834.214-1 .303-1.3-.5-1.96-.31-.253-.677-.196-1.04-.476-.246-.19-.356-.59-.606-.73-.594-.337-1.107.11-1.954.223a2.666 2.666 0 0 1-1.15-.123c-.007 0-.007 0-.013-.004l-.083-.03c-.164-.082-.077-.206.006-.36h-.006c.086-.17.086-.376-.05-.529-.19-.214-.54-.214-.804-.224-.106-.003-.21 0-.313.004l-.003-.004c-.04 0-.084.004-.124.004h-.037c-.323.007-.666-.034-.893-.314-.263-.353-.29-.733.097-1.09.28-.26.863-.8 1.807-.22.603.37 1.166.667 1.666.5.33-.11.48-.303.094-.87a1.128 1.128 0 0 1-.214-.73c.067-.776.687-.84 1.164-1.2.466-.356.68-.943.546-1.457-.106-.413-.51-.873-1.28-1.01a7.49 7.49 0 0 1 6.524 7.434" transform="translate(354 143.5)"></path>
                                        <path d="M104.107 415.696A7.498 7.498 0 0 1 94.5 408.5a7.48 7.48 0 0 1 3.407-6.283 5.474 5.474 0 0 0-1.653 2.334c-.753 2.217-.217 4.075 2.29 4.075.833 0 1.4.561 1.333 2.375-.013.403.52 1.78 2.45 1.89.7.04 1.184 1.053 1.33 1.74.06.29.127.65.257.97a.174.174 0 0 0 .193.096" transform="translate(354 143.5)"></path><path fill-rule="nonzero" d="M110 408.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0zm-1 0a7 7 0 1 0-14 0 7 7 0 0 0 14 0z" transform="translate(354 143.5)"></path>
                                    </g>
                                </svg>
                            </p>
                        </div>
                    </div>  
                </div>







                <div>
                    <img src="<?php echo $post["media"]; ?>" class="card-img-top"  alt="..." height="500px" width="500px" loading="lazy" >
                </div>











                <div>
                    <h6 class="mt-4 text-light">
                        <?php echo $post["caption"]; ?>
                    </h6>
                </div>
                <hr>
                <div class="footer">
                    <div class="row mt-3 mb-3" style="text-center">
                        <div class="col text-center text-light">
                            <?php echo $post["likes"]["count"]; ?>
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            <span style="font-weight: 700;">Like</span>
                        </div>
                        <div class="col text-center">
                            <p>
                                <a class="btn text-light" data-bs-toggle="collapse" href="#collapseExample<?php echo $post["id"];?>" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: -7px;">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <span style="font-weight: 700;">Cm</span>
                                </a>
                            </p>
                           
                          
                        </div>
                        <div class="col text-center text-light">
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                            <span style="font-weight: 700;">Share</span>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="collapse" id="collapseExample<?php echo $post["id"];?>">
                                <div class="card card-body mb-3" style="background-color: #3A3B3C;">
                                    
                                    <?php foreach ($post["comments"] as $comment) : ?>
                                        <?php if($comment["post_id"] == $post["id"]):?>
                                            <div class="list-group mt-1" >
                                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true" style="background:#212529;border: none;border-radius: 10px;">
                                                    <div class="d-flex w-100 ">
                                                    <img src="<?php 

                                                        if($comment["image"] != "")
                                                        {
                                                            echo $comment["image"];
                                                        }
                                                        else
                                                        {
                                                            if($comment["gender"] == F)
                                                            {
                                                                echo "Images/users/__woman_person_user-256.webp";
                                                            }
                                                            elseif($comment["gender"] == M)
                                                            {
                                                                echo "Images/users/__man_user_person-256.webp";
                                                            }
                                                            else
                                                            {
                                                                echo "Images/users/_lgbt_rainbow_emoji_face-512.webp";
                                                            }

                                                        }

                                                        ?>" class="mt-1 " alt="" height="40px" width="40px" style="border-radius:50%;" loading="lazy">
                                                        <h5 class="mb-1" style="margin-top: 10px;margin-left: 11px;">
                                                            <?php echo $comment["username"]; ?>
                                                        </h5>
                                                        <div class="float-end">
                                                            <small style="margin-left: 247px;" ><?php echo time2str($comment["time"]); ?></small>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1" style="margin-left: 53px;">
                                                        <?php echo $comment["text"]; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                
                                    <form class="row g-3 mt-3" method="post" action="add_comment">
                                        <div class="col-auto">
                                            <input type="text" name="text" class="form-control comment_input" id="inputPassword2" placeholder="Add a comments ..." >
                                            <input type="hidden" name="post_id" value="<?php echo $post["id"]; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $post_id["id"]; ?>">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-dark mb-3 btn_comment">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
       
    </div> 
</div>



<?php include "View/footer.php"; ?>