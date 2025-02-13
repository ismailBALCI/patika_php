<?php
touch('test.txt');  // Dosya oluşturuldu.
echo rename('test.txt','test2.txt') ? "Dosyanın ismi değiştirildi. " : "Bir hata oluştu.";
echo rename('test2.txt','dosyalar/test.txt') ? "Dosya taşındı." : "Bir hata oluştu. ";