<?php

$tile_height = $_GET['tile_height'];
$tile_width = $_GET['tile_width'];
$wall_height = $_GET['wall_height'];
$wall_width = $_GET['wall_width'];

if(empty($tile_height) || empty($tile_width) || empty($wall_height) || empty($wall_width))  {
    echo ("Your input must contain value." . "<br>" . "Please try again.");
}

else {

$tile_area = $tile_width*$tile_width;
$wall_area = $wall_height*$wall_width;
$tiles_needed = ceil($wall_area/$tile_area);
$tiles_add_5 = ceil($tiles_needed + ($tiles_needed/100*5));
$tiles_add_10 = ceil($tiles_needed + ($tiles_needed/100*10));

echo 'The number of tiles you need is	' . $tiles_needed . '.' . '<br><br>';
echo 'Purchase 5% - 10% more (' . $tiles_add_5 . ' - ' . $tiles_add_10 . ' tiles) for cutting, waste, and possible future repairs.';
}

?>