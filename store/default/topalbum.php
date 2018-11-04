<?php
$content = file_get_contents("https://itunes.apple.com/id/rss/topalbums/limit=100/json");
$topsongs = json_decode($content);
$tracks = $topsongs->feed->entry;
$topalbum = "";
foreach ($tracks as $track)
{
$name = $track->title->label;
//echo $name . "<br/>";
$topalbum = $topalbum . $name . "\n";
}
file_put_contents('2.txt', $topalbum);