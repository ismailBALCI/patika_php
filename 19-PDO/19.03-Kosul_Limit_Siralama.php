<pre>
<?php
    require 'baglanti.php';

    // LIMIT kullanımı
    // $sorgu = $vt->query('SELECT * FROM kullanicilar LIMIT 5');
    $sorgu = $vt->query('SELECT * FROM kullanicilar WHERE kul_id >= 1 AND kul_id < 5 ORDER BY yas DESC;');
    $kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    print_r($kullanicilar);

?>
</pre>