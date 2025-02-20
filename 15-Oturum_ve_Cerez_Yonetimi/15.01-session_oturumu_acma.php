<?php

    session_start();
    // $_SESSION['isim'] = "ismail";

    // session'a dizi şeklinde veri ekleme
    $_SESSION['kullanici'] = [
        'isim' => 'İsmail',
        'soyisim' => 'BALCI',
        'yas' => 44,
        'eposta' => 'ismail@balci.net'
    ];

?>