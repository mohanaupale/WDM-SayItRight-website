<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CONTACT US</title>
  <link rel="stylesheet" type="text/css" href="css/sayitright.css">
  <script src="SayItRight.js"></script>
</head>

<body>
  <div class="NavBar">
    <div id="wrapper">
      <img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial" >
      <a href="<?php echo base_url(); ?>Home">HOME</a>
      <a href="<?php echo base_url(); ?>Aboutus">ABOUT US</a>
      <a href="<?php echo base_url(); ?>/blog.php">BLOG</a>
      <a href="<?php echo base_url(); ?>/buy_main.php">BUY FROM US</a>
      <a href="<?php echo base_url(); ?>ContactUs">CONTACT US</a>
      <a href="<?php echo base_url(); ?>Signup">SIGN UP</a>
      <a href="<?php echo base_url(); ?>Login">LOGIN</a>
  </div>
  </div>
  <section class="general_body">
    <div class="main_body">
      <div id="wrapper">
      <p class="route">Home-> Contact</p>
      <h1>CONTACT US</h1>
    </div>
    </div>
    </section>
    <section>
      <div id="wrapper">
        <div class="sign_up-div" style="width:80%; white-space:nowrap;">
        <table class="forms_1">
          <?php echo validation_errors(); ?>
          <form  method="POST" action="<?php echo base_url();?>ContactUs/message">
          <tr>
            <td>
              <input name="f_name" type="text" placeholder="Enter Your Name" class="person_info"  title="2 characters minimum"  value="<?php echo set_value('f_name'); ?>" required>
              <!-- <span class="invalid"><?php echo $ERROR_MSG_NAME ?></span> -->
              <!-- pattern="[A-Za-z]{2,16}" -->

              <input name="l_name" type="text" placeholder="Enter Last Name" class="person_info"  title="2 characters minimum" pattern="[A-Za-z]{2,16}"  value="<?php echo set_value('l_name'); ?>"required>
              <!-- <span class="invalid"><?php echo $ERROR_MSG_LNAME ?></span> -->
              <!-- pattern="[A-Za-z]{2,16}" -->

              <input name="phone" type="tel" placeholder="Telephone" class="person_info"  title="Please Enter 10 digit number" pattern="[0-9]{10}"  value="<?php echo set_value('phone'); ?>" required>
              <!-- <span class="invalid"><?php echo $ERROR_MSG_PHONE ?></span> -->
              <!-- pattern="[0-9]{10}" -->
            </td>
            <td>
              <textarea name="msg" rows="10" cols="50" style="margin-left:10%"  value="<?php echo set_value('msg'); ?>" required>
              </textarea>
              <!-- <span class="invalid"><?php echo $ERROR_MSG_msg ?></span> -->
              <br>
            <input class="myButton" type="submit" value="Submit" >
            </td>
          </tr>
          </form>
        </table>
      </div>
        </div>
    </section>
    <section>
      <div class="bottom-container">
        <div id="wrapper">
        <br>
        <br>
        <hr>
        <p id="copyright">copyright©2019 All rights reserved | This web is made with ♡ by <span class="app"> DiazApps</span></p>
      </div>
      </div>
    </section>
</body>

</html>
