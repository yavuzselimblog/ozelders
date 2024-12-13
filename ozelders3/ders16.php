<?php 
require 'fonksiyonlar.php';
?>
<html>
    <head>
        <title>HESAPLAMA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <div class="row">

           

            <form action="" method="POST">
                <input type="text" class="form-control mb-2" name="sayi1" placeholder="Sayı1" />
                <input type="text" class="form-control mb-2" name="sayi2" placeholder="Sayı2" />
                <input type="text" class="form-control mb-2" name="islem" placeholder="İşlem" />
                <button class="btn btn-primary" type="submit">HESAPLA</button>
            </form>

            <?php 

            
            if($_POST){
               
                //ilk yapacağımız şey verileri almak
                $sayi1 = $_POST['sayi1'];
                $sayi2 = $_POST['sayi2'];
                $islem = $_POST['islem'];
                echo hesapla($sayi1,$sayi2,$islem);

                preyazdir(["1" => "armut"]);
                
            }

            ?>

        </div>
    </div>

    </body>
</html>