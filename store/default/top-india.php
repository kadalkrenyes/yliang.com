<?php
$json_string = 'https://rss.itunes.apple.com/api/v1/in/apple-music/top-songs/all/100/explicit.json';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
$comingsoon = "";
foreach ($obj['feed']['results'] as $result) {
//echo $result['name'] . '<br>' . PHP_EOL;
$crot = $result['artistName']. " - " . $result['name'];
$comingsoon = $comingsoon . $crot . "\n";
}
file_put_contents('4.txt', $comingsoon);
?>