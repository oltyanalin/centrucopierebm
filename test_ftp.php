<?php

// Detalii FTP
$ftp_server = "5.13.247.227"; // Adresa IP a NAS-ului
$ftp_user_name = "centru";    // Numele de utilizator FTP
$ftp_user_pass = "Ropressodigit@l123!"; // Parola utilizatorului FTP

// Fișierul local de test
$local_file = 'test_file.txt';

// Conținutul fișierului de test
file_put_contents($local_file, "Acesta este un test pentru încărcarea fișierelor pe NAS.");

// Directorul și numele fișierului de pe NAS
$remote_file = '/test_file.txt'; // Ajustat pentru a încărca în directorul rădăcină al utilizatorului FTP

// Conectează-te la serverul FTP
$conn_id = ftp_connect($ftp_server);

if (!$conn_id) {
    die("Nu s-a putut stabili conexiunea FTP la serverul $ftp_server.\n");
}

// Autentificare la serverul FTP
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

if (!$login_result) {
    die("Autentificarea FTP a eșuat pentru utilizatorul $ftp_user_name.\n");
}

// Activează modul pasiv FTP (opțional, dar recomandat)
ftp_pasv($conn_id, true);

// Debugging: Listare fișiere în directorul rădăcină al utilizatorului FTP
echo "Listare fișiere în directorul rădăcină NAS:\n";
$file_list = ftp_nlist($conn_id, '/');
if ($file_list === false) {
    echo "Eroare la listarea fișierelor. Verifică permisiunile și conectivitatea FTP.\n";
} else {
    print_r($file_list);
}

// Încarcă fișierul de test pe NAS
if (ftp_put($conn_id, $remote_file, $local_file, FTP_BINARY)) {
    echo "Fișierul a fost încărcat cu succes pe NAS la: $remote_file.\n";
} else {
    echo "Eroare la încărcarea fișierului pe NAS.\n";

    // Adaugă debugging pentru erori FTP
    $ftp_error = error_get_last();
    print_r($ftp_error);
}

// Șterge fișierul local de test
unlink($local_file);

// Închide conexiunea FTP
ftp_close($conn_id);

?>
