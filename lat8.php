<?php

require 'lat7.php'

// turunkan class mahasiswa ke clas reguler
class reguler extends mahasiswa{
    public function data_mahassiswa(){
        return "Nama : $this->nama, NIM : $this->nim,
        Jurusan : $this->jurusan";
    }
}

// buat objek dr klas reguler (instansiasi)
$mahasiswa_baru = new reguler();

// isi property objek
$mahasiswa_baru -> nama = "Budi";
$mahasiswa_baru -> nim = "223303030414";
$mahasiswa_baru -> jurusan = "Teknik Info      

// panggil method objek
echo $mahasiswa_baru->mahasiswa_baru();
echo "<br />";
echo $mahasiswa_baru->data_mahassiswa();
?>

