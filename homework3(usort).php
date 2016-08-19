<?php
	$team =[
        ["name"=>"Young Nick", "number"=>0, "position"=>"H/F", "height"=>201, "weight"=>95],
        ["name"=>"Russel D'Angelo", "number"=>1, "position"=>"W", "height"=>196, "weight"=>86],
        ["name"=>"Bass Brandon", "number"=>2, "position"=>"F", "height"=>203, "weight"=>113],
        ["name"=>"Browne Anthony", "number"=>3, "position"=>"H/F", "height"=>201, "weight"=>98],
        ["name"=>"Kelly Ryan", "number"=>4, "position"=>"F", "height"=>211, "weight"=>104],
        ];

echo "Starting lineup of players:<br>";
echo "<br>";

foreach($team as $player) {
    echo "Name: " . $player['name'] . " | Number: " . $player['number'] . " | Position: " . $player['position'] . " | Heigth: " . $player['height'] . " | Weight: " . $player['weight'];
    echo "<br>";
}

function my_sort($a, $b){
    if ($a['name'] == $b['name']) return 0;
    return ($a ['name'] > $b ['name']) ? 1 : -1;
    }

usort($team, 'my_sort');

echo "<br>";
echo "Sorting players by name:<br>";
echo "<br>";
foreach($team as $player) {
    echo "Name: " . $player['name'] . " | Number: " . $player['number'] . " | Position: " . $player['position'] . " | Heigth: " . $player['height'] . " | Weight: " . $player['weight'];
    echo "<br>";
}
