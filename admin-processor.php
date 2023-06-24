<?php
session_start();
require('C:\xamppp\htdocs\Database_class\dbconnector.php');
$rname = $_POST['rname'];
$sname = $_POST['sname'];
$remail = $_POST['remail'];
$semail = $_POST['semail'];
$address = $_POST['address'];
$zip = $_POST['znumber'];
$rphone = $_POST['rnumber'];
$sphone = $_POST['snumber'];
$date = date();
$img = $_POST['img'];
$track_name = $_POST['track_name'];
$_SESSION['track'] = $track_name;
$_SESSION['code'] = $code;
$_SESSION['insert_id'] = $insert_id;

$code =rand(674654,999999);
$db = new PDO($dsn,$db_user,$dbpass,$erromode);
$reg = $db->prepare("INSERT INTO delivery(reciever_name,sender_name,reciever_email,sender_email,address,zip_code,reciever_number,sender_number,
track_code,date) VALUE(?,?,?,?,?,?,?,?,?,?)");
$reg->execute([$rname,$sname,$remail,$semail,$address,$zip,$rphone,$sphone,$code,$date]);
$insert_id = $db->lastInsertid();

if(empty($_POST['remail'] && $_POST['semail'] && $_POST['rname'] && $address = $_POST['address'] 
&& $zip = $_POST['znumber'] && $rphone = $_POST['rnumber'] && $_sphone = $_POST['snumber'] && $sname = $_POST['sname'])){
    echo'<script type="text/javascript">
    alert("complete credentials!");
    window.location="admin.php";
    </script>';
    if(!isset($_POST['email'])){
        echo'<script type="text/javascript">
        alert("complete email");
        window.location="admin.php";</script>';
        
    }
}
if($insert_id > 0){
    echo'<script type="text/javascript">
    alert("Registration successful!");
    alert(" '.$track_name.' '.$code.'<copy tracking code!>");
    window.location="tracking.php";
    </script>';
} else{
    echo'registration failed!';
}
?>