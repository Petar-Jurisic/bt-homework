<?php

$users = array(
    array(
        "name" => "Pera",
        "last_name" => "Mitic",
        "img" =>"PerinaSlikaTackaJPG"
    ),
    array(
        "name" => "Mitar",
        "last_name" => "Miric",
        "img" =>"TarmijevaSlikaTackaJPG"
    )
    );
    
    function search_users($users, $searchContent="") {
        foreach ($users as $user) {
            foreach ($user as $key=>$value);
            $implode = implode(" ", $user);
            if(str_contains($implode, $searchContent)!== false) {
                $filteredArray = explode(" ", $implode);
            }
        }
        if(empty($filteredArray)) {
            $filteredArray = [];
        }
        return $filteredArray;

    }

    $filteredArray = search_users($users, $searchContent = "Pera");

    print_r($filteredArray);
?>