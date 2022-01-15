<?php 

    session_start();


    if(!isset($_SESSION['log'])){
        header('location:login.php');
    }

    $user_id = $_SESSION['log'][0]['id'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <title>Web Template</title>
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Progress Bar -->
    <link rel="stylesheet" href="assets/css/jquery.lineProgressbar.css">
    <!-- Normalize -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
        <!--=============================================================
        ============                 Start Header             ===========
        ==============================================================-->
        <header class="header_main">
            <div class="header_1st">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_1st_content">
                                <div class="header_top_left header_top_left1">
                                    <a href="#">
                                        <img src="assets/images/header_top_left.png" alt="images">
                                        <span>ﻦﻴﻔﻇﻮﻤﻟا ﺔﻤﺋﺎﻗ</span>
                                    </a>
                                </div>
                                <div class="header_top_left header_top_left2">
                                    <a href="#">
                                        <img src="assets/images/header_top_left.png" alt="images">
                                        <span>مﺎﻬﻤﻟا ﺔﻤﺋﺎﻗ</span>
                                    </a>
                                </div>
                                <div class="header_top_left header_top_left3">
                                    <a href="#">
                                        <img src="assets/images/header_top_left.png" alt="images">
                                        <span>تاقحلملا</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_2nd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_2nd_content">
                                <div class="logo">
                                    <a href="#">د ﺎ ﻳ ز   ﻚ ﺑ   ﺎ ﺒ ﺣ ﺮ ﻣ</a>
                                </div>
                                <div class="menu_and_text">
                                    <div class="menu">
                                        <ul>
                                            <li><a href="#"><img src="assets/images/menu1.png" alt="images"></a></li>
                                            <li><a href="#"><img src="assets/images/menu2.png" alt="images"></a></li>
                                            <li><a href="#"><img src="assets/images/menu3.png" alt="images"></a></li>
                                            <li><a href="#"><img src="assets/images/menu4.png" alt="images"></a></li>
                                            <li><a href="#"><span>+4</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="menu_text">
                                        <a href="#">+ ﺪﻳﺪﺟ ﻒﻇﻮﻣ ﻒﺿا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=============================================================
        ============                 End Header               ===========
        ==============================================================-->