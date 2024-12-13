<?php 

function hesapla($sayi1 =0 ,$sayi2 = 0,$islem = '+'){

                    
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

function preyazdir($parametre){
    echo '<pre>';
    print_r($parametre);
    echo '</pre>';
}


function dosyaislemleri($isim,$uzanti,$tip){
    if($tip == 'dosya'){
        touch($isim.'.'.$uzanti);
    }else if($tip == 'klasor'){
        mkdir($isim);
    }
}

function temizle($par){
    return strip_tags(trim($par));
}
?>