<?php

function perulangan($menu){
  echo $menu;
  echo "<br/>";
  for($i = 1; $i <= 3; $i++){
    echo "$i. Menu $menu ke $i<br/>";
  }
}

perulangan("Makanan");
perulangan("Minuman");
perulangan("Parsel");

?>