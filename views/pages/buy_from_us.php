
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/sayitright.css">
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
      <section class="general_body">
        <div class="main_body">
          <div id="wrapper">
          <p class="route">Home-> Buy From Us</p>
          <h1 >BUY FROM US</h1>
        </div>
        </div>
      </section>


      <section>
        <div id="wrapper">

          <h2 id="Buy_heading">Buy From Us</h2>
          <table class="buy-table-cards" cellpadding="40px" cellspacing="40px">

            <?php

              $max_row=3;
              $counter=3;
              if(sizeof($result) > 0){

              foreach ($result as $row) {

                  // code...
                  if($counter%3==0){
                    echo "<tr>";
                  }

                echo " <td>";
                echo "<div>";
                echo "<img src=\"".$row->m_img. "\" class=\"product_img\" alt=\"Tee-img\" />";
                echo "<p>".$row->price."</p>";
                echo "<p>".$row->description."</p>";
                echo "<a  class=\" myButton \" data-id=".$row->Item_ID."  > ADD TO CART</a>";
                echo "</div>";
                echo "</td>";

                $counter =$counter-1;
                if($counter==0){
                  echo "</tr>";
                  $counter =3;
                }
                }
              }

            ?>


          </table>
        </div>
      </div>
      <script>
      $(window).load(function () {

        function post(path, params, method) {
				method = method || "post"; // Set method to post by default if not specified.

				// The rest of this code assumes you are not using a library.
				// It can be made less wordy if you use one.
				var form = document.createElement("form");
				form.setAttribute("method", method);
				form.setAttribute("action", path);

				for(var key in params) {
					if(params.hasOwnProperty(key)) {
						var hiddenField = document.createElement("input");
						hiddenField.setAttribute("type", "hidden");
						hiddenField.setAttribute("name", key);
						hiddenField.setAttribute("value", params[key]);

						form.appendChild(hiddenField);
					}
				}

				document.body.appendChild(form);
				form.submit();
			}

        $(".myButton").click(function(){
            console.log(this);

            $('.hover_bkgr_fricc').show();


            var temp1 = $(this).parent().find('img');
            console.log(temp1);
            $('.popup_img').attr('src',temp1.attr('src'));
            //var img_tag = temp1.parentElement.firstElementChild.getAttribute("src");
            //console.log(img_tag);
            //$('.popup_img').attr('src', img_tag.attr('src'));
            $('.product_img_id').attr('value',$(this).data("id"));
        });
        $('.hover_bkgr_fricc').click(function(){

        });
        $('.popupCloseButton').click(function(){
          $('.hover_bkgr_fricc').hide();
        });
        var cartList={};
				$(".addCartButton").click(function(){
					cartList[$(".product_img_id").val()]=$(".qtyField").val();
          console.log(cartList);
          $('.hover_bkgr_fricc').hide();
				});
				$(".mySubmit-btn").click(function(){
					localStorage.setItem('carList',JSON.stringify(cartList));
					//location.replace("add_cart.html");
					post("Cart",{'list':'\''+JSON.stringify(cartList)+'\''},"POST");
				});
      });
      </script>
      </section>
      <section>
        <div class="subscribe">
          <div id="wrapper">
          <table class="special-subscribe-cart" align="center">
            <tr>
              <td><h3>View Shopping cart</h3><p>you can see the products added to your cart</p></td>
              <td>

                  <input id="submit" type="submit" class="mySubmit-btn" value="Submit">

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
        <div class="hover_bkgr_fricc">
          <span class="helper"></span>
          <div>
            <div class="popupCloseButton">X</div>
            <table class="settings-table">
              <tr>
                <td><img class="user popup_img  thumbnail" src="" alt="user-img">

                </td>
                <td>
                 <input type="text" placeholder="Enter your name" class="qtyField">
                 <input type="text" placeholder="Enter your name" class="product_img_id">
                 <button class="button_margine left addCartButton" type="submit"  value="Submit">Send</button>
               </td>
              </tr>
            </table>
          </div>
        </div>

        <style>
        /* Popup box BEGIN */
          .hover_bkgr_fricc{
              background:rgba(0,0,0,.4);
              cursor:pointer;
              display:none;
              height:100%;
              position:fixed;
              text-align:center;
              top:0;
              width:100%;
              z-index:10000;
          }
          .hover_bkgr_fricc .helper{
              display:inline-block;
              height:100%;
              vertical-align:middle;
          }
          .hover_bkgr_fricc > div {
              background-color: #fff;
              box-shadow: 10px 10px 60px #555;
              display: inline-block;
              height: auto;
              max-width: 551px;
              min-height: 100px;
              vertical-align: middle;
              width: 60%;
              position: relative;
              border-radius: 8px;
              padding: 15px 5%;
          }
          .popupCloseButton {
              background-color: #fff;
              border: 3px solid #999;
              border-radius: 50px;
              cursor: pointer;
              display: inline-block;
              font-family: arial;
              font-weight: bold;
              position: absolute;
              top: -20px;
              right: -20px;
              font-size: 25px;
              line-height: 30px;
              width: 30px;
              height: 30px;
              text-align: center;
          }
          .popupCloseButton:hover {
              background-color: #ccc;
          }
          .trigger_popup_fricc {
              cursor: pointer;
              font-size: 20px;
              margin: 20px;
              display: inline-block;
              font-weight: bold;
          }
          /* Popup box BEGIN */
        </style>
      </section>
  </body>
</html>
