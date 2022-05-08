<?php


$activity_factor = $_GET['profession'];
$mass = $_GET['mass'];
$age = $_GET['age'];
$age_index;

if ($age>=0 && $age<4) {
    $age_index = 1.9;
}
elseif ($age>=4 && $age<11) {
    $age_index = 1.5;
}
elseif ($age>=11 && $age<19) {
    $age_index = 1.2;
}
elseif ($age>=19 && $age<27) {
    $age_index = 1;
}
elseif (($age>=27 && $age<32) || ($age>=50 && $age<61)) {
    $age_index = 0.8;
}
elseif (($age>=31 && $age<36) || ($age>=45 && $age<50)) {
    $age_index = 0.7;
}
elseif (($age>=36 && $age<45) || ($age>60)) {
    $age_index = 0.6;
}


echo 'Your maximum daily calorie intake is ' . $mass * $activity_factor * $age_index . ' calories!';

?>