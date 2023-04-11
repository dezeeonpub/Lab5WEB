
<?php
/**

Program sederhana pendefinisian class dan pemanggilan class.
**/
class Mobil
{
private $warna;
private $merk;
private $harga;

public function __construct($warna, $merk, $harga)
{
$this->warna = $warna;
$this->merk = $merk;
$this->harga = $harga;
}

public function getWarna()
{
return $this->warna;
}

public function setWarna($warna)
{
$this->warna = $warna;
}

public function getMerk()
{
return $this->merk;
}

public function setMerk($merk)
{
$this->merk = $merk;
}

public function getHarga()
{
return $this->harga;
}

public function setHarga($harga)
{
$this->harga = $harga;
}

public function tampilWarna()
{
echo "Warna mobilnya: " . $this->warna;
}
}

// membuat objek mobil
$a = new Mobil("Biru", "BMW", 10000000);
$b = new Mobil("Merah", "Toyota", 5000000);

// memanggil objek
echo "Mobil a: warna " . $a->getWarna() . ", merk " . $a->getMerk() . ", harga " . $a->getHarga() . "<br>";
echo "Mobil b: warna " . $b->getWarna() . ", merk " . $b->getMerk() . ", harga " . $b->getHarga() . "<br>";

// mengubah warna mobil a
$a->setWarna("Hitam");

// memanggil objek setelah diubah warna nya
echo "Mobil a: warna " . $a->getWarna() . ", merk " . $a->getMerk() . ", harga " . $a->getHarga() . "<br>";
?>

