<?php

function sendMail(){
    // Plusieurs destinataires
     $to  = 'educlos@simplon.co';
     $name = 'Erwann Duclos';

     // Sujet
     $subject = 'Bonjour';

     // message
    $message = '';
     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini 
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     // En-têtes additionnels
     $headers .= 'To: ' . $name.' <'. $to .'>'. "\r\n";
     $headers .= 'From: ' . $name . ' <'. $to .'>' . "\r\n";

     // Envoi
     mail($to, $subject, $message, $headers);
}

function connectBDD(){
    try {
        return $bdd = new PDO('mysql:host=localhost;dbname=SendMail', 'root', 'facesimplon');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
function insertIntoBDD($name, $firstname, $mail, $date, $animal, $nameAnimal, $message){
    $bdd = connectBDD();
    $request = $bdd->prepare('INSERT INTO rendez_vous (name, firstname, mail, date, animal, name_animal, message, status ) VALUES  (:name, :firstname, :mail, :date, :animal, :name_animal, :message, :status)');
    $request->execute(array(
        'name' => $name,
        'firstname' => $firstname,
        'mail' => $mail,
        'date' => $date,
        'animal' => $animal,
        'name_animal' => $nameAnimal,
        'message' => $message,
        'status' => 0
    ));
}


function updateBDD($id, $name, $firstname, $mail, $date, $animal, $nameAnimal, $message, $status){
    $bdd = connectBDD();
    $request = $bdd->prepare("UPDATE rendez_vous SET name = :name, firstname = :firstname, mail = :mail, date = :date, animal = :animal, name_animal = :name_animal, message = :message, status = :status WHERE id = :id");
    $request->execute(array(
        'id' => $id,
        'name' => $name,
        'firstname' => $firstname,
        'mail' => $mail,
        'date' => $date,
        'animal' => $animal,
        'name_animal' => $nameAnimal,
        'message' => $message,
        'status' => $status
    ));
}

function selectRDV($id){
    $bdd = connectBDD();
    $request = $bdd->query("SELECT * FROM rendez_vous WHERE id = $id");
    $data = $request->fetch();
    return $data;
}


?>
