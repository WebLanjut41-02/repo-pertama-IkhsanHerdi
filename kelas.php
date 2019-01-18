<?php
class kelas{
    protected $jumlah;
    public function belajar(){
        echo "Sedang Belajar "."<br>";
    }
    public function tampil_jumlah(){
        echo "Jumlah Mahasiswa adalah ".$this->jumlah;
    }
}

class studygroup extends kelas{
    public function setjumlah($jumlah){
        $this->jumlah = $jumlah;
        echo $this->jumlah."<br>";
    }
}

$clas = new kelas;
$clas->belajar();
$clas->tampil_jumlah();
$d34102 = new studygroup();
$d34102->setjumlah(15);


?>