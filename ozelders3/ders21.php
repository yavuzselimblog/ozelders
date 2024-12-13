<?php 

/* 

md5() => herhangi bir değeri 32 karaktere çevirir
sha1() => herhangi bir değeri 40 karaktere çevirir
crc32  => herhangi bir değeri kriptolar 
iç içe kullanılabilir
*/

//mb_substr($metin,0,32);

$sayi1   = '1';
$sifrele  = md5($sayi1); //32 
$sifrele1 = sha1($sayi1);
$sifrele2 = crc32($sayi1);

$dahaguclusifre = sha1(md5(crc32($sayi1)));
echo $dahaguclusifre;

?>