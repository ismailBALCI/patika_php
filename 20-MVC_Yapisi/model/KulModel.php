<?php

class KulModel {
    public $vt;
    public function __construct() {
        $this->vt = new PDO('mysql:host=localhost;dbname=testvt;','root','');
    }

    public function kulListele() {
        $sorgu = $this->vt->query("SELECT * FROM kullanicilar");
        return $sorgu->fetchAll(PDO::FETCH_ASSOC);
    }
}