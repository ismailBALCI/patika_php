<?php
echo "<pre>";
print_r($_GET);

function filtre($p){
    return is_array($p) ? array_map('filtre',$p) : htmlspecialchars(trim($p)); // Boşlukları temizler ve html etiketlerini dönüştürür.
}

$dizi = array_map('filtre',$_GET);

print_r($dizi);