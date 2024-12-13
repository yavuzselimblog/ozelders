<?php 

//fopen => var olan dosyayı açar dosya yoksa oluşturu
//dosyanın içine merhaba dünya yazdırır 
//fclose dosyayı kapatır

$dosya = fopen('merhaba.php', 'w+');
fwrite($dosya, '<?php echo 1;?>');
fclose($dosya);

?>