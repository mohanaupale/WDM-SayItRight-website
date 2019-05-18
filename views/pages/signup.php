<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/sayitright.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
  <div class="NavBar">
    <div id="wrapper">
    <a class="logo_a" href="#"><img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial"></a>
    <a href="<?php echo base_url(); ?>index.php">HOME</a>
    <a href="<?php echo base_url(); ?>Aboutus.html">ABOUT US</a>
    <a href="<?php echo base_url(); ?>blog.php">BLOG</a>
    <a href="<?php echo base_url(); ?>buy_main.php">BUY FROM US</a>
    <a href="<?php echo base_url(); ?>contact_us.php">CONTACT US</a>
    <a href="<?php echo base_url(); ?>Signup">SIGN UP</a>
    <a href="<?php echo base_url(); ?>Login">LOGIN</a>
  </div>
  </div>
  <section class="general_body">
    <div class="main_body">
      <div id="wrapper">
      <p class="route">Home-> SIGN UP</p>
      <h1>SING UP</h1>
    </div>
    </div>
  </section>
  <section>
    <div id="wrapper">
    <div class="sign_up-div">
      
      <h1 class="subheading">Type of User</h1>
      <!-- <input type="submit" value="INDIVIDUAL">
        <input type="submit" value="EVENT" align="center">
        <input type="submit" value="BUSINESS"> -->
      <div class="button_margine">
        <button onclick="window.location.href = '<?php echo base_url(); ?>Signup_Ind/index';">INDIVIDUAL</button>
        <button onclick="window.location.href = '<?php echo base_url(); ?>Signup_Event/index';">EVENT</button>
        <button onclick="window.location.href = '<?php echo base_url(); ?>Signup_Bussiness/index';">BUSINESS</button>
      </div>
      </div>
      </div>
  </section>
  <section>
    <div class="bottom-container">
      <div id="wrapper">
      <br>
      <hr>
      <p id="copyright">copyright©2019 All rights reserved | This web is made with ♡ by <span class="app"> DiazApps</span></p>
    </div>
    </div>
  </section>

</body>

</html>
