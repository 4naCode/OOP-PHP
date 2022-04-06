<?php
class Produk {
    private $merek = "";
    private $stok = 0;



// Basic OOP PHP
    private function setMerek($merek){
        if (is_string($merek)) {
            $this->merek = $merek;
} else {
    die("Error: merek harus berbentuk string <br>");
}
}


    private function setStok($stok){
        if (is_int($stok)) {
            $this->stok = $stok;
} else {
    die("Error: stok harus angka bulat <br>");
}
}

 public function __construct($merek, $stok){
 $this->setMerek($merek);
 $this->setStok($stok);
 }

 public function getMerek(){
 return strtoupper($this->merek);
 }

 public function getStok(){
 return $this->stok;
}
}
$produk01 = new Produk("Acer",'5');
echo "Stok produk ".$produk01->getMerek().": ".$produk01->getStok();