<?php 

require 'fonksiyonlar.php';


// touch dosya oluşturma
// mkdir da klasör oluşturma

if($_POST){
    $dosyaadi = $_POST['isim'];
    $uzanti   = $_POST['uzanti'];
    dosyaislemleri($dosyaadi,$uzanti,'dosya');
    //$uzanti   = $_POST['uzanti'];
   // touch($dosyaadi.'.'.$uzanti);
   // move taşıma işlemi
   // copy() kopyasını oluşturur
}


?>
<form action="" method="POST">
<input type="text" name="isim" placeholder="dosya,klasör adi">
<input type="text" name="uzanti" placeholder="uzantı">
<button type="submit">OLUŞTUR</button>
</form>