<?php
$json_string = 'https://rss.itunes.apple.com/api/v1/us/apple-music/new-releases/all/100/explicit.json';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
$new = "";
foreach ($obj['feed']['results'] as $result) {
//echo $okre . '<br>' . PHP_EOL;
$okre = $result['artistName']. " - " . $result['name'];
$new = $new . $okre . "\n";
}
file_put_contents('15.txt', $new);
?>