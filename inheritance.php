<?php 

class Produk {
	 public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlhHalaman,
			$waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0) {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlhHalaman = $jmlhHalaman;
	$this->waktuMain = $waktuMain;
}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

public function getInfoProduk() {

		$str = "{$this->judul} : {$this->getLabel()} (Rp. {$this->harga})";
		
		return $str;
}


}


class komik extends Produk {
	public function getInfoProduk() {
		$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhHalaman} Halaman.";
		return $str;
	}

}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} : {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}
class CetakInfoProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}


$Produk3 = new Komik("Doraemon", "Sitinurdiyanti", "Riant", 500000, 50, 0);

$Produk4 = new Game("mobilelegend", "Alucard", "Miya", 200000, 0, 60);

echo $Produk3->getInfoProduk();
echo "<br>";
echo $Produk4->getInfoProduk();