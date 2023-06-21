<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Account toevoegen</title>
</head>
<body>
  
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Account toevoegen
                            <a href="beheer.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
<!-- volgende variabele gebruikt username password name en rol-->
                            <div class="mb-3">
                                <label>Gebruikers Naam</label>
                                <input type="text" name="user_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Wachtwoord</label>
                                <input type="wachtwoord" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Naam</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Rol</label>
                                <input type="text" name="rol" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Account toevoegen</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>