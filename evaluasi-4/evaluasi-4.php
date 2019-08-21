<?php

class DB extends PDO {

    public function __construct($username, $pass)
    {
        $this->con = parent::__construct ('mysql:host=localhost; dbname=crud', $username, $pass);
    }

}
$objDB = new DB('root', '');
var_dump($objDB);


?>