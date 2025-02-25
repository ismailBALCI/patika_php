<pre>
<?php
    require 'baglanti.php';

    // LIKE kullanımı
    // $sorgu = $vt->query("SELECT * FROM kullanicilar WHERE eposta LIKE '%balci%'");
    $sorgu = $vt->query("SELECT * FROM kullanicilar WHERE eposta LIKE '%.net'");
    $kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    echo "<ul>";
    foreach ($kullanicilar as $key => $value) {
        echo "<li>{$value['isim']} - {$value['eposta']}</li>";
    }
    echo "</ul>";

?>
</pre>