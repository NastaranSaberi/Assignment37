<?php

    session_start();

    include "Model/database.php";
    include "View/header.php";
    include "View/navbar.php";

?>


<div class="container ">
    <div class="text-center justify-content-center" style="background-color:black;width:940px;height:340px;margin-left: 13%;border-radius: 10px;">
        <button class="p-2" style="height:40px;border-radius: 10px;position: absolute;top: 330px;right: 280px;border:none;">
            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1 " style="margin-bottom: -2px;background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/7C6odyZDZdd.png&quot;); background-position: 0px -1586px; background-size: 25px 1915px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
            Add Cover Photo
        </button>
    </div>
    <div>
        <img src="View/Images/143086968_2856368904622192_1959732218791162458_n.png" alt="" height="168px" width="168px" style="border-radius:50%;position: absolute;left: 285px;top: 300px;">
        <button  style="width:36px;height:36px;border-radius: 50%;position: absolute;left: 417px;top: 420px;background-color:#595959;border:none">
            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/7C6odyZDZdd.png&quot;); background-position: 0px -632px; background-size: 25px 1915px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;-webkit-filter:invert(89%) sepia(6%) hue-rotate(185deg);margin-top: 7px;"></i>
        </button>
    </div>
    <div style="margin-left: 420px;margin-top: 15px;color: white;">
        <h1 style="display: inline-block;">Username</h1>
        <div style="display: inline-block;margin-left: 180px;">
            <button class="btn btn-primary" style="width:133px;height:36px;border:none;border-radius: 8px">
            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/A7XFGqeW-H0.png"  alt="" height="16px" width="16px" style="border-radius:50%;-webkit-filter:invert(100%);">
                Add to story
            </button>
            <button style="background-color:#3A3B3C;width:143px;height:36px;border:none;color:white;border-radius: 8px;margin-left: 10px;">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/lYApul5-WxY.png"  alt="" height="16px" width="16px" style="border-radius:50%;-webkit-filter:invert(100%);">
                Profile Picture
            </button>
        </div>
        </div>
   
        <div class="row justify-content-center " style="margin-top:107px;width:700px;text-align: center;margin-left: 300px;">
            <div class="col-lg-4">
                <h3>9 posts</h3>
            </div>
            <div class="col-lg-4">
                <h3>0 followers</h3>
            </div>
            <div class="col-lg-4 mb-4">
                <h3>0 following</h3>
            </div>
            <hr>
        </div>
        <div class="row justify-content-center " style="width:700px;text-align: center;margin-left: 300px;">
            <div class="col-lg-5">
                <div class="row justify-content-center ">
                    <div class="col-lg-4">
                        <h7 class="text-primary">POSTS</h7>
                    </div>
                    <div class="col-lg-4">
                        <h7>SAVED</h7>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <h7>TAGGED</h7>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <img src="View/Images/c40d4ab3125592ea769dad980325e2d3.jpeg" width="85px" height="85px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "View/footer.php"; ?>