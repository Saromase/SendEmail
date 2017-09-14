<!DOCTYPE html>
<html>

<head>
    <title>Prise de rendez-vous</title>
    <meta charset="UTF-8">
    <link href="test.css" rel="stylesheet">
</head>

<body>
    <div class="form-classe">
        <div class="">
            <h1>Prise de rendez-vous</h1>
            <form action="form.php" method="post">
                <label for="name"><h2>Nom</h2> </label>
                <input type="text" name="name" id="name" required>
                <label for="first_name"><h2>Prénom</h2> </label>
                <input type="text" name="first_name" id="first_name" required>
                <label for="mail"><h2>Adresse Email</h2> </label>
                <input type="email" name="mail" id="mail" required>
                <label for="date"> <h2>Date de rendez-vous souhaiter</h2> </label>
                <input type="date" name="date" id="date" required>
                <label for="animal"><h2>Espece de l'animal</h2> </label>
                <input type="text" name="animal" id="animal" required>
                <label for="name_animal"><h2>Nom de l'animal </h2></label>
                <input type="text" name="name_animal" id="name_animal" required>
                <label for="message"><h2>Veuillez entrer ici la raison de votre demande de rendez-vous</h2></label>
                <textarea name="message" required id="message" class=""></textarea>
                <button type="submit">Prendre rendez-vous</button>
            </form>
        </div>

    </div>
</body>

</html>
