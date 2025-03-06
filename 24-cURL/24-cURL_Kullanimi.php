<pre>
<?php

    // cURL (Client URL)
    if (extension_loaded('curl')) {
        echo "CURL Aktif <br>";
    }else {
        echo "CURL Aktif Değil <br>";
    }

    // CURL isteğinin başlatılması
    $curl = curl_init();
/* 
    // CURL isteğinin gideceği URL    
    curl_setopt($curl, CURLOPT_URL, 'https://www.patika.dev/');
    // Aktarımı doğrudan çıktılamak yerine bir dizge olarak curl_exec() işlevinden döndürmek için true olmalıdır.
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); */
/*     
    // İki option birlikte bir dizi olarak verilebilir.
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://www.patika.dev/",
        CURLOPT_RETURNTRANSFER => true
    ]); */

    // Post Göndermek
    curl_setopt_array($curl, [
        CURLOPT_URL => "http://localhost/patika/24-cURL/24-cURL_deneme.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => ["kullanici" => true]

    ]);

    // CURL işlemini çalıştır
    $sonuc = curl_exec($curl);

    // CURL isteğini sonlandır
    curl_close($curl);
/* 
    $desen = '@<h3 class="heading-small---inter">(.*?)</h3>@';
    preg_match_all($desen, $sonuc, $basliklar);

    // print_r($basliklar);

    echo "<ol>";
    foreach ($basliklar[1] as $baslik) {
        echo "<li> $baslik </li>";
    }
    echo "</ol>"; */

    $gelen = json_decode($sonuc);

    echo "Ad: ".$gelen->isim."<br>";
    echo "Soyad: ".$gelen->soyisim."<br>";
    echo "Yaş: ".$gelen->yas."<br>";

?>
</pre>