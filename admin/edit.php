<?php
session_start();
require '../config.php/db_conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Account Edit</title>
</head>
<body>
  
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Account edit 
                            <a href="beheer.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $users_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$users_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $users = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="users_id" value="<?= $users['id']; ?>">

                                    <div class="mb-3">
                                        <label>Gebruikersnaam</label>
                                        <input type="text" name="name" value="<?=$users['user_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Wachtwoord</label>
                                        <input type="password" name="email" value="<?=$users['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Naam</label>
                                        <input type="text" name="phone" value="<?=$users['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                    <select name="rol" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="medewerker">Medewerker</option>
                            </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Account
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Geen ID gevonden</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>