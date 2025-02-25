<pre>    
<?php
    require 'baglanti.php';

// Tek Kayıt Ekleme
/*     $sorgu_ekle = $vt->query("INSERT INTO kullanicilar SET 
        isim = 'Deneme DENEME',
        gsm = '+90 555 532 0000',
        eposta = 'deneme@srmd.net',
        sehir = 'İstanbul',
        grup = 'A,B,C',
        posta_kodu = '34500',
        yas = 30");
    $eklenen = $sorgu_ekle->rowCount();
    echo $eklenen ? "$eklenen Kayıt eklendi." : "Kayıt eklenemedi.";
    echo "<br>"; */
 
// Çoklu Kayıt Ekleme
/*     $sorgu_cok_ekle = $vt->query("INSERT INTO kullanicilar(isim, gsm, eposta, sehir, grup, posta_kodu, yas) VALUES
        ('Deneme1','+90 555 532 0001','deneme@srmd.net','Ankara','C,D','6000',33),
        ('Deneme2','+90 555 532 0002','deneme@srmd.net','Ankara','C,D','6000',34),
        ('Deneme3','+90 555 532 0003','deneme@srmd.net','Ankara','C,D','6000',35)
    ");

    $eklenen = $sorgu_cok_ekle->rowCount();
    echo $eklenen ? "$eklenen Kayıt eklendi." : "Kayıtlar ekelenemedi";
    echo "<br>"; */

// Prepare kullanımı
/*     $sorgu = $vt->prepare("INSERT INTO kullanicilar SET isim= ?, gsm= ?, eposta= ?, sehir= ?, grup= ?, posta_kodu= ?, yas= ?");
    $sorgu->execute(['Deneme5','+90 555 532 0005','deneme@srmd.net','Ankara','E,D','6000',35]);
    $sorgu->rowCount();

    if ($sorgu->rowCount()) {
        echo $vt->lastInsertId() . " id numarası ile " . $sorgu->rowCount() . " adet kayıt eklendi.<br>";
    } */

// Kayıt güncelleme
/*     $guncelle = $vt->query("UPDATE kullanicilar SET isim = 'İsmail BALCI' WHERE kul_id = 1");
    echo $guncelle ? "Kayıt güncellendi" : "Kayıt güncellenemedi."; 
    echo "<br>"; */

// Kayıt silme
/*     $sorgu = $vt->query("DELETE FROM kullanicilar WHERE kul_id= 12");
    $silinen = $sorgu->rowCount();
    echo $silinen ? "$silinen adet kayıt silindi." : "Kayıt silinemedi.";
    echo "<br>"; */

// Kayıt listeleme
    $sorgu = $vt->query('SELECT * FROM kullanicilar');
    $kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC yerine 2 yazılabilir

    print_r($kullanicilar);

?>
</pre>