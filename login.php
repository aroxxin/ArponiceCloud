<?php
session_start();
$users = json_decode(file_get_contents("users.json"), true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && password_verify($password, $users[$username])) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Błędne dane logowania!";
    }
}
?>
 
