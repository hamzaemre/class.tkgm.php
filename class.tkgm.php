<?php

/**
 *
 * @package TKGM (Tapu ve Kadastro Genel Müdürlüğü)
 * @author Hamza Emre hamzaemre0@gmail.com
 * @copyright 2017 Hamza Emre
 * @license MIT https://tr.wikipedia.org/wiki/MIT_Lisansı
 *
 * @version 1.0
 */

class ParselSorgulama
{

  private $site_adresi;

  private $curl;

  /**
   * Sınıfımızın ilk çalışan kısmıdır.
   *
   * @access public
   */
  function __construct()
  {
    if (!extension_loaded('curl')) {
        throw die('cURL kütüphenesi yüklü değil!');
    }

    $this->site_adresi = "https://megsisapi.tkgm.gov.tr";

    require_once 'class.curl.php';
    $this->curl = new curl_fetch_web_data();
  }

  /**
   * Karşıdan tüm il verilerini getirmekle görevli fonksiyonumuz.
   *
   * @access public
   */
  public function ilListesiGetir()
  {
    $url_sonu = "/ilListe";
    return $this->sonucDonder($url_sonu);
  }

  /**
   * Karşıdan ilçe verilerini getirmekle görevli fonksiyonumuzdur.
   * Bu fonksiyonu kullanabilmek için içerisine il_id paremetresini veriyoruz.
   * Buradaki il_id parametresi boş olamaz!
   *
   * @access public
   * @param  $il_id
   */
  public function ilceListeGetir($il_id)
  {
    if (!empty($il_id)) {
      $url_sonu = "/ilceListe/" . $il_id;
      return $this->sonucDonder($url_sonu);
    }
  }

  /**
   * Karşıdan mahalle verileri getirmekle görevli fonksiyonumuzdur.
   * Bu fonksiyonu kullanabilmek için içerisine ilce_id paremetresini veriyoruz.
   * Buradaki ilce_id parametresi boş olamaz!
   *
   * @access public
   * @param  $ilce_id
   */
  public function mahalleListeGetir($ilce_id)
  {
    if (!empty($ilce_id)) {
      $url_sonu = "/mahalleListe/" . $ilce_id;
      return $this->sonucDonder($url_sonu);
    }
  }

  /**
   * Karşıdan parsel verileri getirmekle görevli fonksiyonumuzdur.
   * Bu fonksiyonu kullanabilmek için içerisine mahalle_id, parsel_no ve ada_no paremetresini veriyoruz.
   * Buradaki mahalle_id, parsel_no parametreleri boş olamaz!
   *
   * @access public
   * @param  $mahalle_id
   * @param  $parsel_no
   * @param  $ada_no
   */
  public function parselBilgiGetir($mahalle_id, $parsel_no, $ada_no = 0)
  {
    if (!empty($mahalle_id) && !empty($parsel_no)) {
      $url_sonu = "/parselbagligeometri/{$mahalle_id}/{$ada_no}/{$parsel_no}";
      return $this->sonucDonder($url_sonu);
    }
  }

  /**
   * cURL ile karşıya istek yapmakla görevli fonksiyonumuzdur.
   * Bununla birlikte dönen değer json_decode yaparak sonuç döndürüyoruz.
   *
   * @access private
   * @param  $url_sonu
   */
  private function sonucDonder($url_sonu)
  {
    if (!empty($url_sonu)) {
      $donen_sonuc = $this->curl->get_url_data($this->site_adresi . $url_sonu)->result('body');
      return json_decode($donen_sonuc, true);
    }
  }
}


?>
