<?php session_start();
require_once('config.php');

    if(isset($_POST['login_submit'])){
       $userMobile= $_POST['email'];
       $userPassword= $_POST['password'];
       

       if(empty($userMobile)){
            $error= "User & Password is Empty";
       }else if(empty($userPassword)){
            $error ="User & Password is Empty";
       }else{

            $stm= $pdo->prepare("SELECT id,user,password FROM log WHERE user=?");
            $stm->execute(array($userMobile));
            $userCount= $stm->rowCount();
            $userData=$stm->fetchAll(PDO::FETCH_ASSOC);

            if($userCount == 1){
                $userPassword = SHA1($userPassword);
                $dbPassword=$userData[0]['password'];

                if($userPassword == $dbPassword){
                    $_SESSION['log'] = $userData;
                    header('location:index.php');
                }else{
                    $error="User & Password is Wrong"; 
                }

            }else{
                $error="User & Password is Wrong";
            }
       }

   }





if(isset($_SESSION['log'])){
    header('location:index.php');
}


 ?>



<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <title>Login</title>

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
        <!-- Normalize -->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <!-- CSS Files -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        <!--=============================================================
        ============              Start Login Page            ===========
        ==============================================================-->
        <div class="login_main">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="login_page">
        					<div class="login_contents">
        						<div class="login_contents_header_t">
        							<h4>!ﺎﺒﺣﺮﻣ</h4>
        						</div>
                                    <!-- Login Error -->
                                    <?php if(isset($error)): ?>
                                        <br><div class="alert alert-danger">
                                            <?php echo $error; ?>
                                        </div>
                                    <?php endif; ?>

        						<div class="login_form">
        							<form class="form-horizontal" method="POST" action="">
							          <div class="form-group login_input_style">
							              <input type="text" class="form-control" name="email" value="" placeholder="ﻒﻇﻮﻤﻟا ﻢﻗر لﺎﺧدا ءﺎﺟﺮﻟا">
							          </div>
							          <div class="form-group login_input_style">
							              <input id="password-field" type="password" class="form-control" name="password" value="روﺮﻤﻟا ﺔﻤﻠﻛ لﺎﺧدا ءﺎﺟﺮﻟا">
							              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password ta_right"></span>
							          </div>

                                        <div class="login_btn"> 
                                            <input type="submit" name="login_submit" value="لﻮﺧﺪﻟا ﻞﻴﺠﺴﺗ">
                                        </div>
							        </form>
        						</div>

        						<div class="login_down_p">
        							<p>ةرادﺈﻟا ﻊﻣ ﻞﺻاﻮﺘﻟا ءﺎﺟﺮﻟا تﺎﻧﺎﻴﺒﻠﻟ ﻚﺘﻓﺮﻌﻣ مﺪﻋ لﺎﺣ ﻲﻓ</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!--=============================================================
        ============              End Login Page              ===========
        ==============================================================-->






        <!-- ~~~~~~~~~~ JS Files ~~~~~~~~~~-->
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Mix it up -->
        <script src="assets/js/mixitup.min.js"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr-3.11.2.min.js"></script>
        <!-- Custom JS (Handed)-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>