<?php

    session_start();
    
    include "Model/database.php";
    

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SocialNetwork">
    <meta name="keywords" content="SocialNetwork,html,css,php">
    <meta name="author" content="Nastaran Saberi">
    <link href="View/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="View/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- <link rel="stylesheet" href="View/css/style.css"> -->
    <link rel="shortcut icon" href="Images/2617348.png" type="image/x-icon">
    <title>SocialNetwork</title>
    <style>

    .lis:hover {
        color:#2374E1;
    }

    .btn-follow:hover {
      background-color:#2374E1;
      color:white;
    }

    a:hover {
        color:#2374E1;
    }


    .header__center {
        font-size: 2rem;
        display: grid;
        grid-template-columns: 1fr max-content 1fr;
    }

    .header__center {
    font-size: 2rem;
    display: grid;
    grid-template-columns: 1fr max-content 1fr;
    grid-column-gap: 1.2rem;
    align-items: center;
  }

  .header__center::before,
  .header__center::after {
    content: "";
    display: block;
    height: 1px;
    background-color: currentColor;
  }


    .login{
    padding:5px;
    background-image: -webkit-linear-gradient(#1F1F1F, #2D2D2D);
    -webkit-box-shadow: 0px 1px 0px 0px rgb(84 84 84), inset 0px -1px 0px 0px rgb(30 30 30), 0px -3px 2px -1px rgb(0 0 0), inset 0px 5px 12px 0px rgb(0 0 0 / 50%);
    border-radius: 12px;
    }

    .card_login{
      background-color: #2f2f2f;
    }

    .input_login{
      border: 1px solid #121212;
      background-color: #2f2f2f;
    }

    .button_login{
      width:400px;
      box-shadow: black 0px 1px 0px 0px, inset #191919 0px -2px 2px 0px, #747474 0px 1px 0px 0px inset; 23);
      background-image: linear-gradient(#3f3f3f, #242424);
      border-radius: 11px;
    }

    .list-group-item{
      background-color:#18191A;
      color:white;
    }

    .col_add_post{
      border-radius:10px;
      background-color:#282828;
      margin-left:47px;
    }

    .row_add_post{
      padding-top: 12px;
    }

    .input_caption{
      width:574px;
      height:40px;
      border-radius: 8px;
      font-family: inherit;
      border:0px;
      padding: 12px;
      border-top-left-radius: 8px !important;
      border-bottom-left-radius :8px !important;
    }

    .input_file_add_post{
      height:40px;
      font-family: inherit;
      padding-left: 12px;
      border:0px;
      border: solid 2px white;
      border-radius: 8px;
    }

    .btn_submit_add_post{
      width: 210px;
      height:40px;
      border-radius: 7px;
      border: none;
      box-shadow: black 0px 1px 0px 0px, inset #191919 0px -2px 2px 0px, #747474 0px 1px 0px 0px inset; 23);
      background-image: linear-gradient(#3f3f3f, #242424);
    }

    .col_others_post{
      border-radius:10px;
      background-color:#282828;
      margin-top: -34px;
    }

    .p_username{
      margin-bottom: 0rem;
      font-weight: 700;
    }

    .i_posts{
      background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/qXc5MlTH_R6.png&quot;);
      background-position: 0px -297px;
      background-size: 25px 770px;
      width: 18px;
      height: 18px;
      background-repeat: no-repeat;
      display: inline-block;
      -webkit-filter:invert(62%) sepia(98%) saturate(12%) hue-rotate(175deg) brightness(90%) contrast(96%);
    }

    .col_username_post{
      margin-left: -31px;
    }

    .username_img{
      border-radius:50%;margin-left: 11px;
    }

    .p_error{
      font-size: 300px;
      font-weight: 600;
      margin-bottom: -2rem;
    }

    .span_error{
      font-size: 40px;
      margin-left: 20px;
    }

    .comment_input{
      width: 450px;
      border: none;
      border-radius: 15px;
    }

   


@media (max-width: 576px) { 
    .popover{
        margin-left: 37px !important;
        margin-top: -5px !important;
    }

    .main{
        margin-top: 15px;
    }

    .margin_top{
        margin-top: 5px !important;
      
    }

    .button_login{
        width: 304px;
    }

    .row_login{
      margin: 2px;
    }

    .row_register{
      margin: 5px;
    }

    .btn_center{
      text-align: center;
    }

    .btn_submit_add_post {
      margin-left: 0px;
    }

    .col_add_post {
      margin-left: 0px;
    }

    .row_home{
      margin: 5px;
    }

    .col_others_post{
      margin-left: 26px;
    }

    .col_username_post{
      margin-left: -15px;
    }

    .username_post{
      margin-left: -15px;
    }

    /* .username_img{
      display:none;
    } */

    /* .search{
      display: none;
    } */

    /* .img_user{
      position: absolute;
    } */

    .menu_left{
      display:none;
    }

    .logout{
      position: absolute;
      right: 0px;
    }

    .p_error{
      font-size: 120px;
    margin-top: 43px;
    font-weight: 600;
    margin-bottom: -1rem;
    }

    .span_error{
    font-size: 26px;
    margin-left: 1px;
        }

    .lis:hover {
        color:#2374E1;
    }

    a:hover {
        color:#2374E1;
    }

    .header__center {
        font-size: 2rem;
        display: grid;
        grid-template-columns: 1fr max-content 1fr;
        grid-column-gap: 1.2rem;
        align-items: center;
        
    }

    .header__center::before,
    .header__center::after {
      content: "";
        display: block;
        height: 1px;
        background-color: currentColor;
        
        }

        input{
            background-color: #2f2f2f;
        }

        .comment_input{
          width: 287px;
        }

        .btn_comment{
          margin-left: 212px;
        }
      }


   
   
    </style>


  </head>


    
 