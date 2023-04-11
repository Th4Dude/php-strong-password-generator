<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>

    <h1>Generatore di password casuale</h1>
    <form action="index.php" method="get">
        <label for="password-length">Lunghezza password:</label>
        <input type="number" id="password-length" name="password-length" min="1" max="100">
        <input type="submit" value="Genera password">
    </form>

</body>
</html>


    <?php

    // verifica di invio del form
    if (isset($_GET['password-length'])) {
        $passwordLength = $_GET['password-length'];
        $password = generateRandomPassword($passwordLength);
        echo "<p>La password generata è: $password</p>";
    }

    ?>

    <?php

    // Funzione 
    function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-=_+[]{}|;:,.<>?';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
    }

    ?>