<?php

class Connection {

    public function dbConnect () {
        return new PDO("mysql:host=localhost; dbname=zadatak21", "root", "");
     
    }

}

?>