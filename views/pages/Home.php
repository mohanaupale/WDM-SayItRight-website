<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/sayitright.css">
  <!-- <script src="SayItRight.js"></script> -->
  <meta name="viewport" content="width=divice-width, initial-scale=1.0">
</head>
</head>
<body style="background-image: url("imgsay_2/home-banner.jpg");">
  <div class="NavBar">
    <img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial" >
    <a href="<?php echo base_url(); ?>Home">HOME</a>
    <a href="<?php echo base_url(); ?>Aboutus">ABOUT US</a>
    <a href="<?php echo base_url(); ?>/blog.php">BLOG</a>
    <a href="<?php echo base_url(); ?>Buy_From_Us">BUY FROM US</a>
    <a href="<?php echo base_url(); ?>ContactUs">CONTACT US</a>
    <a href="<?php echo base_url(); ?>Signup">SIGN UP</a>
    <a href="<?php echo base_url(); ?>Login">LOGIN</a>
  </div>
  <section>
    <div class="main_body">
      <div id="wrapper">
      <table id="Home_table">
        <tr>
          <td id="Home_table-td">
            <img src="imgsay_2/taza1.png" class="img-home" alt=""></td>
          <td id="Home_table-td">For good communication <span id="name">Say it Right</span> is <br> a tool that you should use <span id='video'><br>you can see out video tutorial with just pressing this button.</span><br>
            <i class="far fa-play-circle"></i><p id="video">Watch the video</p>
          <br></td>
        </tr>
      </table>
      </div>
    </div>
  </section>
  <section>
    <div class="subscribe">
      <div id="wrapper">
      <table align="center">
        <tr>
          <td><h3>Subscribe Our Newsletter</h3><p>we wont send any kind of spam</p></td>
          <td>
              <?php echo validation_errors(); ?>
              <?php echo form_open('Home'); ?>
              <input id="search" type="email" placeholder="Enter email address" name="email" value='<?php echo set_value('email'); ?>' required>
              <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->
              <input id="submit" type="submit" value="Search" >
              <br>

            </form>
          </td>
        </tr>
      </table>
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

</script>
</body>
</html>
