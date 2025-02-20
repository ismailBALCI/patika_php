<?php

    // session'dan değer okuma
    session_start();    // önce oturumu başlatmak gerekiyor
    
    if (isset($_SESSION['kullanici']['isim'])) {
        echo "Merhaba " . $_SESSION['kullanici']['isim'] . " hoşgeldin.";
        echo "<pre>";
        print_r($_SESSION);
    } else {
        echo "Lütfen oturum açınız.";
    }

?>