<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="dosya" placeholder="Dosya Yükle">
    <button type="submit" name="gonder">GÖNDER</button>
</form>
<?php 

if(isset($_POST['gonder'])){

    $dosyabilgisinialdigiyer  = $_FILES['dosya'];
    $dosyaadi    = $dosyabilgisinialdigiyer['name'];
    $dosyatipi   = $dosyabilgisinialdigiyer['type'];
    $dosyaboyutu = $dosyabilgisinialdigiyer['size'];
    $geciciyol   = $dosyabilgisinialdigiyer['tmp_name'];

    $izinverilenuzantilar = array('jpg','pdf');
    $dosyauzantisi = strtolower(pathinfo($dosyaadi, PATHINFO_EXTENSION));
    if(in_array($dosyauzantisi,$izinverilenuzantilar)){

        //1mb = 1048576 byte
        if($dosyaboyutu > 262144){
            echo 'Dosya 262KB den büyük olamaz';
        }else{

            echo $dosyaadi;
            echo '<br>';
            echo $dosyatipi;
            echo '<br>';
            echo $dosyaboyutu;
            echo '<br>';
            echo $geciciyol;
            echo '<hr>';
        
            $yuklenecekklasor   = 'dosyalar';
            $dosyayayeniisimver = uniqid().'.'.$dosyauzantisi;
            $isimbirlestir      = $yuklenecekklasor.'/'.$dosyayayeniisimver;
            move_uploaded_file($geciciyol,$isimbirlestir);

        }

    }else{
        echo 'Geçersiz uzantı';
    }

    
 

}

?>