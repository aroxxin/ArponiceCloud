<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.html");
    exit;
}

$target_dir = "uploads/" . $_SESSION["username"] . "/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "✅ Plik przesłany pomyślnie!";
} else {
    echo "❌ Błąd przesyłania pliku.";
}
?>
 
