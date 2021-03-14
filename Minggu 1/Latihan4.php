<?php 

class manga {
    private $judul, 
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoBuku() {
        $str = "Judul : {$this->judul} <br> Penulis : {$this->penulis} <br> Penerbit : {$this->penerbit} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Jumlah Halaman : {$this->halaman}";
        return $str;
    }

}

$manga1 = new manga("Attack On Titan", "Hajime Isayama", "Kodansha", 200000, 65);
$manga1->setDiskon(11);
echo $manga1->getInfomanga();