<?php 
                if($_POST){

                    $sayi1 = $_POST['sayi1'];
                    $sayi2 = $_POST['sayi2'];
                    $islem = $_POST['islem'];
    
                    if($islem == '+'){
                        echo $sayi1 + $sayi2;
                    }else if($islem == '-'){
                        echo $sayi1 - $sayi2;
                    }else if($islem == '*'){
                        echo $sayi1 * $sayi2;
                    }else if($islem == '/'){
                        echo $sayi1 / $sayi2;
                    }


                }
               

            ?>