<?php 

//karakter sınırlaması
//mb_substr(metin,yadasayi, ilk hanesi, son hanesi)
/*
$soyisim  = 'YILDIZ';
$sonikihanesi = mb_substr($soyisim,4, 6);
if($sonikihanesi == 'IZ'){
    echo 'işleme devam et';
}else{
    echo 'bitir';
}*/

$sayi = 54539929;
$sub  = mb_substr($sayi,2,6);
echo $sub;
?>