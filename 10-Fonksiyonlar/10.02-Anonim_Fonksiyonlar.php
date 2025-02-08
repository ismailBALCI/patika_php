<?php

// Anonim fonksiyon tanımlama
$topla= function($num1, $num2){
    return $num1 + $num2;
};

echo $topla(1,2)."<br><br>";


// array_map ile kullanımı
$dizi1 = [2,3,4,5,6];

$dizi2 = array_map(function($e){
    return 2*$e;
},$dizi1);

print_r($dizi2);
echo "<br><br>";

// Dizi'de anonim fonksiyon kullanımı
$islem = [
    'topla' => function($a,$b){ return $a+$b; },
    'cikar' => function($a,$b){ return $a-$b; },
    'carp' => function($a,$b){ return $a*$b; },
    'bol' => function($a,$b){ return $a/$b; }
];

echo $islem['topla'](2,4)."<br>";
echo $islem['cikar'](2,4)."<br>";
echo $islem['carp'](2,4)."<br>";
echo $islem['bol'](2,4)."<br>";

?>
