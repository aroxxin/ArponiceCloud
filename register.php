<?php
$users = json_decode(file_get_contents("users.json"), true) ?: [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    if (!isset($users[$username])) {
        $users[$username] = $password;
        file_put_contents("users.json", json_encode($users));

        mkdir("uploads/$username");
        echo "Rejestracja udana! <a href='index.html'>Zaloguj się</a>";
    } else {
        echo "Nazwa użytkownika zajęta!";
    }
}
?>
 
