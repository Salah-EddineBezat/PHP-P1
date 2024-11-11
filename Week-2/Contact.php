<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include 'navbar.php'; ?>
    
<h1>Contact</h1>

<form action="">
   
    <label for="name">Naam</label>
    <input type="text" name="name" id="name">

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">

    <label for="message">Bericht</label>
    <input type="text" name="message" id="message">

    <button type="submit" name="submit"> Verstuur </button>
    
</form>


<?php include 'footer.php'; ?>

</body>
</html>