<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/sayitright.css">
    <script src="<?php echo base_url(); ?>SayItRight.js"></script>
  </head>
  <body>
    <div class="NavBar">
      <div id="wrapper">
      <a class="logo_a" href="#"><img class="logo" src="<?php echo base_url(); ?>imgsay_2/Sin título-1.png" alt="HTML tutorial"></a>
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
        <h1>SIGN UP</h1>
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
          <button onclick="window.location.href = 'sign-up_Business.php';">BUSINESS</button>
        </div>
        <div id="Individual-form">
          <hr>
          <label for="welcome">Welcome to Individual Registration</label>
          <?php echo validation_errors(); ?>
          <!-- <h5></h5> -->
          <form id="Signup-I-form" name="signup_form" method="POST" action="<?php echo base_url();?>Signup_Ind/create_user">
            <input name="Fname" type="text" placeholder="Enter your name" title="2 characters minimum"  value="<?php echo set_value('Fname'); ?>"required>
            <input name="Lname" type="text" placeholder="Enter last name" title="2 characters minimum"  value="<?php echo set_value('Lname'); ?>" required>
            <input name="work" type="text" placeholder="Enter place of work" title="2 characters minimum" value="<?php echo set_value('work'); ?>" required>
            <input name="school" type="text" placeholder="Enter school" title="3 characters minimum" value="<?php echo set_value('school'); ?>" required>
            <input name="email" type="email" placeholder="Enter email"  value="<?php echo set_value('email'); ?>" required>
            <input name="pass" type="text" placeholder="Enter password" pattern="[a-zA-Z][a-zA-Z0-9-_.@!*]{8,15}" value="<?php echo set_value('pass'); ?>" title="Use a a-z and A-Z and 0-9 you can also use _.@!*" required>
            <button class="button_margine left" type="submit" value="Submit" >Send</button>
          </form>
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
