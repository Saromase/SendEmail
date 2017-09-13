<?php 
include 'function.php';
$user = $_GET['user'];
$data = selectRDV($user);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Modifier le rendez-vous</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <h1>Modifier le rendez-vous</h1>
    <form action="update.php" method="post">
        <?php
        echo "<p> Nom : <input type='text' name='name' value='" .  $data['name'] . "' required> </p>";
        echo "<p> Prénom : <input type='text' name='first_name' value='" .  $data['firstname'] . "' required> </p>";
        echo "<p> Adresse e-mail : <input type='email' name='mail' value='" .  $data['mail'] . "' required> </p>";
        echo "<p> Date du rendez-vous : <input type='date' name='date' value='" .  $data['date'] . "' required> </p>";
        echo "<p> Animal : <input type='text' name='animal' value='" .  $data['animal'] . "' required> </p>";
        echo "<p> Nom de l'animal : <input type='text' name='name_animal' value='" .  $data['name_animal'] . "' required> </p>";
        echo "<p> Message : <input type='text' name='message' value='" .  $data['message'] . "' required> </p>";
        if ($data['status'] == 0){
            echo "<p>Confimer le RDV : <input type ='radio' name='validate' value='Oui'>Oui <input type ='radio' name='validate' value='Non' checked='checked'>Non</p>";
        } else {
            echo "<p>Confimer le RDV : <input type ='radio' name='validate' value='Oui' checked='checked'>Oui <input type ='radio' name='validate' value='Non'>Non</p>";
        }
        echo " <input type='submit' />";
        ?>

    </form>
</body>

</html>
