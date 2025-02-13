<pre>
<?php

// Dosya Dizin Listeleme 
// scandir() glob() Kullanımı:

$anadizin = require '../ayar.php';

$dizi = scandir('.');
print_r($dizi);

$dizi = scandir($anadizin);
print_r($dizi);

$dizi = glob($anadizin . '/*'); // '/*.php' tüm php dosyalarını listeler.
print_r($dizi);

$dizi = glob('./dosyalar/*.{php,txt}',GLOB_BRACE); // .php ve .txt doslararını listeler.
print_r($dizi);

$dizi = glob('*', GLOB_ONLYDIR);    // Bulunduğun dizindeki sadece klasörler.
print_r($dizi);

// Tüm kalasörleri alt klasörleri ve dosyaları ile liseteleyelim
function listele($dir){
    $elemanlar = scandir($dir);
    echo "<ul>";
    foreach ($elemanlar as $eleman) {
        if ($eleman != '.' && $eleman != '..' && $eleman != '.git'){
            echo "<li>";        
            echo $eleman;
            if (is_dir($dir . '/' . $eleman)){
                listele($dir . '/' . $eleman);
            }
            echo "</li>";
        }
    }
    echo "</ul>";
}

listele($anadizin);

?>
</pre>