<?php
// Dosya Dahil Etme
// Bir php sayfasına başka bir php sayfası dahil edilebilir ve dahil edilen php sayfasındaki değişken ve fonksiyonlar kullanılabilir.

include 'dosyalar/test.txt';

/* include 'yok.php'; */
echo "<h3> Çalışmaya Devam. </h3>";
// include ve include_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "WARNING" verir ve çalışmaya devam eder.

require 'dosyalar/deneme.slm';

/* require 'yok.php'; */
echo "<h3> Çalışmaya Devam. </h3>";
// require ve require_once işlemlerinde dahil edilmek istenen dosya bulunamazsa program "FATAL ERROR" verir ve çalışmayı durdurur. 
/*
include 'dosyalar/dosya.php';
include 'dosyalar/dosya.php';
include 'dosyalar/dosya.php';
echo "<hr>";
require 'dosyalar/dosya.php';
require 'dosyalar/dosya.php';
require 'dosyalar/dosya.php';
*/

// require_once include_once ile dahil edilen dosya sadece bir kere dahil edilebilir.
include_once 'dosyalar/dosya.php';
include_once 'dosyalar/dosya.php';
include_once 'dosyalar/dosya.php';

require_once 'dosyalar/dosya.php';
require_once 'dosyalar/dosya.php';
require_once 'dosyalar/dosya.php';
