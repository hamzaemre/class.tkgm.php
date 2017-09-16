# class.tkgm.php
cURL ile parsel sorgulama yapabilen basit bir PHP Sınıfıdır.

# Kurulum
```
composer require hamzaemre/class.tkgm.php
```

# Örnek kullanımı
### Diğer örnekleri proje içerisinde inceleyebilirsiniz.
## İl listesini çekmek için:
```php
<?php

require_once 'vendor/autoload.php';

$parsel_sorgulama = new ParselSorgulama();
$iller = $parsel_sorgulama->ilListesiGetir();

// il listesini getirir.
print_r($iller);

?>
```
## İlçe listesini çekmek için:
```php
<?php

require_once 'vendor/autoload.php';

$parsel_sorgulama = new ParselSorgulama();
$ilceler = $parsel_sorgulama->ilceListeGetir();

// il listesini getirir.
print_r($ilceler);

?>
```
## Mahalle listesini çekmek için:
```php
<?php

require_once 'vendor/autoload.php';

$parsel_sorgulama = new ParselSorgulama();
$mahalleler = $parsel_sorgulama->mahalleListeGetir();

// il listesini getirir.
print_r($mahalleler);

?>
```
## Parsel sorgulaması yapmak için:
```php
<?php

require_once 'vendor/autoload.php';

$parsel_sorgulama = new ParselSorgulama();
$parsel_bilgisi = $parsel_sorgulama->parselBilgiGetir(169241,201);
echo '<pre>';
  print_r($parsel_bilgisi);
echo '</pre>';

?>
```
