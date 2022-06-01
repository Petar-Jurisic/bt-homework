<!DOCTYPE html>
<html lang="eng">
    <head>
        <?php include './class.php' ?>
        <title>Index</title>
    </head>
    <body>
        <?php

$contact1 = new Contact();

$contact1->setPhone('0600123372');

$contact1->setEmail('first@gmail.com');

echo 'Phone number: ' . $contact1->getPhone().' </br>Email: ' . $contact1->getEmail() . ' </br></br> ';


function contains($text, $email) {
    $result = str_contains($email, $text) ? 'is' : 'is not';

echo "The symbol $text $result in the $email. </br></br> ";
}

contains("X", $contact1->getEmail());

$contact2 = new Contact();

$contact2->setPhone('0600123373');

$contact2->setEmail('second@gmail.com');

echo 'Phone number: ' . $contact2->getPhone().' </br>Email: ' . $contact2->getEmail() . ' </br></br> ';

contains("@", $contact2->getEmail());


$contact3 = new Contact();

$contact3->setPhone('0600123374');

$contact3->setEmail('third@gmail.com');

echo 'Phone number: ' . $contact3->getPhone().' </br>Email: ' . $contact3->getEmail() . ' </br></br> ';

contains("$", $contact3->getEmail());



function addContact($contact1, $contacts) {
    array_push($contacts, $contact1);
}

var_dump($contacts);

?>

    </body>
</html>