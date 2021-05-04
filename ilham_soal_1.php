<?php
$harga_per_balpoin = 1750;
$uang_rian = 5 * 5000;
$jumlah_balpoin = 12;

$harga_total = $jumlah_balpoin * $harga_per_balpoin;
$uang_kembalian = $uang_rian - $harga_total;

echo "harga 1 buah balpoin adalah = $harga_per_balpoin<br/>";
echo "Total uang yang dimiliki rian adalah 5 lembar lima ribuan = $uang_rian<br/>";
echo "Jika rian membeli 1 lusin balpoin maka kembalian yang rian terima adalah = $uang_kembalian<br/>";
?>