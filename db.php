<?php 
define("host","localhost");
define("user","root");
define("password","");
define("database","youcrafting");


class connexion{
    public function conn() {
         return new PDO('mysql:host;dbname=database', user, password);
    }
}


?>