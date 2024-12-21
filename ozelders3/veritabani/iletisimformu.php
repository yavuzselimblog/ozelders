<?php require 'baglan.php';?>
<html>
    <head>
        <title>TEST</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row">

                <div class="card mt-5">
                    <div class="card-header">İLETİŞİM FORMU</div>
                    <div class="card-body">
                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input class="form-control mb-2" type="text" name="isim" placeholder="İsim giriniz" />
                            <input class="form-control mb-2" type="text" name="tel" placeholder="Telefon giriniz" />
                            <input class="form-control mb-2" type="text" name="eposta" placeholder="E-posta giriniz" />
                            <input class="form-control mb-2" type="file" name="dosya" placeholder="Dosya" />
                            <textarea rows="10" class="form-control mb-2" type="text" name="mesaj" placeholder="Mesaj giriniz"></textarea>
                            <button name="birinciform" class="btn btn-primary mb-2" type="submit">MESAJ GÖNDER</button>
                        </form>


                        <?php 
                            if(isset($_POST['birinciform'])){

                                $isim = strip_tags(trim($_POST['isim']));
                                $tel = strip_tags(trim($_POST['tel']));
                                $eposta = strip_tags(trim($_POST['eposta']));
                                $mesaj = strip_tags(trim($_POST['mesaj']));
                                $dosya = $_FILES['dosya'];

                                /* 
                                 ünlem işareti boşmu ya da 0 mı diye kontrol eder
                                 empty fonksiyon empty($isim) sadece boşmu diye bakar
                                 $isim == '' buda sdece boşmu diye kontrol eder
                                */

                                if(!$isim || !$tel || !$eposta || !$mesaj || !$dosya){
                                    echo '<div class="alert alert-danger">Boş alan bırakmayınız</div>';
                                }else{

                                    if(!is_numeric($tel)){
                                        echo '<div class="alert alert-danger">Telefon numarası sayısal olmalıdır</div>';
                                    }else{

                                        if(!filter_var($eposta,FILTER_VALIDATE_EMAIL)){
                                            echo '<div class="alert alert-danger">E-posta formatı hatalı</div>';
                                        }else{

                                            if(strlen($mesaj) < 100){
                                                echo '<div class="alert alert-danger">Mesajınız minumum 100 karakter olmalıdır...</div>';
                                            }else{

                                                $dosyaadi    = $dosya['name'];
                                                $dosyatipi   = $dosya['type'];
                                                $dosyaboyutu = $dosya['size'];
                                                $geciciyol   = $dosya['tmp_name'];
                                                $izinverilenuzantilar = array('jpg','pdf','jpeg');
                                                $dosyauzantisi = strtolower(pathinfo($dosyaadi, PATHINFO_EXTENSION));
                                                if(in_array($dosyauzantisi,$izinverilenuzantilar)){

                                                    if($dosyaboyutu > 262144){
                                                        echo '<div class="alert alert-danger">Dosya boyutu 262KB olmalıdır...</div>';
                                                    }else{

                                                        $yuklenecekklasor   = 'dosyalar';
                                                        $dosyayayeniisimver = uniqid().'.'.$dosyauzantisi;
                                                        $isimbirlestir      = $yuklenecekklasor.'/'.$dosyayayeniisimver;

                                                        $veritabaninaekle   = $db->prepare("INSERT INTO iletisim SET
                                                            isim =:i,
                                                            tel  =:t,
                                                            eposta =:e,
                                                            mesaj  =:m,
                                                            dekont =:d
                                                        ");
                                                        $veritabaninaekle->execute([
                                                            ':i' => $isim,
                                                            ':t' => $tel,
                                                            ':e' => $eposta,
                                                            ':m' => $mesaj,
                                                            ':d' => $dosyayayeniisimver
                                                        ]);
                                                        if($veritabaninaekle){

                                                            move_uploaded_file($geciciyol,$isimbirlestir);
                                                            echo '<div class="alert alert-success">Kayıt başarıyla eklendi...</div>';

                                                            
                                                        }else{
                                                            echo '<div class="alert alert-danger">Hata oluştu...</div>';

                                                        }

                                                    }


                                                }else{

                                                    echo '<div class="alert alert-danger">Dosya uzantısı sadece jpg ve pdf olmalıdır...</div>';


                                                }


                                            }

                                        }

                                    }

                                }

                            }
                        ?>

                    </div>
                </div>

            </div>
           

        </div>

    </body>
</html>