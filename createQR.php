<?php //this one will not save QR img
include 'phpqrcode/qrlib.php'; 
$text = "whatever text here"; # content here
QRcode::png($text); 
?> 