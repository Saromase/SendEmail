<!DOCTYPE html>
<html>

<head>
    <title>Prise de rendez-vous</title>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <h1>Prise de rendez-vous</h1>
    <form action="form.php" method="post">
        <p>Nom : <input type="text" name="name" required></p>
        <p>Prénom: <input type="text" name="first_name" required></p>

        <p>Adresse e-mail : <input type="mail" name="mail" required></p>

        <p>Date du rendez-vous : <input type="date" name="date" required></p>

        <p>Animal : <input type="text" name="animal" required></p>
        <p>Nom de l'animal : <input type="text" name="name_animal" required></p>
        <p>Message : <input type="text-area" name="message" required></p>
        <input type="submit" />
    </form>
</body>

</html>
