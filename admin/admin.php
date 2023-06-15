<?php
session_start();

// Controleer of de gebruikersnaam is opgeslagen in de sessievariabele
if(isset($_SESSION['user_name'])) {
    $gebruikersnaam = $_SESSION['user_name'];
    echo "Welkom, $gebruikersnaam!";
} else {
    // Gebruikersnaam niet gevonden, stuur door naar de inlogpagina
    header("Location: ../vieuw/index.php");
    exit();
}

// De rest van de code van het admin.php-bestand...
?>

<div class="navbar">
  <a href="admin2.php">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">More
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div>