function girisyap(){

    let uyeeposta = 'info@ogulcan.com';
    let uyesifre  = '12345';

    let formdangeleneposta = $('.eposta').val();
    let formdangelensifre  = $('.sifre').val();

    if(formdangeleneposta == uyeeposta && formdangelensifre == uyesifre){

        alert('Giriş başarılı');
        document.getElementById('smskart').style.display = 'block';
        document.getElementById('giriskart').style.display = 'none';


    }else{

        alert('Hatalı giriş');

    }
    
}

function smsgiris(){

    let veritabanisms = 123892;
    let formdangelensms = $(".smskutusu").val();

    if(formdangelensms == veritabanisms){
        alert('Giriş başarılı hoşgeldiniz');
        document.getElementById('smskart').style.display = 'none';
        document.getElementById('giriskart').style.display = 'none';
        document.getElementById('hosgeldinizyazisi').style.display = 'block';


    }else{
        alert('Telefonunuza gelen kodu hatalı girdiniz.')
    }

}