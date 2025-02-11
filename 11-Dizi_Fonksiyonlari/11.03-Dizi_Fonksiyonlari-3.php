<pre>    
<?php

$is = ["Windows","MAC","Linux","Pardus"];

// in_array(); Bir dizide bir değerin varlığını araştırır.
if (in_array("Pardus", $is)) { echo "Değer mevcut"; }
else { echo "Değer mevcut değil"; }

echo "<br>";
// array_shift(); Dizini başlangıcından bir eleman çıkarır.
$sonuc = array_shift($is);
print_r($sonuc."<br>");

// array_pop(); Dizinin sonundaki elemanı diziden çıkartır.
$sonuc = array_pop($is);
print_r($sonuc."<br>");

print_r($is);

// array_slice(); Bir dizinin belli bir bölümünü döndürür
$dizi = array('a','b','c','d','e');

$sonuc = array_slice($dizi,3);
print_r($sonuc);
$sonuc = array_slice($dizi,-2,1);
print_r($sonuc);
$sonuc = array_slice($dizi,0,3);
print_r($sonuc);

// array_sum(); Bir dizideki değerlerin toplamını hesaplar.
$a = [2,4,6,8];
echo "Toplam(a): " . array_sum($a) . "\n";
$b = ["a" => 1.2, "b" => 2.3, "c" => 3.4];
echo "Taplam(b): " .  array_sum($b) . "\n";

// array_product(); Bir dizideki değerlerin çarpımını bulur.
$a = array(2,4,6,8);
echo "Çarpım(a): " . array_product($a) . "\n";
echo "Çarpım(array()) = " . array_product(array()) . "\n";

// array_unique(); Diziden yinelenen değerleri siler.
$dizi = ['a'=>'yeşil','kırmızı', 'b'=>'yeşil','mavi','kırmızı'];
$sonuc = array_unique($dizi);
print_r($sonuc);

// array_values(); Bir dizinin tüm değerlerini döndürür.
$dizi = ['a' => 'mavi', 'b' => 'yeşil'];
print_r(array_values($dizi));

// array_push(); Belli sayıda elemanı dizinin sonuna ekler.
$dizi = array('elma','armut');
array_push($dizi,"muz","portakal");
print_r($dizi);

// array_unshift(); Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
array_unshift($dizi,"kivi");
print_r($dizi);

// array_keys(); Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.
$dizi = array(0 => 100, "color" => "red");
print_r(array_keys($dizi));

$dizi = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($dizi, "blue"));

$dizi = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($dizi));

?>
</pre> 