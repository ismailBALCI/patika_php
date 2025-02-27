<?php
/* 
    // PHP ile XML Dosyasının Okunması
    $kisiler = simplexml_load_file('kisiler.xml');
    echo "<pre>";
    print_r($kisiler); */

    // Veritabanından verileri getirelim.
    require '../baglanti.php';
    $sorgu = $vt->query("SELECT * FROM kullanicilar");
    $kisiler = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    // XML yapısını kendimiz oluşturalım
    header('Content-type: text/xml charset="utf8"');
    $xml = new SimpleXMLElement('<kisiler/>');

    foreach ($kisiler as $key => $kisi):
        $kisi = $xml->addChild('kisi');
        $kisi->addAttribute('id',$kisi['kul_id']);
        $kisi->addChild('isim',$kisi['isim']);
        $kisi->addChild('soyisim',$kisi['sehir']);
        $kisi->addChild('yas',$kisi['yas']);
    endforeach;

    echo $xml->asXML();

?>