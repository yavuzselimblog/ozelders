<?php 

//round => 0.50 ve yukarısına yuvarlar
//ceil  => yukarı yuvarlar 20.2 bile olsa 21 yapar
//floor => aşağı yuvarlar 20.9 bile olsa 20 yapar
// round(sayi1,3) virgülden sonra kaç hane göstermek istiyorsan onu yazıyorsun

$sayi1              = 99.90;
$yukariyuvarla      = ceil($sayi1);
$asagiyuvarla       = floor($sayi1);
$ortalamayuvarlama  = round($sayi1,2);

echo $ortalamayuvarlama;

?>