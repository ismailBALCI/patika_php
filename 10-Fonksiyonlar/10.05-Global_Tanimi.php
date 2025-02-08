<?php
    $isim = "Ahmet";

    function isimyaz(){
        global $isim;
        echo $isim;
    }

    isimyaz();
    
?>