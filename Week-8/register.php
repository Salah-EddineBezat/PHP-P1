<h1>Registratieformulier</h1>

<form action="process_form.php" method="POST">

    <!-- Gebruikersnaam -->
    <label for="name">Gebruikersnaam</label>
    <input type="text" id="name" name="name">
    <br><br>

    <!--  E-mail -->
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email">
    <br><br>

    <!-- Wachtwoord -->
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" minlength="6" required>
    <br><br>

    <!-- Geslacht -->
    <Label for="Gender">Geslacht:</Label>
    <input type="radio" name="gender" value="Man" id="male" required>
    <label for="male">Man</label>
    <input type="radio" name="gender" value="Vrouw" id="female">
    <label for="female">Vrouw</label>
    <br><br>

    <!-- Land -->
    <label for="country">Land</label>
    <select name="countries" id="countries">
        <option value="" disabled selected>--Selecteer een land--</option>
        <option value="theNetherlands">Nederland</option>
        <option value="morroco">Marokko</option>
        <option value="saudiArabia">Saoedi-Arabie</option>
        <option value="turkey">Turkije</option>
    </select>
    <br><br>

    <input type="submit" value="verzenden" name="submit" id="submit">

</form>