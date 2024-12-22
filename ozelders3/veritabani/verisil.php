<?php 
require 'baglan.php';
$musterino = $_GET['musterinumarasi'];

/* 
veri silme işlemi DELETE FROM tabloadi WHERE id=21
diğer sorgularda select * gibi yıldız varken delete fromda yok
*/

$sil = $db->prepare("DELETE FROM musteriler WHERE musteri_id=?");
$sil->execute([$musterino]);
if($sil){
    echo 'silindi';
}else{
    echo 'hata';
}

?>