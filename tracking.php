<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>track shipment</title>
    <link rel="shortcut icon" href="del_img_folder/del-log.jpg" type="image/x-icon">
    <link rel="stylesheet" href="track.css">
</head>
<div
id="google_translate_element"
style="background-color: rgba(2, 2, 17, 0.863); width: fit-content;"
></div>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    { pageLanguage: "en" },
    "google_translate_element"
  );
}
</script>
<body>
    <div class="container">
        <span class="head_line">track </span>
        <div class="track-input">
            <form action="tracking-processor.php" method="post">
            <input type="text" id="code" name="code" value=""><br>
            <button type="submit">track</button><br>
        </form>
            <span class="write-up">
                track your shipment/parcel<br>
                always follow up for your ship
            </span>
        </div>
    </div>
    <div class="location_container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321200.7122225693!2d-114.41747115626765!3d51.027591559481394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537170039f843fd5%3A0x266d3bb1b652b63a!2sCalgary%2C%20AB%2C%20Canada!5e0!3m2!1sen!2sng!4v1687518673624!5m2!1sen!2sng"
   width="600" height="450" style="border:0;"
   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</body>
</html>
<!-- <?php
require('C:\xamppp\htdocs\Database_class\dbconnector.php');
$code = $_POST['code'];
$db = new PDO($dsn,$db_user,$dbpass,$erromode);
$start=$db->prepare('INSERT INTO delivery WHERE track_code = 1');
if(empty($code = $_POST['code'])){
    echo'<script type=text/javascript>
    window.location="tracking.hmtl";
    </script>';
}?> -->
