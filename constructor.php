<?php 

class Produk {
	 public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

$Produk3 = new Produk("Doraemon", "Sitinurdiyanti", "Riant", 500000);

$Produk4 = new Produk("mobilelegend", "Alucard", "Miya", 200000);

$Produk5 = new Produk("FreeFire");
echo "komik : " . $Produk3->getLabel();
echo "<br>";
echo "game : " . $Produk4->getLabel();
echo "<br>";
var_dump($Produk5);