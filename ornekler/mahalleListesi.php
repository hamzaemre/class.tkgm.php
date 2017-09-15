<?php

  require __DIR__ . '/../vendor/autoload.php';

  $parsel_sorgulama = new ParselSorgulama();

  $mahalle_listesi = $parsel_sorgulama->mahalleListeGetir(687);

  echo '<pre>';
    print_r($mahalle_listesi);
  echo '</pre>';

?>
