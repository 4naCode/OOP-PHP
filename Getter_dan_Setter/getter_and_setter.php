<?php
class Produk {
    private $merek;
    private $stok;

public function setMerek($merek){
    $this->merek = $merek;
 }

public function setStok($stok){
    $this->stok = $stok;
 }

public function getMerek(){
    return $this->merek;
}

public function getStok(){


// Basic OOP PHP
return $this->stok;
    }
}

$produk01 = new Produk($merek, $stok);
$produk01->setMerek("Acer");
$produk01->setStok(10);

echo $produk01->getMerek(); // Acer
echo "<br>";
echo $produk01->getStok(); // 10