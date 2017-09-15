<?php

  require __DIR__ . '/../vendor/autoload.php';

  $parsel_sorgulama = new ParselSorgulama();

  $il_listesi = $parsel_sorgulama->ilListesiGetir();

  echo '<pre>';
    print_r($il_listesi);
  echo '</pre>';

?>
