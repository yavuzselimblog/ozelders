<?php 

//bağlanmak için PDO sınıfını kullanıyoruz
//host = localhost => projen başka sunucuda veri tabanı
//başka sunucuda ise o sunucunun ipsini yazıyorsun

//dbname = veri tabanı ismi
//dbuser = localdeysen root sunucudaysan sunucunun verdiği kullanıcı ismi
//dbpass = localdeysen parola boş geçilir sunucuduysan veritabanı parolası yazılır

//veritabanı bağlantısını sağlıklı gerçekleştirmek için 
//try catch yapısı ya da or die yapısı kullanılır.

$dbname = 'ozelders2';
$dbpass = '';
$dbhost = 'localhost';
$dbuser = 'root';

try{
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8"
    ,$dbuser,$dbpass);
}catch(PDOException $hata){
    print_r($hata->getMessage());
}


?>