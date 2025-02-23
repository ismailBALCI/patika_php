<?php 
/* 
Abstract(Soyutlama) Kullanımı
    // Soyutlanmış sınıflar içerisinde soyut methodlar barındırır.
    // Soyutlanmış sınıftan türetilen sınıflar soyut sınıf içerisinde ki soyut methodları bulundurmak zorundadır.

Özellikleri
    // Soyut methodlar ve sabitler içerebilir.
    // Normal methodlar, özellikler ve sabitler içerebilir.
    // public, protected ve private olarak tanım yapılabilir.
    // Aynı sınıf sadece bir abstract sınıftan türetilebilir.
 */

 abstract class Urun {
    public $fiyat;
    public $vergi;
    public $urunAdi;

    abstract public function urunAdi($urunAdi);

    abstract public function urunVergi($vergi);

    abstract public function urunFiyat($fiyat);

    public function urunEkle() {
        echo $this->urunAdi . ' isimli ürünün KDV(' . $this->vergi . '%) dahil fiyatı: ' . ($this->fiyat + (($this->fiyat / 100) * $this->vergi)) . ' dır.';
    }

}

class Icecek extends Urun {
    public $marka;
    
    public function urunAdi($urunAdi, $marka="Çaykur") {
        $this->urunAdi = $urunAdi;
        $this->$marka = $marka;
    }
    public function urunVergi($vergi) {
        $this->vergi = $vergi;        
    }
    public function urunFiyat($fiyat){
        $this->fiyat = $fiyat;
    }
}

$icecek = new Icecek();
$icecek->urunAdi('Çay');
$icecek->urunFiyat(5);
$icecek->urunVergi(3);
$icecek->urunEkle();

?>