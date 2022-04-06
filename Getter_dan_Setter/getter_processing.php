<?php
class Produk {


// Basic OOP PHP
        private $merek = "";

public function setMerek($merek){
    if (is_string($merek)) {
        $this->merek = $merek;
} else {
echo "Error: merek harus berbentuk string <br>";
        }
    }

public function getMerek(){
        return strtoupper($this->merek);
    }
}

$produk01 = new Produk($merek, $stok);
echo $produk01->setMerek(9); // Error: merek harus berbentuk string

$produk01->setMerek("Acer");
echo $produk01->getMerek(); // ACER