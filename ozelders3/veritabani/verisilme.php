<?php 
require 'baglan.php';

/*
veri çekme kodu SELECT * FROM tabloismi
birden fazla veri olduğu için döngüye alacağız
döngüyü ister tablo içerisinde istersekte direkt kullanabiliriz
*/

$musteriler = $db->prepare("SELECT * FROM musteriler");
$musteriler->execute();
?>
<table border="1">
    <thead>
        <th>ID</th>
        <th>ADI</th>
        <th>TEL</th>
        <th>EPOSTA</th>
        <th>İŞLEM</th>
    </thead>
    <tbody>
     <?php foreach($musteriler as $musteri){ ?>
       <tr>
        <td><?php echo $musteri['musteri_id'];?></td>
        <td><?php echo $musteri['musteri_adi'];?></td>
        <td><?php echo $musteri['musteri_tel'];?></td>
        <td><?php echo $musteri['musteri_eposta'];?></td>
        <td><a href="verisil.php?musterinumarasi=<?php echo $musteri['musteri_id'];?>">SİL</a></td>
       </tr>
      

       <?php }  ?>
    </tbody>
</table>
