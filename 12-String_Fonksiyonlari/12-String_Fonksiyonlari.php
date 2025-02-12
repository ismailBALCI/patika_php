<pre>    
<?php

// strlen($metin); mb_strlen($metin,'UTF-8');
// Verilen metnin karakter sayısını yani uzunluğunu verir.
$metin = 'İsmail';
echo strlen($metin) . "<br>";
echo mb_strlen($metin) . "<br>";

// explode($ayirici,$metin);
// Verilen metni belirtilen ayırıcı karaktere göre parçalar ve bir dizi olarak gönderir.
$metin = 'Şahin Turgut Ersever';
$dizi = explode(' ',$metin);
print_r($dizi);

// implode($ayirici,$dizi);
// Bu fonksiyon explode() fonksiyonunun aksine bir dizideki değerleri belirtilen ayırıcıyla birleştirerek biraraya getirir.
echo implode('#',$dizi);

// str_split($metin,$sayi); mb_str_split($metin,$sayi);
// Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür. Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.
$dizi = mb_str_split($metin,3);
print_r($dizi);

// ltrim($metin), rtrim($metin), trim($metin);
// Verilen metnin sırasıyla solundaki(left-ltrim), sağındaki(right-rtrim) ve her iki tarafındaki(trim) gereksiz boşlukları temizler.
$metin = "          İsmail BALCI        ";

echo ltrim($metin) . strlen(ltrim($metin)) . '<br>';
echo rtrim($metin) . strlen(rtrim($metin)) . '<br>';
echo trim($metin) . strlen(trim($metin)) . '<br>';

// substr($metin,$baslangic,$uzunluk);
// Bir metnin belirtilen başlangıç konumundan itibaren istenilen uzunluktaki bir parçasını gönderir.
$metin = "Şahin Türğut ERSEVER";
echo substr($metin,7,6) . '<br>';
echo mb_substr($metin,6,6) . '<br>';

// strtolower($metin), strtoupper($metin);
// Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür.
echo strtolower($metin) . '<br>';
echo strtoupper($metin) . '<br>';

// mb_strtolower() ve mb_strtoupper();
// Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür. Türkçe karakter sorunu yaratmaz.
echo mb_strtolower($metin) . '<br>';
echo mb_strtoupper($metin) . '<br>';

// ucfirst($metin), ucwords($metin);
// Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve metindeki her kelimenin ilk karakterini(ucwords) büyük harfe dönüştürür.
$metin = "ismail balcı";
echo ucfirst($metin) . "<br>";
echo ucwords($metin) . "<br>";

// str_replace($kaynak,$hedef,$metin);
// Verilen metindeki kaynak karakterlerin yerine hedef karakterileri koyarak değiştirme yapar. Bu fonksiyon küçük/büyük harf duyarlıdır.
$metin = 'sahin turgut ersever';
echo str_replace('turgut','ahmet',$metin) . "\n";

// nl2br($metin);
// String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.
$metin = "sahin turgut ersever\n merhaba";
echo $metin . "\n";
echo nl2br($metin) . "\n";

// md5($metin), sha1($metin);
// Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.
$sifre = "123456";
echo md5($sifre) . "<br>";
$db_sifre = "e10adc3949ba59abbe56e057f20f883e";

if(md5($sifre) == $db_sifre){
    echo 'Şifre doğru.';
} else {
    echo 'Şifre yanlış';
}
echo "<br>";

// strstr();
// Bir dizgede belirtilen karekterden sonrasını döndürür.
$metin = "sahin@stebilisim.com";
echo strstr($metin,'@');

?>
</pre>