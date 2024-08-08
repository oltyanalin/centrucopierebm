<?php
// Exemplu simplu de script PHP pentru a accesa fișiere din directorul uploads
$file = $_GET['file'];

// Verifică dacă fișierul există și este accesibil
if (file_exists("../uploads/" . $file)) {
    header('Content-Type: ' . mime_content_type("../uploads/" . $file));
    header('Content-Disposition: inline; filename="' . basename($file) . '"');
    readfile("../uploads/" . $file);
    exit;
} else {
    header("HTTP/1.0 404 Not Found");
    echo "Fișierul nu a fost găsit.";
}
?>
