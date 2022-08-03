<?php

    include "Model/Database.php";
    include "View/header.php";

?>


<body style="background-color: #2f2f2f;color:white">

    <div class="container ">
            
        <?php if(isset($_SESSION["message"])): ?>
            <div class="row justify-content-center">
                <?php for($i=0, $len=count($_SESSION["message"]); $i<$len; $i++): ?> 
                    <div class="col-lg-8">
                        <?php if($_SESSION["message_type"]=="error"): ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                <?php echo $_SESSION["message"]; ?>
                            </div>
                        <?php elseif($_SESSION["message_type"]=="success"): ?>
                            <div class="alert alert-success mt-3" role="alert">
                                <?php echo $_SESSION["message"]; ?>
                            </div>
                        <?php endif;?>
                    </div>
                <?php endfor; ?>
            </div>
           
        <?php unset($_SESSION["message"]); ?>
        <?php endif; ?>


        <div class="row justify-content-center row_register">
            <div class="col-lg-5  mt-4 align-self-center login" style="padding:5px;background-image: -webkit-linear-gradient(#1F1F1F, #2D2D2D);-webkit-box-shadow: 0px 1px 0px 0px rgb(84 84 84), inset 0px -1px 0px 0px rgb(30 30 30), 0px -3px 2px -1px rgb(0 0 0), inset 0px 5px 12px 0px rgb(0 0 0 / 50%);border-radius: 12px;">
                <div class="card" style="background-color: #2f2f2f;">
                    <div class="card-header text-light">
                        <div class="text-light text-center fs-2 fw-semibold  header__center">
                            Register
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="card-body ">
                            <form method="post" action="register_process" enctype="multipart/form-data">
                                <div class="mb-3 text-start">
                                    <div class="row " >
                                        <div class="col-lg-6 " >
                                            <input type="text" class="form-control"  name="first_name" placeholder="First name" >
                                        </div>
                                        <div class="col-lg-6 " >
                                            <input type="text" class="form-control margin_top"  name="last_name" placeholder="Last name" >
                                        </div>
                                        </div>
                                        <div class="mb-3 text-start mt-3" >
                                            <input type="text" class="form-control "  name="username" placeholder="Username" >
                                        </div> 
                                        <div class="mb-3 text-start mt-3" >
                                            <input type="file" class="form-control "  name="image" placeholder="Username" >
                                        </div> 
                                        <div class="mb-3 text-start mt-3" >
                                            <input type="email" class="form-control "  name="email" placeholder="Email address" >
                                        </div> 
                                        <div class="mb-3 text-start mt-3" >
                                            <input type="text" class="form-control "  name="password" placeholder="Password" >
                                        </div>
                                        <div class="mb-3 text-start mt-3" >
                                            <input type="text" class="form-control "  name="confirm_password" placeholder="Confrim password" >
                                        </div>
                                        <div class="mb-3 text-start" :hidden="inLine == '1' && modalMode == '0'">
                                            <h5 :hidden="toDateFromDate == '0'" class=" text-opacity-75" >Birthday</h5>
                                            <div class="input-group mb-3" >
                                                <!-- <span  class="input-group-text cursor-pointer" id="dtp1">📅</span> -->
                                                 <input type="date" name="birthday" class="form-control" placeholder="Date Picker Text" data-name="dtp1-text" >
                                            </div>
                                        </div>
                                        <div class="mb-3 text-start">
                                            <h5 :hidden="toDateFromDate == '0'" class=" text-opacity-75" >Gender</h5>
                                            <div class="row">
                                                <div class="col-lg-4"  >
                                                    <div class="form-control">
                                                        <input type="radio" name="gender" value="M" style="color: #ACACAC;font-weight: 500;text-shadow: -1px 0px 3px #5f5f5f;text-align: center;-webkit-margin-before: 7px;" > Male
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" >
                                                    <div class="form-control margin_top">
                                                        <input type="radio"  name="gender" value="F" style="color: #ACACAC;font-weight: 500;text-shadow: -1px 0px 3px #5f5f5f;text-align: center;-webkit-margin-before: 7px;" >  Female
                                                    </div>
                                                </div>
                                                <div class="col-lg-4" >
                                                    <div class="form-control margin_top">
                                                        <input type="radio"  name="gender" value="O" style="color: #ACACAC;font-weight: 500;text-shadow: -1px 0px 3px #5f5f5f;text-align: center;-webkit-margin-before: 7px;" > Other
                                                    </div>
                                                </div>
                                            </div>
                                            </div> 
                                            <div class="text-center">
                                                <button type="submit" name="submit" class="btn mt-3 bg-primary text-light" style="width:250px;height:45px;box-shadow: black 0px 1px 0px 0px, inset #191919 0px -2px 2px 0px, #747474 0px 1px 0px 0px inset; 23);background-image: linear-gradient(#3f3f3f, #242424);border-radius: 11px;" >submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "View/Footer.php"; ?>