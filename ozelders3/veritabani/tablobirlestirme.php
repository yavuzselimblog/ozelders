<?php 
require 'baglan2.php';

/*
tablo birleştirme INNER JOIN ile yapılır
sadece 2 tablo değil 2 den fazla tablolar birbiri ile
bağlanabilir.

önemli olan kısım hangi sütunların eşleştirildiğidir.
*/

$birlestir = $db->prepare("SELECT * FROM uyeler
INNER JOIN siparisler ON siparisler.siparisuyekod = uyeler.kod
");
$birlestir->execute();
foreach($birlestir as $bir){
  echo $bir['kadi'].'-'.$bir['siparistutar'].'₺ - '.$bir['siparistarih'].'<br>';
}

?>