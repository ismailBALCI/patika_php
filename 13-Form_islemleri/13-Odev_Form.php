<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form İşlemleri Ödevi</title>
</head>
<body>
<form action="13-Odev_Form.php" method="post">
    <label>Bir sayı giriniz:</label>
    <input type="text" name="sayi" placeholder="0">
    <input type="submit" value="Gönder">
</form>

<?php
    function uce_bolunme($sayi){
        $kalan = $sayi % 3;
        if( $kalan == 0 ){
            return "Girdiğiniz sayı 3'e tam bölünüyor.";
        } else {
            return "Girdiğiniz sayı 3'e tam bölünmüyor.<br>Üçe bölünebilen ilk değer: " . ($sayi+3-$kalan);
        }
    }

    if(empty($_POST['sayi'])){
        $sonuc= "Veri alanını boş bıraktınız.";
    } elseif(!is_numeric($_POST['sayi'])){
        $sonuc= "Sayı türünde veri girmelisiniz.";
    } else{
        $sonuc= uce_bolunme($_POST['sayi']);
    }

    echo "<br>" . $sonuc;

?>
</body>
</html>