<?php 
    class Mobil{
        public $merk="toyota";
        public $TahunProduksi=2018;
        public $warna="putih";
        public $kecepatan=100;

        public function start(){
            echo "mobil berjalan";
        }

        public function akselerasi(){
            echo "mobil akselerasi";
        }

        public function stop(){
            echo "mobil berhenti";
        }
    }

    $mobil1 = new mobil();
    echo $mobil1->merk;
    echo $mobil1->TahunProduksi;
    echo "<br>";
    echo $mobil1->warna;
    echo "<br>";
    echo "Kecepatan Mobil : ".$mobil1->kecepatan;
    echo "<br>";
    echo $mobil1->start();

    $mobil2 = new mobil();
    $mobil2->merk="Daihatsu";
    $mobil2->tahunproduksi=2001;
    $mobil2->warna="putih";
    $mobil2->kecepatan=70;
    echo "<br>";
    echo $mobil2->merk;
    echo $mobil2->TahunProduksi;
    echo "<br>";
    echo $mobil2->warna;
    echo "<br>";
    echo "Kecepatan Mobil : ".$mobil2->kecepatan;
    echo "<br>";
    echo $mobil2->stop();