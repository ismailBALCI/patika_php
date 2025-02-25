<?php
    // PDO
    try{
        $vt = new PDO('mysql:host=localhost;dbname=testVT','root','');
        // $vt->query('USE testVT');    // Veritabanı ismini burdan da verebiliriz.
        $vt->query(" CREATE TABLE testVT.pdoile(
                        # VT ismini burda da belirtebiliriz
                        id INT(1),
                        test VARCHAR(50),
                        PRIMARY KEY(id)
                    );");
        $vt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $vt->query('SET CHARACTER SET utf8mb4');
        $vt->query('SET CHARACTER_SET_CONNECTION=utf8mb4');
        $vt->query('SET @@lc_time_names = "tr_TR"');
        
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

?>