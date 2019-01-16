<?php 

class Produk {
	 public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlhHalaman,
			$waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0, $tipe ) {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlhHalaman = $jmlhHalaman;
	$this->waktuMain = $waktuMain;
	$this->tipe = $tipe;
}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

public function getInfoLengkap() {
		// komik : Doraemon | Sitinurdiyanti, Riant, (Rp. 500000) - 50 Halaman.
		$str = "{$this->tipe} : {$this->judul} : {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "komik") {
			$str .= " - {$this->jmlhHalaman}.";
		} else if( $this->tipe == "Game" ) {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
}


}



class CetakInfoProduk {
	public function cetak( Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}


$Produk3 = new Produk("Doraemon", "Sitinurdiyanti", "Riant", 500000, 50, 0, "komik" );

$Produk4 = new Produk("mobilelegend", "Alucard", "Miya", 200000, 0, 60, "Game");

echo $Produk3->getInfoLengkap();
echo "<br>";
echo $Produk4->getInfoLengkap();