<?php

function say($i){
    echo $i;
    if ($i < 5) {
        $i++;
        say($i);
    };
};

say(1);

$kategoriler = [
    [
        'id' => 1,
        'ustKat' => 0,
        'isim' => 'Back-end Teknolojiler'
    ],
    [
        'id' => 2,
        'ustKat' => 0,
        'isim' => 'For-end Teknolojiler'
    ],
    [
        'id' => 3,
        'ustKat' => 0,
        'isim' => 'Mobil Uygulama'
    ],
    [
        'id' => 4,
        'ustKat' => 1,
        'isim' => 'PHP'
    ],
    [
        'id' => 5,
        'ustKat' => 1,
        'isim' => 'ASP'
    ],
    [
        'id' => 6,
        'ustKat' => 2,
        'isim' => 'HTML'
    ],
    [
        'id' => 7,
        'ustKat' => 2,
        'isim' => 'CSS'
    ],
    [
        'id' => 8,
        'ustKat' => 2,
        'isim' => 'javascript'
    ],
    [
        'id' => 9,
        'ustKat' => 3,
        'isim' => 'Kotlin'
    ],
];

function kategoriListele(array $kategoriler, int $ust = 0){
    $html = "<ul>";
    foreach($kategoriler as $kat)
    if($kat['ustKat'] == $ust){
        $html .= "<li>". $kat['isim'];
        $html .= kategoriListele($kategoriler, $kat['id']);
        $html .= "</li>";
    }
    $html .= "</ul>";
    return $html;
}

echo kategoriListele($kategoriler);

?>