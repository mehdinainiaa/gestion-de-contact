<?php 
function connect(){


$server ="localhost";
$username ="root";
$password="";
$db ='gestion_contact.';
// $conn; 
try {
$conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
   
}
return $conn;
} 
?>