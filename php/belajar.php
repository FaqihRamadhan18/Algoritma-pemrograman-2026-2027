<?php
// Data produk sederhana
$produk = [
    ["nama" => "Laptop", "harga" => 8500000],
    ["nama" => "Mouse", "harga" => 150000],
    ["nama" => "Keyboard", "harga" => 450000]
];

echo "<h3>Daftar Produk:</h3><ul>";

foreach ($produk as $p) {
    echo "<li>" . $p['nama'] . " - Rp " . number_format($p['harga'], 0, ',', '.') . "</li>";
}

echo "</ul>";
?>