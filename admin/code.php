<?php
session_start();
require '../config.php/db_conn.php';

if (isset($_POST['delete_student'])) {
    $users_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM users WHERE id='$users_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Account Deleted Successfully";
        header("Location: beheer.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Account Not Deleted";
        header("Location: beheer.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $users_id = mysqli_real_escape_string($conn, $_POST['users_id']);

    $user_name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['phone']);
    $rol = mysqli_real_escape_string($conn, $_POST['course']);

    $query = "UPDATE users SET user_name='$user_name', password='$hashedpassword', name='$name', rol='$rol' WHERE id='$users_id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Account Updated Successfully";
        header("Location: beheer.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Account Not Updated";
        header("Location: beheer.php");
        exit(0);
    }

}

// volgende variabele gebruikt user_name password name en rol
if (isset($_POST['save_student'])) {
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $rol = mysqli_real_escape_string($conn, $_POST['rol']);

    // Hash het wachtwoord voordat het wordt opgeslagen in de database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (user_name, password, name, rol) VALUES ('$user_name', '$hashedPassword', '$name', '$rol')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Account Created Successfully";
        header("Location: beheer.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Account Not Created";
        header("Location: beheer.php");
        exit(0);
    }
}
?>