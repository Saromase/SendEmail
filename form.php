<?php 
include 'function.php';

$name = $_POST['name'];
$firstname = $_POST['first_name'];
$mail = $_POST['mail'];
$date = $_POST['date'];
$animal = $_POST['animal'];
$nameAnimal = $_POST['name_animal'];
$message = $_POST['message'];
insertIntoBDD($name, $firstname, $mail, $date, $animal, $nameAnimal, $message);
header('Location: index.php');
?>
