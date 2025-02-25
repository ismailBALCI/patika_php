<pre>
<?php
    require 'baglanti.php';

    // IN kullanımı:
    $sql = "SELECT * FROM kullanicilar WHERE yas IN(25,30,35,40)";
    // $sql = "SELECT * FROM kullanicilar WHERE yas NOT IN(25,30,35,40)";
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