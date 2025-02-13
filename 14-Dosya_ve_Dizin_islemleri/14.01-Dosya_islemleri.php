<?php
// Dosya Oluşturma ve Silme
// PHP dosya oluşturma işlemi için touch fonksiyonu, dosya silmek için unlink fonksiyonu kullanılır.

$zaman = time() - 3600;

$sonuc = touch('dosyalar/metin.txt',$zaman);

if ($sonuc) {
    echo 'Başarılı' . '<br>';
} else {
    echo 'Başarısız' . '<br>';
}

/* 
$sonuc = unlink('dosyalar/metin.txt');

if ($sonuc){
    echo 'Dosya başarıyla silindi';
} else{
    echo 'Dosya silinemedi';
}*/

// Dosya Açma
// fopen bir dosyayı açmamıza olanak tanır, ilk parametre açılacak dosya ikinci paramerte ise ne amaçla açtığımızı bildiren kipi içerir.
// fopen($dosya, $kip);
/*
Dosya Erişim Modları - Dosya Kipleri

r : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.
r+ : Dosyanın içeriğinin he okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.
w : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir. Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlanır. Dosya belirtilen adreste yok ise yeniden oluşturulur.
w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinir ve baştan veri yazma işlemi gerçekleştirilir. Dosya belirtilen adreste yok ise yeniden oluşturulur.
a : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste bulunmuyorsa yeniden oluşturulur.
a+ : Dosyaya hem veri eklenebilmesini hem de verinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste yok ise yeniden oluşturulur.
x : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir. Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonundan ‘false’ değeri döner.
x+ : Dosyanın oluşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir. Dosya belirtilen adreste aynı isimde zaten var ise fopen fonksiyonundan ‘false’ değeri döner ve hata oluşur.
*/

$file = fopen('dosyalar/metin.txt','a+');

// Dosya Okuma
// fgets() fonksiyonu ile dosyayı satır satır okuyabiliriz.

/* echo fgets($file); 

while ($satir = fgets($file)){
    echo $satir . "<br>";
}*/

// fread() fonksiyonu ile dosya okuma işlemi ikinci parametresine girilen ‘byte’ cinsinden sayısal değere göre ele alınır.
/*
$size = filesize('dosyalar/metin.txt');
echo $size . "<br>";
echo fread($file, $size); */

// Dosya Yazma
// fwrite ve fputs fonksiyonları ile dosyaya yazma işlemi gerçekleştirilir.

$sonuc = fputs($file, "\nYeni Satır !!! ");
echo $sonuc . "<br>";

// file_put_contents();
// İlk parametre verinin ekleneceği dosya, ikinci parametre eklenecek veri, üçüncü parametre ise veri ekleme işleminin türünü belirten değer. Üçüncü parametrenin kullanılması zorunlu değildir. Üçüncü parametreye FILE_APPEND değeri tanımlanır ise dosyaya veri eklenirken dosyadaki verinin tamamen yeni veri ile değişmesini istemeyip, varolan verinin sonrasına eklenmesini istemiş oluyoruz.
$sonuc = file_put_contents('dosyalar/metin.txt', 'içerik',FILE_APPEND);
echo $sonuc . "<br>";

// feof() Dosyadaki verileri okuma sırasında konumları elde edilerek dosya sonuna gelindi mi kontrolünü yapar.
$file = fopen('dosyalar/metin.txt','r');

while(!feof($file)){
    echo fgets($file) . "<br>";
}

// Varlık Kontrolü
// file_exists() Dosya veya dizin varlığını kontrol eder.
echo file_exists('dosyalar/metin.txt') ? "Dosya var. " : "Dosya yok. ";

// is_file() fonksiyonu, içerisine girilen adresin dosya olup olmadığını kontrol eder

echo is_file('dosyalar/metin2.txt') ?  "Dosya var. " : "Dosya yok. ";

// Dosya Kapatma
// Dosyanın kapanması için fclose fonksiyonu kullanılır.
fclose($file);