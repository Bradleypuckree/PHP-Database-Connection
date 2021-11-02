<?php 
$user='root'; 
$pass = ''; 
$db = 'staff';

$db = new mysqli ('localhost', $user, $pass, $db) or die ("Unable to Connect");

echo "Great Work!!!";

?>