<?php

    // ini_set('display_startup_errors',false); // php.ini dosyasındaki ayarları değiştirir.
    error_reporting(0); // Hata almamamızı sağlar.
    // echo $isim;
    echo @$isim;    // @ işareti hatayı bastırır.
    // echo phpinfo();

    // Veri kontrol etme:
    echo $_GET['isim'] ?? "";   // Gelen değer varsa yaz yoksa boş yaz.
/* 
    try {
        throw new Exception("Bu bir hata mesajıdır!");  // Hata fırlatma

    } catch (Exception $e) {
        echo $e->getMessage()."<br>";
    } */

/*     // Kendi hata mesajımızı yazalım.
    class Hatam extends Exception{
        public function HataMesaj() {
            echo "Mesaj: ".$this->message."<br>";
            echo "Kod: ".$this->code."<br>";
            echo "Dosya: ".$this->file."<br>";
            echo "Satır: ".$this->line."<br>";
        }
    }

    try {
        // Hata fırlat
        throw new Hatam("Bu bir hata mesajıdır!");
    } catch (Hatam $e) {
        echo $e->HataMesaj();
    } */

    function hataYakalayici($no,$msj,$dosya,$satir) {
/* 
        echo $no."<br>";
        echo $msj."<br>";
        echo $dosya."<br>";
        echo $satir."<br>"; */

        include 'hata.php';
    }

    set_error_handler('hataYakalayici',E_ALL);

    echo $isim;
    echo $soyisim;

    // Ölümcül hataları yakalayalım.
    function olumculHatayakala() {
        $hata = error_get_last();   // Son fırlatılam hata
        hataYakalayici($hata['type'],$hata['message'],$hata['file'],$hata['line']);
    }

    register_shutdown_function('olumculHataYakala'); // Ölümcül hata alınca sistem sonlandırılmadan önce son bir fonksiyon çalıştırır.

    // selam(); // Tanımlanmamış fonksiyon çağırma ölümcül bir hatadır.
    $isim;  // Ölümcül hatadan sonra sayfa çalışmayı durdurur. O yüzdden bu hata görünmez.