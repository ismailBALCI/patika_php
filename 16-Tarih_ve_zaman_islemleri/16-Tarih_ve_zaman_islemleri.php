<?php

    function tarih_tr($dateTime) {
        $en_month = ['January','February','March','April','May','June','July','August','September','October','November','December'];
        $tr_aylar = ['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'];
        $tarih = str_replace($en_month, $tr_aylar, $dateTime);
        
        $en_days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
        $tr_gunler = ['Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar'];
        $tarih = str_replace($en_days, $tr_gunler, $tarih);

        return $tarih;
    }

    // date(); Yerel tarihi/saati biçimlendirir.
    date_default_timezone_set('Europe/Istanbul');
    
    echo date('Y-m-d H:i:s')."<br>";
    echo date('l F z')."<br>";
    echo tarih_tr(date('l F z'))."<hr>";

    // time(); Unix Zaman Başlangıcından (1 Ocak 1970 00:00:00 GMT) itibaren geçen zamanı saniye cinsinden döndürür.
    echo time()."<br>";
    
    $unix = strtotime('+1 hours +5 days');
    echo date('Y/m/d H.i.s', $unix)."<br>";

    $timeStr = strtotime('2025-02-21 12:30:00');
    $zaman = strtotime('-5 month', $timeStr);

    echo date('d.m.Y H:i:s', $zaman)."<hr>";

    // DateTime Sınıfı
    $dateTime = new DateTime();
    // $dateTime->setTimezone(new DateTimeZone('Europe/Istanbul'));
    echo  $dateTime->format('Y-m-d H:i:s');

    echo "<br>";

    $dateTime = new DateTime('+ 1 month');
    echo  $dateTime->format('Y-m-d H:i:s');
    echo "<br>";

    $dateTime = new DateTime('+ 1 month');
    echo  $dateTime->format('Y-m-d H:i:s')."<br>";
    echo  $dateTime->getTimestamp();

    echo "<br>";

    $dateTime = new DateTime();
    $dateTime->setTimestamp(time());
    echo $dateTime->format('Y-m-d H:i:s')."<br>";

    $dateTime = new DateTime();


    echo  $dateTime->format('Y-F-d H:i:s')."<br>";
    echo  $dateTime->modify('+1 day')->format('Y-m-d')."<br>";
    echo  $dateTime->modify('+3 day')->format('Y-m-d')."<br>";
    echo  $dateTime->modify('+2 day')->format('Y-m-d')."<br>";

    echo "<hr>";


    $tarih1= new DateTime('1993-01-10');
    $tarih2= new DateTime('1993-08-26');
    $diff = $tarih1->diff($tarih2);
    echo "<pre>";
    print_r($diff);

?> 