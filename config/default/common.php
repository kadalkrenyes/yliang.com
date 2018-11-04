<?php

/**
 * SCRIPT INI 100% GRATIS DAN TIDAK DIPERBOLEHKAN UNTUK DIPERJUAL BELIKAN!
 * SAYA BERJANJI TIDAK AKAN MENJUAL SCRIPT INI KEPADA SIAPAPUN
 * JIKA SAYA MENJUAL SCRIPT INI MAKA REZEKI SAYA DAN KETURUNAN SAYA AKAN SERET SELAMANYA!
 * AAMIIN
 */

if ( ! defined( 'DICKYSYAPUTRA' ) ) {
  exit( '\m/' );
}

return [
  'site_name' => 'Mp3 Download',
  'site_tagline' => 'Free Music Downloads Free Online MP3 Songs Download Popular Song 2018 PlanetLagu Stafaband',

  // Tag yang bisa digunakan untuk home_description: %site_name%, %domain%
  'home_description' => 'Download Lagu Terbaik 2018,
Gudang Lagu Mp3 Terbaru. Download Lagu Gratis, bollywood, kpop, jpop, gudang lagu, tangga lagu, download lagu gratis, mp3 download, stafaband, planetlagu
Gudang lagu Mp3 Indonesia, lagu barat terbaik. Download lagu Terbaru 2018 mudah,
Cepat, nyaman. Situs unduh yang mudah diakses untuk download lagu MP3.',
  // Tag yang bisa digunakan untuk search_title: %query%, %domain%
  'search_title' => 'Download %query% Mp3',
  // Tag yang bisa digunakan untuk search_description: %query%, %domain%
  'search_description' => 'Download %query% Mp3 Download CEPAT dan MUDAH. Download lagu terbaru, gudang lagu Mp3 gratis terbaik. Download lagu %query% MP3. Download mp3 cepat, mudah dan yang stabil.',
  'search_robots' => 'index,follow',
  // Tag yang bisa digunakan untuk download_title: %title%, %duration%, %domain%
  'download_title' => '[%size%] Download %title% Mp3',
  // Tag yang bisa digunakan untuk download_description: %title%, %duration%, %domain%
  'download_description' => 'Free Music Downloads-Free Online MP3 Songs Download',
  'download_robots' => 'noindex,follow',

  // Tag yang bisa digunakan untuk search_page_title: %query%
  'search_page_title' => 'Download %query% MP3',
  // Tag yang bisa digunakan untuk download_page_title: %title%
  'download_page_title' => '%title%',

  /**************************************************************/

  'search_permalink' => 'download/%query%',
  'download_permalink' => '%slug%-mp3/%id%.html',
  'file_permalink' => 'file',
  'sitemap_searches_permalink' => 'sitemap/searches.xml',
  'sitemap_keywords_permalink' => 'sitemap/%num%.xml',
  'sitemap_index_permalink' => 'sitemap.xml',

  /**************************************************************/

  /**
   * Untuk melihat kode negara yang tersedia, silahkan cek link dibawah:
   * https://rss.itunes.apple.com/
   */

  'itunes_country' => 'us',
  'itunes_count' => 10,

  /**************************************************************/

  'youtube_top_videos_count' => 10,
  'youtube_top_videos_country' => 'id',
  'youtube_search_count' => 3,
  // Pisahkan dengan koma untuk menggunakan banyak API
  'youtube_api_keys' => 'AIzaSyCHyLYouSE_s84WSAHm5QzKOINwO5varoM,AIzaSyA4bH9ZxhaM8HOPI-ariItUzv8hb7hphuI,AIzaSyDc4n0C4r9Ucbu3etW4N70sSKalJBJlJcc,AIzaSyB6mcc3D8aV0mFaPkce_dmEV7c33qnwTt4,AIzaSyC8b9g4BJrFw6mUTdrs7pvRYssN8bszpVY,AIzaSyAnb1-vAgR1DfYZKp6sw96KcbG_XAtFHns,AIzaSyAqJEk9er5YMNrhgFyd-32MFuj0K9u5a00,AIzaSyCVGbNe8far8nuwKDNDsfP9EhDCxdE2Hw4,AIzaSyDjiVNbMEgSesSvoSG0x9_nc9KPuN3skA0,AIzaSyDqT3iD7-Ljvr2C6MXDZ9b2j8YV5Hy7EQ0,AIzaSyDaX7xsM_vMqL_Emi2NeTdLRTtHAw6BHv8,AIzaSyA8cveCNhp5DP0Kmy90nbhYac_jHtzycJM,AIzaSyB5lZneNJu7BRcrPxlLATwX3nWR4ntMsYM,AIzaSyAR6KUK5UEPHuZ5j_LwlKt4lgg_5Ie_0UQ,AIzaSyBH4P3rb2jLKsFl2KaThH2Av_0T2zRQzzI,AIzaSyCRz3aZYYfUQTi70CkiZGK8Zh1FqRRScqk,AIzaSyDWi9Tz58Ef06dci8-hQAx4fOBFYIKVSq8,AIzaSyC8UoKDiJ0scecq-DN3ia0ldb7x0vyhfa4,AIzaSyCLhY1lhOwMBpNWsiGmoOx-Bg2sFExCnZY,AIzaSyB2hiDh90IWIcrfU0fOvLLWe7QCHKKYJPE,AIzaSyAdBJA0gHQS8e3TlQCJzkkQjlofiJGmFXc,AIzaSyC2dmhJrJHbDNgCQeiP9Web8iTkp4p3J0Y,AIzaSyApPBPghn1ZbMf1ZzEMoZFmrxEKqx37gcY',

  'soundcloud_search_count' => 5,
  // Pisahkan dengan koma untuk menggunakan banyak API / Client ID
  'soundcloud_client_ids' => '',

  // Maksimal sitemap perhalaman adalah 50000,
  // Sengaja ane buat 10000 biar ngga terlalu berat
  'sitemap_limit' => 10000,

  /**************************************************************/

  /**
   * Jika agan menggunakan konfigurasi multisite,
   * maka otomatis akan tergenerate direktori sesuai nama domain di direktori /store.
   * Direktori ini berfungsi untuk tempat penyimpanan data seperti cache, pencarian terbaru
   * dan file untuk inject keyword
   * Gunakan nilai 'true' (tanpa tanda petik) jika agan ingin menggunakan direktori berdasarkan domain
   * Tapi gunakan nilai 'false' (tanpa tanda petik) jika agan ingin menggunakan direktori default
   */

  'use_default_store' => false,

  /**************************************************************/

  'enable_cache' => true,

  'save_recent_searches' => true,
  'recent_searches_limit' => 25000,
  'recent_searches_count' => 5,

  /**************************************************************/

  /**
   * Option ini berfungsi memeriksa apakah anda ingin menggunakan direktori keyword dari direktori default
   * atau dari direktori domain (jika 'use_default_store' = true)
   */

  'use_default_keyword_files' => true,

  /**************************************************************/

  'footer_copyright' => '&copy; %year% %site_name%. All rights reserved.'
];
