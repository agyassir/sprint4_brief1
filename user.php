<?php
class user{
    public $firstname;
    public $lastname;
    public $username;
    public $phone;
    public $cin;
    public $email;
public function __construct($fname,$lname,$usern,$phone,$cin,$email)
{
    $this -> firstname=$fname;
    $this -> lastname=$lname;
    $this -> username=$usern;
    $this -> phone=$phone;
    $this -> cin=$cin;
    $this -> email=$email;
}

}
?>