<?php
require 'baglan.php';

/*
veri ekleme kısmı php inin insert fonksiyonu ile yapılır
insert into tabloismi set sütunlar1,sütunlar2
*/

/* 
sorgularda soru işareti kullanımında önemli olan
hangi sıra ile başladıysan o sırayla bitmesi gerekir

soru işaretsiz halinde ise geçici bir isim verip o ismi kullanmamız gerekir
*/

$musteriadi = 'Yavuz Selim';
$musteritel = 5391112233;
$musterimail= 'info@yavuz-selim.com';

/*
$veritabaninaekle = $db->prepare(
    "INSERT INTO musteriler SET
    musteri_adi =?, 
    musteri_tel =?,
    musteri_eposta =?
    "
);

$veritabaninaekle->execute(array(
  
    $musteritel,
    $musteriadi,
    $musterimail
   
   
)); */


$veritabaninaekle = $db->prepare("INSERT INTO musteriler SET
    musteri_adi    =:a,
    musteri_tel    =:t,
    musteri_eposta =:e
");

$veritabaninaekle->execute([
    ':e' => $musterimail,
    ':t' => $musteritel,
    ':a' => $musteriadi
]);

if($veritabaninaekle){
    echo 'veri eklendi';
}else{
    echo 'hata';
}

?>