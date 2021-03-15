<?php
class item{
    private $Ukuran;
    private $Warna;
    private $Nama;
    private $Model;

    Public function setUkuran($Ukuran){
        return $this->Ukuran = $Ukuran;
    }
    Public function setWarna($Warna){
        return $this->Warna = $Warna;
    }
    Public function setNama($Nama){
        return $this->Nama = $Nama;
    }
    Public function setModel($Nama){
        return $this->Nama = $Nama;
    }
}

class topi extends item{    
    private $model;

}

class celana extends item{
    private $tipe;
    private $model;
}

class baju extends item{
    private $tipe;
}

//test
$item1 = new topi();

echo "Warna Topi: " . $item1->setWarna("Merah"). "<br/>";
echo "Ukuran Topi: " . $item1->setUkuran("L"). "<br/>";
echo "Nama Topi: " . $item1->setNama("Baret")."<br/>";
echo "Model Topi: " . $item1->setmodel("Baret Hat"). "<br/>";


?>