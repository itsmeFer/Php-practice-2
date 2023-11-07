<?php

// buat class mahasiswa
class mahasiswa{
    private $nama_mahasiswa = "Budi";
    private $kelas_mahasiswa = "3 pagi B";

    public function __construct(){
        echo "Ini berasal dari construct Mahasiswa";
    }

    public function nilai_mahasiswa(){
        return "Mahasiswa yang bernama &this->nama_mahasiswa berada di kelas 
        $this->kelas_mahasiswa memiliki nilai 85 untuk matakuliah PBO";

    }
    public function __destruct(){
        echo "Ini berasal dari destructor Mahasiswa";
    }
}
$mahasiswa_budi = new mahasiswa();

echo "<br/>";
echo $mahasiswa_budi->nilai_mahasiswa();
echo "<br/>";
?>
