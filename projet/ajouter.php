<?php 
include 'conn.php'; 
include 'Contact.php';
$contact=new contact($connection);
if (isset($_POST['submit']))
{
$cont=$contact->add($_POST['name'],$_POST['prenom'],$_POST['email'],$_POST['mobile'],);
echo "hhh";

}
?>