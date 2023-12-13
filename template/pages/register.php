<?php include('server.php') ?> 


<!DOCTYPE html>

<html>
<head>
    <title>Online learning sign</title>

    <!-- YT side social media icons -->
    <meta charset="utf-8">
    <!-- <title>Floating Icons on Left Border</title> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- YT side social media icons  -->
    
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signstyle.css">
    <!-- <script type="text/javascript" src="main.js"></script> -->
    

    <!--for sign in -->
    <!-- <meta charset="UTF-8"> -->
	<!-- <title>Registration Form</title> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


    <!--for footer -->
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body>









                                            <!-- Header start from here -->
        


<!--  -->
<div class="header">

                                                <!--Logo-->
        <div class="logo">
            <img src="./img/up page logo (2).jpg"./>
        </div>




                                            <!-- youtube header new part -->
                                  
                                          <div class="animated-text">
                                              <div class="line">Welcome</div>
                                              <div class="line">to</div>
                                              <div class="line">Learning</div>
                                              <div class="line">HUB</div>        
                                          </div>

                                            <!-- youtube header new part -->




<!--Sociel media icons-->      
        <div class="socielicons"> 
            <a href="https://www.facebook.com"><img src="./sociel/Facebook.png" onmouseover="this.src='./sociel/Facebook.png'" onmouseout="this.src='./sociel/Facebookbw.png'"></a>
            <a href="https://www.instagram.com"><img src="./sociel/Instagrambw.png" onmouseover="this.src='./sociel/Instagram.png'" onmouseout="this.src='./sociel/instagrambw.png'"></a>
            <a href="https://www.twitter.com"><img src="./sociel/Twitterbw.png" onmouseover="this.src='./sociel/Twitter.png'" onmouseout="this.src='./sociel/Twitterbw.png'"></a>
            <a href="https://www.whatsapp.com"><img src="./sociel/WhatsAppbw.png" onmouseover="this.src='./sociel/WhatsApp.png'" onmouseout="this.src='./sociel/WhatsAppbw.png'"></a>
            <a href="https://www.google.com"><img src="./sociel/Googlebw.png" onmouseover="this.src='../sociel/Google.png'" onmouseout="this.src='./sociel/googlebw.png'"></a>
            <a href="https://www.youtube.com"><img src="./sociel/Youtubebw.png" onmouseover="this.src='./sociel/Youtube.png'" onmouseout="this.src='./sociel/Youtubebw.png'"></a>
        </div>

             <!--Register/login button-->
        <a href="./Login.html">
            <button class="regbtn">
                <span>Login/register</span>
            </button>
        </a> 
</div>
                                        <!-- header end -->
                                            
  






                                    
                                <!------navigation bar starts------>

<div class="nav">
    <ul>
                            
        <li>
        <a href="./Home.html">Home</a>
        </li>
        <li>
        <a href="">Categories</a>
        </li>
        <li>
        <a href="">announcement</a>
        </li>
        <li>
        <a href="">About</a>
        </li>
        <li>
        <a href="">Contact Us</a>
        </li>

    </ul>
</div>
                            <!------navigation bar ends------>



                                <!-- sign in start-->
<div class="wrapper">
    <div class="title">
      Register Here
    </div>
    <div class="social_media">
      <div class="item">
        <i class="fab fa-facebook-f"></i>
      </div>
      <div class="item">
        <i class="fab fa-twitter"></i>
      </div>
      <div class="item">
        <i class="fab fa-google-plus-g"></i>
      </div>
    </div>
    

    <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="form">
      <div class="input_field">
        <input type="text" name="username" placeholder="Username" class="input" value="<?php echo $username; ?>" required >
        <i class="fas fa-user"></i> 
      </div>
      <div class="input_field">
        <input type="text" name="email" placeholder="Email" class="input" value="<?php echo $email; ?>" required>
        <i class="far fa-envelope"></i> 
      </div>
      <div class="input_field">
        <input type="password" name="password_1" placeholder="Password" class="input" required>
        <i class="fas fa-lock"></i>
      </div>
      <!-- <div class="btn">
        <a href="#">Register</a> 
      </div>  -->
      <button type="submit" class="btn" name="reg_user">Register</button>
</div>
    </form>
  </div>
                                <!-- sign in end-->



                                    

                                <!--footer start  -->
<footer>
    <div class="footer-content">
        <h3>Learning HUB</h3>
        <p> "When something is important enough, you do it even if the odds are not in your favor." </p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2020 codeOpacity. designed by <span>RV</span></p>
    </div>
</footer>
                                <!--footer End-->
    
    
</body>
</html>