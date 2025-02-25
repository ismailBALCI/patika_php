<pre>
<?php    
    require 'baglanti.php';

/*     // kullanicilar tablosunda kul_grup alanını rasgele sayılarla güncelleyelim
    $sql = "SELECT kul_id FROM kullanicilar";
    $sorgu = $vt->query($sql);
    $kullar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    $guncelle = $vt->prepare("UPDATE kullanicilar SET kul_grup= ? WHERE kul_id= ?");
    foreach ($kullar as $kul) {
        $guncelle->execute([array_rand([1,2,3,4,5,6,7,'']),$kul['kul_id']]);
    } */

    // JOIN kullanımı:
    $sql ="SELECT * FROM kullanicilar INNER JOIN gruplar ON kullanicilar.kul_grup = gruplar.grup_id";
    $sorgu = $vt->query($sql);
    $kayitlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
    print_r($kayitlar);
?>
</pre>