<pre>
<?php
    require 'baglanti.php';

    // MIN, MAX kullanımı:
    // $sql ="SELECT MIN(yas) AS 'En Geç', MAX(yas) AS 'En Yaşlı' FROM kullanicilar";
    
    // COUNT kullanımı:
    // $sql ="SELECT COUNT(kul_id) AS 'Kullanıcı Sayısı' FROM kullanicilar";
    
    // GROUP BY ve HAVING kullanımı:
    $sql ="SELECT sehir,COUNT(kul_id) AS Toplam FROM kullanicilar GROUP BY sehir HAVING Toplam > 0";
    
    $sorgu = $vt->query($sql);
    $kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    foreach ($kullanicilar as $an => $deg) {
        foreach ($deg as $a => $d) {
            echo "$a: $d <br>";
        }
    }

?>
</pre>