<div style="width: 100%; padding: 30px; margin-bottom: 10px; background: #303030; color: white; ">
    <p><?= $no; ?> - <?= $msj; ?></p>
    <p><strong>Hatalı Dosya: </strong><?= $dosya; ?></p>
    <p><strong>Hatalı Satır: </strong><?= $satir; ?></p>

    <?php
    
        $kod_dosyasi = fopen($dosya,'r');
        $say= 0;
        while ($kod_satiri = fgets($kod_dosyasi)) {
            if (++$say == $satir) {
                echo "<p><strong>Yaptığınız Hata: </strong> $kod_satiri </p>";
            }
        }

    ?>

</div>