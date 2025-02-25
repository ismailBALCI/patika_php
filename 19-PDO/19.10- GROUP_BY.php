<pre>
<?php

    require 'baglanti.php';
    $sql = "SELECT COUNT(kul_id) as toplam,kul_grup, grup_adi FROM kullanicilar 
    LEFT JOIN gruplar ON kul_grup = grup_id GROUP BY kul_grup";

    $sorgu = $vt->query($sql);
    $sonuc = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    print_r($sonuc);
?>
</pre>