<?php
$json_string = 'https://rss.itunes.apple.com/api/v1/us/apple-music/hot-tracks/all/100/explicit.json';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
$cltn = $obj['feed']['results'][0]['collectionName'];
$hot = "";
foreach ($obj['feed']['results'] as $result) {
$oke = $result['artistName']. " - " . $result['name'];
$hot = $hot . $oke . "\n";
}
file_put_contents('13.txt', $hot);
?>