<?php 

class Produk {
	 public $judul,
			$penulis,
			$penerbit;

protected $diskon = 0;
		
		private $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
}

public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
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
	public $jmlhHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0) {

		parent ::__construct( $judul, $penulis, $penerbit, $harga);

		$this->jmlhHalaman = $jmlhHalaman;

	}

	public function getInfoProduk() {
		$str = "komik : " . parent :: getInfoProduk() . " - {$this->jmlhHalaman} Halaman.";
		return $str;
	}

}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent ::__construct($judul = "judul", $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}


public function setDiskon( $diskon ) {
	$this->diskon = $diskon;
}
	public function getInfoProduk() {
		$str = "Game : " . parent :: getInfoProduk() . " - {$this->waktuMain} Jam.";
		return $str;
	}
}
class CetakInfoProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}


$Produk3 = new Komik("Doraemon", "Sitinurdiyanti", "Riant", 500000, 50);

$Produk4 = new Game("mobilelegend", "Alucard", "Miya", 200000,60);

echo $Produk3->getInfoProduk();
echo "<br>";
echo $Produk4->getInfoProduk();
echo "<hr>";

$Produk4->setDiskon(50);

echo $Produk4->getHarga();