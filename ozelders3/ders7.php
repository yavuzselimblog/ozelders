<?php 

//$sayilar = array();
$sayilar   = [0,2,23,123,130,4554,100,99];
$seninsayi = 130;

if(in_array($seninsayi,$sayilar)){
    echo 'sayı var';
}else{
    echo 'dizide yok';
}

?>