<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>Güvenlik</title>
</head>
<body>
    <h1>Güvenlik</h1>
<!--
<pre>
    <?php
    /* Dosya ve Dizin Güvenliği: */
        // Dosya uzantısı .php olmayan dosyalara dışardan erişimi kapatmazsak içerikleri okunabilir.

        require 'config/config.ism';

        $sorgu = $vt->query("SELECT * FROM kullanicilar LIMIT 5;");

        $kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
        print_r($kullanicilar);

    ?>
</pre>
-->
<form action="" method="post">
    <input type="text" name="isim"><br>
    <input type="text" name="soyisim"><br>
    <button type="submit">Gönder</button>
</form>

    <?php
    /* XSS Cross Site Scripting */
        // XSS (Cross Site Scripting) script kodları üzerinden (genelde javascript) bir web sayfasına saldırı yapılmasıdır.
        // XSS çoğunlukla tarayıcıda saklanan bilgiler olan cookielere saldırı amacı ile kullanılmaktadır.

        
    setcookie('isim','ismail');
    setcookie('sire','12345');
    setcookie('tema','dark',time() + 86400, '/', 'localhost', false, true); 
    // Son parametre olan true ile htmlspeacialchars() özelliği cookie oluşturulurken aktif edilir.
    // <script>console.log(document.cookie)</script> ile cookilerimizi alamazlar.
    
    /* echo $_POST['isim'] ?? ""; */
    // Formdan gelen scriptleri engelle.
    // echo htmlspecialchars($_POST['isim']) ?? ""; // html karakterlerini özel karakterlere dönüştürür.
    // echo strip_tags($_POST['isim']) ?? ""; // html taglarını tamamen temizler.

    /* SQL Injection */
    if (isset($_POST['isim'])) {
        /* $ins = $vt->query("INSERT INTO users SET isim= '{$_POST['isim']}', soyisim= '{$_POST['soyisim']}' "); */
        // query() metodu kullanılırsa "';DROP TABLE users;" gibi bir kodla veritabanına SQL injection saldırısı yapılabilir.
        
        // SQL injection saldırılarını engellemek için prepare() ile veritabanı işlemleri yapılmalıdır.
        $ins = $vt->prepare("INSERT INTO users SET isim= ?, soyisim= ?");
        $ins->execute(["{$_POST['isim']}","{$_POST['soyisim']}"]);

        echo $ins ? "Kayıt eklendi" : "Kayıt eklenemedi.";
    }
    ?>

</body>
</html>
