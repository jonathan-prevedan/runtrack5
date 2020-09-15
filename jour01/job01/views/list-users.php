<?php 


foreach($data as $user)
{
?>
<tr>NOM</tr>
<?php
echo $user->firstname;
?>
<tr>PRENOM</tr>
<?php 
echo $user->lastname;
?>
<tr>EMAIL</tr>
<?php
echo $user->email;
}
?>
