<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/sayitright.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <script src="SayItRight.js"></script> -->
  </head>
  <body>
    <div class="NavBar">
      <div id="wrapper">
        <a class="logo_a" href="#"><img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial" ></a>
        <a href="<?php echo base_url(); ?>Login_individual">HOME</a>
        <a href="<?php echo base_url(); ?>Conferences">CONFERENCES</a>
        <a href="<?php echo base_url(); ?>Events">EVENTS</a>
        <a href="<?php echo base_url(); ?>myConf">MY CONFERENCES</a>
        <a href="<?php echo base_url(); ?>MyEvents">MY EVENTS</a>
        <a href="<?php echo base_url(); ?>Settings">SETTINGS</a>
        <a href="<?php echo base_url(); ?>logout.php">LOGOUT</a>

  </div>
    </div>
    <section>
      <div id="wrapper">
      <div class="sign_up-div">
          <div id="settings-form">
            <h5>Welcome to Event log</h5>
            <hr>
            <?php echo validation_errors(); ?>
            <form action="<?php echo base_url();?>Settings/validateFields" method="POST">
              <table class="settings-table">
                <tr>
                  <td><img class="user" src="imgsay_2/user.jpg" alt="user-img">
                    <button class="button_margine" type="submit" form="" value="Submit" style="margin-left:30%;">CHANGE IMAGE</button>
                  </td>
                  <td>
                    <input type="text" name="fname" placeholder="<?php print_r($this->session->userdata('Fname')); ?>" pattern="[A-Za-z]{2,16}"  title="2 characters minimum" style="display:inline-block; width: 48%;padding-right:2%" >
                    <input type="text" name="lname" placeholder="<?php print_r($this->session->userdata('Lname')); ?>" pattern="[A-Za-z]{2,16}" title="2 characters minimum"   style="display:inline-block; width: 48%;" >
                    <input type="text" name="school" value="<?php echo set_value('school'); ?>" placeholder="Enter school name" pattern="[A-Za-z]{2,16}" title="2 characters minimum" >
                    <input type="email" name="email" placeholder="Enter email">
                    <input type="password" name="pass" placeholder="Enter password"  title="Use a a-z and A-Z and 0-9 you can also use _.@!*" >
                    <label for="change Password">Change Password</label>
                    <button class="button_margine left" type="submit" value="Submit">Send</button>

                  </td>
                </tr>
              </table>

            </form>
            </div>
        </div>
        </div>
    </section>
    <section>
      <div class="bottom-container">
        <div id="wrapper">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <p id="copyright">copyright©2019 All rights reserved | This web is made with ♡ by <span class="app"> DiazApps</span></p>
      </div>
      </div>
    </section>

  </body>
</html>
