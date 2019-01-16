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



class CetakInfoProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}


$Produk3 = new Produk("Doraemon", "Sitinurdiyanti", "Riant", 500000);

$Produk4 = new Produk("mobilelegend", "Alucard", "Miya", 200000);

echo "komik : " . $Produk3->getLabel();
echo "<br>";
echo "game : " . $Produk4->getLabel();
echo "<br>";
$infoProduk3 = new CetakInfoProduk();
echo $infoProduk3->cetak($Produk3);