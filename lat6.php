<?php
//buat class induk : kendaraan
class kendaraan{
    public $nama_pemilik;
    public $merk_kendaraan;
    public $no_kendaraan;

    public function beli_mobil(){
        return "Beli mobil baru";
    }
}

// turunkan class ke kendaraan mobil (instansiasi)
$mobil_baru = new mobil();
$mobil_baru = new mitsubisi();

// isi properti objek
$mobil_baru->nama_pemilik = "Budi";
$mobil_baru->merk_kendaraan = "Mitsubisi";
$mobil_baru->no_kendaraan = "NO 1234 MEDAN";
$mobil_baru->type_kendaraan = "Mobil Pribadi";
$mobil_baru->jumlah_ban = "4";

// panggil method objek
echo $mobil_baru->beli_mobil();
echo "<br/>";
echo $mobil_baru->lihat_data();
echo "<br/>";
echo $mobil_baru->type_mobil();

?>