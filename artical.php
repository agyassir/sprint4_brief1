<?php 
class article{
    public string $title;
    public string $contenue;
    public String $date_creation;
    public $auteur;
    private $db;
public function __construct($title,$contenue,$date,$db)
{
    $this -> title=$title;
    $this -> contenue=$contenue;
    $this -> date_creation=$date;
    $this -> db=$db->conn();
}
public function addArticle(){
    $title=$this->title;
    $contenue=$this->contenue;
    $date=$this->date_creation;
$iduser=$_SESSION['id'];
        $sql="insert into article values (null,'$title','$contenue','$date','$iduser')";
$res=$this->db->query($sql);
}
public function getArticle(){
$iduser=$_SESSION['id'];
$sql="select * from article where id_utilisateur = '$iduser'";
$res=$this->db->query($sql);
}
public function updateArticle($name,$contenue,$date){
    $idarticle=$_GET['id'];
    $this->title=$name;
    $this->contenue=$contenue;
    $this->date_creation=$date;
    $sql = "UPDATE article SET titre='$this->title', contenue='$this->contenue', date_creation='$this->date_creation'";
    $res=$this->db->query($sql);
}
public function deleteArticle(){
    $idarticle=$_GET['id'];
    $sql="delete from article where id = '$idarticle'";
    $res=$this->db->query($sql);

}
}
?>