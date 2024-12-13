<?php 
date_default_timezone_set("Europe/Istanbul");
//saati türkiye saati


//tarih saat işlemleri
// date('d.m.Y') => 13.12.2024
// date('d/m/Y') => 12/12/2024
// date('d-m-Y') => 12-12-2024
// date('d.m.Y H:i') => 12-12-2024 17:54

$tarih = date('d/m/Y H:i:s'); //saniyeli
$tarih = date('y-m-d H:i:s'); //saniyeli
$tarih = date('d-F-Y');
echo $tarih;
?>