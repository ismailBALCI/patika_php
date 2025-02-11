<pre>    
<?php
$dizi = [1,2,3,4,5,6,7,8,9];

// print_r(); // Bir değişkenin veya dizinin gösterimini ekrana basar.
echo "<br><h3>print_r(\$dizi) kullanımı: </h3>";

print_r($dizi);

// var_dump(); // Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.
echo "<br><h3>var_dump(\$dizi) kullanımı: </h3>";

var_dump($dizi);

// implode(); // Dizi elemanlarını birleştirip bir dizge elde eder.
echo "<br><h3>implode(\$dizi) ile metin oluşturma: </h3>";

$dizge = implode("-",$dizi);
echo $dizge;

// explode();// Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
echo "<br><h3>explode(\$metin) ile metinden dizi oluşturma: </h3>";

$yenidizi = explode("-",$dizge); 
print_r($yenidizi);

// count(); // Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
echo "<br><h3>count(\$dizi) Dizinin eleman sayısı: </h3>".count($dizi);

// is_array(); // Değişkenin bir dizi içerip içermediğine bakar
echo "<br><h3>is_array(\$dizi) Değişken bir dizi içeriyor mu?: </h3>";

if (is_array($dizi)) {
    echo "Bir dizi içeriyor.";
} else {
    echo "Bir dizi içermiyor.";
}

?>
</pre>