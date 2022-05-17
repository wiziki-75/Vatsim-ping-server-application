<?php
  include('include.php');
 ?>

  <body>
    <form action="ping.php" method="post">
      <select id="server_name" name="server_name">
        <?php

        foreach($servers as $key => $server){
          echo "<option value = ". $key .">" . $server -> name . "</option>";

        }
         ?>
      </select>

      <div class="">Packet number</div>

      <select id="n" name="n">
        <?php
          for($i = 1; $i <= 5;$i++){
            echo "<option value = " . $i . ">" . $i . "</option>";
          }
         ?>
      </select><br>
      <input type="submit">Ping</input>
    </form>
  </body>
