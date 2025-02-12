<?php

print_r($_POST);

function filtre($p){
    return is_array($p) ? array_map('filtre',$p) : htmlspecialchars(trim($p)); // Boşlukları temizler ve html etiketlerini dönüştürür.
}

$dizi = array_map('filtre',$_POST);

echo "<pre>";
print_r($dizi);

echo $dizi['isim'];
echo htmlspecialchars_decode($dizi['isim']);

?>