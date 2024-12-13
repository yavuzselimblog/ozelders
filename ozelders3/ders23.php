<form action="" method="POST">
    <input type="text" name="veri" placeholder="veri giriniz">
    <button type="submit">GÖNDER</button>
</form>
<?php 
require 'fonksiyonlar.php';

if($_POST){
    //strip_tags => tüm html taglarını temizler
    // trim => tüm boşlukları temizler
    $veri = temizle($_POST['veri']);
    echo $veri;
}

?>