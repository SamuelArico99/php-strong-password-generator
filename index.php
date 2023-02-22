<?php

include __DIR__ . '/functions.php';

$password = '';

$error = null;

if (isset($_GET['length']) && is_numeric($_GET['length'])) {

    $passwordLength = intval($_GET['length']);

    if ($passwordLength < 8) {

        $error = 'Lunghezza minima di 8 caratteri';
    } elseif ($passwordLength > 32) {

        $error = 'Lunghezza massima di 32 caratteri';
    } else {

        $password = generaPassword($passwordLength);
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PASSWORD GENERATOR</title>
</head>

<body>
    <main>
        <h1>
            PHP PASSWORD GENERATOR
        </h1>

        <form action="">
            <input type="number" name="length" placeholder="inserisci lunghezza" min="8" max="32" value="<?php echo (isset($_GET['length']) ? $_GET['length'] : 8); ?>" required>
            <button>
                Genera
            </button>
        </form>
        <div>
            <?php
            if ($error != null) {
                echo '<h2/>';
                echo $error;
                echo '<h2/>';
            }

            echo '<h2/>';
            echo 'Ecco la tua password: ' .  $password;
            echo '<h2/>';
            ?>
        </div>
    </main>
</body>

</html>