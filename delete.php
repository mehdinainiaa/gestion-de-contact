
<?php
 include_once('dbConnect.php');
 include_once('contact.class.php');
 
$contact = new contact(connect());
$contact->delit($_GET['id']);


?>