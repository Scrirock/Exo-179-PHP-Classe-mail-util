<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Envoie de mail</title>
</head>
<body>

    <div id="container">
        <form action="index.php" method="POST">
            <label for="to">Destinataire: </label>
            <input type="text" id="to" name="to">
            <label for="subject">Sujet: </label>
            <input type="text" id="subject" name="subject">
            <label for="message">Message: </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <label for="from">Votre e-mail: </label>
            <input type="text" id="from" name="from">

            <input type="submit">
        </form>
    </div>

<?php

    require "./classes/Mail.php";

    if (isset($_POST["to"], $_POST["subject"], $_POST["message"], $_POST["from"])){

        $mail = new Mail($_POST["to"], $_POST["subject"], $_POST["message"], $_POST["from"]);
        $mail->sendMail();

        echo "Envoyé a ".$mail->getTo()."<br>";
        echo "Sujet du mail envoyé ".$mail->getSubject()."<br>";
        echo "Avec comme message ".$mail->getMessage()."<br>";
        echo "De la part de ".$mail->getFrom()."<br>";

    }

?>

</body>
</html>

