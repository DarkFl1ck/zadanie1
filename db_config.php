<?php
$host = 'localhost'; // lub adres IP z INFO
$db   = 'nazwa_twojej_bazy'; 
$user = 'twoj_uzytkownik';
$pass = 'twoje_haslo';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia: " . $e->getMessage());
}
?>
