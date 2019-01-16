<?php 

class Produk {
	 public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0 ;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

//$Produk1 = new Produk();
//$Produk1->judul = "Doraemon";
//var_dump($Produk1);

//$Produk2 = new Produk();
//$Produk2->judul = "mobilelegend";
//$Produk2->tambahProperty = "selamat";
//var_dump($Produk2->judul);

$Produk3 = new Produk();
$Produk3->judul = "Doraemon";
$Produk3->penulis = "Sitinurdiyanti";
$Produk3->penerbit = "Riant";
$Produk3->harga = 500000;

$Produk4 = new Produk();
$Produk4->judul = "mobilelegend";
$Produk4->penulis = "Alucard";
$Produk4->penerbit = "Miya";
$Produk4->harga = 200000;

echo "komik : " . $Produk3->getLabel();
echo "<br>";
echo "game : " . $Produk4->getLabel();