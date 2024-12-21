<?php 
require 'baglan.php';

/*
veri çekme kodu SELECT * FROM tabloismi
birden fazla veri olduğu için döngüye alacağız
döngüyü ister tablo içerisinde istersekte direkt kullanabiliriz

tekli veri çekme yaparken WHERE şartını ekliyoruz
ve hangi sütuna göre çekme yapmak istiyorsak o sütunu kullanıyoruz
*/

$musteriler = $db->prepare("SELECT * FROM musteriler");
$musteriler->execute();
?>

<?php if($musteriler->rowCount() > 0){ ?>
<table border="1">
<thead>
    <th>MÜŞTERİ ADI</th>
    <th>MÜŞTERİ TELEFON</th>
    <th>MÜŞTERİ E-POSTA</th>
</thead>
<tbody>
    <?php foreach($musteriler as $musteri){ ?>
        <tr>
            <td><?php echo $musteri['musteri_adi'];?></td>
            <td><?php echo $musteri['musteri_tel'];?></td>
            <td><?php echo $musteri['musteri_eposta'];?></td>
        </tr>
    <?php } ?>
</tbody>
</table>
<?php }else{

    echo 'Kayıt yok';
 } ?>