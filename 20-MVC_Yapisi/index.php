<?php
    require 'config.php';
    require DIR.'/helper/app.php';
    require DIR.'/controller/Kullanici.php';

    $rota = get('rota');

    $rota = explode('@', $rota);

    $Sinif = $rota[0];
    $Metod = $rota[1];

    $Calis = new $Sinif();
    $Calis->$Metod();