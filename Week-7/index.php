<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 7</title>
</head>

<body>

    <?php
    session_start();

    if (!isset($_SESSION["login"])) {
        $_SESSION["login"] = false;
    }

    if (!isset($_SESSION["username"])) {
        $_SESSION["username"] = 'Gast';
    }

    if (!isset($_SESSION["visit_count"])) {
        $_SESSION["visit_count"] = 0;
    }

    $_SESSION['visit_count']++;

    if ($_SESSION['login'] == true) {
        echo "Welkom: " . htmlspecialchars($_SESSION['username']) . "<br>";
    } else {
        echo "Deze pagina heb je al " . $_SESSION['visit_count'] . " keer bezocht.<br>";
    }
    ?>

</body>

</html>