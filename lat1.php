<?php

// membuat class mobil
class mobil{
    var $nama_pemilik;
    var $nama_mobil;

// membuat method constructor
function __construct(){
    echo "isi bagian method constructor <br/>";
}

// isi method mobil
function tampilan_pemilik(){
    return "Nama pemilik mobil adalah budi <br/>";
}
}


// instansiasi class mobil
$mobil = new mobil();

// memanggil method tampilkan pemilik dr class mobil
echo $mobil->tampilan_pemilik();

?>