<?php
session_start();

// Controleer of de gebruikersnaam is opgeslagen in de sessievariabele
if(isset($_SESSION['user_name'])) {
    $gebruikersnaam = $_SESSION['user_name'];

    
} else {
    // Gebruikersnaam niet gevonden, stuur door naar de inlogpagina
    header("Location: ../vieuw/index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheek admin </title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="test3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .table-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
<head>

</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <h2>
                <i class="uil uil-desktop"></i>
                <?php echo "Welkom, $gebruikersnaam!"; ?>
            </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php">
                        <i class="uil uil-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-search"></i>
                        <span>Boek opzoeken</span>
                    </a>
                </li>
                <li>
                    <a href="boek-beheer.html">
                        <i class="uil uil-book"></i>
                        <span>Boek beheer</span>
                    </a>
                </li>
                <li>
                    <a href="reserveren.html">
                        <i class="uil uil-shopping-cart"></i>
                        <span>Reserveren</span>
                    </a>
                </li>
                <li>
                    <a href="terugbrengen.html">
                        <i class="uil uil-book"></i>
                        <span>Terugbrengen</span>
                    </a>
                </li>
                <li>
                    <a href="beheer.php">
                        <i class="uil uil-user-circle"></i>
                        <span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="logout.html">
                        <i class="uil uil-signin"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content" id="main-content">
        <header class="flex">
            <h2>
            Home
            </h2>
        </header>
        

    </div>

</body>

</html>


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
</body>

</html>