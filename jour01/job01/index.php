<?php 
include('views/header.php');

require('controllers/Utilisateurs.php');
$list = new Utilisateurs;

if(isset($_GET['page']) && $_GET['page'] == "addUser")
{
    
    $list->addUSer();
}

else 
{
    
    $list->getUsers();
}




include('views/footer.php');

?>
