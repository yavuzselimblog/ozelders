function girisyap2(){

    let eposta = $('.eposta').val();
    let sifre  = $('.sifre').val();

    let uyeeposta = 'info@ogulcan.com';
    let uyesifre  = '123o';


    if(eposta == '' || sifre == ''){

        document.getElementById('hatamesaji').style.display = 'block';


    }else{

        if(eposta == uyeeposta && sifre == uyesifre){

            document.getElementById('basarilimesaji').style.display = 'block';
            document.getElementById('girisyapanuye').style.display = 'block';
    
    
            document.getElementById('hatamesaji').style.display = 'none';
            document.getElementById('giriskart').style.display = 'none';
    
    
        }else{
    
            document.getElementById('basarilimesaji').style.display = 'none';
            document.getElementById('girisyapanuye').style.display = 'none';
            document.getElementById('hatamesaji').style.display = 'block';
    
    
        }

    }
   

}