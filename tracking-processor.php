<?php
  session_start();
  require('C:\xamppp\htdocs\Database_class\dbconnector.php');
 echo'<link rel="stylesheet" href="tracking-processor.css" />';
 echo' <div
 id="google_translate_element"
 style="background-color: rgb(104, 100, 100);"
></div>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
 function googleTranslateElementInit() {
   new google.translate.TranslateElement(
     { pageLanguage: "en" },
     "google_translate_element"
   );
 }
</script>';
 echo' <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link
   href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap"
   rel="stylesheet"
 />';
 echo' <meta charset="UTF-8" />';
 echo' <meta name="viewport" content="width=device-width, initial-scale=1.0" />';
 echo'<title>tracking</title>';

$code = $_POST['code'];

 if($code > 10){
 $db = new PDO($dsn,$db_user,$dbpass,$erromode);
 $get =$db->prepare("SELECT * FROM delivery WHERE track_code = ? LIMIT 1");
 $get->execute([$code]); 
 $row = $get->fetch(PDO::FETCH_ASSOC);
 $code= $row['track_code'];
//  if(is_array($row) && count(row)>0){
?> 

<div class="container">
  <div class="img-heading">
    <img
      src="del_img_folder/delivery-van1.jpg"
      alt="delivery van"
      width="200px"
      height="60px"
    />
    <span class="heading"
      ><span id="first-word">del</span> faster
      <span id="second-word">express</span> delivery certificate</span
    >
  </div>
  <!-- FIRST COLUMN START -->
  <div class="column-1">
    <div class="break-1">
      <span class="from">from[sender credentials]</span>
      <div class="col-1">
        <ul>
          <ol>
            name
          </ol>
          <ol class="item">
            address
          </ol>
          <ol>
            email
          </ol>
          <ol class="item">
            mobile
            <br />number
          </ol>
        </ul>
        <ul>
          <ol>
          <?php echo $row['sender_name'];?>
          </ol>
          <ol class="item">
          address
          </ol>
          <ol>
          <?php echo $row['sender_email'];?>
          </ol>
          <ol class="item">
          <?php echo $row['sender_number'];?>
          </ol>
        </ul>
      </div>
    </div>
    <div class="col-2">
      <span>delivery status</span>
      <img
        src="del_img_folder/approved-img.jpg"
        alt="govt approved"
        width="250px"
        height="200px"
      />
    </div>
    <div class="break-2">
      <span class="to">to[reciever credentials]</span>
      <div class="col-3">
        <ul>
          <ol>
            name
          </ol>
          <ol class="item">
            address
          </ol>
          <ol>
            email
          </ol>
          <ol class="item">
            mobile
            <br />number
          </ol>
          <ol>
            zip code
          </ol>
        </ul>
        <ul>
          <ol>
          <?php echo $row['reciever_name'];?>
          </ol>
          <ol class="item">
          <?php echo $row['address'];?>
          </ol>
          <ol>
          <?php echo $row['reciever_email'];?>
          </ol>
          <ol class="item">
          <?php echo $row['reciever_number'];?>
          </ol>
          <ol>
          <?php echo $row['zip_code'];?>
          </ol>
        </ul>
      </div>
    </div>
  </div>
  <!-- FIRST COLUMN END -->

  <!-- SECOND COLUMN START -->
  <div class="column-2">
    <div class="sec-break">
      <span class="from">courier[details summary]</span>
      <div class="coln-1">
        <ul>
          <ol>
            origin
          </ol>
          <ol class="item">
            destination
          </ol>
          <ol>
            courier
          </ol>
          <ol class="item">
            courier reference number
          </ol>
          <ol>
            payment mode
          </ol>
          <ol class="item">
            shipment mode
          </ol>
          <ol>
            shipment type
          </ol>
        </ul>
        <ul style="padding-top:-0.5cm;">
          <ol>
            origin
          </ol>
          <ol class="item">
          <?php echo $row['address'];
            echo $row['reciever_email'];
            // echo $row['reciever_number'];
          ?>
          </ol>
          <ol>
            airplane
          </ol>
          <ol class="item">
          <?php echo $row['track_code'];?>
          </ol>
          <ol>
            bank/wire transfer
          </ol>
          <ol class="item">
            express
          </ol>
          <ol>
            air freight
          </ol>
        </ul>
      </div>
    </div>

    <div class="third-break">
      <span class="from">item[details summary]</span>
      <div class="coln-2">
        <ul>
          <ol>
            product name
          </ol>
          <ol class="item">
            product package
          </ol>
          <ol>
            quantity
          </ol>
          <ol class="item">
            weight
          </ol>
          <ol>
            height
          </ol>
          <ol class="item">
            total freight
          </ol>
        </ul>
        <ul>
          <ol>
          sealed gift package
          </ol>
          <ol class="item">
            box[es]
          </ol>
          <ol>
            2
          </ol>
          <ol class="item">
            200
          </ol>
          <ol>
            300
          </ol>
          <ol class="item">
            1
          </ol>
        </ul>
      </div>
      <span class="note"
        >NOTE: the product will be delivered at the reciever door step,thanks
        for your co-operetion</span
      >
    </div>
  </div>
  <!-- SECOND COLUMN END -->
    <div class="column-3">
        <span class="from history">history[details summary]</span>
        <div class="fourth-break">
            <ul>
                <ol>date</ol>
                <ol> <?php echo $row['date'];?></ol>
            </ul>
            <ul>
                <ol>time</ol>
                <ol>time</ol>
            </ul>
            <ul>
                <ol>location</ol>
                <ol>canada enrouting usa</ol>
            </ul>
            <ul>
                <ol>status</ol>
                <ol>shipped</ol>
            </ul>
            <ul>
                <ol>remark</ol>
                <ol>shipment are intact,heading to destination for delivery</ol>
            </ul>
        </div>
    </div>
    <div class="footer">
    <span><img src="del_img_folder/barcode2.jpg" alt="" width="300px"height="70px"></span>
    <span><a href="mailto:companywesterncargo@gmail.com"><img src="del_img_folder/email-icon2.jpg" alt="email us" width="70px" height="70px"></a></span>
    </div>
  </div>
  


<?php
 } else{
  echo'<script type="text/javascript">
  alert("invalid code, visit previous page"); 
  window.location="tracking.php";
  </script>';
 }
