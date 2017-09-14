<!DOCTYPE html>
<html>

<head>
    <title>Prise de rendez-vous</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <div class="center-RDV">
        <div class="select-RDV-EDU">
            <h1>Prise de rendez-vous</h1>
            <form action="form.php" method="post">
                <input type="text" name="name" placeholder='Nom' required>
                <input type="text" name="first_name" placeholder='Prénom' required>
                <input type="mail" name="mail" placeholder='Adresse Email' required>
                <input type="date" name="date" placeholder='Date du rendez-vous souhaiter' required>
                <input type="text" name="animal" placeholder="Espece de l'animal" required>
                <input type="text" name="name_animal" placeholder="Nom de l'animal" required>
                <textarea name="message" placeholder='Taper ici votre message' required class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control contact-field edu_envoyer"></textarea>
                <input type="submit" />
            </form>
        </div>

    </div>
</body>

</html>
