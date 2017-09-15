# class.tkgm.php
cURL ile parsel sorgulama yapabilen basit bir PHP Sınıfıdır.

# Örnek kullanımı
### Diğer örnekleri proje içerisinde inceleyebilirsiniz.
```php
<?php

require_once 'vendor/autoload.php';

$parsel_sorgulama = new ParselSorgulama();
$iller = $parsel_sorgulama->ilListesiGetir();

// il listesini getirir.
print_r($iller);

?>
```
