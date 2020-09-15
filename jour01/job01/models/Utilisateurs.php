<?php 


class Utilisateurs_model
{
private $id;
public $firstname;
public $lastname;
public $email;

public function getUsers()
{
    include('config/db.php');
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.'',$user,$pass);
    

    $query = $db->query('SELECT * FROM utilisateurs');
    $data = $query->fetchAll(PDO::FETCH_OBJ);
   
    return $data;

}

public function addUser($firstname,$lastname,$email)
{
    include('config/db.php');
    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.'',$user,$pass);
    

   $query = $db->query("INSERT INTO utilisateurs (firstname, lastname, email)VALUES ('$firstname','$lastname','$email')");

    return $query;
}

}

?>