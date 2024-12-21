<?php 
require 'baglan.php';

/*
veri çekme kodu SELECT * FROM tabloismi
birden fazla veri olduğu için döngüye alacağız
döngüyü ister tablo içerisinde istersekte direkt kullanabiliriz
*/

$musteriler = $db->prepare("SELECT * FROM musteriler");
$musteriler->execute();
foreach($musteriler as $musteri){
    echo $musteri['musteri_adi'].'-'.$musteri['musteri_tel'].'-'.$musteri['musteri_eposta'].'<br>';
}

?>