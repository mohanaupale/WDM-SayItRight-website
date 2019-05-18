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
        <a class="logo_a" href="#"><img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial" ></a>
        <a href="<?php echo base_url(); ?>Login_individual">HOME</a>
        <a href="<?php echo base_url(); ?>Conferences">CONFERENCES</a>
        <a href="<?php echo base_url(); ?>Events">EVENTS</a>
        <a href="<?php echo base_url(); ?>myConf">MY CONFERENCES</a>
        <a href="<?php echo base_url(); ?>MyEvents">MY EVENTS</a>
        <a href="<?php echo base_url(); ?>Settings">SETTINGS</a>
        <a href="<?php echo base_url(); ?>Logout">LOGOUT</a>
    </div>
    </div>
    <section id="Home_individual">
      <div id="wrapper">
        <table class="table-cards" cellspacing="50" cellpadding="0">
          <tr>
            <td>
              <div class="head1">
                <i class="fas fa-globe-americas"></i>
                <?php echo "<h1 class='attended_number'>".$event_count."</h1>"; ?>
                <!-- <h1 class="attended_number">26</h1> -->
                <p id="copyright">Activities performed</p>
                <br>
              </div>
              <div class="head2">
                <br>
                  <label for="">Total made</label>
                  <br>

              </div>
            </td>
            <td>
              <div class="head1 green">
                <i class="fas fa-users"></i>
                  <?php echo "<h1 class='attended_number'>" .$Conf_count."</h1>";?>
                <p id="copyright">Activities performed</p>
                <br>
              </div>
              <div class="head2">
                <br>
                <label for="">Conferences</label>
                <br>
              </div>
            </td>
            <td>
              <div class="head1 yellow">
              <i class="fas fa-star"></i>
              <?php echo "<h1 class='attended_number'>" .$total."</h1>";?>
              <p id="copyright">Activities performed</p>
              <br>
              </div>
              <div class="head2">
                <br>
                <label for="">Events</label>
                <br>
              </div>
            </td>
            <td>
              <div class="head1 grey">
              <i class="fas fa-trophy"></i>
              <h1 class="attended_number">26</h1>
              <p id="copyright">Activities performed</p>
              <br>
              </div>
              <div class="head2">
                <br>
                <label for="">Activities</label>
                <br>
              </div>
            </td>
            </tr>
            <tr>
              <td id="blue1">
                <?php if ($Type!="Event") {
                  echo "<p id='copyright'>Header </p>";
                }
                else{

                  echo "<p id='copyright'><a href='Create_Event.php' class='Eventa' style:'padding:'10%';'>Create ".$Type."</a></p>";
                }
                ?>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br> the on the card title and make up the bulk of the title.</p>
              </td>
              <td id="grey1">
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br> the on the card title and make up the bulk of the title.</p>
              </td>
              <td id=green1>
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br> the on the card title and make up the bulk of the title.</p>
              </td>
              <td id="red1">
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br>the on the card title and make up the bulk of the title.</p>
              </td>
            </tr>
            <tr>
              <td id="yellow1">
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br> the on the card title and make up the bulk of the title.</p>
              </td>
              <td id="teal1">
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br> the on the card title and make up the bulk of the title.</p>
              </td>
              <td id=white1>
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br> the on the card title and make up the bulk of the title.</p>
              </td>
              <td id="black1">
                <p id="copyright">Header</p>
                <hr>
                <p>Primary card Title</p>
                <p>Some quick exmaple to build <br>the on the card title and make up the bulk of the title.</p>
              </td>
            </tr>
        </table>

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
