<?php
class Produk {
    private $stok = 0;

public function setStok($stok){
    if (is_int($stok)) {
        $this->stok = $stok;
} else {
    echo "Error: stok harus angka bulat <br>";
    }
}

 public function getStok(){
    return $this->stok;
    }
}

 $produk01 = new Produk($merek, $stok);
 echo $produk01->getStok(); // 0
 echo "<br>";

 $produk01->setStok(10.5); // Error: stok harus angka bulat
 echo $produk01->getStok(); // 0
 echo "<br>";

 $produk01->setStok("Satu"); // Error: stok harus angka bulat
 echo $produk01->getStok(); // 0
echo "<br>";

$produk01->setStok(10);
echo $produk01->getStok(); // 10