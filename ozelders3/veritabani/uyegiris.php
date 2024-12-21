<?php require 'baglan2.php';?>
<html>
    <head>
        <title>TEST</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row">

                <div class="card mt-5">
                    <div class="card-header">GİRİŞ FORMU</div>
                    <div class="card-body">
                        
                        <form action="" method="POST">
                            <input class="form-control mb-2" type="text" name="kadi" placeholder="Kullanıcı adı" />
                            <input class="form-control mb-2" type="password" name="sifre" placeholder="Şifreniz" />
                            <button name="birinciform" class="btn btn-primary" type="submit">GİRİŞ YAP</button>
                            <a href="uyekayit.php" class="btn btn-dark">KAYIT OL</a>
                        </form>

                        <?php 
                            if($_POST){

                                $kadi = strip_tags(trim($_POST['kadi']));
                                $sifre = strip_tags(trim($_POST['sifre']));
                                $kriptolu = sha1(md5($sifre));

                                if(!$kadi || !$sifre){
                                    echo '<div  class="alert alert-danger">Boş alan bırakmayınız</div>';
                                }else{

                                    $uyegiris = $db->prepare("SELECT * FROM uyeler WHERE kadi=? AND sifre=?");
                                    $uyegiris->execute([$kadi,$kriptolu]);
                                    if($uyegiris->rowCount() > 0){

                                        $parcala = $uyegiris->fetch(PDO::FETCH_OBJ);
                                        if($parcala->durum == 1){

                                            echo 'Hoşgeldiniz | '.$parcala->kadi.'<br>';
                                            echo '<div  class="alert alert-success">Başarıyla giriş yaptınız</div>';

                                        }else{
                                            echo '<div  class="alert alert-danger">Banlandınız</div>';
                                        }

                                    }else{
                                        echo '<div  class="alert alert-danger">Kullanıcı adı ya da şifre yanlış</div>';
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