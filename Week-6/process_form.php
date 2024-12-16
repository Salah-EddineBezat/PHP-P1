<?php
$name = $message = $email = "";
$nameError = $emailError = $messageError = "";

if (isset($_POST['submit'])) {
  // Naam validatie //
  if (empty($_POST['name'])) {
    $nameError = "Het naamveld is verplicht!";
  } elseif (strlen(trim($_POST['name'])) < 3) {
    $nameError = "De naam moet minimaal 3 tekens lang zijn.";
  } else {
    $name = htmlspecialchars($_POST['name']);
  }

  // Email validatie // 
  if (empty($_POST['email'])) {
    $emailError = "Vul een email in!";
  } elseif (!preg_match("/^[^@]+@[^@]+\.[^@]+$/", $_POST['email'])) {
    $emailError = "Het emailadres moet een '@' en een '.' bevatten.";
  } else {
    $email = htmlspecialchars(trim($_POST['email']));
  }

  // Bericht validatie//
  if (empty($_POST['message'])) {
    $messageError = "Vul een bericht in!";
  } elseif (strlen(trim($_POST['message'])) < 10) {
    $messageError = "Het bericht moet minimaal 10 tekens lang zijn.";
  } else {
    $message = htmlspecialchars(trim($_POST['message']));
  }
}



if(isset($_POST['submit']) && empty($nameError) && empty($messageError) && empty($emailError)) {
  echo "<h3> Ingevoerde gegevens:</h3>";
  echo "Naam: $name<br>";
  echo "E-mail: $email<br>";
  echo "Bericht: $message<br>";
}
?>