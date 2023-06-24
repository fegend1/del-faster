<?php
    echo'<title>Admin page</title>';
    session_start();
    echo'<link rel="stylesheet" href="admin.css">';
    ?>
    <div class="container">
        <span class="details">input client details</span>
        <form action="admin-processor.php" method="post" validate>
          <label for="fname">reciever name:</label>
          <input type="text" value="" name="rname" placeholder="reciever"><br>
          <label for="lname">sender name:
          </label>
          <input type="text" value="" name="sname" placeholder="sender"><br>
          <label for="email">reciever email:</label>
          <input type="email" value="" name="remail" placeholder="reciever email"><br>
          <label for="email">sender email:</label>
          <input type="email" value="" name="semail" placeholder="sender email"><br>
          <label for="Address">address:</label>
          <input type="text" value="" name="address" placeholder="address"><br>
          <label for="zip">zip code:</label>
          <input type="number" value="number" name="znumber" placeholder="zip code"><br>
          <label for="number">reciever number:</label>
          <input type="number" value="pnumber" name="rnumber" placeholder="reciever number"><br>
          <label for="number">sender number:</label>
          <input type="number" value="pnumber" name="snumber" placeholder="sender number"><br>
          <label for="image">picture:</label>
          <input type="file" value="img" name="img" placeholder="client image"> <input type="text" name="track_name" value="track_name"><br>
          <button type="reset">reset</button>&nbsp;&nbsp;&nbsp;<button type="submit">submit</button>

        </form>
    </div>
