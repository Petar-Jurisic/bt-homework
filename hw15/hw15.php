<?php

// Za svako ubacivanje u niz ispitati da li postoji u nizu i ako vec postoji ne dozvoliti da se upise.
// a.	Najpre u ovaj postojeci niz dodati vase ime. 
// b.	Nakon toga dodati ime vase/g rodjaka/e na trecem mestu u nizu.
// c.	Nakon toga prebrojte koliko ucenika ima
// d.	Zatim dodati novog clana na pocetak niza
// e.	Zatim obrisati Danila iz niza
// f.	Zatim skloni sve duplirane clanove niza


echo "<p style=color:blue><u>Zadatak 1</u></p>";

$hwArray = array("Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira");

print_r ($hwArray);
echo  "<br>";

// a.

if (!in_array("Petar", $hwArray)) {
	$hwArray[] = "Petar";
}

print_r ($hwArray);
echo  "<br>";

// b.

if (!in_array("Rodja", $hwArray)) {
	$inserted = array("Rodja");
	array_splice($hwArray, 2, 0, $inserted);

print_r ($hwArray);
echo  "<br><br>";
}

// c.

$c = count($hwArray);
echo "There are " . $c . " students.<br><br>";

// d.

if (!in_array("Neo", $hwArray)) {
	$inserted = array("Neo");
	array_splice($hwArray, 0, 0, $inserted);
}

print_r ($hwArray);
echo  "<br>";

// e.

$key = array_search("Danilo", $hwArray);
unset($hwArray[$key]);
print_r ($hwArray);
echo  "<br>";

print_r ($hwArray);
echo  "<br>";

// f.

$hwArray = array_unique($hwArray);
$hwArray = array_values($hwArray);
print_r ($hwArray);
echo  "<br>";
echo "<hr>";

?>



<?php

echo "<p style=color:green><u>Zadatak 2</u></p>";


$data = array (
	array("name"=>"Pera","lastname"=>"Peric","age"=>"28","gender"=>"male","avg_rating"=>"7.5","married"=>false,"courses"=>array("Laravel","React","jQuery")),
	array("name"=>"Mika","lastname"=>"Mikic","age"=>"35","gender"=>"male","avg_rating"=>"7.2","married"=>true,"courses"=>array("Java","PHP","C++")),
	array("name"=>"Zivka","lastname"=>"Zivkic","age"=>"52","gender"=>"female","avg_rating"=>"8.6","married"=>false,"courses"=>array("HTML","CSS","JavaScript")),
	array("name"=>"Laza","lastname"=>"Lazic","age"=>"47","gender"=>"male","avg_rating"=>"9.0","married"=>true,"courses"=>array("Python","C#","GoLang")),
	array("name"=>"Rodja","lastname"=>"Rodjic","age"=>18,"gender"=>"male","avg_rating"=>"6.7","married"=>false,"courses"=>array("C","BASIC","Pascal")),
);


foreach ($data as $element){
	if ($element['married']) {
		$x= " is married. ";
	} 
	else { $x= " is not married. ";
	}
	echo $element['name'] . " " . $element['lastname'] . " is " . $element['age'] . " and " . $x . "Has average score of " . $element['avg_rating'] . ";" . " currently is engaged in courses: " . $element['courses'][0] . ", " . $element['courses'][1] . " and " . $element['courses'][2] . ".<br>";
	}

?>