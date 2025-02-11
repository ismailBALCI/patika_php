<pre>
<?php
// Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir fonksiyon yazın. 

$gezegenler = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function dizi_olustur($gelenDizi,$adet){
    $dizi = array_filter($gelenDizi); // Boş elemanları temizler.

    $keys = array_rand($dizi,$adet);    // Belirtilen adet kadar rasgele anahtar dizisi döndürür.

    for($s=0; $s<$adet; $s++){
        $yeniDizi[] = $dizi[$keys[$s]];
    }

    return $yeniDizi;
}

print_r(dizi_olustur($gezegenler,2));
print_r(dizi_olustur($gezegenler,3));
print_r(dizi_olustur($gezegenler,5));

?>

</pre>