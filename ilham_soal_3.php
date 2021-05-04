<?php
$jumlah_toko = 100;
$biaya_toko_1 = 10000;
$biaya_toko_68 = 30100;
$toko1 = 1;
$toko68 = 68;

$beda = ($biaya_toko_68 - $biaya_toko_1) / ($toko68 - $toko1);

for ($x= 1; $x<= 100; $x+=1){
    if($x == 81){
        echo "biaya kelontong $x adalah $biaya_toko_1<br/>";
      }    
    $biaya_toko_1 = $biaya_toko_1 + $beda;
}
?>