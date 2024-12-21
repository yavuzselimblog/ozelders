<?php 
require 'baglan.php';

/*
veri çekme kodu SELECT * FROM tabloismi
birden fazla veri olduğu için döngüye alacağız
döngüyü ister tablo içerisinde istersekte direkt kullanabiliriz

tekli veri çekme yaparken WHERE şartını ekliyoruz
ve hangi sütuna göre çekme yapmak istiyorsak o sütunu kullanıyoruz

SIRALAMA İŞLEMİ ORDER BY SÜTUN İSMİ ASC YA DA DESC OLARAK adlandırılır
ASC en baştan en sona
DESC en sondan en başa doğru sıralar
alfabetik ve sayısal olarak otomatik şekilde sıralar

sorguya limit değeri eklenirse o kadar veri gelir
*/

$veriler = $db->prepare("SELECT * FROM iletisim ORDER BY id DESC");
$veriler->execute();
?>

<h2>GELEN MESAJLAR (<?php echo $veriler->rowCount();?>)</h2>
<?php if($veriler->rowCount() > 0){ ?>

<table border="1">
<thead>
    <th>ID</th>
    <th>ADI</th>
    <th>TELEFON</th>
    <th>E-POSTA</th>
    <th>MESAJ</th>
    <th>DEKONT</th>
    <th>TARİH</th>
    <th>İŞLEM</th>
</thead>
<tbody>
    <?php foreach($veriler as $veri){ ?>
        <tr>
            <td><?php echo $veri['id'];?></td>
            <td><?php echo $veri['isim'];?></td>
            <td><?php echo $veri['tel'];?></td>
            <td><?php echo $veri['eposta'];?></td>
            <td><?php echo mb_substr($veri['mesaj'],0,50).'......';?></td>
            <td><a target="_blank" href="dosyalar/<?php echo $veri['dekont'];?>"><?php echo $veri['dekont'];?></a></td>
            <td><?php echo date('d.m.Y H:i',strtotime($veri['tarih']));?></td>
            <td><a href="iletisimdetay.php?id=<?php echo $veri['id'];?>">DETAY</a></td>
        </tr>
    <?php } ?>
</tbody>
</table>
<?php }else{

    echo 'Kayıt yok';
 } ?>