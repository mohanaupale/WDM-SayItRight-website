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
          <button onclick="window.location.href = '<?php echo base_url(); ?>Signup_Bussiness/index';">BUSINESS</button>
        </div>
        <div id="Business-form">
            <hr>
            <?php echo validation_errors(); ?>
            <label for="welcome">Welcome to Business records</label>
            <form id="sign-B-form" method="POST" action="<?php echo base_url();?>Signup_Bussiness/create_user" name="signup_B">
              <div class="radio_button_div">
                <label for="Type_of_Business">Type of Business</label>
                </div>
              <div class="radio_button_div">
                <input type="radio" name="Type_of_Business"  value="University"<?php echo set_radio('Type_of_Business','University'); ?>><label for="University">University</label>
              </div>
              <div class="radio_button_div">
                  <input type="radio" name="Type_of_Business"  value="Company"<?php echo set_radio('Type_of_Business','Company'); ?> ><label for="Company">Company</label>
              </div>
              <!-- <label for="Type of Business">Type of Business</label>
              <input type="radio" name="Type of Business" value="University" checked> University <br>
              <input type="radio" name="Type of Business" value="Company"> Company<br> -->
              <input name="Lname" type="text" placeholder="Enter last name" pattern="[A-Za-z]{2,16}" title="2 characters minimum" value="<?php echo set_value('Lname'); ?>" required>
              <input name="email" type="text" placeholder="Enter email" value="<?php echo set_value('email'); ?>" required>
              <input name="pass" type="text" placeholder="Enter password" pattern="[a-zA-Z][a-zA-Z0-9-_.@!*]{8,15}" title="Use a a-z and A-Z and 0-9 you can also use _.@!*" value="<?php echo set_value('pass'); ?>" required>
              <button class="button_margine left" type="submit" value="Submit" onclick="sign_up_B(document.signup_B.lname,document.signup_B.email)">Send</button>
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
