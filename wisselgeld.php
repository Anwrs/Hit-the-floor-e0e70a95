<?php 

$wsgeld = intval($argv[1]);
$coins = [10, 5, 2, 1];

foreach($coins as $coin){
    if(floor($wsgeld / $coin) > 0){
        $times = floor($wsgeld / $coin);
        echo "$times X $coin" . "\n";
        $wsgeld = $wsgeld - ($times * $coin);
    }
}