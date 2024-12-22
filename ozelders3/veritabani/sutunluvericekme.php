<?php 
require 'baglan2.php';
/*
örneğin üyeler tablosunda ihtiyacın olan sütun sadece
üye id böyle bir durumda select * from yaparak tüm sütunları çekmeye
gerek yok. Performans 2 katına çıkması için sadece gerekli sütunları çekmek
yeterlidir.
*/

$uyeler = $db->prepare("SELECT id,kadi FROM uyeler");
$uyeler->execute();
while($uye = $uyeler->fetch(PDO::FETCH_ASSOC)){
    echo $uye['id'].'-'.$uye['kadi'].'<br>';
}

/*
foreach($uyeler as $uye){
    echo $uye['id'].'-'.$uye['kadi'].'<br>';
}
*/
?>