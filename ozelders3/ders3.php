<html>
    <head>
        <title>PHP DERS-3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">

            
            <form action="hesapla.php" method="POST">
            <input placeholder="Sayı1 giriniz" type="number" name="sayi1" class="mb-2 form-control">
            <input placeholder="Sayı2 giriniz" type="number" name="sayi2" class="mb-2 form-control">
            <select name="islem" class="mb-2 form-control">
                <option value="+">TOPLA</option>
                <option value="-">ÇIKAR</option>
                <option value="*">ÇARP</option>
                <option value="/">BÖL</option>
            </select>
            <button type="submit" class="btn btn-primary">HESAPLA</button>
            </form>

           

            </div>
        </div>
    </body>
</html>