<?php 
include 'function.php';

$name = $_POST['name'];
$firstname = $_POST['first_name'];
$mail = $_POST['mail'];
$date = $_POST['date'];
$animal = $_POST['animal'];
$nameAnimal = $_POST['name_animal'];
$message = $_POST['message'];
$valid = $_POST['validate'];
if (isset($valid) && $valid=="Oui"){
    $status = 1;
    updateBDD(9, $name, $firstname, $mail, $date, $animal, $nameAnimal, $message, $status); 
} else {
    $status = 0;
    updateBDD(9, $name, $firstname, $mail, $date, $animal, $nameAnimal, $message, $status); 
}
header('Location: modif.php?user=9');

?>
