<?php

function cekGagen($angka){
  if($angka%2 === 0){
    echo "$angka. Bilangan Genap <br/>";
  } else {
    echo "$angka. Bilangan Ganjil <br/>";
  }
}

cekGagen(1);
cekGagen(2);
cekGagen(3);
cekGagen(4);
cekGagen(5);
cekGagen(6);
cekGagen(7);
cekGagen(8);
cekGagen(9);
cekGagen(10);

?>