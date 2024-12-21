<?php 
require 'baglan.php';

$id = $_GET['id'];

$sorgu = $db->prepare("SELECT * FROM iletisim WHERE id=?");
$sorgu->execute([$id]);
if($sorgu->rowCount() > 0){

    /*
        tek veri çağırdığımız için döngü işlemine gerek kalmıyor
        gelen sorguyu parçalama işlemi için FETCH_OBJ ya da FETCH_ASSOC
        kullanılır
        assoc ile obj arasındaki fark ASSOC => [] bu şekilde kullanılır
        OBJ ise -> şeklinde kullanılır
    */
    $parcala = $sorgu->fetch(PDO::FETCH_OBJ);
    echo $parcala->isim.'<br>';
    echo $parcala->tel.'<br>';
    echo $parcala->eposta.'<br>';
    echo $parcala->mesaj.'<br>';
    echo $parcala->tarih.'<br>';
    echo $parcala->dekont.'<br>';
    ?>
    <a href="dosyalivericekme.php">GERİ DÖN</a>
    <?php
}else{
    echo 'Veri yok';
}

?>