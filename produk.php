<?php

// Jualan Produk
// komik
// Game
class Produk {
    public $judul = "judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0;

    // public function sayHello() {
    //     return "Hello World!";
    // } 

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "wkwkwk"; 
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Maruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
// var_dump($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Komputer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel(); 


// class CetakInfoProduk {
//     public function cetak(Produk $produk) {
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//         return $str;
//     }
// }

// $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shoenen Jump", 30000);
// $produk2 = new("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " .  $produk4->getLabel();

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);