<?php
class mobilLengkap{
    private $tv;

    public function setTV(){
        $this ->tv =$tv;
    }

    public function nontonTV(){
        echo $this->tv. "TV dihidupkan, TV Mencari Chanel, 
            TV Menampilkan Gambar ";
    }
}

class MobilBMW extends mobilLengkap{

}

class MobilBMWberaksi extends MobilBMW{
    Public function nontonTV(){
        return "TV Menyala";
    }
    Public function HidupkanMobil(){
        return "mobil hidup";
    }
    Public function matikanMobil(){
        return "mobil mati";
    }
    Public function ubahGigi(){
        return "gigi berpindah";
    }
}

$mbl = new MobilBMW();

$mbl->setTV="SAMSUNG";
echo $mbl->nontonTV(). "<br/>";

$mbl2 = new MobilBMWberaksi();
echo $mbl2->nontonTV();

?>