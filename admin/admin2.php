<?php
session_start();

// Controleer of de gebruikersnaam is opgeslagen in de sessievariabele
if(isset($_SESSION['user_name'])) {
    $gebruikersnaam = $_SESSION['user_name'];
    echo "Welkom op pagina 2, $gebruikersnaam!";
} else {
    // Gebruikersnaam niet gevonden, stuur door naar de inlogpagina
    header("Location: ../vieuw/index.php");
    exit();
}

// De rest van de code van het admin.php-bestand...
?>