<?php //this one will save QR img
include 'phpqrcode/qrlib.php'; 
$text = "whatever text here"; # content here
$path = 'images/'; # path to save QR img here
date_default_timezone_set("Asia/Kuala_Lumpur");
$file =  "images/" . date("YmdHis") . uniqid() . ".png"; # file name here
//$file = false # if don't want store the png file
QRcode::png($text, $file, 'H', 15, 3); 
echo "<img src='".$file."'>"; 
?> 