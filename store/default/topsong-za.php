<?php
$content = file_get_contents("https://itunes.apple.com/za/rss/topsongs/limit=100/json");
$topsongs = json_decode($content);
$tracks = $topsongs->feed->entry;
$top = "";
foreach ($tracks as $track)
{
$name = $track->title->label;
//echo $name . "<br/>";
$top = $top . $name . "\n";
}
file_put_contents('21.txt', $top);