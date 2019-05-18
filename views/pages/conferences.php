<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="css/sayitright.css">
  </head>
  <body>
    <div class="NavBar">
      <div id="wrapper">
        <a class="logo_a" href="#"><img class="logo" src="imgsay_2/Sin título-1.png" alt="HTML tutorial" ></a>
        <a href="<?php echo base_url(); ?>Login_individual">HOME</a>
        <a href="<?php echo base_url(); ?>Conferences">CONFERENCES</a>
        <a href="<?php echo base_url(); ?>Events">EVENTS</a>
        <a href="<?php echo base_url(); ?>my_conferences.php">MY CONFERENCES</a>
        <a href="<?php echo base_url(); ?>MyEvents">MY EVENTS</a>
        <a href="<?php echo base_url(); ?>settings.php">SETTINGS</a>
        <a href="<?php echo base_url(); ?>logout.php">LOGOUT</a>
    </div>
    </div>
    <section>
      <div id="wrapper">
        <h2>List of Events</h2>
        <table class="conf-events">
          <colgroup>
          <col >
          <col class="w">
          <col>
          <col>
          </colgroup>
          <tr>
            <td>Events</td>
            <td>Description</td>
            <td>date</td>
            <td>sede</td>
            <td>Confirmation</td>
          </tr>
          <tr>
            <?php
            if(sizeof($result) > 0){
            foreach ($result as $row) {
               // code...   echo "<tr>";
                   echo "<td class='Events-td'>" . $row->Event_type . "</td>";
                   echo "<td class='Events-td'>" . $row->Event_Topic . "</td>";
                   echo "<td class='Events-td'>" . $row->EDate . "</td>";
                   echo "<td class='Events-td'>" . $row->SDED . "</td>";
                  echo "<td><form  action='Conferences/add_conf' method='post'>";
                    echo "<input type='hidden' name='e_id' value='$row->E_ID'>";

                       echo "<button type='submit' name='button'>Confirm</button>";
                    echo "</form>";
                  echo" </td>";
                 echo "</tr>";
                 unset($result);
             }


            }
           else{
              echo "No records matching your query were found.";
            }
							?>
          </tr>
        </table>
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
        <hr>
        <p id="copyright">copyright©2019 All rights reserved | This web is made with ♡ by <span class="app"> DiazApps</span></p>
      </div>
      </div>
      <script>
        function confirm_conf(cid){
        var xmlhttp = new XMLHttpRequest();
        stmt = "./function_def.php?cid="+cid;
        xmlhttp.open("GET",stmt,false);
        xmlhttp.send(null);
        var responce = xmlhttp.responseText;
        if(responce.localeCompare("done")){//Statement is reversed
          alert("Event added");
        }else{
          location.reload();
        }
        console.log(responce);
        }
      </script>
    </section>
  </body>
</html>
