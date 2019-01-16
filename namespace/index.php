<?php  

require_once 'App/init.php';

//$Produk3 = new Komik("Doraemon", "Sitinurdiyanti", "Riant", 500000, 50);

//$Produk4 = new Game("mobilelegend", "Alucard", "Miya", 200000,60);

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk -> tambahProduk( $Produk3 );
//$cetakProduk -> tambahProduk( $Produk4 );
//echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
