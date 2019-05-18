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
      <a href="<?php echo base_url(); ?>Home">HOME</a>
      <a href="<?php echo base_url(); ?>Aboutus">ABOUT US</a>
      <a href="<?php echo base_url(); ?>/blog.php">BLOG</a>
      <a href="<?php echo base_url(); ?>Buy_From_Us">BUY FROM US</a>
      <a href="<?php echo base_url(); ?>ContactUs">CONTACT US</a>
      <a href="<?php echo base_url(); ?>Signup">SIGN UP</a>
      <a href="<?php echo base_url(); ?>Login">LOGIN</a>
  </div>
    </div>
    <section>
      <div id="wrapper">
      <div class="sign_up-div">
                <form id="Cart_form" Method="POST" action="<?php echo base_url();?>Cart/order" name="Cart_Sub" >


          <div id="cart">
        <!-- <input type="submit" value="INDIVIDUAL">
          <input type="submit" value="EVENT" align="center">
          <input type="submit" value="BUSINESS"> -->
          <table class="cart-table">
            <tr>
              <td>
                  <?php echo validation_errors(); ?>
                  <h4 class="contact_info">Contact Information</h4>
                  <hr>
                  <input type="email" name="email" placeholder="Enter email" value="<?php echo set_value('email'); ?>">
                  <h4 class="contact_info">Shipping address</h4>
                  <hr>
                  <input class="addr" name="Fname" type="text" placeholder="Enter your name" value="<?php echo set_value('Fname'); ?>">
                  <input type="text" name="Lname" placeholder="Enter Last name"value="<?php echo set_value('Lname'); ?>">
                  <input type="text" name="Addr" placeholder="Enter Address" value="<?php echo set_value('Addr'); ?>">
                  <input type="text" name="apt" placeholder="Enter Apartment,suite,etc." value="<?php echo set_value('apt'); ?>">
                  <input type="text" name="city" placeholder="Enter City" value="<?php echo set_value('city'); ?>">
                  <input  class="addr" list="browsers" name="browser" placeholder="English" value="<?php echo set_value('browsers'); ?>">
        <datalist id="Languages">
          <option value="English">
          <option value="French">

        </datalist>
                  <input class="addr" name="postal" type="number" placeholder="Enter postal code" value="<?php echo set_value('postal'); ?>">

                  <button class="button_margine left" type="submit"  value="Submit">Send Message</button>
              </td>
              <td valign="top">
                <table class="cart-contents">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Units</th>
                    <th>Price</th>
                  </tr>
                  <?php
  									$total = 0;


                    if(sizeof($merchandize) > 0){

                    foreach ($merchandize as $row) {
  											$id=$row->Item_ID;
  											echo"<tr><td><img src=".$row->m_img." class=\"thumbnail\"></td>";
                        echo"<td>".$row->Item_name."</td>";
  											echo"<td> ".$cart[$id]."</td>";
  											$price = $cart[$id]*$row->price;
  											echo"<td> $".$price."</td>";
  											echo"</tr>";
  											unset($result);
  											$total+=$price;
  										}
  									}
  									else{
  										echo "No records matching your query were found.";
  									}
                    echo "<input type='hidden' name='list' value='.$list.' >";
  							?>


                </table>
                <hr>

                <label for="Total" align="left">Total&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="Currency">&nbsp;&nbsp;&nbsp;USD&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label for="price" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $total; ?></label>

              </td>
            </tr>
          </table>

        </div>
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
