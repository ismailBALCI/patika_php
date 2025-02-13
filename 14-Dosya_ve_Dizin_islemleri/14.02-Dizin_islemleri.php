<?php
// Dizin Oluşturma

if (file_exists('dosyalar/resimler')){
    echo "Klasör zaten var.";
} else {
    $sonuc = mkdir('dosyalar/resimler','0777',true); // 0777 standart izindir, true iç içe dizin oluşturmayı sağlar
    if ($sonuc){
        echo "Klasör başarıyla oluşturuldu.";
    } else {
        echo "Bir hata oluştu.";
    }
}

// Dizini Silme
// PHP klasör silme işlemini mkdir ile yapabilmek için klasörün tamamen boş olması gerekiyor.

if (file_exists('dosyalar/resimler')){ // Dizin mevcut ise
    array_map('unlink', glob('dosyalar/resimler/*')); // Bütün dosyaları sil
    echo rmdir('dosyalar/resimler') ? "Klasör başarıyla silindi." : "Klasör mevcut değil." ;
}