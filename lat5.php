<?php

// buat class induk : kendaraan
class kendaraan {
    public $nama_pemilik;
    public $merk_kendaraan;
    public $no_kendaraan;

    public function beli_mobil(){
        return "beli kendaraan baru";
    }
}

// turunkan class kendaraan kw mobil
class mobil extends kendaraan{

    public function lihat_data(){
        return "Nama pemilik: $this->nama_pemilik, Merk Kendaraan:
        $this->merk_kendaraan , No.Kendaraan:$this->no_kendaraan ";
        
    }
}

// buat objek dari kelas mobil (instansiasi)
$mobil_baru = new mobil();

// isi property objek
$mobil_baru -> nama_pemilik ="Budi";
$mobil_baru->merk_kendaraan = "Toyota";
$mobil_baru->no_kendaraan = "NO 1234 MEDAN";

// panggil metho objek
echo $mobil_baru->beli_mobil();
echo "<br>";
echo $mobil_baru->lihat_data();

?>