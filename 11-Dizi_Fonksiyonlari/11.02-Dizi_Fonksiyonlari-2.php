<pre>    
<?php
$sayilar = range(10,100,10);

// shuffle(); Bir diziyi karıştırır.
echo "<br><h3> shuffle(\$dizi); </h3>";

shuffle($sayilar);

foreach($sayilar as $sayi){
    echo "$sayi ";
}

// array_combine(); Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
echo "<br><h3> array_combine(\$anahtar,\$deger); </h3>";

$anahtar = array('kırmızı','sarı','yeşil');
$deger   = array('elma','armut','kivi');

$kombinDizi = array_combine($anahtar,$deger);

print_r($kombinDizi);

// array_count_values(); Bir dizideki tüm değerleri sayar.
echo "<br><h3> array_count_values(\$dizi); </h3>";

$meyveler = ['elma','armut','armut','kivi','karpuz','elma','elma','armut','armut','muz','muz'];
$meyveSayisi = array_count_values($meyveler);

print_r($meyveSayisi);

//array_flip(); Bir dizideki anahtarlarla değerleri yer değiştirir.
echo "<br><h3> array_flip(\$dizi); </h3>";

$dizi = ["bir"=>"elma","iki"=>"armut","üç"=>"muz"];
$degisen_dizi = array_flip($dizi);

print_r($degisen_dizi);

//array_key_exists(); Belirtilen anahtar veya indis dizide var mı diye bakar.
echo "<br><h3> array_key_exists('bir',\$dizi); </h3>";

if (array_key_exists('bir',$dizi)) {
    echo "'bir' anahtarı dizide var.";
} else {
    echo "'bir' anahtarı dizide yok.";
}

// array_map(); Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
echo "<br><h3> array_map();</h3>";

$sayilar = range(1,10,2);
$dizi = array_map(function($e){
    return $e * 2;
},$sayilar);

print_r($dizi);

// array_filter(); Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
echo "<br><h3> array_filter(\$dizi,'fonk'); </h3>";

$sayilar = range(1,10);

$cift = array_filter($sayilar,function($e){
    return $e % 2 == 0 ? $e : false;
});

print_r($cift);

// array_merge(); Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
echo "<br><h3> array_merge(\$dizi1,\$dizi2); </h3>";

$dizi1 = range(1,10,2);
$dizi2 = range(2,10,2);

$birlesikDizi = array_merge($dizi1,$dizi2);

print_r($birlesikDizi);

// array_rand(); Bir diziden belli sayıda rasgele anahtar döndürür.
echo "<br><h3> array_rand(); </h3>";

$dizi = ['elma','armut','kivi','muz'];
$anahtarlar = array_rand($dizi,2);
echo $dizi[$anahtarlar[0]]."<br>";
echo $dizi[$anahtarlar[1]];

// array_reverse(); Diziyi tersine sıralayıp döndürür.
echo "<br><h3> array_reverse(); </h3>";

$dizi = ['Elma','Armut','Muz','Kivi'];
$diziTers = array_reverse($dizi);

print_r($diziTers);

// array_search(); Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
echo "<br><h3> array_search(); </h3>";

$bulunan = array_search('Muz',$dizi);

print_r($bulunan);

?>
</pre> 