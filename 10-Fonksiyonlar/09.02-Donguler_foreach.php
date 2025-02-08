<?php
$isimler = ["Ali", "Fatma", "Hasan", "Hüseyin"];

foreach ($isimler as $isim) {
    echo $isim . "<br>";
}

echo "<br>";

$plakalar = ["06"=>"Ankara","34"=>"İstanbul","53"=>"Rize"];

foreach($plakalar as $anahtar => $deger){
    echo $anahtar.' - '.$deger.'<br>';
}

?>