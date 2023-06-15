<!DOCTYPE html>
<html>
<head>
	<title>Bibliotheek Applicatie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
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



