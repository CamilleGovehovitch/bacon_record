<?php include'application/bdd_connection.php';

$query = 'SELECT * FROM User ';
$resultSet = $pdo->query($query);
$artistes = $resultSet->fetchAll();

$template = 'artiste';
include 'layout.phtml';
?>