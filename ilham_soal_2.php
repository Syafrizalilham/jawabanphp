<?php
$sepuluh_ribu = 3 * 10000;
$lima_ribu = 4 * 5000;
$duapuluh_ribu = 5 * 20000;
$total_harga_mainan = 55000;

$total_uang = $sepuluh_ribu + $lima_ribu + $duapuluh_ribu;
$jumlah_uang_setyo = $total_uang - $total_harga_mainan;

echo "total uang sepuluh ribuan setyo adalah = $sepuluh_ribu<br/>";
echo "total uang lima ribuan setyo adalah = $lima_ribu<br/>";
echo "total uang dua puluh ribuan setyo adalah = $duapuluh_ribu<br/>";
echo "maka jumlah total uang yang dimiliki setyo adalah = $total_uang<br/>";
echo "jika setyo membeli mainan dengan harga $total_harga_mainan, maka jumlah uang yang dimiliki setyo sekarang adalah $jumlah_uang_setyo<br/>";
?>