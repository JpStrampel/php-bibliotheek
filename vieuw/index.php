<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
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
</div>