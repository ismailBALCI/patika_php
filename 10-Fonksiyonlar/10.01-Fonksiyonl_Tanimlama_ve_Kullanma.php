<?php

function selamla1(){
    echo "Selamunaleyküm Millet";
}

selamla1();

echo "<br>";

// Değer döndüren fonksiyon
function selamla2(){
    return "Selam";
}

echo "Geri Dönen ".selamla2();
echo "<br>";

// Parametre alan fonksiyon
function topla($say1, $say2=30){    // varsayılan değer 30
    return $say1 + $say2;
}

echo topla(10, 20);
echo "<br>";
echo topla(10);

?>
