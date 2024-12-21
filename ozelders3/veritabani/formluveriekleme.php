<?php require 'baglan.php';?>
<html>
    <head>
        <title>TEST</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row">

                <div class="card">
                    <div class="card-header">FORM</div>
                    <div class="card-body">
                        <?php 
                            if($_POST){

                                $isim =   strip_tags(trim($_POST['isim']));
                                $tel  =   strip_tags(trim($_POST['tel']));
                                $eposta = strip_tags(trim($_POST['eposta']));

                                if(!$isim || !$tel || !$eposta){
                                    echo 'Boş alan bırakmayınız';
                                }else{

                                    if(!is_numeric($tel)){
                                        echo 'Telefon sadece sayısal olmalı';
                                    }else{
                                        
                                        if(!filter_var($eposta,FILTER_VALIDATE_EMAIL)){
                                            echo 'Eposta formatı hatalı';
                                        }else{

                                            $ekle = $db->prepare("INSERT INTO musteriler SET
                                                musteri_adi =:a,
                                                musteri_tel =:t,
                                                musteri_eposta=:e
                                            ");
                                            $ekle->execute([
                                                ':t' => $tel,
                                                ':e' => $eposta,
                                                ':a' => $isim
                                            ]);
                                            if($ekle){
                                                echo 'Kayıt başarılı';
                                            }else{
                                                echo 'hata oluştu';
                                            }

                                        }

                                    }

                                }

                            }
                        ?>
                        <form action="" method="POST">
                            <input class="form-control mb-2" type="text" name="isim" placeholder="İsim giriniz" />
                            <input class="form-control mb-2" type="text" name="tel" placeholder="Telefon giriniz" />
                            <input class="form-control mb-2" type="text" name="eposta" placeholder="E-posta giriniz" />
                            <button class="btn btn-primary mb-2" type="submit">VERİ EKLE</button>
                        </form>
                    </div>
                </div>

            </div>
           

        </div>

    </body>
</html>