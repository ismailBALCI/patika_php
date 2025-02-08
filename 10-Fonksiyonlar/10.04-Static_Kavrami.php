<?php

    function say(){
        $sayi = 0;
        echo $sayi;
        $sayi++;
    }
    
    say();
    say();
    say();
    say();

    echo "<br>";

    function say2(){
        static $sayi = 0;
        echo $sayi;
        $sayi++;
    }
    
    say2();
    say2();
    say2();
    say2();
    
?>