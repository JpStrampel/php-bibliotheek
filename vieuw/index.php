<!DOCTYPE html>
<html>
<head>
	<title>Bibliotheek Applicatie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="index.php" method="post">
     	<h2>Bibliotheek Applicatie Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label for="Gebruikersnaam">Gebruikersnaam:</label>
     	<input type="text" name="uname" id="Gebruikersnaam" required><br>
     	<label>Wachtwoord</label>
     	<input type="password" name="password"  required><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>



<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Gebruikersnaam is verplicht");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Wachtwoord is verplicht");
        exit();
    } else {
        // Gebruik voor het ophalen van de gebruiker uit de database het gebonden parameters om SQL-injectie te voorkomen
        $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            
            // Vergelijk het ingevoerde wachtwoord met het opgeslagen gehashte wachtwoord
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                if ($row['rol'] === 'admin') {
                    header("Location: admin.php");
                    exit();
                } else if ($row['rol'] === 'medewerker') {
                    header("Location: home.php");
                    exit();
                }
                
            } else {
                header("Location: index.php?error=Gebruikersnaam en/of wachtwoord is incorrect");
                exit();
            }
        } else {
            header("Location: index.php?error=Gebruikersnaam en/of wachtwoord is incorrect");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}