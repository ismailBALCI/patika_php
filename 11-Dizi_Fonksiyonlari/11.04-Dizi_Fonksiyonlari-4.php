<pre>    
<?php
/* 
current(); Bir dizideki geçerli öğeyi döndür
end(); Bir dizinin dahili işaretçisini son elemanına ayarlar
next(); Bir dizinin dahili işaretçisini ilerletir
prev(); Dahili dizi işaretçisini geri alır.
reset(); Bir dizinin dahili göstericisini ilk elemana konumlar.
*/
$dizi = ['tabanvay','bisiklet','otomobil','uçak'];

echo current($dizi). "\n";
echo next($dizi). "\n";
echo prev($dizi). "\n";
echo end($dizi). "\n";
echo reset($dizi). "\n\n";

// extract(); Bir dizideki değişkenleri simge tablosuna dahil eder
$dizi = ['bir'=>'tabanvay','iki'=>'bisiklet','üç'=>'otomobil'];
extract($dizi);
echo $üç;
echo "<br><br>";

// asort(); Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
$meyveler = [ 1=>'elma', 5=>'armut', 3=>'muz', 7=>'kivi'];
asort($meyveler);
foreach($meyveler as $an => $deg){
    echo "$an = $deg \n";
}
echo "<br>";

arsort($meyveler);
foreach($meyveler as $an => $deg){
    echo "$an = $deg \n";
}
echo "<br>";

ksort($meyveler);
foreach($meyveler as $an => $deg){
    echo "$an = $deg \n";
}
echo "<br>";

krsort($meyveler);
foreach($meyveler as $an => $deg){
    echo "$an = $deg \n";
}

?>
</pre> 