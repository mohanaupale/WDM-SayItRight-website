
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/sayitright.css">
   <!--  <script src="SayItRight.js"></script> -->
  </head>
  <body>
    <div class="NavBar">
      <a class="logo_a" href="#"><img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial"></a>
      <a href="<?php echo base_url(); ?>Home">HOME</a>
      <a href="<?php echo base_url(); ?>Aboutus">ABOUT US</a>
      <a href="<?php echo base_url(); ?>/blog.php">BLOG</a>
      <a href="<?php echo base_url(); ?>/buy_main.php">BUY FROM US</a>
      <a href="<?php echo base_url(); ?>ContactUs">CONTACT US</a>
      <a href="<?php echo base_url(); ?>Signup">SIGN UP</a>
      <a href="<?php echo base_url(); ?>Login">LOGIN</a>
    </div>
    <section class="general_body">
      <div class="main_body">
        <p class="route">Home-> LOGIN</p>
        <h1>LOGIN</h1>
      </div>
    </section>
    <section>
      <div class="sign_up-div">
        <!-- <input type="submit" value="INDIVIDUAL">
          <input type="submit" value="EVENT" align="center">
          <input type="submit" value="BUSINESS"> -->
        <div class="button_margine">
          <?php echo validation_errors(); ?>
        <form action="<?php echo base_url();?>Login/validateFields" method="POST">

          <input  type="email" name="email" placeholder="Enter Username" class="person_info" title="2 characters minimum" value="<?php echo set_value('email'); ?>" style="width:100%; padding:2% 0% 2% 0;" required>
          <!-- pattern="[A-Za-z]{2,16}"  -->
          <br>
          <input name="pass" type="password" placeholder="Enter Password" class="person_info" value="<?php echo set_value('pass'); ?>" title="2 characters minimum" style="width:100%; padding:2% 0% 2% 0;" required>
          <!-- pattern="[A-Za-z]{2,16}" -->
          <br>
          <button class="button_margine left" type="submit"  value="Submit" onclick="">Send</button>
        </div>
      </form>
    </section>
    <section>
      <div class="bottom-container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <p id="copyright">copyright©2019 All rights reserved | This web is made with ♡ by <span class="app"> DiazApps</span></p>
      </div>
    </section>
  </body>
</html>
