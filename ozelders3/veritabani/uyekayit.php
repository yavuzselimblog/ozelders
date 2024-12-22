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
                    <div class="card-header">KAYIT FORMU</div>
                    <div class="card-body">
                        
                        <form action="" method="POST">
                            <input class="form-control mb-2" type="text" name="kadi" placeholder="Kullanıcı adı" />
                            <input class="form-control mb-2" type="password" name="sifre" placeholder="Şifreniz" />
                            <button name="birinciform" class="btn btn-primary" type="submit">ÜYE OL</button>
                            <a href="uyegiris.php" class="btn btn-dark">GİRİŞ YAP</a>
                        </form>

                        <?php 
                            if($_POST){

                                $kadi = strip_tags(trim($_POST['kadi']));
                                $sifre = strip_tags(trim($_POST['sifre']));
                                $kriptolu = sha1(md5($sifre));

                                if(!$kadi || !$sifre){
                                    echo '<div class="alert alert-danger">Boş alan bırakmayınız...</div>';
                                }else{

                                    if(strlen($kadi) < 3 || strlen($sifre) < 3){
                                        echo '<div class="alert alert-danger">Kullanıcı adı veya şifre 3 haneden küçük olamaz...</div>';
                                    }else{

                                        $zatenvarsa = $db->prepare("SELECT * FROM uyeler WHERE kadi=?");
                                        $zatenvarsa->execute([$kadi]);
                                        if($zatenvarsa->rowCount() > 0){
                                            echo '<div class="alert alert-danger">Kullanıcı adı zaten kayıtlı...</div>';
                                        }else{

                                            $ekle = $db->prepare("INSERT INTO uyeler SET kod=?,kadi=?,sifre=?,aciksifre=?");
                                            $ekle->execute([uniqid(),$kadi,$kriptolu,$sifre]);
                                            if($ekle){
                                                echo '<div class="alert alert-success">Kayıt başarılı...</div>';
                                            }else{
                                                echo '<div class="alert alert-danger">Hata oluştu...</div>';
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