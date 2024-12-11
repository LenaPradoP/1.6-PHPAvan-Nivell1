<?php
session_start();

if (isset($_POST['username']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
}

echo "Username: $username<br>";
echo "Email: $email <br><br>";

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

echo "Variables de sesión: <br>";
echo $_SESSION['username'] . "<br>";
echo $_SESSION['email'] . "<br>";
?>