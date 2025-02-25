<pre>
<?php    
    require 'baglanti.php';

    // BETWEEN kullanımı:
    $sql = "SELECT * FROM kullanicilar WHERE yas BETWEEN 20 AND 40";

    $sorgu = $vt->query($sql);

    $kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    foreach ($kullanicilar as $an => $deg) {
        echo "<hr>$an: <hr>";
        foreach ($deg as $a => $d ){
            echo "$a: $d <br>";
        }
    }
    echo "<hr>{$sorgu->rowCount()} adet kayıt listelendi.<hr>";

?>
</pre>