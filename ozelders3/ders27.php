<?php

//tarih biçimini değiştirme
//strtotime
//date ile yazılır ve içerisinde strtotime kullanılır

$tarih = date('Y-m-d H:i');
$cevir = date('d.m.Y H:i',strtotime($tarih));

echo $tarih.'<br>';
echo $cevir;

?>