<?php

try {
    $vt = new PDO('mysql:host=localhost;dbname=testVT','root','');
    $vt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $vt->query('SET @@lc_time_names = "tr_TR"');
    $vt->query('SET CHARACTER SET utf8mb4');
    $vt->query('SET CHARACTER_SET_CONNECTION=utf8mb4');

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>