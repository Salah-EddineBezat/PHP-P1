<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 8</title>
</head>

<body>

    <h2>ContactFormulier</h2>
    <form action="process_form.php" method="POST">

        <label for="name">Naam</label>
        <input type="text" id="name" name="name">

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">

        <label for="message">Bericht</label>
        <input type="text" id="bericht" name="message">

        <input type="submit" value="Verzenden" name="submit" id="submit">

    </form>

</body>

</html>