<?php 
/* 

function ile başlar 
parametre alabilir
fonksiyon içinde echo yazsak bile ekrana yazdırmaz
fonksiyonu bastırmamız gerekir.

fonksiyon içerisinde echo kullanıldıysa 
tekrar echo kullanmaya gerek yok.

fonksiyon içerisinde return kullanıldıysa
echo yazdırmaya gerek vardır.
*/

/*
function hesaplama(){
    return 1 + 2;
}
*/

function hesapla($sayi1,$sayi2,$islem){

    
    if($islem == '+'){
        return $sayi1 + $sayi2;
    }else if($islem == '-'){
        return $sayi1 - $sayi2;
    }else if($islem == '*'){
        return $sayi1 * $sayi2;
    }else if($islem == '/'){
        return $sayi1 / $sayi2;
    }

}

echo hesapla(10,100,'-')

?>