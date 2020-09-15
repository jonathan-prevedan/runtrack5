<?php 
require('models/Utilisateurs.php');

class Utilisateurs
{

    public function getUsers()
    {
        $new_user = new Utilisateurs_model;

        $data=$new_user->getUsers();
        include('views/list-users.php');
    }


    public function addUser()
    {
        $new_user = new Utilisateurs_model;
        include('views/add-user.php');

        if(isset($_POST['add']))
        {
            if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']))
            {
            
            $new_user->addUser($_POST['firstname'],$_POST['lastname'],$_POST['email']);
        
            }

            else
            {
                echo 'Erreur';
            }
        }
    }

    
}


?>