<pre>
<?php
    // Veri Değişim Formatları:

    // JSON
    $iliskili_dizi = [
        "isim" => "ismail",
        "soyisim" => "BALCI",
        "yas" => 44
    ];

    $dizi = ["ismail","Fatma","Mehmet"];

    $json_nesne = '{
        "isim" : "Fatma",
        "soyisim" : "BALCI",
        "yas" : 60
    }';

    echo json_encode($iliskili_dizi) . "<br>"; // Bir ilişkili bir diziyi JSON nesnesine döndürür.
    echo json_encode($dizi) . "<br>"; // Bir normal bir diziyi JSON dizisine döndürür.

    $phpNesne = json_decode($json_nesne);     // JSON verilerini bir PHP nesnesine dönüştürür:
    $phpDizi = json_decode($json_nesne,true); //JSON verilerini bir PHP ilişkisel dizisine dönüştürür:

    echo $phpNesne->isim . "<br>";
    echo $phpDizi['isim'] . "<br>";

    // JSON dosyasından veri okuma
    $nesne = file_get_contents('kisiler.json');
    $dizi = json_decode($nesne,true);
    print_r($dizi);

?>
</pre>