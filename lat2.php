<?php

// class mobil
class mobil {
    // isi property dari class mobil
    var $nama_pemilik;
    var $warna_mobil;

    function __destruct(){
        echo "Ini adalah isi method destructor <br/>";
    }

    // method mobil
    function tampilkan_pemilik(){
        return "Nama pemilik mobil adalah budi <br/>";
    }
}

// instansiasi class mobil
$mobil = new mobil();

//memanggil method tampilan_pemilik dr class mobil
echo $mobil->tampilkan_pemilik();

?>