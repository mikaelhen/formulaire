<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="post">
    <label> Votre nom : </label>
    <input type="text" name="nom" placeholder="Votre nom"><br><br>

    <label> Votre Prenom : </label>
    <input type="text" name="prenom" placeholder="Votre Prenom"><br><br>

    <label> Date de naissance : </label>
    <input type="date" name="date-de-naissance" ><br><br>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
    

</form>

</body>
</html>