<?php
class Buah{
    public $nama;
    public $nama;
    public function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }
    public function awal(){
        echo "Nama buah adalah {$this->nama} dan warnanya adalah {$this->warna}.";
    }
}

class Jeruk extends Buah{
    public function pesan() {
        echo "Buah tersebut memiliki rasa sedikit asam";
    }
}
$jeruk = new Jeruk("Jeruk", "Orange");
$jeruk->pesan();
echo "<br/>";
$jeruk->awal();

?>