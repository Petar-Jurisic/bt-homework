<?php

/* 

INSERT INTO `colors`(`name`, `hex_value`, `status`) VALUES ('Beige','#6507ed','1'), ('DarkGray','#728016','1'), ('Salmon','#acd8e7','1'), ('Linen','#a4546f','0'), ('LightCoral','#e1924e','0'), ('LightBlueSky','#a70a42','0'), ('Seashell','#fab686','0'), ('Navy','#2a486c','0'), ('LavenderBlush','#aaead1','1'), ('LightBlue','#cdda18','0')

*/

include ('connection.php');

class Data {
    private $db;

    public function __construct () {
        $this->db = new Connection ();
        $this->db = $this->db->dbConnect();
    }
    public function Selection1 () {
            $fetch = $this->db->prepare("SELECT * FROM colors WHERE status='1' ORDER BY created_at");
            $fetch->execute();
        }
        
    

    public function Selection2 () {
        $fetch = $this->db->prepare("SELECT * FROM colors ORDER BY RAND() LIMIT 5");
        $fetch->execute();
    }

    public function Insert () {
        $input = $this->db->prepare("INSERT INTO `colors`(`name`, `hex_value`, `status`) VALUES ('DarkViolet','#9400d3','1')");
        $input->execute();
    }

    public function Update () {
        $update = $this->db->prepare("UPDATE `colors` SET `status`='1' WHERE `status`='0'");
        $update->execute();
    }

    public function Delete1 () {
        $delete = $this->db->prepare("DELETE FROM `colors` WHERE id='5'");
        $delete->execute();
    }

    public function Delete2 () {
        $delete = $this->db->prepare("DELETE FROM colors ORDER BY updated_at LIMIT 1");
        $delete->execute();
    }

}
 



?>