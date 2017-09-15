<?php

  require __DIR__ . '/../vendor/autoload.php';

  $parsel_sorgulama = new ParselSorgulama();

  $parsel_bilgisi = $parsel_sorgulama->parselBilgiGetir(169241,201);

  echo '<pre>';
    print_r($parsel_bilgisi);
  echo '</pre>';

?>
