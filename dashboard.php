 
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel użytkownika</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Witaj, <?php echo $_SESSION["username"]; ?>!</h2>
        <p>Prześlij plik:</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit">Wyślij</button>
        </form>
        <p><a href="logout.php">Wyloguj</a></p>
    </div>
</body>
</html>
