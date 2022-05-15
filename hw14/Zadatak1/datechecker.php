<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
    </head> 
    <body style="background-image: url('./calendar.png'); background-repeat: no-repeat;background-attachment: fixed; background-size: cover;">
    <form style="width: 50vw; margin-left: 25vw; height: 50vw; margin-top: 10vw;">
    <fieldset style="background-image: linear-gradient(#53475b45,#F8521d35); opacity: 0.8; border-width:10px; width:600px; border-color: rgb(109, 105, 109); padding-left: 6vw;">
            <legend><font size="5" font color=darkgreen>Results</font></legend>


<?php

$d = $_GET['day'];
$m = $_GET['month'];
$y = $_GET['year'];
$f = false;
if (isset($_GET)) {

    function validateDate($a, $b, $c) {
        return (checkdate($a, $b, $c)); 
      }

}

$date=(validateDate($m, $d, $y) ? 'true' : 'false');
if ($date=true) {
    echo "The date is valid!";
}

else echo "The date is NOT valid!";

?>
    </body>
</html>