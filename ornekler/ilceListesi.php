<?php

  require __DIR__ . '/../vendor/autoload.php';

  $parsel_sorgulama = new ParselSorgulama();

  $ilce_listesi = $parsel_sorgulama->ilceListeGetir(23);

  echo '<pre>';
    print_r($ilce_listesi);
  echo '</pre>';

?>
