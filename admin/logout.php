<?php
session_start(); // Resume the existing session

// Destroy all session data
$_SESSION = array();

// Optionally, you can also clear the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: ../vieuw/index.php");
exit;
?>
