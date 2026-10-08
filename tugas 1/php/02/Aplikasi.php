```php
<?php

require_once "Mahasiswa.php";

// Membuat objek dengan constructor tanpa parameter
$soja = new Mahasiswa();
$soja->tampilkanInfo();

echo "<br>";

// Memberikan value Soja Purnamasari ke property nama
$soja->setNama("Soja Purnamasari");
echo "Nama : " . $soja->getNama() . "<br>";

$soja->setNim("4523210104");
echo "NIM : " . $soja->getNim() . "<br>";

$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . "<br>";

echo "<br>";

// Constructor dengan parameter lengkap
$nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
$nenden->tampilkanInfo();

?>
```
