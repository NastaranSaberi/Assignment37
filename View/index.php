<?php

    session_start();

    include "Model/database.php";
    include "View/header.php";

?>


<body style="background-color: #2f2f2f;color:white">

    <div class="container mt-5">
            
        <?php if(isset($_SESSION["message"])): ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php if($_SESSION["message_type"]=="error"): ?>
                        <div class="alert alert-warning " role="alert">
                            <?php echo $_SESSION["message"]; ?>
                        </div>
                    <?php elseif($_SESSION["message_type"]=="success"): ?>
                        <div class="alert alert-success mt-3" role="alert">
                            <?php echo $_SESSION["message"]; ?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
           
        <?php unset($_SESSION["message"]); ?>
        <?php endif; ?>


        <div class="row justify-content-center row_login">
            <div class="col-lg-4 col-sm-12  align-self-center login">
                <div class="card card_login">
                    <div class="card-header text-light">
                        <div class="text-light text-center fs-2 fw-semibold mt-2 header__center">
                            Login 
                        </div>
                    </div>
                    <div class="card-body text-light">
                        <form method="post" action="login_process">
                            <div class="login">
                                <div class=" text-start">
                                    <input type="text" class="form-control text-black input_login"  name="username" placeholder="username" >
                                </div>
                                <div class=" text-start">
                                    <input type="password" class="form-control text-black input_login" name="password" placeholder="password" > 
                                </div>
                            </div>
                            <div class="justify-content-center text-center">
                                <button type="submit" class="btn btn-dark btn-login mt-3 button_login">Log in</button>
                            </div>
                            <div class="mb-3  text-center mt-3 text-muted">
                                <a class="text-light" href="#">
                                    <label class="form-check-label " >Forgot password?</label>
                                </a>
                            </div>

                            <hr>

                            <div class="text-center">
                                <a href="register">
                                    <button type="button" class="btn btn-primary " >
                                        Create new account
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "View/footer.php"; ?>


        

  